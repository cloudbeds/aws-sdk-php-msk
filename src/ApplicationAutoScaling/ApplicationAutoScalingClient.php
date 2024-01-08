<?php
namespace CloudBeds\Aws\MskFork\ApplicationAutoScaling;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Application Auto Scaling** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteScheduledAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScheduledActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deregisterScalableTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterScalableTargetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeScalableTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalableTargetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeScalingActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingActivitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeScalingPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPoliciesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeScheduledActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScheduledActionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScalingPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putScheduledAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScheduledActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerScalableTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerScalableTargetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class ApplicationAutoScalingClient extends AwsClient {}
