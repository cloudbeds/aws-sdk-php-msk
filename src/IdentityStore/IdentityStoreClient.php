<?php
namespace CloudBeds\Aws\MskFork\IdentityStore;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS SSO Identity Store** service.
 * @method \CloudBeds\Aws\MskFork\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGroupMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteGroupMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeGroupMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGroupId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupIdAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGroupMembershipId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupMembershipIdAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUserId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserIdAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result isMemberInGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise isMemberInGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGroupMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupMembershipsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGroupMembershipsForMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupMembershipsForMemberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class IdentityStoreClient extends AwsClient {}
