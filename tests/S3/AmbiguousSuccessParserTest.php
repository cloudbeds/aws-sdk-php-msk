<?php
namespace CloudBeds\Aws\MskFork\Test\S3;

use CloudBeds\Aws\MskFork\Api\ApiProvider;
use CloudBeds\Aws\MskFork\Api\ErrorParser\XmlErrorParser;
use CloudBeds\Aws\MskFork\Command;
use CloudBeds\Aws\MskFork\CommandInterface;
use CloudBeds\Aws\MskFork\S3\AmbiguousSuccessParser;
use CloudBeds\Aws\MskFork\S3\Exception\S3Exception;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class AmbiguousSuccessParserTest extends TestCase
{
    private $instance;

    public function set_up()
    {
        $parser = function () {};
        $errorParser = function () {
            return ['code' => 'InternalError', 'message' => 'Sorry!'];
        };

        $this->instance = new AmbiguousSuccessParser(
            $parser,
            $errorParser,
            S3Exception::class
        );
    }

    /**
     * @dataProvider opsWithAmbiguousSuccessesProvider
     *
     * @param string $operation
     */
    public function testConvertsAmbiguousSuccessesToExceptions($operation)
    {
        $this->expectExceptionMessage("Sorry!");
        $this->expectException(\Aws\S3\Exception\S3Exception::class);
        $command = $this->getMockBuilder(CommandInterface::class)->getMock();
        $command->expects($this->any())
            ->method('getName')
            ->willReturn($operation);
        $response = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $response->expects($this->any())
            ->method('getStatusCode')
            ->willReturn(200);

        $instance = $this->instance;
        $instance($command, $response);
    }

    /**
     * @dataProvider opsWithoutAmbiguousSuccessesProvider
     * @param string $operation
     * @doesNotPerformAssertions
     */
    public function testIgnoresAmbiguousSuccessesOnUnaffectedOperations($operation)
    {
        $command = $this->getMockBuilder(CommandInterface::class)->getMock();
        $command->expects($this->any())
            ->method('getName')
            ->willReturn($operation);
        $response = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $response->expects($this->any())
            ->method('getStatusCode')
            ->willReturn(200);

        $instance = $this->instance;
        $instance($command, $response);
    }

    /**
     * @dataProvider opsWithAmbiguousSuccessesProvider
     */
    public function testThrowsConnectionErrorForEmptyBody($operation)
    {
        $this->expectExceptionMessage("An error connecting to the service occurred while performing the");
        $this->expectException(\Aws\S3\Exception\S3Exception::class);
        $parser = function() {};
        $errorParser = new XmlErrorParser();
        $instance = new AmbiguousSuccessParser(
            $parser,
            $errorParser,
            S3Exception::class
        );

        $command = new Command($operation);
        $response = new Response(200, [], "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n\n\n");
        $instance($command, $response);
    }

    public function opsWithAmbiguousSuccessesProvider()
    {
        return [
            ['CopyObject'],
            ['UploadPart'],
            ['UploadPartCopy'],
            ['CompleteMultipartUpload'],
        ];
    }

    public function opsWithoutAmbiguousSuccessesProvider()
    {
        $provider = ApiProvider::defaultProvider();
        return array_map(
            function ($op) { return [$op]; },
            array_diff(
                array_keys($provider('api', 's3', 'latest')['operations']),
                array_map(
                    function (array $args) { return $args[0]; },
                    $this->opsWithAmbiguousSuccessesProvider()
                )
            )
        );
    }
}
