<?php
namespace CloudBeds\Aws\MskFork\KendraRanking;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Kendra Intelligent Ranking** service.
 * @method \CloudBeds\Aws\MskFork\Result createRescoreExecutionPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRescoreExecutionPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRescoreExecutionPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRescoreExecutionPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRescoreExecutionPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRescoreExecutionPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRescoreExecutionPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRescoreExecutionPlansAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rescore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rescoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRescoreExecutionPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRescoreExecutionPlanAsync(array $args = [])
 */
class KendraRankingClient extends AwsClient {}
