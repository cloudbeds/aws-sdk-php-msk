<?php
namespace CloudBeds\Aws\MskFork\Bedrock;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Bedrock** service.
 * @method \CloudBeds\Aws\MskFork\Result createModelCustomizationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelCustomizationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createProvisionedModelThroughput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProvisionedModelThroughputAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCustomModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteModelInvocationLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelInvocationLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteProvisionedModelThroughput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProvisionedModelThroughputAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCustomModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCustomModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getFoundationModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFoundationModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getModelCustomizationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelCustomizationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getModelInvocationLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelInvocationLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getProvisionedModelThroughput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProvisionedModelThroughputAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCustomModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCustomModelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFoundationModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFoundationModelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listModelCustomizationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listModelCustomizationJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProvisionedModelThroughputs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProvisionedModelThroughputsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putModelInvocationLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putModelInvocationLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopModelCustomizationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopModelCustomizationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateProvisionedModelThroughput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProvisionedModelThroughputAsync(array $args = [])
 */
class BedrockClient extends AwsClient {}
