<?php
namespace CloudBeds\Aws\MskFork\KinesisVideoArchivedMedia;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Kinesis Video Streams Archived Media** service.
 * @method \CloudBeds\Aws\MskFork\Result getClip(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDASHStreamingSessionURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDASHStreamingSessionURLAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHLSStreamingSessionURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHLSStreamingSessionURLAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMediaForFragmentList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMediaForFragmentListAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFragments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFragmentsAsync(array $args = [])
 */
class KinesisVideoArchivedMediaClient extends AwsClient {}
