<?php
namespace CloudBeds\Aws\MskFork\Test\S3;


use CloudBeds\Aws\MskFork\Api\Parser\Exception\ParserException;
use CloudBeds\Aws\MskFork\CommandInterface;
use CloudBeds\Aws\MskFork\S3\Exception\S3Exception;
use CloudBeds\Aws\MskFork\S3\RetryableMalformedResponseParser;
use Psr\Http\Message\ResponseInterface;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class RetryableMalformedResponseParserTest extends TestCase
{
    public function testConvertsParserExceptionsToRetryableExceptions()
    {
        $this->expectExceptionMessage("Sorry!");
        $this->expectException(\Aws\S3\Exception\S3Exception::class);
        $parser = function () { throw new ParserException('Sorry!'); };

        $instance = new RetryableMalformedResponseParser(
            $parser,
            S3Exception::class
        );

        $instance(
            $this->getMockBuilder(CommandInterface::class)->getMock(),
            $this->getMockBuilder(ResponseInterface::class)->getMock()
        );
    }
}
