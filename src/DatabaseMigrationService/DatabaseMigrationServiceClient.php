<?php
namespace CloudBeds\Aws\MskFork\DatabaseMigrationService;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Database Migration Service** service.
 * @method \CloudBeds\Aws\MskFork\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result applyPendingMaintenanceAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applyPendingMaintenanceActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchStartRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchStartRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelReplicationTaskAssessmentRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelReplicationTaskAssessmentRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataProviderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFleetAdvisorCollector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAdvisorCollectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createInstanceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMigrationProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMigrationProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReplicationConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReplicationSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationSubnetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataProviderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFleetAdvisorCollector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAdvisorCollectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFleetAdvisorDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAdvisorDatabasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteInstanceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMigrationProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMigrationProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReplicationConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReplicationSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationSubnetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReplicationTaskAssessmentRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationTaskAssessmentRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeApplicableIndividualAssessments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicableIndividualAssessmentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeConversionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConversionConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDataProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataProvidersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEndpointSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEndpointTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEngineVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEngineVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventCategories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventCategoriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventSubscriptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeExtensionPackAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExtensionPackAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFleetAdvisorCollectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetAdvisorCollectorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFleetAdvisorDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetAdvisorDatabasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFleetAdvisorLsaAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetAdvisorLsaAnalysisAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFleetAdvisorSchemaObjectSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetAdvisorSchemaObjectSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFleetAdvisorSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetAdvisorSchemasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeInstanceProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceProfilesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMetadataModelAssessments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetadataModelAssessmentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMetadataModelConversions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetadataModelConversionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMetadataModelExportsAsScript(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetadataModelExportsAsScriptAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMetadataModelExportsToTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetadataModelExportsToTargetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMetadataModelImports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetadataModelImportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMigrationProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMigrationProjectsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOrderableReplicationInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderableReplicationInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePendingMaintenanceActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePendingMaintenanceActionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRecommendationLimitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecommendationLimitationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRefreshSchemasStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRefreshSchemasStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationConfigsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationInstanceTaskLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationInstanceTaskLogsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationSubnetGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationTableStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationTableStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationTaskAssessmentResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationTaskAssessmentResultsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationTaskAssessmentRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationTaskAssessmentRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationTaskIndividualAssessments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationTaskIndividualAssessmentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationTasksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSchemasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTableStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTableStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportMetadataModelAssessment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportMetadataModelAssessmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyConversionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyConversionConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDataProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDataProviderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEventSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyInstanceProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyMigrationProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyMigrationProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyReplicationConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicationConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyReplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicationInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyReplicationSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicationSubnetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReplicationTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result moveReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise moveReplicationTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rebootReplicationInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootReplicationInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result refreshSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refreshSchemasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result reloadReplicationTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reloadReplicationTablesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result reloadTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reloadTablesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result runFleetAdvisorLsaAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise runFleetAdvisorLsaAnalysisAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startExtensionPackAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExtensionPackAssociationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMetadataModelAssessment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMetadataModelAssessmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMetadataModelConversion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMetadataModelConversionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMetadataModelExportAsScript(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMetadataModelExportAsScriptAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMetadataModelExportToTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMetadataModelExportToTargetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMetadataModelImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMetadataModelImportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReplicationTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startReplicationTaskAssessment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReplicationTaskAssessmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startReplicationTaskAssessmentRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReplicationTaskAssessmentRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopReplicationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopReplicationTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result testConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSubscriptionsToEventBridge(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriptionsToEventBridgeAsync(array $args = [])
 */
class DatabaseMigrationServiceClient extends AwsClient {}
