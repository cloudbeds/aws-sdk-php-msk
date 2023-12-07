<?php
namespace CloudBeds\Aws\MskFork\CustomerProfiles;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Connect Customer Profiles** service.
 * @method \Aws\Result addProfileKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addProfileKeyAsync(array $args = [])
 * @method \Aws\Result createCalculatedAttributeDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCalculatedAttributeDefinitionAsync(array $args = [])
 * @method \Aws\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Aws\Result createEventStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventStreamAsync(array $args = [])
 * @method \Aws\Result createIntegrationWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIntegrationWorkflowAsync(array $args = [])
 * @method \Aws\Result createProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProfileAsync(array $args = [])
 * @method \Aws\Result deleteCalculatedAttributeDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCalculatedAttributeDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Aws\Result deleteEventStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventStreamAsync(array $args = [])
 * @method \Aws\Result deleteIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationAsync(array $args = [])
 * @method \Aws\Result deleteProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProfileAsync(array $args = [])
 * @method \Aws\Result deleteProfileKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProfileKeyAsync(array $args = [])
 * @method \Aws\Result deleteProfileObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProfileObjectAsync(array $args = [])
 * @method \Aws\Result deleteProfileObjectType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProfileObjectTypeAsync(array $args = [])
 * @method \Aws\Result deleteWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkflowAsync(array $args = [])
 * @method \Aws\Result detectProfileObjectType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectProfileObjectTypeAsync(array $args = [])
 * @method \Aws\Result getAutoMergingPreview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAutoMergingPreviewAsync(array $args = [])
 * @method \Aws\Result getCalculatedAttributeDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCalculatedAttributeDefinitionAsync(array $args = [])
 * @method \Aws\Result getCalculatedAttributeForProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCalculatedAttributeForProfileAsync(array $args = [])
 * @method \Aws\Result getDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainAsync(array $args = [])
 * @method \Aws\Result getEventStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventStreamAsync(array $args = [])
 * @method \Aws\Result getIdentityResolutionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityResolutionJobAsync(array $args = [])
 * @method \Aws\Result getIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationAsync(array $args = [])
 * @method \Aws\Result getMatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMatchesAsync(array $args = [])
 * @method \Aws\Result getProfileObjectType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProfileObjectTypeAsync(array $args = [])
 * @method \Aws\Result getProfileObjectTypeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProfileObjectTypeTemplateAsync(array $args = [])
 * @method \Aws\Result getSimilarProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSimilarProfilesAsync(array $args = [])
 * @method \Aws\Result getWorkflow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkflowAsync(array $args = [])
 * @method \Aws\Result getWorkflowSteps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkflowStepsAsync(array $args = [])
 * @method \Aws\Result listAccountIntegrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountIntegrationsAsync(array $args = [])
 * @method \Aws\Result listCalculatedAttributeDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCalculatedAttributeDefinitionsAsync(array $args = [])
 * @method \Aws\Result listCalculatedAttributesForProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCalculatedAttributesForProfileAsync(array $args = [])
 * @method \Aws\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Aws\Result listEventStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventStreamsAsync(array $args = [])
 * @method \Aws\Result listIdentityResolutionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityResolutionJobsAsync(array $args = [])
 * @method \Aws\Result listIntegrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIntegrationsAsync(array $args = [])
 * @method \Aws\Result listProfileObjectTypeTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProfileObjectTypeTemplatesAsync(array $args = [])
 * @method \Aws\Result listProfileObjectTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProfileObjectTypesAsync(array $args = [])
 * @method \Aws\Result listProfileObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProfileObjectsAsync(array $args = [])
 * @method \Aws\Result listRuleBasedMatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRuleBasedMatchesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listWorkflows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkflowsAsync(array $args = [])
 * @method \Aws\Result mergeProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise mergeProfilesAsync(array $args = [])
 * @method \Aws\Result putIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIntegrationAsync(array $args = [])
 * @method \Aws\Result putProfileObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putProfileObjectAsync(array $args = [])
 * @method \Aws\Result putProfileObjectType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putProfileObjectTypeAsync(array $args = [])
 * @method \Aws\Result searchProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProfilesAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateCalculatedAttributeDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCalculatedAttributeDefinitionAsync(array $args = [])
 * @method \Aws\Result updateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainAsync(array $args = [])
 * @method \Aws\Result updateProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProfileAsync(array $args = [])
 */
class CustomerProfilesClient extends AwsClient {}
