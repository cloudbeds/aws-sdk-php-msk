<?php
namespace CloudBeds\Aws\MskFork\SimSpaceWeaver;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS SimSpace Weaver** service.
 * @method \CloudBeds\Aws\MskFork\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSimulation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSimulationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSimulation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSimulationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSimulations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSimulationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAppAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startClock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startClockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startSimulation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSimulationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAppAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopClock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopClockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopSimulation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopSimulationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class SimSpaceWeaverClient extends AwsClient {}
