<?php
namespace CloudBeds\Aws\MskFork\RDSDataService;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS RDS DataService** service.
 * @method \CloudBeds\Aws\MskFork\Result batchExecuteStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchExecuteStatementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result beginTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise beginTransactionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result commitTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise commitTransactionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeSql(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeSqlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeStatementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rollbackTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rollbackTransactionAsync(array $args = [])
 */
class RDSDataServiceClient extends AwsClient {}
