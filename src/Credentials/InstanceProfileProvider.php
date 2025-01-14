<?php
namespace CloudBeds\Aws\MskFork\Credentials;

use CloudBeds\Aws\MskFork\Configuration\ConfigurationResolver;
use CloudBeds\Aws\MskFork\Exception\CredentialsException;
use CloudBeds\Aws\MskFork\Exception\InvalidJsonException;
use CloudBeds\Aws\MskFork\Sdk;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Promise;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Credential provider that provides credentials from the EC2 metadata service.
 */
class InstanceProfileProvider
{
    const SERVER_URI = 'http://169.254.169.254/latest/';
    const CRED_PATH = 'meta-data/iam/security-credentials/';
    const TOKEN_PATH = 'api/token';
    const ENV_DISABLE = 'AWS_EC2_METADATA_DISABLED';
    const ENV_TIMEOUT = 'AWS_METADATA_SERVICE_TIMEOUT';
    const ENV_RETRIES = 'AWS_METADATA_SERVICE_NUM_ATTEMPTS';
    const CFG_EC2_METADATA_V1_DISABLED = 'ec2_metadata_v1_disabled';
    const DEFAULT_TIMEOUT = 1.0;
    const DEFAULT_RETRIES = 3;
    const DEFAULT_TOKEN_TTL_SECONDS = 21600;
    const DEFAULT_AWS_EC2_METADATA_V1_DISABLED = false;

    /** @var string */
    private $profile;

    /** @var callable */
    private $client;

    /** @var int */
    private $retries;

    /** @var int */
    private $attempts;

    /** @var float|mixed */
    private $timeout;

    /** @var bool */
    private $secureMode = true;

    /** @var bool|null */
    private $ec2MetadataV1Disabled;

    /**
     * The constructor accepts the following options:
     *
     * - timeout: Connection timeout, in seconds.
     * - profile: Optional EC2 profile name, if known.
     * - retries: Optional number of retries to be attempted.
     * - ec2_metadata_v1_disabled: Optional for disabling the fallback to IMDSv1.
     *
     * @param array $config Configuration options.
     */
    public function __construct(array $config = [])
    {
        $this->timeout = (float) getenv(self::ENV_TIMEOUT) ?: ($config['timeout'] ?? self::DEFAULT_TIMEOUT);
        $this->profile = $config['profile'] ?? null;
        $this->retries = (int) getenv(self::ENV_RETRIES) ?: ($config['retries'] ?? self::DEFAULT_RETRIES);
        $this->client = $config['client'] ?? \CloudBeds\Aws\MskFork\default_http_handler();
        $this->ec2MetadataV1Disabled = $config[self::CFG_EC2_METADATA_V1_DISABLED] ?? null;
    }

    /**
     * Loads instance profile credentials.
     *
     * @return PromiseInterface
     */
    public function __invoke($previousCredentials = null)
    {
        $this->attempts = 0;
        return Promise\Coroutine::of(function () use ($previousCredentials) {

            // Retrieve token or switch out of secure mode
            $token = null;
            while ($this->secureMode && is_null($token)) {
                try {
                    $token = (yield $this->request(
                        self::TOKEN_PATH,
                        'PUT',
                        [
                            'x-aws-ec2-metadata-token-ttl-seconds' => self::DEFAULT_TOKEN_TTL_SECONDS
                        ]
                    ));
                } catch (TransferException $e) {
                    if ($this->getExceptionStatusCode($e) === 500
                        && $previousCredentials instanceof Credentials
                    ) {
                        goto generateCredentials;
                    } elseif ($this->shouldFallbackToIMDSv1()
                        && (!method_exists($e, 'getResponse')
                        || empty($e->getResponse())
                        || !in_array(
                            $e->getResponse()->getStatusCode(),
                            [400, 500, 502, 503, 504]
                        ))
                    ) {
                        $this->secureMode = false;
                    } else {
                        $this->handleRetryableException(
                            $e,
                            [],
                            $this->createErrorMessage(
                                'Error retrieving metadata token'
                            )
                        );
                    }
                }
                $this->attempts++;
            }

            // Set token header only for secure mode
            $headers = [];
            if ($this->secureMode) {
                $headers = [
                    'x-aws-ec2-metadata-token' => $token
                ];
            }

            // Retrieve profile
            while (!$this->profile) {
                try {
                    $this->profile = (yield $this->request(
                        self::CRED_PATH,
                        'GET',
                        $headers
                    ));
                } catch (TransferException $e) {
                    // 401 indicates insecure flow not supported, switch to
                    // attempting secure mode for subsequent calls
                    if (!empty($this->getExceptionStatusCode($e))
                        && $this->getExceptionStatusCode($e) === 401
                    ) {
                        $this->secureMode = true;
                    }
                    $this->handleRetryableException(
                        $e,
                        [ 'blacklist' => [401, 403] ],
                        $this->createErrorMessage($e->getMessage())
                    );
                }

                $this->attempts++;
            }

            // Retrieve credentials
            $result = null;
            while ($result == null) {
                try {
                    $json = (yield $this->request(
                        self::CRED_PATH . $this->profile,
                        'GET',
                        $headers
                    ));
                    $result = $this->decodeResult($json);
                } catch (InvalidJsonException $e) {
                    $this->handleRetryableException(
                        $e,
                        [ 'blacklist' => [401, 403] ],
                        $this->createErrorMessage(
                            'Invalid JSON response, retries exhausted'
                        )
                    );
                } catch (TransferException $e) {
                    // 401 indicates insecure flow not supported, switch to
                    // attempting secure mode for subsequent calls
                    if (($this->getExceptionStatusCode($e) === 500
                            || strpos($e->getMessage(), "cURL error 28") !== false)
                        && $previousCredentials instanceof Credentials
                    ) {
                        goto generateCredentials;
                    } elseif (!empty($this->getExceptionStatusCode($e))
                        && $this->getExceptionStatusCode($e) === 401
                    ) {
                        $this->secureMode = true;
                    }
                    $this->handleRetryableException(
                        $e,
                        [ 'blacklist' => [401, 403] ],
                        $this->createErrorMessage($e->getMessage())
                    );
                }
                $this->attempts++;
            }
            generateCredentials:

            if (!isset($result)) {
                $credentials = $previousCredentials;
            } else {
                $credentials = new Credentials(
                    $result['AccessKeyId'],
                    $result['SecretAccessKey'],
                    $result['Token'],
                    strtotime($result['Expiration'])
                );
            }

            if ($credentials->isExpired()) {
                $credentials->extendExpiration();
            }

            yield $credentials;
        });
    }

