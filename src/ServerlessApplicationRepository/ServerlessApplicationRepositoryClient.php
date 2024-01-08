<?php
namespace CloudBeds\Aws\MskFork\ServerlessApplicationRepository;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWSServerlessApplicationRepository** service.
 * @method \CloudBeds\Aws\MskFork\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createApplicationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCloudFormationChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudFormationChangeSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCloudFormationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudFormationTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApplicationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCloudFormationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudFormationTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplicationDependencies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationDependenciesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplicationVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putApplicationPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putApplicationPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result unshareApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unshareApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ServerlessApplicationRepositoryClient extends AwsClient {}
