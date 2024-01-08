<?php
namespace CloudBeds\Aws\MskFork\Account;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Account** service.
 * @method \CloudBeds\Aws\MskFork\Result deleteAlternateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlternateContactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableRegionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRegionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAlternateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAlternateContactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContactInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactInformationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRegionOptStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegionOptStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRegionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAlternateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAlternateContactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putContactInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putContactInformationAsync(array $args = [])
 */
class AccountClient extends AwsClient {}
