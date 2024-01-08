<?php
namespace CloudBeds\Aws\MskFork\HealthLake;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon HealthLake** service.
 * @method \CloudBeds\Aws\MskFork\Result createFHIRDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFHIRDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFHIRDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFHIRDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFHIRDatastore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFHIRDatastoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFHIRExportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFHIRExportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFHIRImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFHIRImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFHIRDatastores(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFHIRDatastoresAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFHIRExportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFHIRExportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFHIRImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFHIRImportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startFHIRExportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFHIRExportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startFHIRImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFHIRImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class HealthLakeClient extends AwsClient {}
