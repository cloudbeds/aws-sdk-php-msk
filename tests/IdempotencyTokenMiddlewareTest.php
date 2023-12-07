<?php
namespace CloudBeds\Aws\MskFork\Test;

use CloudBeds\Aws\MskFork\IdempotencyTokenMiddleware;
use CloudBeds\Aws\MskFork\Result;
use GuzzleHttp\Promise;
use CloudBeds\Aws\MskFork\HandlerList;
use CloudBeds\Aws\MskFork\Api\ApiProvider;
use CloudBeds\Aws\MskFork\Api\Service;
use CloudBeds\Aws\MskFork\Command;
use GuzzleHttp\Psr7\Request;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers Aws\IdempotencyTokenMiddleware
 */
class IdempotencyTokenMiddlewareTest extends TestCase
{
    public function testAutoFillsMemberWithIdempotencyTrait()
    {
        $list = new HandlerList();
        $list->setHandler(function ($command, $request) use (&$called) {
            $called = true;
            $this->assertNotNull($command['ClientToken']);
            $regex = '/([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12})/';
            $this->assertMatchesRegularExpression($regex, $command['ClientToken']);
            return Promise\Create::promiseFor(new Result([]));
        });

        $provider = ApiProvider::defaultProvider();
        $data = $provider('api', 'ec2', 'latest');
        $service = new Service($data, $provider);
        $list->appendInit(IdempotencyTokenMiddleware::wrap($service));
        $handler = $list->resolve();

        $handler(new Command('RunScheduledInstances', [
            'LaunchSpecification' => [
                'ImageId' => 'test-image',
            ],
            'ScheduledInstanceId' => 'test-instance-id',
            'InstanceCount' => 1,
        ]), new Request('POST', 'http://foo.com'))->wait();
        $this->assertTrue($called);
    }

    public function testAllowsCustomRandomSourceToBeProvided()
    {
        $fakeRandomSource = function ($byteLength) {
            return str_repeat(chr(0x00), $byteLength);
        };
        $list = new HandlerList();
        $list->setHandler(function ($command, $request) use (&$called) {
            $called = true;
            $this->assertNotNull($command['ClientToken']);
            $this->assertSame(
                '00000000-0000-4000-8000-000000000000',
                $command['ClientToken']
            );
            return Promise\Create::promiseFor(new Result([]));
        });

        $provider = ApiProvider::defaultProvider();
        $data = $provider('api', 'ec2', 'latest');
        $service = new Service($data, $provider);
        $list->appendInit(
            IdempotencyTokenMiddleware::wrap($service, $fakeRandomSource)
        );
        $handler = $list->resolve();

        $handler(new Command('RunScheduledInstances', [
            'LaunchSpecification' => [
                'ImageId' => 'test-image',
            ],
            'ScheduledInstanceId' => 'test-instance-id',
            'InstanceCount' => 1,
        ]), new Request('POST', 'http://foo.com'))->wait();
        $this->assertTrue($called);
    }
}
