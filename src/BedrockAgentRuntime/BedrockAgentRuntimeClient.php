<?php
namespace CloudBeds\Aws\MskFork\BedrockAgentRuntime;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Agents for Amazon Bedrock Runtime** service.
 * @method \CloudBeds\Aws\MskFork\Result invokeAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeAgentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result retrieve(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result retrieveAndGenerate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retrieveAndGenerateAsync(array $args = [])
 */
class BedrockAgentRuntimeClient extends AwsClient {}
