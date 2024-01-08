<?php
namespace CloudBeds\Aws\MskFork\Translate;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Translate** service.
 * @method \CloudBeds\Aws\MskFork\Result createParallelData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createParallelDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteParallelData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParallelDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTerminology(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTerminologyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTextTranslationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTextTranslationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getParallelData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParallelDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTerminology(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTerminologyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importTerminology(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importTerminologyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLanguages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLanguagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listParallelData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listParallelDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTerminologies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTerminologiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTextTranslationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTextTranslationJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startTextTranslationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTextTranslationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopTextTranslationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTextTranslationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result translateDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise translateDocumentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result translateText(array $args = [])
 * @method \GuzzleHttp\Promise\Promise translateTextAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateParallelData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateParallelDataAsync(array $args = [])
 */
class TranslateClient extends AwsClient {}
