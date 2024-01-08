<?php
namespace CloudBeds\Aws\MskFork\CloudFrontKeyValueStore;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudFront KeyValueStore** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeKeyValueStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyValueStoreAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKeysAsync(array $args = [])
 */
class CloudFrontKeyValueStoreClient extends AwsClient {}
