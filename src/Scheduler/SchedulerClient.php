<?php
namespace CloudBeds\Aws\MskFork\Scheduler;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon EventBridge Scheduler** service.
 * @method \CloudBeds\Aws\MskFork\Result createSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createScheduleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScheduleGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteScheduleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScheduleGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getScheduleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getScheduleGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listScheduleGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listScheduleGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSchedules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchedulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScheduleAsync(array $args = [])
 */
class SchedulerClient extends AwsClient {}
