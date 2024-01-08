<?php
namespace CloudBeds\Aws\MskFork\DataPipeline;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Data Pipeline** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result activatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activatePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deactivatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivatePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeObjectsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePipelinesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result evaluateExpression(array $args = [])
 * @method \GuzzleHttp\Promise\Promise evaluateExpressionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPipelineDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result pollForTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPipelineDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPipelineDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result queryObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryObjectsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result reportTaskProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reportTaskProgressAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result reportTaskRunnerHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reportTaskRunnerHeartbeatAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setTaskStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTaskStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result validatePipelineDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validatePipelineDefinitionAsync(array $args = [])
 */
class DataPipelineClient extends AwsClient {}
