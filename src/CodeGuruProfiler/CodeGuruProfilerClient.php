<?php
namespace CloudBeds\Aws\MskFork\CodeGuruProfiler;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon CodeGuru Profiler** service.
 * @method \CloudBeds\Aws\MskFork\Result addNotificationChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addNotificationChannelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetFrameMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetFrameMetricDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result configureAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configureAgentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createProfilingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProfilingGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteProfilingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProfilingGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeProfilingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProfilingGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFindingsReportAccountSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsReportAccountSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNotificationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFindingsReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsReportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProfileTimes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProfileTimesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProfilingGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProfilingGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result postAgentProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise postAgentProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeNotificationChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeNotificationChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result submitFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitFeedbackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateProfilingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProfilingGroupAsync(array $args = [])
 */
class CodeGuruProfilerClient extends AwsClient {}
