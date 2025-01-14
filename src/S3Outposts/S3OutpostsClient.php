<?php
namespace CloudBeds\Aws\MskFork\S3Outposts;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon S3 on Outposts** service.
 * @method \CloudBeds\Aws\MskFork\Result createEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOutpostsWithS3(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOutpostsWithS3Async(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSharedEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSharedEndpointsAsync(array $args = [])
 */
class S3OutpostsClient extends AwsClient {}
