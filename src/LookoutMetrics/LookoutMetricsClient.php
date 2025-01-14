<?php
namespace CloudBeds\Aws\MskFork\LookoutMetrics;

use CloudBeds\Aws\MskFork\AwsClient;
use CloudBeds\Aws\MskFork\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Lookout for Metrics** service.
 * @method \CloudBeds\Aws\MskFork\Result activateAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateAnomalyDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result backTestAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise backTestAnomalyDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAlert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAlertAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAnomalyDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMetricSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMetricSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deactivateAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateAnomalyDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAlert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlertAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAnomalyDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAlert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlertAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAnomalyDetectionExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnomalyDetectionExecutionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnomalyDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMetricSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectMetricSetConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectMetricSetConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAnomalyGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAnomalyGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataQualityMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataQualityMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFeedbackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSampleData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSampleDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAlerts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAlertsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAnomalyDetectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomalyDetectorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAnomalyGroupRelatedMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomalyGroupRelatedMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAnomalyGroupSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomalyGroupSummariesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAnomalyGroupTimeSeries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomalyGroupTimeSeriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMetricSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFeedbackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAlert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAlertAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAnomalyDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateMetricSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMetricSetAsync(array $args = [])
 */
class LookoutMetricsClient extends AwsClient {}
