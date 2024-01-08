<?php
namespace CloudBeds\Aws\MskFork\EC2InstanceConnect;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS EC2 Instance Connect** service.
 * @method \CloudBeds\Aws\MskFork\Result sendSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendSSHPublicKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendSerialConsoleSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendSerialConsoleSSHPublicKeyAsync(array $args = [])
 */
class EC2InstanceConnectClient extends AwsClient {}
