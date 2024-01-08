<?php
namespace CloudBeds\Aws\MskFork\LexRuntimeV2;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Lex Runtime V2** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result recognizeText(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recognizeTextAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result recognizeUtterance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recognizeUtteranceAsync(array $args = [])
 */
class LexRuntimeV2Client extends AwsClient {}
