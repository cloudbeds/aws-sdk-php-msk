<?php
namespace CloudBeds\Aws\MskFork\Neptune;

use CloudBeds\Aws\MskFork\AwsClient;
use CloudBeds\Aws\MskFork\PresignUrlMiddleware;

/**
 * This client is used to interact with the **Amazon Neptune** service.
 * @method \CloudBeds\Aws\MskFork\Result addRoleToDBCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addRoleToDBClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addSourceIdentifierToSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addSourceIdentifierToSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result applyPendingMaintenanceAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applyPendingMaintenanceActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result copyDBClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyDBClusterParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result copyDBClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyDBClusterSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result copyDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBClusterEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBClusterEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBClusterParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBClusterSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDBSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDBSubnetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGlobalCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGlobalClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBClusterEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBClusterSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBClusterSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDBSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDBSubnetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteGlobalCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGlobalClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBClusterEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBClusterParameterGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBClusterParametersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterSnapshotAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBClusterSnapshotAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusterSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBClusterSnapshotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBClustersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBEngineVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBEngineVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBParameterGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBParameterGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBParametersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDBSubnetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDBSubnetGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEngineDefaultClusterParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEngineDefaultClusterParametersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEngineDefaultParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEngineDefaultParametersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventCategories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventCategoriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventSubscriptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeGlobalClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGlobalClustersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOrderableDBInstanceOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrderableDBInstanceOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePendingMaintenanceActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePendingMaintenanceActionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeValidDBInstanceModifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeValidDBInstanceModificationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result failoverDBCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise failoverDBClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result failoverGlobalCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise failoverGlobalClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBClusterEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBClusterSnapshotAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBClusterSnapshotAttributeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyDBSubnetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDBSubnetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyEventSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEventSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyGlobalCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyGlobalClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result promoteReadReplicaDBCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise promoteReadReplicaDBClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rebootDBInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootDBInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeFromGlobalCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeFromGlobalClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeRoleFromDBCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeRoleFromDBClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeSourceIdentifierFromSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeSourceIdentifierFromSubscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resetDBClusterParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetDBClusterParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resetDBParameterGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetDBParameterGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreDBClusterFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDBClusterFromSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreDBClusterToPointInTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDBClusterToPointInTimeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startDBCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDBClusterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopDBCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDBClusterAsync(array $args = [])
 */
class NeptuneClient extends AwsClient {
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                            'CopyDBClusterSnapshot',
                            'CreateDBCluster',
                        ],
                        'service' => 'rds',
                        'presign_param' => 'PreSignedUrl',
                        'require_different_region' => true,
                        'extra_query_params' => [
                            'CopyDBClusterSnapshot' => ['DestinationRegion'],
                            'CreateDBCluster' => ['DestinationRegion'],
                        ]
                    ]
                ),
                'rds.presigner'
            );
        };
        parent::__construct($args);
    }
}
