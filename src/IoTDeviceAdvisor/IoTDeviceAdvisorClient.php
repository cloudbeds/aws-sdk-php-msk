<?php
namespace CloudBeds\Aws\MskFork\IoTDeviceAdvisor;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Core Device Advisor** service.
 * @method \CloudBeds\Aws\MskFork\Result createSuiteDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSuiteDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSuiteDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSuiteDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSuiteDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSuiteDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSuiteRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSuiteRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSuiteRunReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSuiteRunReportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSuiteDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSuiteDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSuiteRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSuiteRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startSuiteRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSuiteRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopSuiteRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopSuiteRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSuiteDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSuiteDefinitionAsync(array $args = [])
 */
class IoTDeviceAdvisorClient extends AwsClient {}
