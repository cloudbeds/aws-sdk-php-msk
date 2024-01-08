<?php
namespace CloudBeds\Aws\MskFork\TimestreamWrite;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Timestream Write** service.
 * @method \CloudBeds\Aws\MskFork\Result createBatchLoadTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBatchLoadTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBatchLoadTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBatchLoadTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBatchLoadTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBatchLoadTasksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatabasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resumeBatchLoadTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeBatchLoadTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result writeRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise writeRecordsAsync(array $args = [])
 */
class TimestreamWriteClient extends AwsClient {}
