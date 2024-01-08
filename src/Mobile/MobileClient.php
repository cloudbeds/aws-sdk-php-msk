<?php
namespace CloudBeds\Aws\MskFork\Mobile;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Mobile** service.
 * @method \CloudBeds\Aws\MskFork\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBundleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportBundleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBundlesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class MobileClient extends AwsClient {}
