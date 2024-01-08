<?php
namespace CloudBeds\Aws\MskFork\Backup;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Backup** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelLegalHoldAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupSelectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupVaultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFramework(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFrameworkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLegalHoldAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLogicallyAirGappedBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLogicallyAirGappedBackupVaultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReportPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReportPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRestoreTestingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRestoreTestingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRestoreTestingSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRestoreTestingSelectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupSelectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultAccessPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBackupVaultLockConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultLockConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupVaultNotificationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFramework(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFrameworkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecoveryPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReportPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRestoreTestingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRestoreTestingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRestoreTestingSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRestoreTestingSelectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupVaultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCopyJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCopyJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFramework(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFrameworkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeGlobalSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGlobalSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeProtectedResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectedResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecoveryPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRegionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegionSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReportPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReportPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRestoreJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRestoreJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateRecoveryPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRecoveryPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateRecoveryPointFromParent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRecoveryPointFromParentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportBackupPlanTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportBackupPlanTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBackupPlanFromJSON(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanFromJSONAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBackupPlanFromTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupPlanFromTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBackupSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupSelectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupVaultAccessPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackupVaultNotificationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLegalHoldAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecoveryPointRestoreMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecoveryPointRestoreMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRestoreJobMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestoreJobMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRestoreTestingInferredMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestoreTestingInferredMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRestoreTestingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestoreTestingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRestoreTestingSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRestoreTestingSelectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSupportedResourceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSupportedResourceTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBackupJobSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupJobSummariesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBackupJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBackupPlanTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlanTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBackupPlanVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlanVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBackupPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupPlansAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBackupSelections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupSelectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBackupVaults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackupVaultsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCopyJobSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCopyJobSummariesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCopyJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCopyJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFrameworks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFrameworksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLegalHolds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLegalHoldsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProtectedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectedResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProtectedResourcesByBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectedResourcesByBackupVaultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecoveryPointsByBackupVault(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByBackupVaultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecoveryPointsByLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByLegalHoldAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecoveryPointsByResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecoveryPointsByResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReportPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReportPlansAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRestoreJobSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreJobSummariesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRestoreJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRestoreJobsByProtectedResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreJobsByProtectedResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRestoreTestingPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreTestingPlansAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRestoreTestingSelections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRestoreTestingSelectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBackupVaultAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultAccessPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBackupVaultLockConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultLockConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBackupVaultNotifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBackupVaultNotificationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRestoreValidationResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRestoreValidationResultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBackupJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startCopyJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startCopyJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startReportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startRestoreJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRestoreJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopBackupJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBackupJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateBackupPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBackupPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFramework(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFrameworkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGlobalSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGlobalSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRecoveryPointLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecoveryPointLifecycleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRegionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRegionSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateReportPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReportPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRestoreTestingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRestoreTestingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRestoreTestingSelection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRestoreTestingSelectionAsync(array $args = [])
 */
class BackupClient extends AwsClient {}
