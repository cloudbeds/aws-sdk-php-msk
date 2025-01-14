<?php
namespace CloudBeds\Aws\MskFork\SSMContacts;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Systems Manager Incident Manager Contacts** service.
 * @method \CloudBeds\Aws\MskFork\Result acceptPage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptPageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result activateContactChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateContactChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createContactChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContactChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRotationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRotationOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRotationOverrideAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deactivateContactChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateContactChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteContactChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContactChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRotationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRotationOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRotationOverrideAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEngagement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEngagementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContactChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContactPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRotationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRotationOverride(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRotationOverrideAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listContactChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContactChannelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listContacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContactsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEngagements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEngagementsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPageReceipts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPageReceiptsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPageResolutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPageResolutionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPagesByContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPagesByContactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPagesByEngagement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPagesByEngagementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPreviewRotationShifts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPreviewRotationShiftsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRotationOverrides(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRotationOverridesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRotationShifts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRotationShiftsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRotations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRotationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putContactPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putContactPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendActivationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendActivationCodeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startEngagement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startEngagementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopEngagement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopEngagementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateContactChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContactChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRotationAsync(array $args = [])
 */
class SSMContactsClient extends AwsClient {}
