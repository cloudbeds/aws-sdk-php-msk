<?php
namespace CloudBeds\Aws\MskFork\MigrationHubConfig;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Migration Hub Config** service.
 * @method \CloudBeds\Aws\MskFork\Result createHomeRegionControl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHomeRegionControlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteHomeRegionControl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHomeRegionControlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeHomeRegionControls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHomeRegionControlsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHomeRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHomeRegionAsync(array $args = [])
 */
class MigrationHubConfigClient extends AwsClient {}
