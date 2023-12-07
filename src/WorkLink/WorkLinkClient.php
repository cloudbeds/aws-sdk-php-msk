<?php
namespace CloudBeds\Aws\MskFork\WorkLink;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkLink** service.
 * @method \Aws\Result associateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDomainAsync(array $args = [])
 * @method \Aws\Result associateWebsiteAuthorizationProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWebsiteAuthorizationProviderAsync(array $args = [])
 * @method \Aws\Result associateWebsiteCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWebsiteCertificateAuthorityAsync(array $args = [])
 * @method \Aws\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \Aws\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \Aws\Result describeAuditStreamConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuditStreamConfigurationAsync(array $args = [])
 * @method \Aws\Result describeCompanyNetworkConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCompanyNetworkConfigurationAsync(array $args = [])
 * @method \Aws\Result describeDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeviceAsync(array $args = [])
 * @method \Aws\Result describeDevicePolicyConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDevicePolicyConfigurationAsync(array $args = [])
 * @method \Aws\Result describeDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainAsync(array $args = [])
 * @method \Aws\Result describeFleetMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetMetadataAsync(array $args = [])
 * @method \Aws\Result describeIdentityProviderConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdentityProviderConfigurationAsync(array $args = [])
 * @method \Aws\Result describeWebsiteCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebsiteCertificateAuthorityAsync(array $args = [])
 * @method \Aws\Result disassociateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDomainAsync(array $args = [])
 * @method \Aws\Result disassociateWebsiteAuthorizationProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWebsiteAuthorizationProviderAsync(array $args = [])
 * @method \Aws\Result disassociateWebsiteCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWebsiteCertificateAuthorityAsync(array $args = [])
 * @method \Aws\Result listDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \Aws\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Aws\Result listFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFleetsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listWebsiteAuthorizationProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWebsiteAuthorizationProvidersAsync(array $args = [])
 * @method \Aws\Result listWebsiteCertificateAuthorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWebsiteCertificateAuthoritiesAsync(array $args = [])
 * @method \Aws\Result restoreDomainAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDomainAccessAsync(array $args = [])
 * @method \Aws\Result revokeDomainAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeDomainAccessAsync(array $args = [])
 * @method \Aws\Result signOutUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signOutUserAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAuditStreamConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAuditStreamConfigurationAsync(array $args = [])
 * @method \Aws\Result updateCompanyNetworkConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCompanyNetworkConfigurationAsync(array $args = [])
 * @method \Aws\Result updateDevicePolicyConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDevicePolicyConfigurationAsync(array $args = [])
 * @method \Aws\Result updateDomainMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainMetadataAsync(array $args = [])
 * @method \Aws\Result updateFleetMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetMetadataAsync(array $args = [])
 * @method \Aws\Result updateIdentityProviderConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdentityProviderConfigurationAsync(array $args = [])
 */
class WorkLinkClient extends AwsClient {}
