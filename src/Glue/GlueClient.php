<?php
namespace CloudBeds\Aws\MskFork\Glue;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Glue** service.
 * @method \CloudBeds\Aws\MskFork\Result batchCreatePartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreatePartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDeleteConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDeletePartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeletePartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDeleteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDeleteTableVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteTableVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetBlueprints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetBlueprintsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetCrawlers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetCrawlersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetCustomEntityTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetCustomEntityTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetDataQualityResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetDataQualityResultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetDevEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetDevEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetPartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetPartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetTableOptimizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetTableOptimizerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetTriggersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetWorkflows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetWorkflowsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchStopJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchStopJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchUpdatePartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdatePartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelDataQualityRuleRecommendationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelDataQualityRuleRecommendationRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelDataQualityRulesetEvaluationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelDataQualityRulesetEvaluationRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelMLTaskRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelMLTaskRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelStatementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result checkSchemaVersionValidity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkSchemaVersionValidityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBlueprint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBlueprintAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createClassifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClassifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCrawler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCrawlerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCustomEntityType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomEntityTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataQualityRuleset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataQualityRulesetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDevEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDevEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMLTransform(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMLTransformAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPartitionIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPartitionIndexAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRegistryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createScript(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScriptAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSecurityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecurityConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTableOptimizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTableOptimizerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTriggerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createUserDefinedFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserDefinedFunctionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkflowAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBlueprint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBlueprintAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteClassifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClassifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteColumnStatisticsForPartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteColumnStatisticsForPartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteColumnStatisticsForTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteColumnStatisticsForTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCrawler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCrawlerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCustomEntityType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomEntityTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataQualityRuleset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataQualityRulesetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDevEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDevEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMLTransform(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMLTransformAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePartitionIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePartitionIndexAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSchemaVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSchemaVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSecurityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecurityConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTableOptimizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTableOptimizerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTableVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTableVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTriggerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteUserDefinedFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserDefinedFunctionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkflowAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBlueprint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlueprintAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBlueprintRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlueprintRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBlueprintRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlueprintRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCatalogImportStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCatalogImportStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getClassifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClassifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getClassifiers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClassifiersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getColumnStatisticsForPartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getColumnStatisticsForPartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getColumnStatisticsForTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getColumnStatisticsForTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getColumnStatisticsTaskRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getColumnStatisticsTaskRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getColumnStatisticsTaskRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getColumnStatisticsTaskRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCrawler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCrawlerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCrawlerMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCrawlerMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCrawlers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCrawlersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCustomEntityType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCustomEntityTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataCatalogEncryptionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataCatalogEncryptionSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataQualityResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataQualityResultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataQualityRuleRecommendationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataQualityRuleRecommendationRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataQualityRuleset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataQualityRulesetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataQualityRulesetEvaluationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataQualityRulesetEvaluationRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatabasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataflowGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataflowGraphAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDevEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDevEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJobBookmark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobBookmarkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJobRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMLTaskRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMLTaskRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMLTaskRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMLTaskRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMLTransform(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMLTransformAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMLTransforms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMLTransformsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMappingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPartitionIndexes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPartitionIndexesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPartitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPartitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegistryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourcePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePoliciesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSchemaByDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaByDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSchemaVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSchemaVersionsDiff(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaVersionsDiffAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSecurityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSecurityConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSecurityConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSecurityConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStatementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTableOptimizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableOptimizerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTableVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTableVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTableVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTablesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTriggerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTriggersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUnfilteredPartitionMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUnfilteredPartitionMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUnfilteredPartitionsMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUnfilteredPartitionsMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUnfilteredTableMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUnfilteredTableMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUserDefinedFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserDefinedFunctionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUserDefinedFunctions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserDefinedFunctionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkflowAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getWorkflowRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkflowRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getWorkflowRunProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkflowRunPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getWorkflowRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkflowRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importCatalogToGlue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importCatalogToGlueAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBlueprints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBlueprintsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listColumnStatisticsTaskRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listColumnStatisticsTaskRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCrawlers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCrawlersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCrawls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCrawlsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCustomEntityTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCustomEntityTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDataQualityResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataQualityResultsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDataQualityRuleRecommendationRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataQualityRuleRecommendationRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDataQualityRulesetEvaluationRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataQualityRulesetEvaluationRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDataQualityRulesets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataQualityRulesetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDevEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMLTransforms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMLTransformsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRegistries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRegistriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSchemaVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemaVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSessionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStatements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStatementsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTableOptimizerRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTableOptimizerRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTriggers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTriggersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWorkflows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkflowsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putDataCatalogEncryptionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDataCatalogEncryptionSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putSchemaVersionMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSchemaVersionMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putWorkflowRunProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putWorkflowRunPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result querySchemaVersionMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querySchemaVersionMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerSchemaVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerSchemaVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeSchemaVersionMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeSchemaVersionMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resetJobBookmark(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetJobBookmarkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resumeWorkflowRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeWorkflowRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result runStatement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise runStatementAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchTablesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startBlueprintRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBlueprintRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startColumnStatisticsTaskRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startColumnStatisticsTaskRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startCrawler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startCrawlerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startCrawlerSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startCrawlerScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startDataQualityRuleRecommendationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataQualityRuleRecommendationRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startDataQualityRulesetEvaluationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDataQualityRulesetEvaluationRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startExportLabelsTaskRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExportLabelsTaskRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startImportLabelsTaskRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImportLabelsTaskRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMLEvaluationTaskRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMLEvaluationTaskRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMLLabelingSetGenerationTaskRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMLLabelingSetGenerationTaskRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTriggerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startWorkflowRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startWorkflowRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopColumnStatisticsTaskRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopColumnStatisticsTaskRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopCrawler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopCrawlerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopCrawlerSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopCrawlerScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTriggerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopWorkflowRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopWorkflowRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateBlueprint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBlueprintAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateClassifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClassifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateColumnStatisticsForPartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateColumnStatisticsForPartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateColumnStatisticsForTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateColumnStatisticsForTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCrawler(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCrawlerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCrawlerSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCrawlerScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDataQualityRuleset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataQualityRulesetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDevEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDevEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateJobFromSourceControl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobFromSourceControlAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateMLTransform(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMLTransformAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePartition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePartitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRegistryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSourceControlFromJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSourceControlFromJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTableAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTableOptimizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTableOptimizerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTrigger(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTriggerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateUserDefinedFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserDefinedFunctionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkflowAsync(array $args = [])
 */
class GlueClient extends AwsClient {}
