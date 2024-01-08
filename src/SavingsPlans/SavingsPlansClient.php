<?php
namespace CloudBeds\Aws\MskFork\SavingsPlans;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Savings Plans** service.
 * @method \CloudBeds\Aws\MskFork\Result createSavingsPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSavingsPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteQueuedSavingsPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQueuedSavingsPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSavingsPlanRates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSavingsPlanRatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSavingsPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSavingsPlansAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSavingsPlansOfferingRates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSavingsPlansOfferingRatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSavingsPlansOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSavingsPlansOfferingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class SavingsPlansClient extends AwsClient {}
