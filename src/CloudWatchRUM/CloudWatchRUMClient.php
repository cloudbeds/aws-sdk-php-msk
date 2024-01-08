<?php
namespace CloudBeds\Aws\MskFork\CloudWatchRUM;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **CloudWatch RUM** service.
 * @method \CloudBeds\Aws\MskFork\Result batchCreateRumMetricDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateRumMetricDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDeleteRumMetricDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteRumMetricDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetRumMetricDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetRumMetricDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAppMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppMonitorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAppMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppMonitorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRumMetricsDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRumMetricsDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAppMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppMonitorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAppMonitorData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppMonitorDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAppMonitors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppMonitorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRumMetricsDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRumMetricsDestinationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRumEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRumEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRumMetricsDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRumMetricsDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAppMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAppMonitorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRumMetricDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRumMetricDefinitionAsync(array $args = [])
 */
class CloudWatchRUMClient extends AwsClient {}
