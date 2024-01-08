<?php
namespace CloudBeds\Aws\MskFork\ChimeSDKMeetings;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Chime SDK Meetings** service.
 * @method \CloudBeds\Aws\MskFork\Result batchCreateAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchUpdateAttendeeCapabilitiesExcept(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateAttendeeCapabilitiesExceptAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMeetingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMeetingWithAttendees(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMeetingWithAttendeesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMeetingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMeetingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAttendees(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttendeesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMeetingTranscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMeetingTranscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopMeetingTranscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopMeetingTranscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAttendeeCapabilities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAttendeeCapabilitiesAsync(array $args = [])
 */
class ChimeSDKMeetingsClient extends AwsClient {}
