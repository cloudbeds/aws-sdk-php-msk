<?php
namespace CloudBeds\Aws\MskFork\Test\Glacier;

use CloudBeds\Aws\MskFork\Exception\CouldNotCreateChecksumException;
use CloudBeds\Aws\MskFork\Glacier\GlacierClient;
use CloudBeds\Aws\MskFork\Test\UsesServiceTrait;
use GuzzleHttp\Psr7\NoSeekStream;
use GuzzleHttp\Psr7;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers Aws\Glacier\GlacierClient
 */
class GlacierClientTest extends TestCase
{
    use UsesServiceTrait;

    public function testAppliesAllMiddleware()
    {
        $client = new GlacierClient([
            'service' => 'glacier',
            'region'  => 'us-west-2',
            'version' => 'latest'
        ]);
        $command = $client->getCommand('UploadArchive', [
            'vaultName'  => 'foo',
            'sourceFile' => __DIR__ . '/test-content.txt',
        ]);
        $request = \CloudBeds\Aws\MskFork\serialize($command);

        // Added default accountId and the API version header.
        $this->assertSame('-', $command['accountId']);
        $this->assertEquals(
            $client->getApi()->getMetadata('apiVersion'),
            $request->getHeaderLine('x-amz-glacier-version')
        );

        // Added Content-Type and Body
        $this->assertSame('foo', (string)$command['body']);
        $this->assertSame('text/plain', $request->getHeaderLine('Content-Type'));

        // Added the tree and content hashes.
        $hash = hash('sha256', 'foo');
        $this->assertSame($hash, $request->getHeaderLine('x-amz-content-sha256'));
        $this->assertSame($hash, $request->getHeaderLine('x-amz-sha256-tree-hash'));
    }

    public function testErrorWhenHashingNonSeekableStream()
    {
        $this->expectException(\Aws\Exception\CouldNotCreateChecksumException::class);
        $this->getTestClient('Glacier')->uploadArchive([
            'vaultName' => 'foo',
            'body'      => new NoSeekStream(Psr7\Utils::streamFor('foo')),
        ]);
    }
}
