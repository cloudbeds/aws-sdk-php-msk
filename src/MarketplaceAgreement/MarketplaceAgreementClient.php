<?php
namespace CloudBeds\Aws\MskFork\MarketplaceAgreement;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Marketplace Agreement Service** service.
 * @method \CloudBeds\Aws\MskFork\Result describeAgreement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgreementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAgreementTerms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAgreementTermsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchAgreements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAgreementsAsync(array $args = [])
 */
class MarketplaceAgreementClient extends AwsClient {}
