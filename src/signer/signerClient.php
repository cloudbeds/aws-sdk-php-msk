<?php
namespace CloudBeds\Aws\MskFork\signer;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Signer** service.
 * @method \CloudBeds\Aws\MskFork\Result addProfilePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addProfilePermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSigningProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSigningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSigningJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRevocationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRevocationStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSigningPlatform(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSigningPlatformAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSigningProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProfilePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProfilePermissionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSigningJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSigningPlatforms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningPlatformsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSigningProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSigningProfilesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSigningProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeProfilePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeProfilePermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result revokeSignature(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeSignatureAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result revokeSigningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeSigningProfileAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result signPayload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signPayloadAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startSigningJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSigningJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class signerClient extends AwsClient {}
