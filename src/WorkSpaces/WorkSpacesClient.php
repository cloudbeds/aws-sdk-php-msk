<?php
namespace CloudBeds\Aws\MskFork\WorkSpaces;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * Amazon WorkSpaces client.
 *
 * @method \CloudBeds\Aws\MskFork\Result associateConnectionAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateConnectionAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateIpGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateIpGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateWorkspaceApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateWorkspaceApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result authorizeIpRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeIpRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result copyWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyWorkspaceImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConnectClientAddIn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectClientAddInAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConnectionAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectionAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createIpGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIpGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createStandbyWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStandbyWorkspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createUpdatedWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUpdatedWorkspaceImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWorkspaceBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspaceBundleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspaceImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteClientBranding(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClientBrandingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConnectClientAddIn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectClientAddInAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConnectionAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectionAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteIpGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIpGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteWorkspaceBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkspaceBundleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkspaceImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deployWorkspaceApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deployWorkspaceApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deregisterWorkspaceDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterWorkspaceDirectoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccountModifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountModificationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeApplicationAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBundleAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBundleAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeClientBranding(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClientBrandingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeClientProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClientPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeConnectClientAddIns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectClientAddInsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeConnectionAliasPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionAliasPermissionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeConnectionAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionAliasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeImageAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeIpGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspaceAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspaceBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceBundlesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspaceDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceDirectoriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspaceImagePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceImagePermissionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspaceImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceImagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspaceSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceSnapshotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspacesConnectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesConnectionStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateConnectionAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConnectionAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateIpGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateIpGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateWorkspaceApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateWorkspaceApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importClientBranding(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importClientBrandingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importWorkspaceImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAvailableManagementCidrRanges(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableManagementCidrRangesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result migrateWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise migrateWorkspaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyCertificateBasedAuthProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCertificateBasedAuthPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyClientProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClientPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifySamlProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySamlPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifySelfservicePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySelfservicePermissionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyWorkspaceAccessProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspaceAccessPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyWorkspaceCreationProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspaceCreationPropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyWorkspaceProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspacePropertiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyWorkspaceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspaceStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rebootWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootWorkspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rebuildWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildWorkspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerWorkspaceDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerWorkspaceDirectoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreWorkspaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result revokeIpRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeIpRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startWorkspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopWorkspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result terminateWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateWorkspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConnectClientAddIn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectClientAddInAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConnectionAliasPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectionAliasPermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRulesOfIpGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRulesOfIpGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateWorkspaceBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkspaceBundleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateWorkspaceImagePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkspaceImagePermissionAsync(array $args = [])
 */
class WorkSpacesClient extends AwsClient {}
