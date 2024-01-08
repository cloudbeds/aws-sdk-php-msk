<?php
namespace CloudBeds\Aws\MskFork\LaunchWizard;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Launch Wizard** service.
 * @method \CloudBeds\Aws\MskFork\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getWorkload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkloadAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeploymentEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeploymentEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeploymentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWorkloadDeploymentPatterns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkloadDeploymentPatternsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWorkloads(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkloadsAsync(array $args = [])
 */
class LaunchWizardClient extends AwsClient {}
