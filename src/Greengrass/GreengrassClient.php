<?php
namespace CloudBeds\Aws\MskFork\Greengrass;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Greengrass** service.
 * @method \CloudBeds\Aws\MskFork\Result associateRoleToGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateRoleToGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateServiceRoleToAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateServiceRoleToAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConnectorDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectorDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConnectorDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectorDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCoreDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCoreDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCoreDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeviceDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDeviceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeviceDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFunctionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGroupCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGroupVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoggerDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLoggerDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoggerDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createResourceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSoftwareUpdateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSoftwareUpdateJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSubscriptionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConnectorDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectorDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCoreDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoggerDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateRoleFromGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRoleFromGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateServiceRoleFromAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateServiceRoleFromAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAssociatedRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssociatedRoleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBulkDeploymentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBulkDeploymentStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectivityInfoAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConnectorDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectorDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConnectorDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectorDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCoreDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCoreDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCoreDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDeploymentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDeviceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFunctionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGroupCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupCertificateAuthorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGroupCertificateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupCertificateConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGroupVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggerDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoggerDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggerDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceRoleForAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceRoleForAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriptionDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSubscriptionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriptionDefinitionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getThingRuntimeConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThingRuntimeConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBulkDeploymentDetailedReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBulkDeploymentDetailedReportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBulkDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBulkDeploymentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listConnectorDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConnectorDefinitionVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listConnectorDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConnectorDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCoreDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoreDefinitionVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCoreDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoreDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeploymentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeviceDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceDefinitionVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeviceDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFunctionDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionDefinitionVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFunctionDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGroupCertificateAuthorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupCertificateAuthoritiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGroupVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLoggerDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLoggerDefinitionVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLoggerDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLoggerDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listResourceDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDefinitionVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listResourceDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSubscriptionDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscriptionDefinitionVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSubscriptionDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscriptionDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resetDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetDeploymentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startBulkDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBulkDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopBulkDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBulkDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectivityInfoAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConnectorDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectorDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCoreDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGroupCertificateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupCertificateConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLoggerDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriptionDefinitionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateThingRuntimeConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingRuntimeConfigurationAsync(array $args = [])
 */
class GreengrassClient extends AwsClient {}
