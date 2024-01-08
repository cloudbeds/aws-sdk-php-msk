<?php
namespace CloudBeds\Aws\MskFork\Lambda;

use CloudBeds\Aws\MskFork\AwsClient;
use CloudBeds\Aws\MskFork\CommandInterface;
use CloudBeds\Aws\MskFork\Middleware;

/**
 * This client is used to interact with AWS Lambda
 *
 * @method \CloudBeds\Aws\MskFork\Result addLayerVersionPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addLayerVersionPermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addPermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCodeSigningConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCodeSigningConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventSourceMappingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFunctionUrlConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionUrlConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCodeSigningConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCodeSigningConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventSourceMappingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFunctionCodeSigningConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionCodeSigningConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFunctionConcurrency(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionConcurrencyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFunctionEventInvokeConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionEventInvokeConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFunctionUrlConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionUrlConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLayerVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLayerVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteProvisionedConcurrencyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProvisionedConcurrencyConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCodeSigningConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCodeSigningConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventSourceMappingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFunctionCodeSigningConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionCodeSigningConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFunctionConcurrency(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionConcurrencyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFunctionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFunctionEventInvokeConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionEventInvokeConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFunctionUrlConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionUrlConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLayerVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLayerVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLayerVersionByArn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLayerVersionByArnAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLayerVersionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLayerVersionPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getProvisionedConcurrencyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProvisionedConcurrencyConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRuntimeManagementConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuntimeManagementConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result invoke(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result invokeAsync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeAsyncAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result invokeWithResponseStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invokeWithResponseStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCodeSigningConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCodeSigningConfigsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEventSourceMappings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventSourceMappingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFunctionEventInvokeConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionEventInvokeConfigsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFunctionUrlConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionUrlConfigsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFunctions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFunctionsByCodeSigningConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionsByCodeSigningConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLayerVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLayerVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLayers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLayersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProvisionedConcurrencyConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProvisionedConcurrencyConfigsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVersionsByFunction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVersionsByFunctionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result publishLayerVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishLayerVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result publishVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putFunctionCodeSigningConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFunctionCodeSigningConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putFunctionConcurrency(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFunctionConcurrencyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putFunctionEventInvokeConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFunctionEventInvokeConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putProvisionedConcurrencyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putProvisionedConcurrencyConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRuntimeManagementConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRuntimeManagementConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeLayerVersionPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeLayerVersionPermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCodeSigningConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCodeSigningConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEventSourceMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventSourceMappingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFunctionCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionCodeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFunctionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFunctionEventInvokeConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionEventInvokeConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFunctionUrlConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionUrlConfigAsync(array $args = [])
 */
class LambdaClient extends AwsClient
{
    /**
     * {@inheritdoc}
     */
    public function __construct(array $args)
    {
        parent::__construct($args);
        $list = $this->getHandlerList();
        if (extension_loaded('curl')) {
            $list->appendInit($this->getDefaultCurlOptionsMiddleware());
        }
    }

    /**
     * Provides a middleware that sets default Curl options for the command
     *
     * @return callable
     */
    public function getDefaultCurlOptionsMiddleware()
    {
        return Middleware::mapCommand(function (CommandInterface $cmd) {
            $defaultCurlOptions = [
                CURLOPT_TCP_KEEPALIVE => 1,
            ];
            if (!isset($cmd['@http']['curl'])) {
                $cmd['@http']['curl'] = $defaultCurlOptions;
            } else {
                $cmd['@http']['curl'] += $defaultCurlOptions;
            }
            return $cmd;
        });
    }
}
