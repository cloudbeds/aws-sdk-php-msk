<?php
namespace CloudBeds\Aws\MskFork\CloudWatchLogs;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Logs** service.
 *
 * @method \Aws\Result associateKmsKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateKmsKeyAsync(array $args = [])
 * @method \Aws\Result cancelExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelExportTaskAsync(array $args = [])
 * @method \Aws\Result createDelivery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeliveryAsync(array $args = [])
 * @method \Aws\Result createExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExportTaskAsync(array $args = [])
 * @method \Aws\Result createLogAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result createLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogGroupAsync(array $args = [])
 * @method \Aws\Result createLogStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogStreamAsync(array $args = [])
 * @method \Aws\Result deleteAccountPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountPolicyAsync(array $args = [])
 * @method \Aws\Result deleteDataProtectionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataProtectionPolicyAsync(array $args = [])
 * @method \Aws\Result deleteDelivery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliveryAsync(array $args = [])
 * @method \Aws\Result deleteDeliveryDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliveryDestinationAsync(array $args = [])
 * @method \Aws\Result deleteDeliveryDestinationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliveryDestinationPolicyAsync(array $args = [])
 * @method \Aws\Result deleteDeliverySource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliverySourceAsync(array $args = [])
 * @method \Aws\Result deleteDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDestinationAsync(array $args = [])
 * @method \Aws\Result deleteLogAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result deleteLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogGroupAsync(array $args = [])
 * @method \Aws\Result deleteLogStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLogStreamAsync(array $args = [])
 * @method \Aws\Result deleteMetricFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMetricFilterAsync(array $args = [])
 * @method \Aws\Result deleteQueryDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQueryDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \Aws\Result deleteRetentionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRetentionPolicyAsync(array $args = [])
 * @method \Aws\Result deleteSubscriptionFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionFilterAsync(array $args = [])
 * @method \Aws\Result describeAccountPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountPoliciesAsync(array $args = [])
 * @method \Aws\Result describeDeliveries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveriesAsync(array $args = [])
 * @method \Aws\Result describeDeliveryDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveryDestinationsAsync(array $args = [])
 * @method \Aws\Result describeDeliverySources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliverySourcesAsync(array $args = [])
 * @method \Aws\Result describeDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDestinationsAsync(array $args = [])
 * @method \Aws\Result describeExportTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \Aws\Result describeLogGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogGroupsAsync(array $args = [])
 * @method \Aws\Result describeLogStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLogStreamsAsync(array $args = [])
 * @method \Aws\Result describeMetricFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricFiltersAsync(array $args = [])
 * @method \Aws\Result describeQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQueriesAsync(array $args = [])
 * @method \Aws\Result describeQueryDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQueryDefinitionsAsync(array $args = [])
 * @method \Aws\Result describeResourcePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourcePoliciesAsync(array $args = [])
 * @method \Aws\Result describeSubscriptionFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubscriptionFiltersAsync(array $args = [])
 * @method \Aws\Result disassociateKmsKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateKmsKeyAsync(array $args = [])
 * @method \Aws\Result filterLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise filterLogEventsAsync(array $args = [])
 * @method \Aws\Result getDataProtectionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataProtectionPolicyAsync(array $args = [])
 * @method \Aws\Result getDelivery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeliveryAsync(array $args = [])
 * @method \Aws\Result getDeliveryDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeliveryDestinationAsync(array $args = [])
 * @method \Aws\Result getDeliveryDestinationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeliveryDestinationPolicyAsync(array $args = [])
 * @method \Aws\Result getDeliverySource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeliverySourceAsync(array $args = [])
 * @method \Aws\Result getLogAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result getLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogEventsAsync(array $args = [])
 * @method \Aws\Result getLogGroupFields(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogGroupFieldsAsync(array $args = [])
 * @method \Aws\Result getLogRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLogRecordAsync(array $args = [])
 * @method \Aws\Result getQueryResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryResultsAsync(array $args = [])
 * @method \Aws\Result listAnomalies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnomaliesAsync(array $args = [])
 * @method \Aws\Result listLogAnomalyDetectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLogAnomalyDetectorsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTagsLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsLogGroupAsync(array $args = [])
 * @method \Aws\Result putAccountPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountPolicyAsync(array $args = [])
 * @method \Aws\Result putDataProtectionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDataProtectionPolicyAsync(array $args = [])
 * @method \Aws\Result putDeliveryDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDeliveryDestinationAsync(array $args = [])
 * @method \Aws\Result putDeliveryDestinationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDeliveryDestinationPolicyAsync(array $args = [])
 * @method \Aws\Result putDeliverySource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDeliverySourceAsync(array $args = [])
 * @method \Aws\Result putDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDestinationAsync(array $args = [])
 * @method \Aws\Result putDestinationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDestinationPolicyAsync(array $args = [])
 * @method \Aws\Result putLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLogEventsAsync(array $args = [])
 * @method \Aws\Result putMetricFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMetricFilterAsync(array $args = [])
 * @method \Aws\Result putQueryDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putQueryDefinitionAsync(array $args = [])
 * @method \Aws\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \Aws\Result putRetentionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRetentionPolicyAsync(array $args = [])
 * @method \Aws\Result putSubscriptionFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSubscriptionFilterAsync(array $args = [])
 * @method \Aws\Result startQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startQueryAsync(array $args = [])
 * @method \Aws\Result stopQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopQueryAsync(array $args = [])
 * @method \Aws\Result tagLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagLogGroupAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result testMetricFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testMetricFilterAsync(array $args = [])
 * @method \Aws\Result untagLogGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagLogGroupAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAnomaly(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAnomalyAsync(array $args = [])
 * @method \Aws\Result updateLogAnomalyDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLogAnomalyDetectorAsync(array $args = [])
 */
class CloudWatchLogsClient extends AwsClient {}
