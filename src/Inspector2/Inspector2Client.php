<?php
namespace CloudBeds\Aws\MskFork\Inspector2;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Inspector2** service.
 * @method \CloudBeds\Aws\MskFork\Result associateMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateMemberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetAccountStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetAccountStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetCodeSnippet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetCodeSnippetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetFindingDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetFindingDetailsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetFreeTrialInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetFreeTrialInfoAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetMemberEc2DeepInspectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetMemberEc2DeepInspectionStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchUpdateMemberEc2DeepInspectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateMemberEc2DeepInspectionStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelFindingsReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelFindingsReportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelSbomExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSbomExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFindingsReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFindingsReportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSbomExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSbomExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOrganizationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableDelegatedAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableDelegatedAdminAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMemberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableDelegatedAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableDelegatedAdminAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDelegatedAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDelegatedAdminAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEc2DeepInspectionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEc2DeepInspectionConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEncryptionKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEncryptionKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFindingsReportStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsReportStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMemberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSbomExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSbomExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccountPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountPermissionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCoverage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoverageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCoverageStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoverageStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDelegatedAdminAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDelegatedAdminAccountsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFiltersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFindingAggregations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingAggregationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMembersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listUsageTotals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsageTotalsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resetEncryptionKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetEncryptionKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchVulnerabilities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchVulnerabilitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEc2DeepInspectionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEc2DeepInspectionConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEncryptionKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEncryptionKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateOrgEc2DeepInspectionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOrgEc2DeepInspectionConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateOrganizationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOrganizationConfigurationAsync(array $args = [])
 */
class Inspector2Client extends AwsClient {}
