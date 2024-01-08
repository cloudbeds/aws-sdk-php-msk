<?php
namespace CloudBeds\Aws\MskFork\CodeStarconnections;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS CodeStar connections** service.
 * @method \CloudBeds\Aws\MskFork\Result createConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createHost(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHostAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRepositoryLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryLinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSyncConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSyncConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteHost(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHostAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRepositoryLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryLinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSyncConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSyncConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHost(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHostAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRepositoryLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryLinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRepositorySyncStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositorySyncStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourceSyncStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceSyncStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSyncBlockerSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSyncBlockerSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSyncConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSyncConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConnectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHosts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHostsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRepositoryLinks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositoryLinksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRepositorySyncDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositorySyncDefinitionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSyncConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSyncConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateHost(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHostAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRepositoryLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryLinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSyncBlocker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSyncBlockerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSyncConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSyncConfigurationAsync(array $args = [])
 */
class CodeStarconnectionsClient extends AwsClient {}
