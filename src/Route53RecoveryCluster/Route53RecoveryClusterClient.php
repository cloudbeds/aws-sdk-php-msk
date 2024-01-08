<?php
namespace CloudBeds\Aws\MskFork\Route53RecoveryCluster;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Route53 Recovery Cluster** service.
 * @method \CloudBeds\Aws\MskFork\Result getRoutingControlState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoutingControlStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRoutingControls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRoutingControlsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRoutingControlState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoutingControlStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRoutingControlStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoutingControlStatesAsync(array $args = [])
 */
class Route53RecoveryClusterClient extends AwsClient {}
