<?php
namespace CloudBeds\Aws\MskFork\DocDBElastic;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon DocumentDB Elastic Clusters** service.
 * @method \CloudBeds\Aws\MskFork\Result createCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClusterSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClusterSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClusterSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listClusterSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClusterSnapshotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreClusterFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreClusterFromSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClusterAsync(array $args = [])
 */
class DocDBElasticClient extends AwsClient {}
