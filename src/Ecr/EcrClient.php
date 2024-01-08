<?php
namespace CloudBeds\Aws\MskFork\Ecr;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon EC2 Container Registry** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result batchCheckLayerAvailability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCheckLayerAvailabilityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDeleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchGetRepositoryScanningConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetRepositoryScanningConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result completeLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeLayerUploadAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPullThroughCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPullThroughCacheRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePullThroughCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePullThroughCacheRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRegistryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistryPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeImageReplicationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageReplicationStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeImageScanFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageScanFindingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePullThroughCacheRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePullThroughCacheRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRegistry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegistryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRepositoriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAuthorizationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizationTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDownloadUrlForLayer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDownloadUrlForLayerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLifecyclePolicyPreview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLifecyclePolicyPreviewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRegistryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegistryPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRegistryScanningConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegistryScanningConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result initiateLayerUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateLayerUploadAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putImageScanningConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageScanningConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putImageTagMutability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageTagMutabilityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putLifecyclePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLifecyclePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRegistryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRegistryPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRegistryScanningConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRegistryScanningConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putReplicationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setRepositoryPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRepositoryPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startImageScan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImageScanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startLifecyclePolicyPreview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLifecyclePolicyPreviewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePullThroughCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePullThroughCacheRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result uploadLayerPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadLayerPartAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result validatePullThroughCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validatePullThroughCacheRuleAsync(array $args = [])
 */
class EcrClient extends AwsClient {}
