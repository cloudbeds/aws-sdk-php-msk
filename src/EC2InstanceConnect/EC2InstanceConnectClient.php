<?php
namespace CloudBeds\Aws\MskFork\EC2InstanceConnect;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS EC2 Instance Connect** service.
 * @method \Aws\Result sendSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendSSHPublicKeyAsync(array $args = [])
 * @method \Aws\Result sendSerialConsoleSSHPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendSerialConsoleSSHPublicKeyAsync(array $args = [])
 */
class EC2InstanceConnectClient extends AwsClient {}
