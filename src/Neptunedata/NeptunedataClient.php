<?php
namespace CloudBeds\Aws\MskFork\Neptunedata;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon NeptuneData** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelGremlinQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelGremlinQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelLoaderJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelLoaderJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelMLDataProcessingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelMLDataProcessingJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelMLModelTrainingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelMLModelTrainingJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelMLModelTransformJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelMLModelTransformJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelOpenCypherQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelOpenCypherQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMLEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMLEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMLEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMLEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePropertygraphStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePropertygraphStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSparqlStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSparqlStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeFastReset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeFastResetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeGremlinExplainQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeGremlinExplainQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeGremlinProfileQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeGremlinProfileQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeGremlinQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeGremlinQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeOpenCypherExplainQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeOpenCypherExplainQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeOpenCypherQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeOpenCypherQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEngineStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEngineStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGremlinQueryStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGremlinQueryStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoaderJobStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoaderJobStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMLDataProcessingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMLDataProcessingJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMLEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMLEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMLModelTrainingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMLModelTrainingJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMLModelTransformJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMLModelTransformJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getOpenCypherQueryStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpenCypherQueryStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPropertygraphStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPropertygraphStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPropertygraphStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPropertygraphStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPropertygraphSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPropertygraphSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRDFGraphSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRDFGraphSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSparqlStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSparqlStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSparqlStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSparqlStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGremlinQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGremlinQueriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLoaderJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLoaderJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMLDataProcessingJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMLDataProcessingJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMLEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMLEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMLModelTrainingJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMLModelTrainingJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMLModelTransformJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMLModelTransformJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOpenCypherQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOpenCypherQueriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result managePropertygraphStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise managePropertygraphStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result manageSparqlStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise manageSparqlStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startLoaderJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLoaderJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMLDataProcessingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMLDataProcessingJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMLModelTrainingJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMLModelTrainingJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMLModelTransformJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMLModelTransformJobAsync(array $args = [])
 */
class NeptunedataClient extends AwsClient {}
