<?php
namespace CloudBeds\Aws\MskFork\ChimeSDKMediaPipelines;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Chime SDK Media Pipelines** service.
 * @method \CloudBeds\Aws\MskFork\Result createMediaCapturePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMediaCapturePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMediaConcatenationPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMediaConcatenationPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMediaInsightsPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMediaInsightsPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMediaInsightsPipelineConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMediaInsightsPipelineConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMediaLiveConnectorPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMediaLiveConnectorPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMediaPipelineKinesisVideoStreamPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMediaPipelineKinesisVideoStreamPoolAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMediaStreamPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMediaStreamPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMediaCapturePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMediaCapturePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMediaInsightsPipelineConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMediaInsightsPipelineConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMediaPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMediaPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMediaPipelineKinesisVideoStreamPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMediaPipelineKinesisVideoStreamPoolAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMediaCapturePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMediaCapturePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMediaInsightsPipelineConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMediaInsightsPipelineConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMediaPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMediaPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMediaPipelineKinesisVideoStreamPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMediaPipelineKinesisVideoStreamPoolAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSpeakerSearchTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSpeakerSearchTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceToneAnalysisTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceToneAnalysisTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMediaCapturePipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMediaCapturePipelinesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMediaInsightsPipelineConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMediaInsightsPipelineConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMediaPipelineKinesisVideoStreamPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMediaPipelineKinesisVideoStreamPoolsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMediaPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMediaPipelinesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startSpeakerSearchTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSpeakerSearchTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startVoiceToneAnalysisTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startVoiceToneAnalysisTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopSpeakerSearchTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopSpeakerSearchTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopVoiceToneAnalysisTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopVoiceToneAnalysisTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateMediaInsightsPipelineConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMediaInsightsPipelineConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateMediaInsightsPipelineStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMediaInsightsPipelineStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateMediaPipelineKinesisVideoStreamPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMediaPipelineKinesisVideoStreamPoolAsync(array $args = [])
 */
class ChimeSDKMediaPipelinesClient extends AwsClient {}
