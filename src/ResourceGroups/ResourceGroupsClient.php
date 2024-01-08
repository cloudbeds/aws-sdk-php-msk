<?php
namespace CloudBeds\Aws\MskFork\ResourceGroups;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Groups** service.
 * @method \CloudBeds\Aws\MskFork\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGroupConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGroupQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result groupResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise groupResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGroupResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putGroupConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putGroupConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result ungroupResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise ungroupResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untag(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGroupQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupQueryAsync(array $args = [])
 */
class ResourceGroupsClient extends AwsClient {}
