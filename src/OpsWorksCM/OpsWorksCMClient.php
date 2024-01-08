<?php
namespace CloudBeds\Aws\MskFork\OpsWorksCM;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS OpsWorks for Chef Automate** service.
 * @method \CloudBeds\Aws\MskFork\Result associateNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateNodeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeNodeAssociationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNodeAssociationStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateNodeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportServerEngineAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportServerEngineAttributeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreServerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMaintenance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMaintenanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServerEngineAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerEngineAttributesAsync(array $args = [])
 */
class OpsWorksCMClient extends AwsClient {}
