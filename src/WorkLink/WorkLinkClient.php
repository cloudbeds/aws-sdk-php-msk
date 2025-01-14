<?php
namespace CloudBeds\Aws\MskFork\WorkLink;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkLink** service.
 * @method \CloudBeds\Aws\MskFork\Result associateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateWebsiteAuthorizationProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWebsiteAuthorizationProviderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateWebsiteCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWebsiteCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAuditStreamConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuditStreamConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCompanyNetworkConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCompanyNetworkConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDevicePolicyConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDevicePolicyConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFleetMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeIdentityProviderConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityProviderConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWebsiteCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebsiteCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateWebsiteAuthorizationProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWebsiteAuthorizationProviderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateWebsiteCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWebsiteCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFleetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWebsiteAuthorizationProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWebsiteAuthorizationProvidersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWebsiteCertificateAuthorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWebsiteCertificateAuthoritiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreDomainAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDomainAccessAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result revokeDomainAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeDomainAccessAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result signOutUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signOutUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAuditStreamConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAuditStreamConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCompanyNetworkConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCompanyNetworkConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDevicePolicyConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDevicePolicyConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDomainMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFleetMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateIdentityProviderConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdentityProviderConfigurationAsync(array $args = [])
 */
class WorkLinkClient extends AwsClient {}
