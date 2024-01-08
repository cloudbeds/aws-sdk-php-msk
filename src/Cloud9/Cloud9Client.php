<?php
namespace CloudBeds\Aws\MskFork\Cloud9;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Cloud9** service.
 * @method \CloudBeds\Aws\MskFork\Result createEnvironmentEC2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentEC2Async(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEnvironmentMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEnvironmentMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEnvironmentMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEnvironmentMembershipsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEnvironmentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEnvironmentStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEnvironmentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnvironmentMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentMembershipAsync(array $args = [])
 */
class Cloud9Client extends AwsClient {}
