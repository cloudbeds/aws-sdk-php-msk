<?php
namespace CloudBeds\Aws\MskFork\IoTSiteWise;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT SiteWise** service.
 * @method \CloudBeds\Aws\MskFork\Result associateAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateAssetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateTimeSeriesToAssetProperty(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateTimeSeriesToAssetPropertyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchAssociateProjectAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchAssociateProjectAssetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDisassociateProjectAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisassociateProjectAssetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetAssetPropertyAggregates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetAssetPropertyAggregatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetAssetPropertyValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetAssetPropertyValueAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetAssetPropertyValueHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetAssetPropertyValueHistoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchPutAssetPropertyValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutAssetPropertyValueAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAssetModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssetModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAssetModelCompositeModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssetModelCompositeModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBulkImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBulkImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDashboardAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGatewayAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortalAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAssetModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssetModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAssetModelCompositeModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssetModelCompositeModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDashboardAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGatewayAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortalAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTimeSeries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTimeSeriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccessPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAssetCompositeModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetCompositeModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAssetModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAssetModelCompositeModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetModelCompositeModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAssetProperty(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssetPropertyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBulkImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBulkImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDashboardAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDefaultEncryptionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDefaultEncryptionConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGatewayAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeGatewayCapabilityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGatewayCapabilityConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoggingOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePortalAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStorageConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStorageConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTimeSeries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTimeSeriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateAssetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateTimeSeriesFromAssetProperty(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateTimeSeriesFromAssetPropertyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeQueryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAssetPropertyAggregates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssetPropertyAggregatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAssetPropertyValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssetPropertyValueAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAssetPropertyValueHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssetPropertyValueHistoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInterpolatedAssetPropertyValues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInterpolatedAssetPropertyValuesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccessPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessPoliciesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssetModelCompositeModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetModelCompositeModelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssetModelProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetModelPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssetModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetModelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssetProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssetRelationships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetRelationshipsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssociatedAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedAssetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBulkImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBulkImportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCompositionRelationships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCompositionRelationshipsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDashboards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDashboardsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGatewaysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPortals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortalsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProjectAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectAssetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTimeSeries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTimeSeriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putDefaultEncryptionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDefaultEncryptionConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLoggingOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putStorageConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putStorageConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAccessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAssetModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssetModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAssetModelCompositeModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssetModelCompositeModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAssetProperty(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssetPropertyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDashboardAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGatewayCapabilityConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGatewayCapabilityConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePortalAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class IoTSiteWiseClient extends AwsClient {}
