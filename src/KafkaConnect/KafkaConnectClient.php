<?php
namespace CloudBeds\Aws\MskFork\KafkaConnect;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Managed Streaming for Kafka Connect** service.
 * @method \CloudBeds\Aws\MskFork\Result createConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCustomPlugin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomPluginAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWorkerConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkerConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCustomPlugin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomPluginAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCustomPlugin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomPluginAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWorkerConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkerConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listConnectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConnectorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCustomPlugins(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCustomPluginsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWorkerConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkerConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectorAsync(array $args = [])
 */
class KafkaConnectClient extends AwsClient {}
