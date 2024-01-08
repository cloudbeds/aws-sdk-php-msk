<?php
namespace CloudBeds\Aws\MskFork\Health;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Health APIs and Notifications** service.
 * @method \CloudBeds\Aws\MskFork\Result describeAffectedAccountsForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAffectedAccountsForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAffectedEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAffectedEntitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAffectedEntitiesForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAffectedEntitiesForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEntityAggregates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEntityAggregatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEntityAggregatesForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEntityAggregatesForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventAggregates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventAggregatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventDetailsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventDetailsForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventDetailsForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventsForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeHealthServiceStatusForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHealthServiceStatusForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableHealthServiceAccessForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableHealthServiceAccessForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableHealthServiceAccessForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableHealthServiceAccessForOrganizationAsync(array $args = [])
 */
class HealthClient extends AwsClient {}
