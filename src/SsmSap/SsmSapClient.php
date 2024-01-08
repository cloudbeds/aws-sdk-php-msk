<?php
namespace CloudBeds\Aws\MskFork\SsmSap;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Systems Manager for SAP** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteResourcePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deregisterApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComponentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourcePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatabasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOperationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putResourcePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startApplicationRefresh(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startApplicationRefreshAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplicationSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationSettingsAsync(array $args = [])
 */
class SsmSapClient extends AwsClient {}
