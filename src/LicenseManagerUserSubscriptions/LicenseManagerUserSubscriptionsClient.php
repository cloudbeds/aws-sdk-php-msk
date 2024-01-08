<?php
namespace CloudBeds\Aws\MskFork\LicenseManagerUserSubscriptions;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS License Manager User Subscriptions** service.
 * @method \CloudBeds\Aws\MskFork\Result associateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deregisterIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterIdentityProviderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listIdentityProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityProvidersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProductSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProductSubscriptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listUserAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerIdentityProviderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startProductSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startProductSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopProductSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopProductSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateIdentityProviderSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdentityProviderSettingsAsync(array $args = [])
 */
class LicenseManagerUserSubscriptionsClient extends AwsClient {}
