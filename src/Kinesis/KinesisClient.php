<?php
namespace CloudBeds\Aws\MskFork\Kinesis;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result addTagsToStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result decreaseStreamRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decreaseStreamRetentionPeriodAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deregisterStreamConsumer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterStreamConsumerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLimitsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStreamConsumer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamConsumerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStreamSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableEnhancedMonitoring(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableEnhancedMonitoringAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableEnhancedMonitoring(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableEnhancedMonitoringAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecordsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getShardIterator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShardIteratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result increaseStreamRetentionPeriod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise increaseStreamRetentionPeriodAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listShards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listShardsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStreamConsumers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamConsumersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result mergeShards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeShardsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerStreamConsumer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerStreamConsumerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeTagsFromStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result splitShard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise splitShardAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startStreamEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startStreamEncryptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopStreamEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopStreamEncryptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateShardCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateShardCountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateStreamMode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStreamModeAsync(array $args = [])
 */
class KinesisClient extends AwsClient {}
