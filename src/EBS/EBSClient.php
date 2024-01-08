<?php
namespace CloudBeds\Aws\MskFork\EBS;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic Block Store** service.
 * @method \CloudBeds\Aws\MskFork\Result completeSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSnapshotBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnapshotBlockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChangedBlocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChangedBlocksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSnapshotBlocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSnapshotBlocksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putSnapshotBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSnapshotBlockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSnapshotAsync(array $args = [])
 */
class EBSClient extends AwsClient {}
