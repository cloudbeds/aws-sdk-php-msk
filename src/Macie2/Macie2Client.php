<?php
namespace CloudBeds\Aws\MskFork\Macie2;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Macie 2** service.
 * @method \CloudBeds\Aws\MskFork\Result acceptInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptInvitationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetCustomDataIdentifiers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetCustomDataIdentifiersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAllowList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAllowListAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createClassificationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClassificationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCustomDataIdentifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomDataIdentifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFindingsFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFindingsFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInvitationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMemberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSampleFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSampleFindingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result declineInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise declineInvitationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAllowList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAllowListAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCustomDataIdentifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomDataIdentifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFindingsFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFindingsFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInvitationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMemberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBuckets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBucketsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeClassificationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClassificationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOrganizationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableMacie(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableMacieAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableOrganizationAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableOrganizationAdminAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateFromAdministratorAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFromAdministratorAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateFromMasterAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFromMasterAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMemberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableMacie(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableMacieAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableOrganizationAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableOrganizationAdminAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAdministratorAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAdministratorAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAllowList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAllowListAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAutomatedDiscoveryConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAutomatedDiscoveryConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getClassificationExportConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClassificationExportConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getClassificationScope(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClassificationScopeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCustomDataIdentifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCustomDataIdentifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFindingStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFindingsFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFindingsPublicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsPublicationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInvitationsCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInvitationsCountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMacieSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMacieSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMasterAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMasterAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMemberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRevealConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRevealConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSensitiveDataOccurrences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSensitiveDataOccurrencesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSensitiveDataOccurrencesAvailability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSensitiveDataOccurrencesAvailabilityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSensitivityInspectionTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSensitivityInspectionTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUsageStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsageStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUsageTotals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsageTotalsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAllowLists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAllowListsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listClassificationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClassificationJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listClassificationScopes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClassificationScopesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCustomDataIdentifiers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCustomDataIdentifiersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFindingsFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsFiltersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInvitationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listManagedDataIdentifiers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listManagedDataIdentifiersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMembersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listOrganizationAdminAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationAdminAccountsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listResourceProfileArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceProfileArtifactsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listResourceProfileDetections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceProfileDetectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSensitivityInspectionTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSensitivityInspectionTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putClassificationExportConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putClassificationExportConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putFindingsPublicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFindingsPublicationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result testCustomDataIdentifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testCustomDataIdentifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAllowList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAllowListAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAutomatedDiscoveryConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAutomatedDiscoveryConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateClassificationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClassificationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateClassificationScope(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClassificationScopeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFindingsFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFindingsFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateMacieSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMacieSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateMemberSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMemberSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateOrganizationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOrganizationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateResourceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateResourceProfileDetections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceProfileDetectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRevealConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRevealConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSensitivityInspectionTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSensitivityInspectionTemplateAsync(array $args = [])
 */
class Macie2Client extends AwsClient {}
