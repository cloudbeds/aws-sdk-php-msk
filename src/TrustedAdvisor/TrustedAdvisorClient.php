<?php
namespace CloudBeds\Aws\MskFork\TrustedAdvisor;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **TrustedAdvisor Public API** service.
 * @method \CloudBeds\Aws\MskFork\Result getOrganizationRecommendation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOrganizationRecommendationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecommendation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommendationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChecks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChecksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOrganizationRecommendationAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationRecommendationAccountsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOrganizationRecommendationResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationRecommendationResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOrganizationRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecommendationResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecommendationResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateOrganizationRecommendationLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOrganizationRecommendationLifecycleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRecommendationLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecommendationLifecycleAsync(array $args = [])
 */
class TrustedAdvisorClient extends AwsClient {}
