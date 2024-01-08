<?php
namespace CloudBeds\Aws\MskFork\BackupStorage;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Backup Storage** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChunk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChunkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObjectMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChunks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChunksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result notifyObjectComplete(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyObjectCompleteAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putChunk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putChunkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startObjectAsync(array $args = [])
 */
class BackupStorageClient extends AwsClient {}
