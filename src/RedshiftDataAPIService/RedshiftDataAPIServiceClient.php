<?php
namespace CloudBeds\Aws\MskFork\RedshiftDataAPIService;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Redshift Data API Service** service.
 * @method \CloudBeds\Aws\MskFork\Result batchExecuteStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchExecuteStatementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelStatementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStatementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeStatementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getStatementResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStatementResultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatabasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStatements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStatementsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 */
class RedshiftDataAPIServiceClient extends AwsClient {}
