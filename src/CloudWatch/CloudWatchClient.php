<?php
namespace CloudBeds\Aws\MskFork\CloudWatch;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result deleteAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlarmsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAnomalyDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDashboards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDashboardsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteInsightRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInsightRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMetricStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMetricStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAlarmHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAlarmsForMetric(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmsForMetricAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAnomalyDetectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnomalyDetectorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeInsightRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInsightRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableAlarmActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAlarmActionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableInsightRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableInsightRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableAlarmActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAlarmActionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableInsightRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableInsightRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDashboardAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInsightRuleReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInsightRuleReportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMetricStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMetricStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMetricWidgetImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricWidgetImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDashboards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDashboardsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listManagedInsightRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listManagedInsightRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMetricStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricStreamsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAnomalyDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putCompositeAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putCompositeAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDashboardAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putInsightRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInsightRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putManagedInsightRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putManagedInsightRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putMetricAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putMetricStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setAlarmState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAlarmStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMetricStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMetricStreamsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopMetricStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopMetricStreamsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class CloudWatchClient extends AwsClient {}
