<?php
namespace CloudBeds\Aws\MskFork\ElasticInference;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic  Inference** service.
 * @method \CloudBeds\Aws\MskFork\Result describeAcceleratorOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAcceleratorOfferingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAcceleratorTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAcceleratorTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccelerators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAcceleratorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class ElasticInferenceClient extends AwsClient {}
