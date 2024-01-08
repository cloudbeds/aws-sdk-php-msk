<?php
namespace CloudBeds\Aws\MskFork\CodeGuruSecurity;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon CodeGuru Security** service.
 * @method \CloudBeds\Aws\MskFork\Result batchGetFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetFindingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createScan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createUploadUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUploadUrlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMetricsSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMetricsSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getScan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getScanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFindingsMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listScans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listScansAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAccountConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountConfigurationAsync(array $args = [])
 */
class CodeGuruSecurityClient extends AwsClient {}
