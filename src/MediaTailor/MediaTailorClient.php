<?php
namespace CloudBeds\Aws\MskFork\MediaTailor;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS MediaTailor** service.
 * @method \CloudBeds\Aws\MskFork\Result configureLogsForChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configureLogsForChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result configureLogsForPlaybackConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configureLogsForPlaybackConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLiveSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLiveSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPrefetchSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPrefetchScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createProgram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProgramAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSourceLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSourceLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createVodSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVodSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannelPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLiveSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLiveSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePlaybackConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePlaybackConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePrefetchSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePrefetchScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteProgram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProgramAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSourceLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSourceLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVodSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVodSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeLiveSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLiveSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeProgram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProgramAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSourceLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSourceLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeVodSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVodSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChannelPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChannelSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPlaybackConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPlaybackConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPrefetchSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPrefetchScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAlerts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAlertsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLiveSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLiveSourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPlaybackConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPlaybackConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPrefetchSchedules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrefetchSchedulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSourceLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSourceLocationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVodSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVodSourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putChannelPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putChannelPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPlaybackConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPlaybackConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLiveSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLiveSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateProgram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProgramAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSourceLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSourceLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateVodSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVodSourceAsync(array $args = [])
 */
class MediaTailorClient extends AwsClient {}
