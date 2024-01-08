<?php
namespace CloudBeds\Aws\MskFork\PI;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Performance Insights** service.
 * @method \CloudBeds\Aws\MskFork\Result createPerformanceAnalysisReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPerformanceAnalysisReportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePerformanceAnalysisReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePerformanceAnalysisReportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDimensionKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDimensionKeysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDimensionKeyDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDimensionKeyDetailsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPerformanceAnalysisReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPerformanceAnalysisReportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourceMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourceMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAvailableResourceDimensions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableResourceDimensionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAvailableResourceMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableResourceMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPerformanceAnalysisReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPerformanceAnalysisReportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class PIClient extends AwsClient {}
