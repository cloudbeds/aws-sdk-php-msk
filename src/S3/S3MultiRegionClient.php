<?php
namespace CloudBeds\Aws\MskFork\S3;

use CloudBeds\Aws\MskFork\CacheInterface;
use CloudBeds\Aws\MskFork\CommandInterface;
use CloudBeds\Aws\MskFork\LruArrayCache;
use CloudBeds\Aws\MskFork\MultiRegionClient as BaseClient;
use CloudBeds\Aws\MskFork\Exception\AwsException;
use CloudBeds\Aws\MskFork\S3\Exception\PermanentRedirectException;
use GuzzleHttp\Promise;

/**
 * **Amazon Simple Storage Service** multi-region client.
 *
 * @method \CloudBeds\Aws\MskFork\Result abortMultipartUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise abortMultipartUploadAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result completeMultipartUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeMultipartUploadAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result copyObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMultipartUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMultipartUploadAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketAnalyticsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketAnalyticsConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketCors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketCorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketEncryptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketIntelligentTieringConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketIntelligentTieringConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketInventoryConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketInventoryConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketLifecycleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketMetricsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketMetricsConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketOwnershipControls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketOwnershipControlsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketWebsite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketWebsiteAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteObjectTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePublicAccessBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePublicAccessBlockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketAccelerateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketAccelerateConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketAclAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketAnalyticsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketAnalyticsConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketCors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketCorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketEncryptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketIntelligentTieringConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketIntelligentTieringConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketInventoryConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketInventoryConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketLifecycleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketLifecycleConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketLoggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketMetricsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketMetricsConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketNotificationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketNotificationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketOwnershipControls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketOwnershipControlsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketPolicyStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketPolicyStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketRequestPayment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketRequestPaymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketVersioning(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketVersioningAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketWebsite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketWebsiteAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObjectAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectAclAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObjectAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObjectLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectLegalHoldAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObjectLockConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectLockConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObjectRetention(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectRetentionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObjectTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getObjectTorrent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectTorrentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPublicAccessBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPublicAccessBlockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result headBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise headBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result headObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise headObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBucketAnalyticsConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBucketAnalyticsConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBucketIntelligentTieringConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBucketIntelligentTieringConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBucketInventoryConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBucketInventoryConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBucketMetricsConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBucketMetricsConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBuckets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBucketsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDirectoryBuckets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDirectoryBucketsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMultipartUploads(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMultipartUploadsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listObjectVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listObjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listObjectsV2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectsV2Async(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listParts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPartsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketAccelerateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketAccelerateConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketAclAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketAnalyticsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketAnalyticsConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketCors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketCorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketEncryption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketEncryptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketIntelligentTieringConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketIntelligentTieringConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketInventoryConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketInventoryConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketLifecycle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketLifecycleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketLifecycleConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketLogging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketLoggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketMetricsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketMetricsConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketNotificationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketNotificationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketOwnershipControls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketOwnershipControlsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketRequestPayment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketRequestPaymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketVersioning(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketVersioningAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketWebsite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketWebsiteAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putObjectAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectAclAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putObjectLegalHold(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectLegalHoldAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putObjectLockConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectLockConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putObjectRetention(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectRetentionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putObjectTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putObjectTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPublicAccessBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPublicAccessBlockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restoreObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreObjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result selectObjectContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise selectObjectContentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result uploadPart(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadPartAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result uploadPartCopy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadPartCopyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result writeGetObjectResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise writeGetObjectResponseAsync(array $args = [])
 */
class S3MultiRegionClient extends BaseClient implements S3ClientInterface
{
    use S3ClientTrait;

    /** @var CacheInterface */
    private $cache;

    public static function getArguments()
    {
        $args = parent::getArguments();
        $regionDef = $args['region'] + ['default' => function (array &$args) {
            $availableRegions = array_keys($args['partition']['regions']);
            return end($availableRegions);
        }];
        unset($args['region']);

        return $args + [
            'bucket_region_cache' => [
                'type' => 'config',
                'valid' => [CacheInterface::class],
                'doc' => 'Cache of regions in which given buckets are located.',
                'default' => function () { return new LruArrayCache; },
            ],
            'region' => $regionDef,
        ];
    }

    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->cache = $this->getConfig('bucket_region_cache');

        $this->getHandlerList()->prependInit(
            $this->determineRegionMiddleware(),
            'determine_region'
        );
    }

    private function determineRegionMiddleware()
    {
        return function (callable $handler) {
            return function (CommandInterface $command) use ($handler) {
                $cacheKey = $this->getCacheKey($command['Bucket']);
                if (
                    empty($command['@region']) &&
                    $region = $this->cache->get($cacheKey)
                ) {
                    $command['@region'] = $region;
                }

                return Promise\Coroutine::of(function () use (
                    $handler,
                    $command,
                    $cacheKey
                ) {
                    try {
                        yield $handler($command);
                    } catch (PermanentRedirectException $e) {
                        if (empty($command['Bucket'])) {
                            throw $e;
                        }
                        $result = $e->getResult();
                        $region = null;
                        if (isset($result['@metadata']['headers']['x-amz-bucket-region'])) {
                            $region = $result['@metadata']['headers']['x-amz-bucket-region'];
                            $this->cache->set($cacheKey, $region);
                        } else {
                            $region = (yield $this->determineBucketRegionAsync(
                                $command['Bucket']
                            ));
                        }

                        $command['@region'] = $region;
                        yield $handler($command);
                    } catch (AwsException $e) {
                        if ($e->getAwsErrorCode() === 'AuthorizationHeaderMalformed') {
                            $region = $this->determineBucketRegionFromExceptionBody(
                                $e->getResponse()
                            );
                            if (!empty($region)) {
                                $this->cache->set($cacheKey, $region);

                                $command['@region'] = $region;
                                yield $handler($command);
                            } else {
                                throw $e;
                            }
                        } else {
                            throw $e;
                        }
                    }
                });
            };
        };
    }

    public function createPresignedRequest(CommandInterface $command, $expires, array $options = [])
    {
        if (empty($command['Bucket'])) {
            throw new \InvalidArgumentException('The S3\\MultiRegionClient'
                . ' cannot create presigned requests for commands without a'
                . ' specified bucket.');
        }

        /** @var S3ClientInterface $client */
        $client = $this->getClientFromPool(
            $this->determineBucketRegion($command['Bucket'])
        );
        return $client->createPresignedRequest(
            $client->getCommand($command->getName(), $command->toArray()),
            $expires
        );
    }

    public function getObjectUrl($bucket, $key)
    {
        /** @var S3Client $regionalClient */
        $regionalClient = $this->getClientFromPool(
            $this->determineBucketRegion($bucket)
        );

        return $regionalClient->getObjectUrl($bucket, $key);
    }

    public function determineBucketRegionAsync($bucketName)
    {
        $cacheKey = $this->getCacheKey($bucketName);
        if ($cached = $this->cache->get($cacheKey)) {
            return Promise\Create::promiseFor($cached);
        }

        /** @var S3ClientInterface $regionalClient */
        $regionalClient = $this->getClientFromPool();
        return $regionalClient->determineBucketRegionAsync($bucketName)
            ->then(
                function ($region) use ($cacheKey) {
                    $this->cache->set($cacheKey, $region);

                    return $region;
                }
            );
    }

    private function getCacheKey($bucketName)
    {
        return "aws:s3:{$bucketName}:location";
    }
}
