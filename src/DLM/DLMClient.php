<?php
namespace CloudBeds\Aws\MskFork\DLM;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Data Lifecycle Manager** service.
 * @method \CloudBeds\Aws\MskFork\Result createLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLifecyclePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLifecyclePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePoliciesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLifecyclePolicyAsync(array $args = [])
 */
class DLMClient extends AwsClient {}
