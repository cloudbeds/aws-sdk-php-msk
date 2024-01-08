<?php
namespace CloudBeds\Aws\MskFork\Pricing;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Price List Service** service.
 * @method \CloudBeds\Aws\MskFork\Result describeServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAttributeValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAttributeValuesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPriceListFileUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPriceListFileUrlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProductsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPriceLists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPriceListsAsync(array $args = [])
 */
class PricingClient extends AwsClient {}
