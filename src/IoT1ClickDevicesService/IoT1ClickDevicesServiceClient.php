<?php
namespace CloudBeds\Aws\MskFork\IoT1ClickDevicesService;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT 1-Click Devices Service** service.
 * @method \CloudBeds\Aws\MskFork\Result claimDevicesByClaimCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise claimDevicesByClaimCodeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result finalizeDeviceClaim(array $args = [])
 * @method \GuzzleHttp\Promise\Promise finalizeDeviceClaimAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDeviceMethods(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceMethodsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result initiateDeviceClaim(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateDeviceClaimAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result invokeDeviceMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeDeviceMethodAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeviceEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result unclaimDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unclaimDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDeviceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceStateAsync(array $args = [])
 */
class IoT1ClickDevicesServiceClient extends AwsClient {}
