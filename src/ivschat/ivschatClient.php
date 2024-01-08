<?php
namespace CloudBeds\Aws\MskFork\ivschat;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Interactive Video Service Chat** service.
 * @method \CloudBeds\Aws\MskFork\Result createChatToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChatTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoomAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disconnectUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disconnectUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoomAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLoggingConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLoggingConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRooms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRoomsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendEventAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoomAsync(array $args = [])
 */
class ivschatClient extends AwsClient {}
