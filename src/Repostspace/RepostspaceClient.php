<?php
namespace CloudBeds\Aws\MskFork\Repostspace;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS re:Post Private** service.
 * @method \CloudBeds\Aws\MskFork\Result createSpace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSpaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSpace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSpaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deregisterAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterAdminAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSpace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSpaceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSpaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSpacesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerAdminAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendInvites(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendInvitesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSpace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSpaceAsync(array $args = [])
 */
class RepostspaceClient extends AwsClient {}
