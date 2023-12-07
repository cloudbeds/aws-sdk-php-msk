<?php
namespace CloudBeds\Aws\MskFork\Test\Api\Parser;

use CloudBeds\Aws\MskFork\Api\Operation;
use CloudBeds\Aws\MskFork\Api\Parser\JsonParser;
use CloudBeds\Aws\MskFork\Api\Parser\JsonRpcParser;
use CloudBeds\Aws\MskFork\Api\Service;
use CloudBeds\Aws\MskFork\Api\Shape;
use CloudBeds\Aws\MskFork\CommandInterface;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class JsonRpcParserTest extends TestCase
{
    /** @doesNotPerformAssertions */
    public function testCanHandleNullResponses()
    {
        $operation = $this->getMockBuilder(Operation::class)
            ->disableOriginalConstructor()
            ->setMethods(['getOutput'])
            ->getMock();
        $operation->expects($this->any())
            ->method('getOutput')
            ->withAnyParameters()
            ->willReturn(
                $this->getMockBuilder(Shape::class)
                    ->disableOriginalConstructor()
                    ->setMethods([])
                    ->getMock()
            );

        $service = $this->getMockBuilder(Service::class)
            ->disableOriginalConstructor()
            ->setMethods(['getOperation'])
            ->getMock();
        $service->expects($this->any())
            ->method('getOperation')
            ->withAnyParameters()
            ->willReturn($operation);

        $parser = $this->getMockBuilder(JsonParser::class)
            ->disableOriginalConstructor()
            ->setMethods(['parse'])
            ->getMock();
        $parser->expects($this->any())
            ->method('parse')
            ->withAnyParameters()
            ->willReturn(null);

        $instance = new JsonRpcParser($service, $parser);
        $result = $instance(
            $this->getMockBuilder(CommandInterface::class)->getMock(),
            new Response(200, [], json_encode(null))
        );
    }

    public function testCanHandleEmptyResponses()
    {
        $operation = $this->getMockBuilder(Operation::class)
            ->disableOriginalConstructor()
            ->setMethods(['offsetGet'])
            ->getMock();
        $operation->expects($this->atLeastOnce())
            ->method('offsetGet')
            ->with('output')
            ->willReturn(null);

        $service = $this->getMockBuilder(Service::class)
            ->disableOriginalConstructor()
            ->setMethods(['getOperation'])
            ->getMock();
        $service->expects($this->any())
            ->method('getOperation')
            ->withAnyParameters()
            ->willReturn($operation);

        $parser = $this->getMockBuilder(JsonParser::class)
            ->disableOriginalConstructor()
            ->setMethods(['parse'])
            ->getMock();
        $parser->expects($this->never())
            ->method('parse');

        $instance = new JsonRpcParser($service, $parser);
        $result = $instance(
            $this->getMockBuilder(CommandInterface::class)->getMock(),
            new Response(200, [])
        );
    }
}
