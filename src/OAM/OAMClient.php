<?php
namespace CloudBeds\Aws\MskFork\OAM;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **CloudWatch Observability Access Manager** service.
 * @method \CloudBeds\Aws\MskFork\Result createLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSinkAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSinkPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSinkPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAttachedLinks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttachedLinksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLinks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLinksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSinks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSinksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putSinkPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSinkPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLinkAsync(array $args = [])
 */
class OAMClient extends AwsClient {}
