<?php
namespace CloudBeds\Aws\MskFork\FIS;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Fault Injection Simulator** service.
 * @method \Aws\Result createExperimentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExperimentTemplateAsync(array $args = [])
 * @method \Aws\Result createTargetAccountConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTargetAccountConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteExperimentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteExperimentTemplateAsync(array $args = [])
 * @method \Aws\Result deleteTargetAccountConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTargetAccountConfigurationAsync(array $args = [])
 * @method \Aws\Result getAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActionAsync(array $args = [])
 * @method \Aws\Result getExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExperimentAsync(array $args = [])
 * @method \Aws\Result getExperimentTargetAccountConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExperimentTargetAccountConfigurationAsync(array $args = [])
 * @method \Aws\Result getExperimentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExperimentTemplateAsync(array $args = [])
 * @method \Aws\Result getTargetAccountConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTargetAccountConfigurationAsync(array $args = [])
 * @method \Aws\Result getTargetResourceType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTargetResourceTypeAsync(array $args = [])
 * @method \Aws\Result listActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActionsAsync(array $args = [])
 * @method \Aws\Result listExperimentResolvedTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExperimentResolvedTargetsAsync(array $args = [])
 * @method \Aws\Result listExperimentTargetAccountConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExperimentTargetAccountConfigurationsAsync(array $args = [])
 * @method \Aws\Result listExperimentTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExperimentTemplatesAsync(array $args = [])
 * @method \Aws\Result listExperiments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExperimentsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTargetAccountConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetAccountConfigurationsAsync(array $args = [])
 * @method \Aws\Result listTargetResourceTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetResourceTypesAsync(array $args = [])
 * @method \Aws\Result startExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExperimentAsync(array $args = [])
 * @method \Aws\Result stopExperiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopExperimentAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateExperimentTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateExperimentTemplateAsync(array $args = [])
 * @method \Aws\Result updateTargetAccountConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTargetAccountConfigurationAsync(array $args = [])
 */
class FISClient extends AwsClient {}
