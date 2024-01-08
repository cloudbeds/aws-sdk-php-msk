<?php
namespace CloudBeds\Aws\MskFork\ManagedGrafana;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Managed Grafana** service.
 * @method \CloudBeds\Aws\MskFork\Result associateLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateLicenseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWorkspaceApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspaceApiKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkspaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteWorkspaceApiKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkspaceApiKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspaceAuthentication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceAuthenticationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkspaceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateLicenseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPermissionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkspacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePermissionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkspaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateWorkspaceAuthentication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkspaceAuthenticationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateWorkspaceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkspaceConfigurationAsync(array $args = [])
 */
class ManagedGrafanaClient extends AwsClient {}
