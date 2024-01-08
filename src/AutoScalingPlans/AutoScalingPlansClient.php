<?php
namespace CloudBeds\Aws\MskFork\AutoScalingPlans;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Auto Scaling Plans** service.
 * @method \CloudBeds\Aws\MskFork\Result createScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScalingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeScalingPlanResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPlanResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeScalingPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPlansAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getScalingPlanResourceForecastData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getScalingPlanResourceForecastDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateScalingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScalingPlanAsync(array $args = [])
 */
class AutoScalingPlansClient extends AwsClient {}
