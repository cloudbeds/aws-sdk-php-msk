<?php
namespace CloudBeds\Aws\MskFork\CostOptimizationHub;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Cost Optimization Hub** service.
 * @method \CloudBeds\Aws\MskFork\Result getPreferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPreferencesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecommendation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommendationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnrollmentStatuses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnrollmentStatusesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecommendationSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecommendationSummariesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnrollmentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnrollmentStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePreferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePreferencesAsync(array $args = [])
 */
class CostOptimizationHubClient extends AwsClient {}
