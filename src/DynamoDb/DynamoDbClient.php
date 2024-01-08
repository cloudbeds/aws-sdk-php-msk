<?php
namespace CloudBeds\Aws\MskFork\DynamoDb;

use CloudBeds\Aws\MskFork\Api\Parser\Crc32ValidatingParser;
use CloudBeds\Aws\MskFork\AwsClient;
use CloudBeds\Aws\MskFork\ClientResolver;
use CloudBeds\Aws\MskFork\Exception\AwsException;
use CloudBeds\Aws\MskFork\HandlerList;
use CloudBeds\Aws\MskFork\Middleware;
use CloudBeds\Aws\MskFork\RetryMiddleware;
use CloudBeds\Aws\MskFork\RetryMiddlewareV2;

/**
 * This client is used to interact with the **Amazon DynamoDB** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result batchGetItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchWriteItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchWriteItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTablesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result query(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result scan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchExecuteStatement(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise batchExecuteStatementAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result createBackup(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result createGlobalTable(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise createGlobalTableAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result deleteBackup(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeBackup(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeBackupAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeContinuousBackups(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeContinuousBackupsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeContributorInsights(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeContributorInsightsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeEndpoints(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeEndpointsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeExport(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeExportAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeGlobalTable(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeGlobalTableAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeGlobalTableSettings(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeGlobalTableSettingsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeImport(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeImportAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeKinesisStreamingDestination(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeKinesisStreamingDestinationAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeLimits(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeLimitsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeTableReplicaAutoScaling(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeTableReplicaAutoScalingAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result describeTimeToLive(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise describeTimeToLiveAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result disableKinesisStreamingDestination(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise disableKinesisStreamingDestinationAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result enableKinesisStreamingDestination(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise enableKinesisStreamingDestinationAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result executeStatement(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise executeStatementAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result executeTransaction(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise executeTransactionAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result exportTableToPointInTime(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise exportTableToPointInTimeAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result importTable(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise importTableAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result listBackups(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise listBackupsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result listContributorInsights(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise listContributorInsightsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result listExports(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise listExportsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result listGlobalTables(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise listGlobalTablesAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result listImports(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise listImportsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result listTagsOfResource(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise listTagsOfResourceAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result restoreTableFromBackup(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise restoreTableFromBackupAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result restoreTableToPointInTime(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise restoreTableToPointInTimeAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result transactGetItems(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise transactGetItemsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result transactWriteItems(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise transactWriteItemsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result updateContinuousBackups(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise updateContinuousBackupsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result updateContributorInsights(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise updateContributorInsightsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result updateGlobalTable(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise updateGlobalTableAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result updateGlobalTableSettings(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise updateGlobalTableSettingsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result updateTableReplicaAutoScaling(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise updateTableReplicaAutoScalingAsync(array $args = []) (supported in versions 2012-08-10)
 * @method \CloudBeds\Aws\MskFork\Result updateTimeToLive(array $args = []) (supported in versions 2012-08-10)
 * @method \GuzzleHttp\Promise\Promise updateTimeToLiveAsync(array $args = []) (supported in versions 2012-08-10)
 */
class DynamoDbClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        $args['retries']['default'] = 10;
        $args['retries']['fn'] = [__CLASS__, '_applyRetryConfig'];
        $args['api_provider']['fn'] = [__CLASS__, '_applyApiProvider'];

        return $args;
    }

    /**
     * Convenience method for instantiating and registering the DynamoDB
     * Session handler with this DynamoDB client object.
     *
     * @param array $config Array of options for the session handler factory
     *
     * @return SessionHandler
     */
    public function registerSessionHandler(array $config = [])
    {
        $handler = SessionHandler::fromClient($this, $config);
        $handler->register();

        return $handler;
    }

    /** @internal */
    public static function _applyRetryConfig($value, array &$args, HandlerList $list)
    {
        if ($value) {
            $config = \CloudBeds\Aws\MskFork\Retry\ConfigurationProvider::unwrap($value);

            if ($config->getMode() === 'legacy') {
                $list->appendSign(
                    Middleware::retry(
                        RetryMiddleware::createDefaultDecider(
                            $config->getMaxAttempts() - 1,
                            ['error_codes' => ['TransactionInProgressException']]
                        ),
                        function ($retries) {
                            return $retries
                                ? RetryMiddleware::exponentialDelay($retries) / 2
                                : 0;
                        },
                        isset($args['stats']['retries'])
                            ? (bool)$args['stats']['retries']
                            : false
                    ),
                    'retry'
                );
            } else {
                $list->appendSign(
                    RetryMiddlewareV2::wrap(
                        $config,
                        [
                            'collect_stats' => $args['stats']['retries'],
                            'transient_error_codes' => ['TransactionInProgressException']
                        ]
                    ),
                    'retry'
                );
            }
        }
    }

    /** @internal */
    public static function _applyApiProvider($value, array &$args, HandlerList $list)
    {
        ClientResolver::_apply_api_provider($value, $args);
        $args['parser'] = new Crc32ValidatingParser($args['parser']);
    }
}
