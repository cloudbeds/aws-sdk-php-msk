<?php
namespace CloudBeds\Aws\MskFork\IoTJobsDataPlane;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Jobs Data Plane** service.
 * @method \CloudBeds\Aws\MskFork\Result describeJobExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobExecutionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPendingJobExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPendingJobExecutionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startNextPendingJobExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startNextPendingJobExecutionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateJobExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobExecutionAsync(array $args = [])
 */
class IoTJobsDataPlaneClient extends AwsClient {}
