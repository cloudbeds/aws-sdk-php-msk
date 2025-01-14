<?php
namespace CloudBeds\Aws\MskFork\Test;

use CloudBeds\Aws\MskFork\AwsClient;
use CloudBeds\Aws\MskFork\EndpointParameterMiddleware;
use CloudBeds\Aws\MskFork\HandlerList;
use CloudBeds\Aws\MskFork\Api\Service;
use GuzzleHttp\Psr7\Request;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers \CloudBeds\Aws\MskFork\EndpointParameterMiddleware
 */
class EndpointParameterMiddlewareTest extends TestCase
{
    public function testThrowsExceptionForMissingParameter()
    {
        $service = $this->generateTestService();
        $client = $this->generateTestClient($service);
        $command = $client->getCommand('MemberRefOp', []);

        $list = new HandlerList();
        $list->setHandler(function ($command, $request) {
            return;
        });
        $list->appendBuild(EndpointParameterMiddleware::wrap($service));

        $handler = $list->resolve();

        try {
            $handler($command, new Request('POST', 'https://foo.com'));
            $this->fail('Test should have thrown an InvalidArgumentException for not having the host parameter set.');
        } catch (\InvalidArgumentException $e) {
            $this->assertSame(
                "The parameter 'HostParameter' must be set and not empty.",
                $e->getMessage()
            );
        }
    }

    public function testThrowsExceptionForInvalidParameter()
    {
        $service = $this->generateTestService();
        $client = $this->generateTestClient($service);
        $command = $client->getCommand(
            'MemberRefOp',
            ['HostParameter' => '<bar)']
        );

        $list = new HandlerList();
        $list->setHandler(function ($command, $request) {
            return;
        });
        $list->appendBuild(EndpointParameterMiddleware::wrap($service));

        $handler = $list->resolve();

        try {
            $handler($command, new Request('POST', 'https://foo.com'));
            $this->fail('Test should have thrown an InvalidArgumentException for having an invalid host parameter.');
        } catch (\InvalidArgumentException $e) {
            $this->assertSame(
                "The supplied parameters result in an invalid hostname: '<bar).foo.com'.",
                $e->getMessage()
            );
        }
    }

    /**
     * @dataProvider getTestCases
     */
    public function testCorrectlyOutputsHost(
        Service $service,
        $clientArgs,
        $cmdName,
        $params,
        $endpoint,
        $expectedHost
    ) {
        if ($cmdName === 'NoEndpointOp') {
            $this->addToAssertionCount(1); // To be replaced with $this->expectNotToPerformAssertions();
        }
        $client = $this->generateTestClient($service, $clientArgs);
        $command = $client->getCommand($cmdName, $params);

        $list = $client->getHandlerList();
        $list->setHandler(function ($command, $request) use ($expectedHost) {
            $this->assertEquals(
                $expectedHost,
                $request->getUri()->getHost()
            );
        });

        $handler = $list->resolve();
        $handler($command, new Request('POST', $endpoint));
    }

    public function getTestCases()
    {
        $service = $this->generateTestService();

        return [
            // Operation without any prefix injection
            [
                $service,
                [],
                'NoEndpointOp',
                [
                    'StaticParameter' => 'bar-static',
                ],
                'https://foo.com',
                'foo.com',
            ],
            // Operation with static prefix injection
            [
                $service,
                [],
                'StaticOp',
                [
                    'StaticParameter' => 'bar-static',
                ],
                'https://foo.com',
                'static.foo.com',
            ],
            // Operation with host parameter injection
            [
                $service,
                [],
                'MemberRefOp',
                [
                    'HostParameter' => 'bar-host',
                ],
                'https://foo.com',
                'bar-host.foo.com',
            ],
            // Operation with multiple host parameter injections
            [
                $service,
                [],
                'MultiRefOp',
                [
                    'HostParameter' => 'bar-host',
                    'HostParameter2' => 'baz-host',
                ],
                'https://foo.com',
                'bar-host.baz-host.foo.com',
            ],
            // Operation with host parameter injection, disabled via client argument
            [
                $service,
                [
                    'disable_host_prefix_injection' => true
                ],
                'MemberRefOp',
                [
                    'HostParameter' => 'bar-host',
                ],
                'https://foo.com',
                'foo.com',
            ],
        ];
    }

    private function generateTestClient(Service $service, $args = [])
    {
        return new AwsClient(
            array_merge(
                [
                    'service'      => 'foo',
                    'api_provider' => function () use ($service) {
                        return $service->toArray();
                    },
                    'region'       => 'us-east-1',
                    'version'      => 'latest',
                ],
                $args
            )
        );
    }

    private function generateTestService()
    {
        return new Service(
            [
                'metadata' => [
                    "protocol" => "json",
                    "apiVersion" => "2014-01-01",
                    'jsonVersion' => "1.1"
                ],
                'shapes' => [
                    "StaticInputShape" => [
                        "type" => "structure",
                        "members" => [
                            "StaticParameter" => [
                                "shape" => "StringType"
                            ],
                        ],
                    ],
                    "MemberRefInputShape"=> [
                        "type"=> "structure",
                        "members"=> [
                            "HostParameter"=> [
                                "shape"=> "StringType",
                                "hostLabel"=> true
                            ],
                        ],
                    ],
                    "MultiRefInputShape"=> [
                        "type"=> "structure",
                        "members"=> [
                            "HostParameter"=> [
                                "shape"=> "StringType",
                                "hostLabel"=> true
                            ],
                            "HostParameter2"=> [
                                "shape"=> "StringType",
                                "hostLabel"=> true
                            ],
                        ],
                    ],
                    "StringType"=> [
                        "type"=> "string"
                    ],
                ],
                'operations' => [
                    "NoEndpointOp"=> [
                        "name"=> "NoEndpointOp",
                        "http"=> [
                            "method"=> "POST",
                            "requestUri"=> "/",
                            "responseCode"=> 200
                        ],
                        "input"=> ["shape"=> "StaticInputShape"],
                    ],
                    "StaticOp"=> [
                        "name"=> "StaticOp",
                        "http"=> [
                            "method"=> "POST",
                            "requestUri"=> "/",
                            "responseCode"=> 200
                        ],
                        "endpoint"=> [
                            "hostPrefix"=> "static."
                        ],
                        "input"=> ["shape"=> "StaticInputShape"],
                    ],
                    "MemberRefOp" => [
                        "name"=> "MemberRefOp",
                        "http"=> [
                            "method"=> "POST",
                            "requestUri"=> "/",
                            "responseCode"=> 200
                        ],
                        "endpoint"=> [
                            "hostPrefix"=> "{HostParameter}."
                        ],
                        "input"=> ["shape"=> "MemberRefInputShape"],
                    ],
                    "MultiRefOp" => [
                        "name"=> "MultiRefOp",
                        "http"=> [
                            "method"=> "POST",
                            "requestUri"=> "/",
                            "responseCode"=> 200
                        ],
                        "endpoint"=> [
                            "hostPrefix"=> "{HostParameter}.{HostParameter2}."
                        ],
                        "input"=> ["shape"=> "MemberRefInputShape"],
                    ],
                ],
            ],
            function () { return []; }
        );
    }
}
