<?php
namespace CloudBeds\Aws\MskFork\AppIntegrationsService;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon AppIntegrations Service** service.
 * @method \CloudBeds\Aws\MskFork\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataIntegrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEventIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventIntegrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataIntegrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEventIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventIntegrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataIntegrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEventIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventIntegrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDataIntegrationAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataIntegrationAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDataIntegrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataIntegrationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEventIntegrationAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventIntegrationAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEventIntegrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventIntegrationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDataIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataIntegrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEventIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventIntegrationAsync(array $args = [])
 */
class AppIntegrationsServiceClient extends AwsClient {}
