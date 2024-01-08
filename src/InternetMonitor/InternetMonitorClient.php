<?php
namespace CloudBeds\Aws\MskFork\InternetMonitor;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Internet Monitor** service.
 * @method \CloudBeds\Aws\MskFork\Result createMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMonitorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMonitorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHealthEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthEventAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMonitorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getQueryResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryResultsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getQueryStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHealthEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHealthEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMonitors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMonitorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMonitorAsync(array $args = [])
 */
class InternetMonitorClient extends AwsClient {}
