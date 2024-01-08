<?php
namespace CloudBeds\Aws\MskFork\CloudControlApi;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Cloud Control API** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelResourceRequest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelResourceRequestAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getResourceRequestStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceRequestStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listResourceRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceRequestsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 */
class CloudControlApiClient extends AwsClient {}
