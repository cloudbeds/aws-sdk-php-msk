<?php
namespace CloudBeds\Aws\MskFork\PinpointSMSVoice;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Pinpoint SMS and Voice Service** service.
 * @method \CloudBeds\Aws\MskFork\Result createConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetEventDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetEventDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConfigurationSetEventDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigurationSetEventDestinationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listConfigurationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendVoiceMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendVoiceMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationSetEventDestinationAsync(array $args = [])
 */
class PinpointSMSVoiceClient extends AwsClient {}
