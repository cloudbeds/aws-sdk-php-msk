<?php
namespace CloudBeds\Aws\MskFork\IoTFleetHub;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Fleet Hub** service.
 * @method \CloudBeds\Aws\MskFork\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class IoTFleetHubClient extends AwsClient {}
