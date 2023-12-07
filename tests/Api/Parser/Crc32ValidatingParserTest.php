<?php
namespace CloudBeds\Aws\MskFork\Test\Api\Parser;

use CloudBeds\Aws\MskFork\Api\ApiProvider;
use CloudBeds\Aws\MskFork\Api\Parser\Crc32ValidatingParser;
use CloudBeds\Aws\MskFork\Api\Parser\JsonRpcParser;
use CloudBeds\Aws\MskFork\Api\Service;
use CloudBeds\Aws\MskFork\Command;
use CloudBeds\Aws\MskFork\Exception\AwsException;
use CloudBeds\Aws\MskFork\ResultInterface;
use GuzzleHttp\Psr7\Response;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers Aws\Api\Parser\Crc32ValidatingParser
 */
class Crc32ValidatingParserTest extends TestCase
{
    private function getWrapped()
    {
        $provider = ApiProvider::defaultProvider();
        $data = $provider('api', 'dynamodb', 'latest');
        $parser = new JsonRpcParser(new Service($data, $provider));
        return new Crc32ValidatingParser($parser);
    }

    public function testSkipsIfNoCrcHeader()
    {
        $wrapped = $this->getWrapped();
        $command = new Command('GetItem');
        $response = new Response(200, [], '{"foo": "bar"}');
        $this->assertInstanceOf(ResultInterface::class, $wrapped($command, $response));
    }

    public function testThrowsWhenMismatch()
    {
        $wrapped = $this->getWrapped();
        $command = new Command('GetItem');
        $response = new Response(200, ['x-amz-crc32' => '123'], '{"foo": "bar"}');
        try {
            $wrapped($command, $response);
            $this->fail();
        } catch (AwsException $e) {
            $this->assertStringContainsString('crc32 mismatch. Expected 123, found 11124959', $e->getMessage());
            $this->assertTrue($e->isConnectionError());
        }
    }

    public function testNothingWhenValidChecksum()
    {
        $wrapped = $this->getWrapped();
        $command = new Command('GetItem');
        $response = new Response(200, ['x-amz-crc32' => '11124959'], '{"foo": "bar"}');
        $this->assertInstanceOf(ResultInterface::class, $wrapped($command, $response));
    }
}
