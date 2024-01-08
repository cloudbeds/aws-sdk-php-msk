<?php
namespace CloudBeds\Aws\MskFork\SnowDeviceManagement;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Snow Device Management** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDeviceEc2Instances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceEc2InstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExecutionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeviceResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTasksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class SnowDeviceManagementClient extends AwsClient {}
