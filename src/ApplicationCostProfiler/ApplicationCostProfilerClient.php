<?php
namespace CloudBeds\Aws\MskFork\ApplicationCostProfiler;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Application Cost Profiler** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReportDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importApplicationUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importApplicationUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReportDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReportDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putReportDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateReportDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReportDefinitionAsync(array $args = [])
 */
class ApplicationCostProfilerClient extends AwsClient {}
