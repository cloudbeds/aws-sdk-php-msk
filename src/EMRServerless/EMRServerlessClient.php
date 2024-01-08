<?php
namespace CloudBeds\Aws\MskFork\EMRServerless;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **EMR Serverless** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDashboardForJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDashboardForJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class EMRServerlessClient extends AwsClient {}
