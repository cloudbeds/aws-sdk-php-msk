<?php
namespace CloudBeds\Aws\MskFork\CodeStarNotifications;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS CodeStar Notifications** service.
 * @method \CloudBeds\Aws\MskFork\Result createNotificationRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotificationRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteNotificationRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTargetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeNotificationRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotificationRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEventTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listNotificationRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNotificationRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result subscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise subscribeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result unsubscribe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unsubscribeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateNotificationRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotificationRuleAsync(array $args = [])
 */
class CodeStarNotificationsClient extends AwsClient {}
