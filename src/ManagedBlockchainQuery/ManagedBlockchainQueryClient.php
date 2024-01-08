<?php
namespace CloudBeds\Aws\MskFork\ManagedBlockchainQuery;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Managed Blockchain Query** service.
 * @method \CloudBeds\Aws\MskFork\Result batchGetTokenBalance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetTokenBalanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAssetContract(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssetContractAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTokenBalance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTokenBalanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTransaction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTransactionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssetContracts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetContractsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTokenBalances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTokenBalancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTransactionEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTransactionEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTransactions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTransactionsAsync(array $args = [])
 */
class ManagedBlockchainQueryClient extends AwsClient {}
