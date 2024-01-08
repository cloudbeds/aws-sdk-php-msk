<?php
namespace CloudBeds\Aws\MskFork\Keyspaces;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Keyspaces** service.
 * @method \CloudBeds\Aws\MskFork\Result createKeyspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyspaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteKeyspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeyspaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getKeyspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyspaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listKeyspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeyspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTableAsync(array $args = [])
 */
class KeyspacesClient extends AwsClient {}
