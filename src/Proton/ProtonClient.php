<?php
namespace CloudBeds\Aws\MskFork\Proton;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Proton** service.
 * @method \CloudBeds\Aws\MskFork\Result acceptEnvironmentAccountConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptEnvironmentAccountConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelComponentDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelComponentDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelEnvironmentDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelEnvironmentDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelServiceInstanceDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelServiceInstanceDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelServicePipelineDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelServicePipelineDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComponentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEnvironmentAccountConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentAccountConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEnvironmentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEnvironmentTemplateVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentTemplateVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createServiceInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createServiceSyncConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceSyncConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createServiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createServiceTemplateVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceTemplateVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTemplateSyncConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTemplateSyncConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteComponentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEnvironmentAccountConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentAccountConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEnvironmentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEnvironmentTemplateVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentTemplateVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteServiceSyncConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceSyncConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteServiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteServiceTemplateVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceTemplateVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTemplateSyncConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTemplateSyncConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComponentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEnvironmentAccountConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnvironmentAccountConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEnvironmentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnvironmentTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEnvironmentTemplateVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnvironmentTemplateVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRepositorySyncStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositorySyncStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourcesSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcesSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceInstanceSyncStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceInstanceSyncStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceSyncBlockerSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceSyncBlockerSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceSyncConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceSyncConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceTemplateVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceTemplateVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTemplateSyncConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTemplateSyncConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTemplateSyncStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTemplateSyncStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listComponentOutputs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentOutputsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listComponentProvisionedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentProvisionedResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeploymentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnvironmentAccountConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentAccountConnectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnvironmentOutputs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentOutputsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnvironmentProvisionedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentProvisionedResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnvironmentTemplateVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentTemplateVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnvironmentTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositoriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRepositorySyncDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositorySyncDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServiceInstanceOutputs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceInstanceOutputsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServiceInstanceProvisionedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceInstanceProvisionedResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServiceInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServicePipelineOutputs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServicePipelineOutputsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServicePipelineProvisionedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServicePipelineProvisionedResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServiceTemplateVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceTemplateVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServiceTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result notifyResourceDeploymentStatusChange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyResourceDeploymentStatusChangeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rejectEnvironmentAccountConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectEnvironmentAccountConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateComponentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnvironmentAccountConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentAccountConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnvironmentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEnvironmentTemplateVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentTemplateVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServiceInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServicePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServicePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServiceSyncBlocker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceSyncBlockerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServiceSyncConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceSyncConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServiceTemplateVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceTemplateVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTemplateSyncConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTemplateSyncConfigAsync(array $args = [])
 */
class ProtonClient extends AwsClient {}
