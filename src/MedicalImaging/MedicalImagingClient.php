<?php
namespace CloudBeds\Aws\MskFork\MedicalImaging;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Health Imaging** service.
 * @method \CloudBeds\Aws\MskFork\Result copyImageSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyImageSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteImageSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDICOMImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDICOMImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getImageFrame(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImageFrameAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getImageSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImageSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getImageSetMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImageSetMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDICOMImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDICOMImportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatastores(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatastoresAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listImageSetVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImageSetVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchImageSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchImageSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startDICOMImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDICOMImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateImageSetMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateImageSetMetadataAsync(array $args = [])
 */
class MedicalImagingClient extends AwsClient {}
