<?php
namespace CloudBeds\Aws\MskFork\MigrationHub;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Migration Hub** service.
 * @method \CloudBeds\Aws\MskFork\Result associateCreatedArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateCreatedArtifactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateDiscoveredResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDiscoveredResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createProgressUpdateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProgressUpdateStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteProgressUpdateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProgressUpdateStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeApplicationState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMigrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMigrationTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateCreatedArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateCreatedArtifactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateDiscoveredResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDiscoveredResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importMigrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importMigrationTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplicationStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationStatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCreatedArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCreatedArtifactsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDiscoveredResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDiscoveredResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMigrationTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMigrationTasksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProgressUpdateStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProgressUpdateStreamsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result notifyApplicationState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyApplicationStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result notifyMigrationTaskState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyMigrationTaskStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putResourceAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourceAttributesAsync(array $args = [])
 */
class MigrationHubClient extends AwsClient {}
