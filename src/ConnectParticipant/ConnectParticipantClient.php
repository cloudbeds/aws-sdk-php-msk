<?php
namespace CloudBeds\Aws\MskFork\ConnectParticipant;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Connect Participant Service** service.
 * @method \CloudBeds\Aws\MskFork\Result completeAttachmentUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeAttachmentUploadAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createParticipantConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createParticipantConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeViewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disconnectParticipant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disconnectParticipantAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAttachment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAttachmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTranscript(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscriptAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendEvent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendEventAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startAttachmentUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAttachmentUploadAsync(array $args = [])
 */
class ConnectParticipantClient extends AwsClient {}
