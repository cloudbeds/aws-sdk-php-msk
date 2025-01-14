<?php
namespace CloudBeds\Aws\MskFork\AppRegistry;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Service Catalog App Registry** service.
 * @method \CloudBeds\Aws\MskFork\Result associateAttributeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateAttributeGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAttributeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAttributeGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAttributeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAttributeGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateAttributeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateAttributeGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAssociatedResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssociatedResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAttributeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAttributeGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssociatedAttributeGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedAttributeGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAssociatedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAttributeGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttributeGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAttributeGroupsForApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttributeGroupsForApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result syncResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise syncResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAttributeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAttributeGroupAsync(array $args = [])
 */
class AppRegistryClient extends AwsClient {}
