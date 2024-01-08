<?php
namespace CloudBeds\Aws\MskFork\PaymentCryptographyData;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Payment Cryptography Data Plane** service.
 * @method \CloudBeds\Aws\MskFork\Result decryptData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decryptDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result encryptData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise encryptDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result generateCardValidationData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateCardValidationDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result generateMac(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateMacAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result generatePinData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generatePinDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result reEncryptData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reEncryptDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result translatePinData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise translatePinDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result verifyAuthRequestCryptogram(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyAuthRequestCryptogramAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result verifyCardValidationData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyCardValidationDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result verifyMac(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyMacAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result verifyPinData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyPinDataAsync(array $args = [])
 */
class PaymentCryptographyDataClient extends AwsClient {}
