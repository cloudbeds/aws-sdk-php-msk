<?php
namespace CloudBeds\Aws\MskFork\Test\Credentials;

use CloudBeds\Aws\MskFork\Credentials\AssumeRoleCredentialProvider;
use CloudBeds\Aws\MskFork\Credentials\Credentials;
use CloudBeds\Aws\MskFork\Exception\AwsException;
use CloudBeds\Aws\MskFork\Result;
use CloudBeds\Aws\MskFork\Sts\StsClient;
use CloudBeds\Aws\MskFork\Api\DateTimeResult;
use GuzzleHttp\Promise;
use GuzzleHttp\Promise\RejectedPromise;
use CloudBeds\Aws\MskFork\Test\UsesServiceTrait;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers \Aws\Credentials\AssumeRoleCredentialProvider
 */
class AssumeRoleCredentialProviderTest extends TestCase
{
    const SAMPLE_ROLE_ARN = 'arn:aws:iam::012345678910:role/role_name';

    use UsesServiceTrait;

    /**
     * @dataProvider insufficientArguments
     *
     * @param array $config
     */
    public function testEnsureSourceProfileProvidedForAssumeRole($config)
    {
        $this->expectExceptionMessage("Missing required 'AssumeRoleCredentialProvider' configuration option:");
        $this->expectException(\InvalidArgumentException::class);
        new AssumeRoleCredentialProvider($config);
    }

    /**
     * @dataProvider insufficientArguments
     */
    public function insufficientArguments()
    {
        $client = [
            'client' => new StsClient([
                'region' => 'us-west-2',
                'version' => 'latest',
                'credentials' => new Credentials('foo', 'bar')
            ])
        ];
        $params = [
            'assume_role_params' => [
                'RoleArn' => self::SAMPLE_ROLE_ARN,
                'RoleSessionName' => 'test_session',
            ]
        ];

        return [
            [ $client ],
            [ $params ],
        ];
    }

    public function testCanLoadAssumeRoleCredentials()
    {
        $result = [
            'Credentials' => [
                'AccessKeyId'     => 'foo',
                'SecretAccessKey' => 'bar',
                'SessionToken'    => null,
                'Expiration'      => DateTimeResult::fromEpoch(time() + 10)
            ],
            'AssumedRoleUser' => [
                'AssumedRoleId' => 'ARXXXXXXXXXXXXXXXXXXX:test_session',
                'Arn' => self::SAMPLE_ROLE_ARN . "/test_session"
            ]
        ];

        $sts = $this->getTestClient('Sts');
        $sts->getHandlerList()->setHandler(
            function ($c, $r) use ($result) {
                return Promise\Create::promiseFor(new Result($result));
            }
        );
        $args['client'] = $sts;
        $args['assume_role_params'] = [
            'RoleArn' => self::SAMPLE_ROLE_ARN,
            'RoleSessionName' => 'test_session',
        ];
        $provider = new AssumeRoleCredentialProvider($args);
        $creds = $provider()->wait();

        $this->assertSame('foo', $creds->getAccessKeyId());
        $this->assertSame('bar', $creds->getSecretKey());
        $this->assertNull($creds->getSecurityToken());
        $this->assertIsInt($creds->getExpiration());
        $this->assertFalse($creds->isExpired());
    }

    public function testThrowsExceptionWhenRetrievingAssumeRoleCredentialFails()
    {
        $this->expectExceptionMessage("Error in retrieving assume role credentials.");
        $this->expectException(\Aws\Exception\CredentialsException::class);
        $sts = new StsClient([
            'region' => 'us-west-2',
            'version' => 'latest',
            'credentials' => new Credentials('foo', 'bar'),
            'http_handler' => function () {
                return new RejectedPromise([
                    'connection_error' => false,
                    'exception' => $this->getMockBuilder(AwsException::class)
                        ->disableOriginalConstructor()
                        ->getMock(),
                    'result' => null,
                ]);
            }
        ]);
        $args['client'] = $sts;
        $args['assume_role_params'] = [
            'RoleArn' => self::SAMPLE_ROLE_ARN,
            'RoleSessionName' => 'test_session',
        ];
        $provider = new AssumeRoleCredentialProvider($args);
        $provider()->wait();
    }
}
