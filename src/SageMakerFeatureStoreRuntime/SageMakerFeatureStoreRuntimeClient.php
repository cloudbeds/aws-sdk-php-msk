<?php
namespace CloudBeds\Aws\MskFork\SageMakerFeatureStoreRuntime;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon SageMaker Feature Store Runtime** service.
 * @method \CloudBeds\Aws\MskFork\Result batchGetRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetRecordAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecordAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecordAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecordAsync(array $args = [])
 */
class SageMakerFeatureStoreRuntimeClient extends AwsClient {}
