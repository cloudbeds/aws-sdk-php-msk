<?php
namespace CloudBeds\Aws\MskFork\MarketplaceMetering;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWSMarketplace Metering** service.
 * @method \CloudBeds\Aws\MskFork\Result batchMeterUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchMeterUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result meterUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise meterUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resolveCustomer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveCustomerAsync(array $args = [])
 */
class MarketplaceMeteringClient extends AwsClient {}