    /**
     * @param string $url
     * @param string $method
     * @param array $headers
     * @return PromiseInterface Returns a promise that is fulfilled with the
     *                          body of the response as a string.
     */
    private function request($url, $method = 'GET', $headers = [])
    {
        $disabled = getenv(self::ENV_DISABLE) ?: false;
        if (strcasecmp($disabled, 'true') === 0) {
            throw new CredentialsException(
                $this->createErrorMessage('EC2 metadata service access disabled')
            );
        }

        $fn = $this->client;
        $request = new Request($method, self::SERVER_URI . $url);
        $userAgent = 'aws-sdk-php/' . Sdk::VERSION;
        if (defined('HHVM_VERSION')) {
            $userAgent .= ' HHVM/' . HHVM_VERSION;
        }
        $userAgent .= ' ' . \CloudBeds\Aws\MskFork\default_user_agent();
        $request = $request->withHeader('User-Agent', $userAgent);
        foreach ($headers as $key => $value) {
            $request = $request->withHeader($key, $value);
        }

        return $fn($request, ['timeout' => $this->timeout])
            ->then(function (ResponseInterface $response) {
                return (string) $response->getBody();
            })->otherwise(function (array $reason) {
                $reason = $reason['exception'];
                if ($reason instanceof TransferException) {
                    throw $reason;
                }
                $msg = $reason->getMessage();
                throw new CredentialsException(
                    $this->createErrorMessage($msg)
                );
            });
    }

    private function handleRetryableException(
        \Exception $e,
        $retryOptions,
        $message
    ) {
        $isRetryable = true;
        if (!empty($status = $this->getExceptionStatusCode($e))
            && isset($retryOptions['blacklist'])
            && in_array($status, $retryOptions['blacklist'])
        ) {
            $isRetryable = false;
        }
        if ($isRetryable && $this->attempts < $this->retries) {
            sleep((int) pow(1.2, $this->attempts));
        } else {
            throw new CredentialsException($message);
        }
    }

    private function getExceptionStatusCode(\Exception $e)
    {
        if (method_exists($e, 'getResponse')
            && !empty($e->getResponse())
        ) {
            return $e->getResponse()->getStatusCode();
        }
        return null;
    }

    private function createErrorMessage($previous)
    {
        return "Error retrieving credentials from the instance profile "
            . "metadata service. ({$previous})";
    }

    private function decodeResult($response)
    {
        $result = json_decode($response, true);

        if (json_last_error() > 0) {
            throw new InvalidJsonException();
        }

        if ($result['Code'] !== 'Success') {
            throw new CredentialsException('Unexpected instance profile '
                .  'response code: ' . $result['Code']);
        }

        return $result;
    }

    /**
     * This functions checks for whether we should fall back to IMDSv1 or not.
     * If $ec2MetadataV1Disabled is null then we will try to resolve this value from
     * the following sources:
     * - From environment: "AWS_EC2_METADATA_V1_DISABLED".
     * - From config file: aws_ec2_metadata_v1_disabled
     * - Defaulted to false
     *
     * @return bool
     */
    private function shouldFallbackToIMDSv1(): bool
    {
        $isImdsV1Disabled = \CloudBeds\Aws\MskFork\boolean_value($this->ec2MetadataV1Disabled)
            ?? \CloudBeds\Aws\MskFork\boolean_value(
                ConfigurationResolver::resolve(
                    self::CFG_EC2_METADATA_V1_DISABLED,
                    self::DEFAULT_AWS_EC2_METADATA_V1_DISABLED,
                    'bool',
                    ['use_aws_shared_config_files' => true]
                )
            )
            ?? self::DEFAULT_AWS_EC2_METADATA_V1_DISABLED;

        return !$isImdsV1Disabled;
    }
}
