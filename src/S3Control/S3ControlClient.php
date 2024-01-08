<?php
namespace CloudBeds\Aws\MskFork\S3Control;

use CloudBeds\Aws\MskFork\AwsClient;
use CloudBeds\Aws\MskFork\CacheInterface;
use CloudBeds\Aws\MskFork\HandlerList;
use CloudBeds\Aws\MskFork\S3\UseArnRegion\Configuration;
use CloudBeds\Aws\MskFork\S3\UseArnRegion\ConfigurationInterface;
use CloudBeds\Aws\MskFork\S3\UseArnRegion\ConfigurationProvider as UseArnRegionConfigurationProvider;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * This client is used to interact with the **AWS S3 Control** service.
 * @method \CloudBeds\Aws\MskFork\Result associateAccessGrantsIdentityCenter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateAccessGrantsIdentityCenterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAccessGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessGrantAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAccessGrantsInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessGrantsInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAccessGrantsLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessGrantsLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAccessPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAccessPointForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessPointForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMultiRegionAccessPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMultiRegionAccessPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createStorageLensGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStorageLensGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessGrantAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessGrantsInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessGrantsInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessGrantsInstanceResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessGrantsInstanceResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessGrantsLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessGrantsLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessPointForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessPointForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessPointPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessPointPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccessPointPolicyForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessPointPolicyForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketLifecycleConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteJobTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMultiRegionAccessPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMultiRegionAccessPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePublicAccessBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePublicAccessBlockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteStorageLensConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStorageLensConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteStorageLensConfigurationTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStorageLensConfigurationTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteStorageLensGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStorageLensGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMultiRegionAccessPointOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMultiRegionAccessPointOperationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result dissociateAccessGrantsIdentityCenter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise dissociateAccessGrantsIdentityCenterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessGrantAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessGrantsInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessGrantsInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessGrantsInstanceForPrefix(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessGrantsInstanceForPrefixAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessGrantsInstanceResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessGrantsInstanceResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessGrantsLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessGrantsLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessPointConfigurationForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessPointConfigurationForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessPointForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessPointForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessPointPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessPointPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessPointPolicyForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessPointPolicyForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessPointPolicyStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessPointPolicyStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccessPointPolicyStatusForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessPointPolicyStatusForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketLifecycleConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketVersioning(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketVersioningAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDataAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDataAccessAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJobTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMultiRegionAccessPoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMultiRegionAccessPointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMultiRegionAccessPointPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMultiRegionAccessPointPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMultiRegionAccessPointPolicyStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMultiRegionAccessPointPolicyStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMultiRegionAccessPointRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMultiRegionAccessPointRoutesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPublicAccessBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPublicAccessBlockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getStorageLensConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStorageLensConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getStorageLensConfigurationTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStorageLensConfigurationTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getStorageLensGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStorageLensGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccessGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessGrantsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccessGrantsInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessGrantsInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccessGrantsLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessGrantsLocationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccessPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessPointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccessPointsForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessPointsForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMultiRegionAccessPoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMultiRegionAccessPointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRegionalBuckets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRegionalBucketsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStorageLensConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStorageLensConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listStorageLensGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStorageLensGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAccessGrantsInstanceResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccessGrantsInstanceResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAccessPointConfigurationForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccessPointConfigurationForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAccessPointPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccessPointPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAccessPointPolicyForObjectLambda(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccessPointPolicyForObjectLambdaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketLifecycleConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketLifecycleConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBucketVersioning(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBucketVersioningAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putJobTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putJobTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putMultiRegionAccessPointPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putMultiRegionAccessPointPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPublicAccessBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPublicAccessBlockAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putStorageLensConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putStorageLensConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putStorageLensConfigurationTagging(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putStorageLensConfigurationTaggingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result submitMultiRegionAccessPointRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise submitMultiRegionAccessPointRoutesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAccessGrantsLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessGrantsLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateJobPriority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobPriorityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateJobStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateStorageLensGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStorageLensGroupAsync(array $args = [])
 */
class S3ControlClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        return $args + [
            'use_dual_stack_endpoint' => [
                'type' => 'config',
                'valid' => ['bool'],
                'doc' => 'Set to true to send requests to an S3 Control Dual Stack'
                    . ' endpoint by default, which enables IPv6 Protocol.'
                    . ' Can be enabled or disabled on individual operations by setting'
                    . ' \'@use_dual_stack_endpoint\' to true or false.',
                'default' => false,
            ],
            'use_arn_region' => [
                'type'    => 'config',
                'valid'   => [
                    'bool',
                    Configuration::class,
                    CacheInterface::class,
                    'callable'
                ],
                'doc'     => 'Set to true to allow passed in ARNs to override'
                    . ' client region. Accepts...',
                'fn' => [__CLASS__, '_apply_use_arn_region'],
                'default' => [UseArnRegionConfigurationProvider::class, 'defaultProvider'],
            ],
        ];
    }

    public static function _apply_use_arn_region($value, array &$args, HandlerList $list)
    {
        if ($value instanceof CacheInterface) {
            $value = UseArnRegionConfigurationProvider::defaultProvider($args);
        }
        if (is_callable($value)) {
            $value = $value();
        }
        if ($value instanceof PromiseInterface) {
            $value = $value->wait();
        }
        if ($value instanceof ConfigurationInterface) {
            $args['use_arn_region'] = $value;
        } else {
            // The Configuration class itself will validate other inputs
            $args['use_arn_region'] = new Configuration($value);
        }
    }

    /**
     * {@inheritdoc}
     *
     * In addition to the options available to
     * {@see Aws\AwsClient::__construct}, S3ControlClient accepts the following
     * option:
     *
     * - use_dual_stack_endpoint: (bool) Set to true to send requests to an S3
     *   Control Dual Stack endpoint by default, which enables IPv6 Protocol.
     *   Can be enabled or disabled on individual operations by setting
     *   '@use_dual_stack_endpoint\' to true or false. Note:
     *   you cannot use it together with an accelerate endpoint.
     *
     * @param array $args
     */
    public function __construct(array $args)
    {
        parent::__construct($args);

        if ($this->isUseEndpointV2()) {
            $this->processEndpointV2Model();
        }
        $stack = $this->getHandlerList();
        $stack->appendBuild(
            EndpointArnMiddleware::wrap(
                $this->getApi(),
                $this->getRegion(),
                [
                    'use_arn_region' => $this->getConfig('use_arn_region'),
                    'dual_stack' =>
                        $this->getConfig('use_dual_stack_endpoint')->isUseDualStackEndpoint(),
                    'endpoint' => isset($args['endpoint'])
                        ? $args['endpoint']
                        : null,
                    'use_fips_endpoint' => $this->getConfig('use_fips_endpoint'),
                ],
                $this->isUseEndpointV2()
            ),
            's3control.endpoint_arn_middleware'
        );
    }

    /**
     * Modifies API definition to remove `AccountId`
     * host prefix.  This is now handled by the endpoint ruleset.
     *
     * @return void
     *
     * @internal
     */
    private function processEndpointV2Model()
    {
        $definition = $this->getApi()->getDefinition();
        $this->removeHostPrefix($definition);
        $this->removeRequiredMember($definition);
        $this->getApi()->setDefinition($definition);
    }

    private function removeHostPrefix(&$definition)
    {
        foreach($definition['operations'] as &$operation) {
            if (isset($operation['endpoint']['hostPrefix'])
                && $operation['endpoint']['hostPrefix'] === '{AccountId}.'
            ) {
                $operation['endpoint']['hostPrefix'] = str_replace(
                    '{AccountId}.',
                    '',
                    $operation['endpoint']['hostPrefix']
                );
            }
        }
    }

    private function removeRequiredMember(&$definition)
    {
        foreach($definition['shapes'] as &$shape) {
            if (isset($shape['required'])
            ) {
                $found = array_search('AccountId', $shape['required']);

                if ($found !== false) {
                    unset($shape['required'][$found]);
                }
            }
        }
    }
}
