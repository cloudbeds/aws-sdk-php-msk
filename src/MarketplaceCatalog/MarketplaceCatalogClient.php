<?php
namespace CloudBeds\Aws\MskFork\MarketplaceCatalog;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Marketplace Catalog Service** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelChangeSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChangeSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEntity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEntityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChangeSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChangeSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEntitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startChangeSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class MarketplaceCatalogClient extends AwsClient {}
