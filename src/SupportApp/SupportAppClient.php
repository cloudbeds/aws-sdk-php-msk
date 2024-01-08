<?php
namespace CloudBeds\Aws\MskFork\SupportApp;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Support App** service.
 * @method \CloudBeds\Aws\MskFork\Result createSlackChannelConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSlackChannelConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccountAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSlackChannelConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSlackChannelConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSlackWorkspaceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSlackWorkspaceConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSlackChannelConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSlackChannelConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSlackWorkspaceConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSlackWorkspaceConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAccountAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerSlackWorkspaceForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerSlackWorkspaceForOrganizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSlackChannelConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSlackChannelConfigurationAsync(array $args = [])
 */
class SupportAppClient extends AwsClient {}
