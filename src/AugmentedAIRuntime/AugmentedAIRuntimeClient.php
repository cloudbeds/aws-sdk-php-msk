<?php
namespace CloudBeds\Aws\MskFork\AugmentedAIRuntime;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Augmented AI Runtime** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteHumanLoop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHumanLoopAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeHumanLoop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHumanLoopAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHumanLoops(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHumanLoopsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startHumanLoop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startHumanLoopAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopHumanLoop(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopHumanLoopAsync(array $args = [])
 */
class AugmentedAIRuntimeClient extends AwsClient {}
