<?php
namespace CloudBeds\Aws\MskFork\IotDataPlane;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Data Plane** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result deleteThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingShadowAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRetainedMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRetainedMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThingShadowAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listNamedShadowsForThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNamedShadowsForThingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRetainedMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRetainedMessagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result publish(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateThingShadow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingShadowAsync(array $args = [])
 */
class IotDataPlaneClient extends AwsClient {}
