<?php
namespace CloudBeds\Aws\MskFork\OSIS;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon OpenSearch Ingestion** service.
 * @method \CloudBeds\Aws\MskFork\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPipelineBlueprint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineBlueprintAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPipelineChangeProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineChangeProgressAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPipelineBlueprints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelineBlueprintsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result validatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validatePipelineAsync(array $args = [])
 */
class OSISClient extends AwsClient {}
