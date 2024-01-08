<?php
namespace CloudBeds\Aws\MskFork\SageMakerGeospatial;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon SageMaker geospatial capabilities** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteEarthObservationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEarthObservationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVectorEnrichmentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVectorEnrichmentJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportEarthObservationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportEarthObservationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportVectorEnrichmentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportVectorEnrichmentJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEarthObservationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEarthObservationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRasterDataCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRasterDataCollectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVectorEnrichmentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVectorEnrichmentJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEarthObservationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEarthObservationJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRasterDataCollections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRasterDataCollectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVectorEnrichmentJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVectorEnrichmentJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchRasterDataCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchRasterDataCollectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startEarthObservationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startEarthObservationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startVectorEnrichmentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startVectorEnrichmentJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopEarthObservationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopEarthObservationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopVectorEnrichmentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopVectorEnrichmentJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class SageMakerGeospatialClient extends AwsClient {}
