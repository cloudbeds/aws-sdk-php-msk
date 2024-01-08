<?php
namespace CloudBeds\Aws\MskFork\Schemas;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Schemas** service.
 * @method \CloudBeds\Aws\MskFork\Result createDiscoverer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiscovererAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRegistryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDiscoverer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDiscovererAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSchemaVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSchemaVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCodeBinding(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeBindingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDiscoverer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDiscovererAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCodeBindingSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCodeBindingSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDiscoveredSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiscoveredSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDiscoverers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDiscoverersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRegistries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRegistriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSchemaVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemaVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putCodeBinding(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putCodeBindingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchSchemasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startDiscoverer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDiscovererAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopDiscoverer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDiscovererAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDiscoverer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDiscovererAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRegistryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportSchemaAsync(array $args = [])
 */
class SchemasClient extends AwsClient {}
