<?php
namespace CloudBeds\Aws\MskFork\ElasticTranscoder;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic Transcoder** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPresetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePresetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobsByPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsByPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobsByStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsByStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPresets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPresetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result readJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result readPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result readPreset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise readPresetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result testRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testRoleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePipelineNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineNotificationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePipelineStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineStatusAsync(array $args = [])
 */
class ElasticTranscoderClient extends AwsClient {}
