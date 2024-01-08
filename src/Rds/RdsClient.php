<?php
namespace CloudBeds\Aws\MskFork\Rds;

use CloudBeds\Aws\MskFork\AwsClient;
use CloudBeds\Aws\MskFork\Api\Service;
use CloudBeds\Aws\MskFork\Api\DocModel;
use CloudBeds\Aws\MskFork\Api\ApiProvider;
use CloudBeds\Aws\MskFork\PresignUrlMiddleware;

/**
 * This client is used to interact with the **Amazon Relational Database Service (Amazon RDS)**.
 *
 * @method \CloudBeds\Aws\MskFork\Result addSourceIdentifierToSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addSourceIdentifierToSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result authorizeDBSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeDBSecurityGroupIngressAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result copyDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result copyDBSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyDBSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result copyOptionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyOptionGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBInstanceReadReplica(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBInstanceReadReplicaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBSecurityGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBSubnetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createOptionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOptionGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBSecurityGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBSubnetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteOptionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOptionGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBEngineVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBEngineVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBLogFiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBLogFilesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBParameterGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBParametersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBSecurityGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBSnapshotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBSubnetGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEngineDefaultParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEngineDefaultParametersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventCategories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventCategoriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventSubscriptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOptionGroupOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOptionGroupOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOptionGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOptionGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOrderableDBInstanceOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderableDBInstanceOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReservedDBInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedDBInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReservedDBInstancesOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedDBInstancesOfferingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result downloadDBLogFilePortion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadDBLogFilePortionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBSubnetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEventSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyOptionGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyOptionGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result promoteReadReplica(array $args = [])
 * @method \GuzzleHttp\Promise\Promise promoteReadReplicaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result purchaseReservedDBInstancesOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseReservedDBInstancesOfferingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rebootDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootDBInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeSourceIdentifierFromSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeSourceIdentifierFromSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resetDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreDBInstanceFromDBSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDBInstanceFromDBSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreDBInstanceToPointInTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDBInstanceToPointInTimeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result revokeDBSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeDBSecurityGroupIngressAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addRoleToDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise addRoleToDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result addRoleToDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise addRoleToDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result applyPendingMaintenanceAction(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise applyPendingMaintenanceActionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result backtrackDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise backtrackDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result cancelExportTask(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise cancelExportTaskAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result copyDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise copyDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result copyDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise copyDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createBlueGreenDeployment(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createBlueGreenDeploymentAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createCustomDBEngineVersion(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createCustomDBEngineVersionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createDBClusterEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createDBClusterEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createDBProxy(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createDBProxyAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createDBProxyEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createDBProxyEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createIntegration(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createIntegrationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result createTenantDatabase(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise createTenantDatabaseAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteBlueGreenDeployment(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteBlueGreenDeploymentAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteCustomDBEngineVersion(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteCustomDBEngineVersionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteDBClusterAutomatedBackup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterAutomatedBackupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteDBClusterEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteDBInstanceAutomatedBackup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBInstanceAutomatedBackupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteDBProxy(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBProxyAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteDBProxyEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteDBProxyEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteIntegration(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deleteTenantDatabase(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deleteTenantDatabaseAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result deregisterDBProxyTargets(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise deregisterDBProxyTargetsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeAccountAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeBlueGreenDeployments(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeBlueGreenDeploymentsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeCertificates(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeCertificatesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterAutomatedBackups(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterAutomatedBackupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterBacktracks(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterBacktracksAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterEndpoints(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterEndpointsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterParameterGroups(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterParameterGroupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterParameters(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterParametersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterSnapshotAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterSnapshotAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterSnapshots(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClusterSnapshotsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusters(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBClustersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBInstanceAutomatedBackups(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBInstanceAutomatedBackupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBProxies(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBProxiesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBProxyEndpoints(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBProxyEndpointsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBProxyTargetGroups(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBProxyTargetGroupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBProxyTargets(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBProxyTargetsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBSnapshotAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBSnapshotAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeDBSnapshotTenantDatabases(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeDBSnapshotTenantDatabasesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeEngineDefaultClusterParameters(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeEngineDefaultClusterParametersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeExportTasks(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeGlobalClusters(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeGlobalClustersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeIntegrations(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeIntegrationsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describePendingMaintenanceActions(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describePendingMaintenanceActionsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeSourceRegions(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeSourceRegionsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeTenantDatabases(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeTenantDatabasesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result describeValidDBInstanceModifications(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise describeValidDBInstanceModificationsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result failoverDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise failoverDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result failoverGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise failoverGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyActivityStream(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyActivityStreamAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyCertificates(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyCertificatesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyCurrentDBClusterCapacity(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyCurrentDBClusterCapacityAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyCustomDBEngineVersion(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyCustomDBEngineVersionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyDBClusterEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyDBClusterSnapshotAttribute(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterSnapshotAttributeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyDBProxy(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBProxyAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyDBProxyEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBProxyEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyDBProxyTargetGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBProxyTargetGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyDBSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyDBSnapshotAttribute(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyDBSnapshotAttributeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result modifyTenantDatabase(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise modifyTenantDatabaseAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result promoteReadReplicaDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise promoteReadReplicaDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result rebootDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise rebootDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result registerDBProxyTargets(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise registerDBProxyTargetsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result removeFromGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise removeFromGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result removeRoleFromDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise removeRoleFromDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result removeRoleFromDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise removeRoleFromDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result resetDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise resetDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result restoreDBClusterFromS3(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise restoreDBClusterFromS3Async(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result restoreDBClusterFromSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise restoreDBClusterFromSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result restoreDBClusterToPointInTime(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise restoreDBClusterToPointInTimeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result restoreDBInstanceFromS3(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise restoreDBInstanceFromS3Async(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result startActivityStream(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise startActivityStreamAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result startDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise startDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result startDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise startDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result startDBInstanceAutomatedBackupsReplication(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise startDBInstanceAutomatedBackupsReplicationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result startExportTask(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise startExportTaskAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result stopActivityStream(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise stopActivityStreamAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result stopDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise stopDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result stopDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise stopDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result stopDBInstanceAutomatedBackupsReplication(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise stopDBInstanceAutomatedBackupsReplicationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result switchoverBlueGreenDeployment(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise switchoverBlueGreenDeploymentAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result switchoverGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise switchoverGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method \CloudBeds\Aws\MskFork\Result switchoverReadReplica(array $args = []) (supported in versions 2014-10-31)
 * @method \GuzzleHttp\Promise\Promise switchoverReadReplicaAsync(array $args = []) (supported in versions 2014-10-31)
 */
