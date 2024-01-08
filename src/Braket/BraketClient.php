<?php
namespace CloudBeds\Aws\MskFork\Braket;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Braket** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelQuantumTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelQuantumTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createQuantumTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createQuantumTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getQuantumTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQuantumTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchDevicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchQuantumTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchQuantumTasksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class BraketClient extends AwsClient {}
