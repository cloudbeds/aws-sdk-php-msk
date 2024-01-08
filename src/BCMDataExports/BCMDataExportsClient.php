<?php
namespace CloudBeds\Aws\MskFork\BCMDataExports;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Billing and Cost Management Data Exports** service.
 * @method \CloudBeds\Aws\MskFork\Result createExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExecutionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExecutionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listExports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateExportAsync(array $args = [])
 */
class BCMDataExportsClient extends AwsClient {}
