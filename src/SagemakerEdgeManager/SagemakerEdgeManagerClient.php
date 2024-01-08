<?php
namespace CloudBeds\Aws\MskFork\SagemakerEdgeManager;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Sagemaker Edge Manager** service.
 * @method \CloudBeds\Aws\MskFork\Result getDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDeviceRegistration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceRegistrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendHeartbeatAsync(array $args = [])
 */
class SagemakerEdgeManagerClient extends AwsClient {}
