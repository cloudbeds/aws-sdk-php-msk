<?php
namespace CloudBeds\Aws\MskFork\EMRContainers;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon EMR Containers** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createJobTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createManagedEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createManagedEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createVirtualCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVirtualClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteJobTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteManagedEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteManagedEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVirtualCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVirtualClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeJobTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeManagedEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeManagedEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeVirtualCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVirtualClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getManagedEndpointSessionCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getManagedEndpointSessionCredentialsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listManagedEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listManagedEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVirtualClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVirtualClustersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class EMRContainersClient extends AwsClient {}
