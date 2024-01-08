<?php
namespace CloudBeds\Aws\MskFork\MWAA;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AmazonMWAA** service.
 * @method \CloudBeds\Aws\MskFork\Result createCliToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCliTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWebLoginToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebLoginTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result publishMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 */
class MWAAClient extends AwsClient {}
