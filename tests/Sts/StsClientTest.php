<?php
namespace CloudBeds\Aws\MskFork\Test\Sts;

use CloudBeds\Aws\MskFork\Api\DateTimeResult;
use CloudBeds\Aws\MskFork\Credentials\CredentialsInterface;
use CloudBeds\Aws\MskFork\Endpoint\PartitionEndpointProvider;
use CloudBeds\Aws\MskFork\LruArrayCache;
use CloudBeds\Aws\MskFork\Result;
use CloudBeds\Aws\MskFork\Sts\RegionalEndpoints\Configuration;
use CloudBeds\Aws\MskFork\Sts\StsClient;
use GuzzleHttp\Psr7\Uri;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers Aws\Sts\StsClient
 */
class StsClientTest extends TestCase
{
    public function testCanCreateCredentialsObjectFromStsResult()
    {
        $result = new Result([
            'Credentials' => [
                'AccessKeyId' => 'foo',
                'SecretAccessKey' => 'bar',
                'SessionToken' => 'baz',
                'Expiration' => DateTimeResult::fromEpoch(time() + 10),
            ]
        ]);

        $client = new StsClient(['region' => 'us-east-1', 'version' => 'latest']);
        $credentials = $client->createCredentials($result);
        $this->assertInstanceOf(
            CredentialsInterface::class,
            $credentials
        );
        $this->assertSame('foo', $credentials->getAccessKeyId());
        $this->assertSame('bar', $credentials->getSecretKey());
        $this->assertSame('baz', $credentials->getSecurityToken());
        $this->assertIsInt($credentials->getExpiration());
        $this->assertFalse($credentials->isExpired());
    }

    public function testThrowsExceptionWhenCreatingCredentialsFromInvalidInput()
    {
        $this->expectExceptionMessage("Result contains no credentials");
        $this->expectException(\InvalidArgumentException::class);
        $client = new StsClient(['region' => 'us-east-1', 'version' => 'latest']);
        $client->createCredentials(new Result());
    }

    public function testAddsStsRegionalEndpointsArgument()
    {
        $this->expectExceptionMessage("Configuration parameter must either be 'legacy' or 'regional'.");
        $this->expectException(\InvalidArgumentException::class);
        new StsClient([
            'region' => 'us-east-1',
            'version' => 'latest',
            'sts_regional_endpoints' => 'trigger_exception'
        ]);
    }

    public function testAddsStsRegionalEndpointsCacheArgument()
    {
        // Create cache object
        $cache = new LruArrayCache();
        $cache->set('aws_sts_regional_endpoints_config', new Configuration('regional'));

        // Create client using cached endpoints config
        $client = new StsClient([
            'region' => 'us-east-1',
            'version' => 'latest',
            'sts_regional_endpoints' => $cache
        ]);

        // Get the expected Uri from the PartitionEndpointProvider
        $provider = PartitionEndpointProvider::defaultProvider([
            'sts_regional_endpoints' => 'regional'
        ]);
        $endpoint = $provider([
            'service' => 'sts',
            'region' => 'us-east-1',
        ]);
        $uri = new Uri($endpoint['endpoint']);

        $this->assertSame($uri->getHost(), $client->getEndpoint()->getHost());
    }
}
