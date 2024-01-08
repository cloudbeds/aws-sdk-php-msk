<?php
namespace CloudBeds\Aws\MskFork\ControlTower;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Control Tower** service.
 * @method \CloudBeds\Aws\MskFork\Result createLandingZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLandingZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLandingZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLandingZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableControl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableControlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableControl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableControlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getControlOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getControlOperationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEnabledControl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnabledControlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLandingZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLandingZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLandingZoneOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLandingZoneOperationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnabledControls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnabledControlsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLandingZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLandingZonesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resetLandingZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetLandingZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnabledControl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnabledControlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLandingZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLandingZoneAsync(array $args = [])
 */
class ControlTowerClient extends AwsClient {}
