<?php
namespace CloudBeds\Aws\MskFork\WorkSpacesThinClient;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkSpaces Thin Client** service.
 * @method \CloudBeds\Aws\MskFork\Result createEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deregisterDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSoftwareSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSoftwareSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSoftwareSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSoftwareSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSoftwareSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSoftwareSetAsync(array $args = [])
 */
class WorkSpacesThinClientClient extends AwsClient {}
