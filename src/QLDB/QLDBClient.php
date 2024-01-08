<?php
namespace CloudBeds\Aws\MskFork\QLDB;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon QLDB** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelJournalKinesisStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJournalKinesisStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLedger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLedgerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLedger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLedgerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeJournalKinesisStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJournalKinesisStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeJournalS3Export(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJournalS3ExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeLedger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLedgerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportJournalToS3(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportJournalToS3Async(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDigest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDigestAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRevisionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJournalKinesisStreamsForLedger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJournalKinesisStreamsForLedgerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJournalS3Exports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJournalS3ExportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJournalS3ExportsForLedger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJournalS3ExportsForLedgerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLedgers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLedgersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result streamJournalToKinesis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise streamJournalToKinesisAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLedger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLedgerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLedgerPermissionsMode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLedgerPermissionsModeAsync(array $args = [])
 */
class QLDBClient extends AwsClient {}
