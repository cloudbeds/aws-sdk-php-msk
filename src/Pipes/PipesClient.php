<?php
namespace CloudBeds\Aws\MskFork\Pipes;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon EventBridge Pipes** service.
 * @method \CloudBeds\Aws\MskFork\Result createPipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPipes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startPipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopPipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopPipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipeAsync(array $args = [])
 */
class PipesClient extends AwsClient {}
