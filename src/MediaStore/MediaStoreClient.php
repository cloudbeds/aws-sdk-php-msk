<?php
namespace CloudBeds\Aws\MskFork\MediaStore;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaStore** service.
 * @method \CloudBeds\Aws\MskFork\Result createContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContainerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContainerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteContainerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContainerPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCorsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCorsPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMetricPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMetricPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeContainer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContainerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContainerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCorsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCorsPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMetricPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listContainers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContainersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putContainerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putContainerPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putCorsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putCorsPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLifecyclePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putMetricPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startAccessLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAccessLoggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopAccessLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAccessLoggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class MediaStoreClient extends AwsClient {}
