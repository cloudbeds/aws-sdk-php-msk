<?php
namespace CloudBeds\Aws\MskFork\CostandUsageReportService;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Cost and Usage Report Service** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReportDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReportDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putReportDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class CostandUsageReportServiceClient extends AwsClient {}
