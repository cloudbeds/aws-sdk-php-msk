<?php
namespace CloudBeds\Aws\MskFork\KinesisAnalytics;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Analytics** service.
 * @method \CloudBeds\Aws\MskFork\Result addApplicationCloudWatchLoggingOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationCloudWatchLoggingOptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addApplicationInput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationInputAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addApplicationInputProcessingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationInputProcessingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addApplicationOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationOutputAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addApplicationReferenceDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addApplicationReferenceDataSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplicationCloudWatchLoggingOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationCloudWatchLoggingOptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplicationInputProcessingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationInputProcessingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplicationOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationOutputAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplicationReferenceDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationReferenceDataSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result discoverInputSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise discoverInputSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class KinesisAnalyticsClient extends AwsClient {}
