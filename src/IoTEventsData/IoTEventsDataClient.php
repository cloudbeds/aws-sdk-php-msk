<?php
namespace CloudBeds\Aws\MskFork\IoTEventsData;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Events Data** service.
 * @method \CloudBeds\Aws\MskFork\Result batchAcknowledgeAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchAcknowledgeAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDeleteDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDisableAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisableAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchEnableAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchEnableAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchPutMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchResetAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchResetAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchSnoozeAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSnoozeAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchUpdateDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDetector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDetectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAlarmsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDetectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDetectorsAsync(array $args = [])
 */
class IoTEventsDataClient extends AwsClient {}
