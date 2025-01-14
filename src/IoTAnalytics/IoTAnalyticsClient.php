<?php
namespace CloudBeds\Aws\MskFork\IoTAnalytics;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Analytics** service.
 * @method \CloudBeds\Aws\MskFork\Result batchPutMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelPipelineReprocessing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelPipelineReprocessingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDatasetContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetContentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDatasetContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetContentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoggingOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDatasetContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatasetContentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatasetContents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetContentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatastores(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatastoresAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLoggingOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result runPipelineActivity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise runPipelineActivityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sampleChannelData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sampleChannelDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startPipelineReprocessing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPipelineReprocessingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 */
class IoTAnalyticsClient extends AwsClient {}
