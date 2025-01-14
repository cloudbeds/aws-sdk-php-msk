<?php
namespace CloudBeds\Aws\MskFork\ACMPCA;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Certificate Manager Private Certificate Authority** service.
 * @method \CloudBeds\Aws\MskFork\Result createCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCertificateAuthorityAuditReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateAuthorityAuditReportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCertificateAuthorityAuditReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAuthorityAuditReportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCertificateAuthorityCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAuthorityCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCertificateAuthorityCsr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificateAuthorityCsrAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importCertificateAuthorityCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importCertificateAuthorityCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result issueCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise issueCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCertificateAuthorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificateAuthoritiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPermissionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result revokeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertificateAuthorityAsync(array $args = [])
 */
class ACMPCAClient extends AwsClient {}
