<?php
namespace CloudBeds\Aws\MskFork\AppConfigData;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS AppConfig Data** service.
 * @method \CloudBeds\Aws\MskFork\Result getLatestConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLatestConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startConfigurationSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startConfigurationSessionAsync(array $args = [])
 */
class AppConfigDataClient extends AwsClient {}
