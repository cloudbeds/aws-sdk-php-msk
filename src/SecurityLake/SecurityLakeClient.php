<?php
namespace CloudBeds\Aws\MskFork\SecurityLake;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Security Lake** service.
 * @method \CloudBeds\Aws\MskFork\Result createAwsLogSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAwsLogSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCustomLogSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomLogSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataLake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataLakeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataLakeExceptionSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataLakeExceptionSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataLakeOrganizationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataLakeOrganizationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSubscriberNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriberNotificationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAwsLogSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAwsLogSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCustomLogSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomLogSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataLake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataLakeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataLakeExceptionSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataLakeExceptionSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataLakeOrganizationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataLakeOrganizationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSubscriberNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriberNotificationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deregisterDataLakeDelegatedAdministrator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterDataLakeDelegatedAdministratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataLakeExceptionSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataLakeExceptionSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataLakeOrganizationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataLakeOrganizationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataLakeSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataLakeSourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDataLakeExceptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataLakeExceptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDataLakes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataLakesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLogSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLogSourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSubscribers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscribersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerDataLakeDelegatedAdministrator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDataLakeDelegatedAdministratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDataLake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataLakeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDataLakeExceptionSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataLakeExceptionSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSubscriberNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriberNotificationAsync(array $args = [])
 */
class SecurityLakeClient extends AwsClient {}
