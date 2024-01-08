<?php
namespace CloudBeds\Aws\MskFork\CognitoSync;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Sync** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result bulkPublish(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bulkPublishAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeIdentityPoolUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityPoolUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeIdentityUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBulkPublishDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBulkPublishDetailsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCognitoEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCognitoEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIdentityPoolConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityPoolConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listIdentityPoolUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityPoolUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecordsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setCognitoEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setCognitoEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setIdentityPoolConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityPoolConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result subscribeToDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise subscribeToDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result unsubscribeFromDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unsubscribeFromDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecordsAsync(array $args = [])
 */
class CognitoSyncClient extends AwsClient {}
