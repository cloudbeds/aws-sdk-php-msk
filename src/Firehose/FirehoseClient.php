<?php
namespace CloudBeds\Aws\MskFork\Firehose;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Firehose** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result createDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeliveryStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeliveryStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeliveryStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeliveryStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeliveryStreamsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForDeliveryStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRecordBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordBatchAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startDeliveryStreamEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDeliveryStreamEncryptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopDeliveryStreamEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDeliveryStreamEncryptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagDeliveryStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagDeliveryStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagDeliveryStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDestinationAsync(array $args = [])
 */
class FirehoseClient extends AwsClient {}
