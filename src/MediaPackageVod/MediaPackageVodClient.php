<?php
namespace CloudBeds\Aws\MskFork\MediaPackageVod;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaPackage VOD** service.
 * @method \CloudBeds\Aws\MskFork\Result configureLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configureLogsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPackagingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPackagingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPackagingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPackagingGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePackagingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackagingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePackagingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackagingGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePackagingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackagingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePackagingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackagingGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPackagingConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackagingConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPackagingGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackagingGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePackagingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePackagingGroupAsync(array $args = [])
 */
class MediaPackageVodClient extends AwsClient {}
