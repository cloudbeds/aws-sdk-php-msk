<?php
namespace CloudBeds\Aws\MskFork\PaymentCryptography;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Payment Cryptography Control Plane** service.
 * @method \CloudBeds\Aws\MskFork\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getParametersForExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersForExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getParametersForImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersForImportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPublicKeyCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPublicKeyCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startKeyUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startKeyUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopKeyUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopKeyUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 */
class PaymentCryptographyClient extends AwsClient {}
