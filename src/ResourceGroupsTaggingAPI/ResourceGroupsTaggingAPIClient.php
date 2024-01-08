<?php
namespace CloudBeds\Aws\MskFork\ResourceGroupsTaggingAPI;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Groups Tagging API** service.
 * @method \CloudBeds\Aws\MskFork\Result describeReportCreation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportCreationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getComplianceSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComplianceSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTagKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagKeysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTagValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagValuesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startReportCreation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReportCreationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourcesAsync(array $args = [])
 */
class ResourceGroupsTaggingAPIClient extends AwsClient {}
