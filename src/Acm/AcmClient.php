<?php
namespace CloudBeds\Aws\MskFork\Acm;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Certificate Manager** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result addTagsToCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAccountConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeTagsFromCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result renewCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise renewCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result requestCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resendValidationEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resendValidationEmailAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCertificateOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertificateOptionsAsync(array $args = [])
 */
class AcmClient extends AwsClient {}
