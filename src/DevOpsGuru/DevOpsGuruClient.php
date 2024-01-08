<?php
namespace CloudBeds\Aws\MskFork\DevOpsGuru;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon DevOps Guru** service.
 * @method \CloudBeds\Aws\MskFork\Result addNotificationChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addNotificationChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteInsight(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInsightAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccountHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountHealthAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccountOverview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountOverviewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAnomaly(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnomalyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventSourcesConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventSourcesConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFeedbackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeInsight(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInsightAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOrganizationHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationHealthAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOrganizationOverview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationOverviewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOrganizationResourceCollectionHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationResourceCollectionHealthAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeResourceCollectionHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourceCollectionHealthAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeServiceIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServiceIntegrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCostEstimation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCostEstimationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourceCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceCollectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAnomaliesForInsight(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomaliesForInsightAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAnomalousLogGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomalousLogGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listInsights(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInsightsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMonitoredResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMonitoredResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listNotificationChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNotificationChannelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOrganizationInsights(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationInsightsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFeedbackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeNotificationChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeNotificationChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchInsights(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchInsightsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchOrganizationInsights(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchOrganizationInsightsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startCostEstimation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startCostEstimationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEventSourcesConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventSourcesConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateResourceCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceCollectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServiceIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceIntegrationAsync(array $args = [])
 */
class DevOpsGuruClient extends AwsClient {}
