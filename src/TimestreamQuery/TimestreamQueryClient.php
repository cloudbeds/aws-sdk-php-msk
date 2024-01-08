<?php
namespace CloudBeds\Aws\MskFork\TimestreamQuery;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Timestream Query** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createScheduledQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScheduledQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteScheduledQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScheduledQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeScheduledQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScheduledQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeScheduledQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeScheduledQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listScheduledQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listScheduledQueriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result prepareQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise prepareQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result query(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateScheduledQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScheduledQueryAsync(array $args = [])
 */
class TimestreamQueryClient extends AwsClient {}
