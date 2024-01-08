<?php
namespace CloudBeds\Aws\MskFork\ResourceExplorer2;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Resource Explorer** service.
 * @method \CloudBeds\Aws\MskFork\Result associateDefaultView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDefaultViewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetViewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIndexAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createViewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIndexAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteViewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateDefaultView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateDefaultViewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountLevelServiceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountLevelServiceConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDefaultView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDefaultViewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIndexAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getViewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listIndexes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIndexesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listIndexesForMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIndexesForMembersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSupportedResourceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSupportedResourceTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listViews(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listViewsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result search(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateIndexType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIndexTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateViewAsync(array $args = [])
 */
class ResourceExplorer2Client extends AwsClient {}
