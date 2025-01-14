<?php
namespace CloudBeds\Aws\MskFork\CloudFormation;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS CloudFormation** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result activateOrganizationsAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateOrganizationsAccessAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result activateType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDescribeTypeConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDescribeTypeConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelUpdateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelUpdateStackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result continueUpdateRollback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise continueUpdateRollbackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChangeSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createStackInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createStackSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deactivateOrganizationsAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateOrganizationsAccessAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deactivateType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChangeSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteStackInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteStackSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deregisterType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAccountLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountLimitsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChangeSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChangeSetHooks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChangeSetHooksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeOrganizationsAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationsAccessAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePublisher(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePublisherAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStackDriftDetectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackDriftDetectionStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStackEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStackInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStackResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStackResourceDrifts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackResourceDriftsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStackResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStackSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStackSetOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackSetOperationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStacksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTypeRegistration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTypeRegistrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectStackDrift(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectStackDriftAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectStackResourceDrift(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectStackResourceDriftAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectStackSetDrift(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectStackSetDriftAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result estimateTemplateCost(array $args = [])
 * @method \GuzzleHttp\Promise\Promise estimateTemplateCostAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result executeChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeChangeSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getStackPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStackPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTemplateSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTemplateSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importStacksToStackSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importStacksToStackSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChangeSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChangeSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listExports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listImports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStackInstanceResourceDrifts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStackInstanceResourceDriftsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStackInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStackInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStackResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStackResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStackSetOperationResults(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStackSetOperationResultsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStackSetOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStackSetOperationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStackSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStackSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStacksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTypeRegistrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTypeRegistrationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTypeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTypeVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result publishType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result recordHandlerProgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recordHandlerProgressAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerPublisher(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerPublisherAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rollbackStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rollbackStackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setStackPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setStackPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setTypeConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTypeConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setTypeDefaultVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setTypeDefaultVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result signalResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signalResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopStackSetOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopStackSetOperationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result testType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateStackInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateStackSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTerminationProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTerminationProtectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result validateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateTemplateAsync(array $args = [])
 */
class CloudFormationClient extends AwsClient {}
