<?php
namespace CloudBeds\Aws\MskFork\Honeycode;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Honeycode** service.
 * @method \CloudBeds\Aws\MskFork\Result batchCreateTableRows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateTableRowsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDeleteTableRows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteTableRowsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchUpdateTableRows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateTableRowsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchUpsertTableRows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpsertTableRowsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTableDataImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableDataImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getScreenData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getScreenDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result invokeScreenAutomation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeScreenAutomationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTableColumns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTableColumnsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTableRows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTableRowsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result queryTableRows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryTableRowsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startTableDataImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTableDataImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class HoneycodeClient extends AwsClient {}
