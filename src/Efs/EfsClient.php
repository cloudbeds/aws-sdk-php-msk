<?php
namespace CloudBeds\Aws\MskFork\Efs;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with **Amazon EFS**.
 *
 * @method \CloudBeds\Aws\MskFork\Result createAccessPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFileSystemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMountTargetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileSystemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFileSystemPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFileSystemPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMountTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMountTargetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccessPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccessPointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccountPreferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountPreferencesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBackupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFileSystemPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFileSystemPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFileSystems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFileSystemsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLifecycleConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetSecurityGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMountTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMountTargetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyMountTargetSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMountTargetSecurityGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAccountPreferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountPreferencesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBackupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putFileSystemPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFileSystemPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLifecycleConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFileSystem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFileSystemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFileSystemProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFileSystemProtectionAsync(array $args = [])
 */
class EfsClient extends AwsClient {}
