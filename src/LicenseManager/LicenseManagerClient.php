<?php
namespace CloudBeds\Aws\MskFork\LicenseManager;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS License Manager** service.
 * @method \CloudBeds\Aws\MskFork\Result acceptGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptGrantAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result checkInLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkInLicenseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result checkoutBorrowLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkoutBorrowLicenseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result checkoutLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkoutLicenseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGrantAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGrantVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGrantVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLicenseConversionTaskForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseConversionTaskForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLicenseManagerReportGenerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseManagerReportGeneratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLicenseVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGrantAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLicenseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLicenseConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLicenseManagerReportGenerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLicenseManagerReportGeneratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result extendLicenseConsumption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise extendLicenseConsumptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGrantAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLicenseConversionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseConversionTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLicenseManagerReportGenerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseManagerReportGeneratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLicenseUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseUsageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssociationsForLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationsForLicenseConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDistributedGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDistributedGrantsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFailuresForLicenseConfigurationOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFailuresForLicenseConfigurationOperationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLicenseConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLicenseConversionTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseConversionTasksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLicenseManagerReportGenerators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseManagerReportGeneratorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLicenseSpecificationsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseSpecificationsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLicenseVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLicenses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicensesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReceivedGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceivedGrantsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReceivedGrantsForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceivedGrantsForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReceivedLicenses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceivedLicensesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReceivedLicensesForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceivedLicensesForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listResourceInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceInventoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTokens(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTokensAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listUsageForLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsageForLicenseConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rejectGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectGrantAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLicenseConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLicenseManagerReportGenerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLicenseManagerReportGeneratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLicenseSpecificationsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLicenseSpecificationsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServiceSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceSettingsAsync(array $args = [])
 */
class LicenseManagerClient extends AwsClient {}
