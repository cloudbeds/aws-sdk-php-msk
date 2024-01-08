<?php
namespace CloudBeds\Aws\MskFork\RecycleBin;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Recycle Bin** service.
 * @method \CloudBeds\Aws\MskFork\Result createRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result lockRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lockRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result unlockRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlockRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuleAsync(array $args = [])
 */
class RecycleBinClient extends AwsClient {}