class RdsClient extends AwsClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                            'CopyDBSnapshot',
                            'CreateDBInstanceReadReplica',
                            'CopyDBClusterSnapshot',
                            'CreateDBCluster',
                            'StartDBInstanceAutomatedBackupsReplication'
                        ],
                        'service' => 'rds',
                        'presign_param' => 'PreSignedUrl',
                        'require_different_region' => true,
                    ]
                ),
                'rds.presigner'
            );
        };

        parent::__construct($args);
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        // Add the SourceRegion parameter
        $docs['shapes']['SourceRegion']['base'] = 'A required parameter that indicates '
            . 'the region that the DB snapshot will be copied from.';
        $api['shapes']['SourceRegion'] = ['type' => 'string'];
        $api['shapes']['CopyDBSnapshotMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];
        $api['shapes']['CreateDBInstanceReadReplicaMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];

        // Add the DestinationRegion parameter
        $docs['shapes']['DestinationRegion']['base']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';
        $api['shapes']['DestinationRegion'] = ['type' => 'string'];
        $api['shapes']['CopyDBSnapshotMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];
        $api['shapes']['CreateDBInstanceReadReplicaMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];

        // Several parameters in presign APIs are optional.
        $docs['shapes']['String']['refs']['CopyDBSnapshotMessage$PreSignedUrl']
            = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf.</div>';
        $docs['shapes']['String']['refs']['CopyDBSnapshotMessage$DestinationRegion']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';

        // Several parameters in presign APIs are optional.
        $docs['shapes']['String']['refs']['CreateDBInstanceReadReplicaMessage$PreSignedUrl']
            = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf.</div>';
        $docs['shapes']['String']['refs']['CreateDBInstanceReadReplicaMessage$DestinationRegion']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';

        if ($api['metadata']['apiVersion'] != '2014-09-01') {
            $api['shapes']['CopyDBClusterSnapshotMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];
            $api['shapes']['CreateDBClusterMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];

            $api['shapes']['CopyDBClusterSnapshotMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];
            $api['shapes']['CreateDBClusterMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];

            // Several parameters in presign APIs are optional.
            $docs['shapes']['String']['refs']['CopyDBClusterSnapshotMessage$PreSignedUrl']
                = '<div class="alert alert-info">The SDK will compute this value '
                . 'for you on your behalf.</div>';
            $docs['shapes']['String']['refs']['CopyDBClusterSnapshotMessage$DestinationRegion']
                = '<div class="alert alert-info">The SDK will populate this '
                . 'parameter on your behalf using the configured region value of '
                . 'the client.</div>';

            // Several parameters in presign APIs are optional.
            $docs['shapes']['String']['refs']['CreateDBClusterMessage$PreSignedUrl']
                = '<div class="alert alert-info">The SDK will compute this value '
                . 'for you on your behalf.</div>';
            $docs['shapes']['String']['refs']['CreateDBClusterMessage$DestinationRegion']
                = '<div class="alert alert-info">The SDK will populate this '
                . 'parameter on your behalf using the configured region value of '
                . 'the client.</div>';
        }

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
