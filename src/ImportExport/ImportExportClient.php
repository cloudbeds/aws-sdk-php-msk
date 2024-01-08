<?php
namespace CloudBeds\Aws\MskFork\ImportExport;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Import/Export** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getShippingLabel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getShippingLabelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 */
class ImportExportClient extends AwsClient {}
