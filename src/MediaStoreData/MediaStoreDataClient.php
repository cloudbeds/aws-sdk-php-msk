<?php
namespace CloudBeds\Aws\MskFork\MediaStoreData;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Elemental MediaStore Data Plane** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listItemsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectAsync(array $args = [])
 */
class MediaStoreDataClient extends AwsClient {}
