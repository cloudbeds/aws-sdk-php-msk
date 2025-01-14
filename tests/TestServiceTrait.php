<?php

namespace CloudBeds\Aws\MskFork\Test;

use CloudBeds\Aws\MskFork\Api\Service;
use CloudBeds\Aws\MskFork\AwsClient;

/**
 * Trait TestServiceTrait
 *
 * Used to generate a mock service and client for testing
 *
 * @package Aws\Test
 */
trait TestServiceTrait
{
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

    /**
     *
     *
     * @param string $protocol
     * @return Service
     */
    private function generateTestService($protocol, $args = [])
    {
        $metadata = [
            "protocol" => $protocol,
            "apiVersion" => "2019-05-01"
        ];
        if ($protocol === 'json') {
            $metadata['jsonVersion'] = "1.1";
            if (isset($args['awsQueryCompatible']) && $args['awsQueryCompatible'] === true) {
                $metadata['awsQueryCompatible'] = "String";
            }
        }

        return new Service(
            [
                'metadata' => $metadata,
                'shapes' => [
                    "HeaderMap"=> [
                        "type"=> "map",
                        "key"=> [
                            "shape"=> "String"
                        ],
                        "value"=> [
                            "shape"=> "String"
                        ]
                    ],
                    "Integer" => ["type" => "integer"],
                    "String" => ["type" => "string"],
                    "TestException"=>[
                        "type" => "structure",
                        "members" => [
                            "TestString" => ["shape" => "String"],
                            "TestInt" => ["shape" => "Integer"],
                            "TestHeaderMember" => [
                                "shape" => "String",
                                "location" => "header",
                                "locationName" => "TestHeader",
                            ],
                            "TestHeaders" => [
                                "shape" => "HeaderMap",
                                "location" => "headers",
                                "locationName" => "x-meta-",
                            ],
                            "TestStatus" => [
                                "shape" => "Integer",
                                "location" => "statusCode",
                            ],
                        ],
                        "error" => ["httpStatusCode" => 502],
                        "exception" => true,
                    ],
                    "TestInput"=>[
                        "type" => "structure",
                        "members" => [
                            "TestInput" => ["shape" => "String"]
                        ],
                    ],
                ],
                'operations' => [
                    "TestOperation"=> [
                        "name"=> "TestOperation",
                        "http"=> [
                            "method"=> "POST",
                            "requestUri"=> "/",
                            "responseCode"=> 200
                        ],
                        "input" => ["shape"=> "TestInput"],
                        "errors" => [
                            ["shape" => "TestException"]
                        ],
                    ],
                ],
            ],
            function () { return []; }
        );
    }
}