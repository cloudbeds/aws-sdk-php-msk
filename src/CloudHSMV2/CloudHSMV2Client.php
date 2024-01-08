<?php
namespace CloudBeds\Aws\MskFork\CloudHSMV2;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS CloudHSM V2** service.
 * @method \CloudBeds\Aws\MskFork\Result copyBackupToRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyBackupToRegionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHsmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHsmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result initializeCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initializeClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyBackupAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBackupAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreBackupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class CloudHSMV2Client extends AwsClient {}
