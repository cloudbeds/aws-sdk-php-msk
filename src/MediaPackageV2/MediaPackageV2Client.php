<?php
namespace CloudBeds\Aws\MskFork\MediaPackageV2;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaPackage v2** service.
 * @method \CloudBeds\Aws\MskFork\Result createChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createChannelGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOriginEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannelGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannelPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOriginEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteOriginEndpointPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOriginEndpointPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChannelGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChannelPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOriginEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getOriginEndpointPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOriginEndpointPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannelGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOriginEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOriginEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putChannelPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putChannelPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putOriginEndpointPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putOriginEndpointPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateChannelGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateOriginEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOriginEndpointAsync(array $args = [])
 */
class MediaPackageV2Client extends AwsClient {}
