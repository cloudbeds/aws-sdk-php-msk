<?php
namespace CloudBeds\Aws\MskFork\MediaPackage;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaPackage** service.
 * @method \CloudBeds\Aws\MskFork\Result configureLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configureLogsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createHarvestJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHarvestJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOriginEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOriginEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeHarvestJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHarvestJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOriginEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHarvestJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHarvestJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOriginEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOriginEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rotateChannelCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateChannelCredentialsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rotateIngestEndpointCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateIngestEndpointCredentialsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOriginEndpointAsync(array $args = [])
 */
class MediaPackageClient extends AwsClient {}
