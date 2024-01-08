<?php
namespace CloudBeds\Aws\MskFork\IoTSecureTunneling;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Secure Tunneling** service.
 * @method \CloudBeds\Aws\MskFork\Result closeTunnel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeTunnelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTunnel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTunnelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTunnels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTunnelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result openTunnel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openTunnelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rotateTunnelAccessToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateTunnelAccessTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class IoTSecureTunnelingClient extends AwsClient {}
