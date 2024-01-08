<?php
namespace CloudBeds\Aws\MskFork\Route53;

use CloudBeds\Aws\MskFork\AwsClient;
use CloudBeds\Aws\MskFork\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Route 53** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result activateKeySigningKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateKeySigningKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateVPCWithHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateVPCWithHostedZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result changeCidrCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeCidrCollectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result changeResourceRecordSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeResourceRecordSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result changeTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCidrCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCidrCollectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHealthCheckAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHostedZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createKeySigningKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeySigningKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createQueryLoggingConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createQueryLoggingConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReusableDelegationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReusableDelegationSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTrafficPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrafficPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrafficPolicyInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTrafficPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrafficPolicyVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createVPCAssociationAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVPCAssociationAuthorizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deactivateKeySigningKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateKeySigningKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCidrCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCidrCollectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHealthCheckAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHostedZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteKeySigningKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeySigningKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteQueryLoggingConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQueryLoggingConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReusableDelegationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReusableDelegationSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTrafficPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrafficPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrafficPolicyInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVPCAssociationAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVPCAssociationAuthorizationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableHostedZoneDNSSEC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableHostedZoneDNSSECAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateVPCFromHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateVPCFromHostedZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableHostedZoneDNSSEC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableHostedZoneDNSSECAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountLimitAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCheckerIpRanges(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCheckerIpRangesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDNSSEC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDNSSECAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGeoLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGeoLocationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHealthCheckCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckCountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHealthCheckLastFailureReason(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckLastFailureReasonAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHealthCheckStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHealthCheckStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHostedZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHostedZoneCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHostedZoneCountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getHostedZoneLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHostedZoneLimitAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getQueryLoggingConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQueryLoggingConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getReusableDelegationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReusableDelegationSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getReusableDelegationSetLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReusableDelegationSetLimitAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTrafficPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrafficPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrafficPolicyInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTrafficPolicyInstanceCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrafficPolicyInstanceCountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCidrBlocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCidrBlocksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCidrCollections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCidrCollectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCidrLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCidrLocationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGeoLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGeoLocationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHealthChecks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHealthChecksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHostedZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHostedZonesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHostedZonesByName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHostedZonesByNameAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHostedZonesByVPC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHostedZonesByVPCAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listQueryLoggingConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQueryLoggingConfigsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listResourceRecordSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceRecordSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReusableDelegationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReusableDelegationSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTrafficPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPoliciesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTrafficPolicyInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTrafficPolicyInstancesByHostedZone(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyInstancesByHostedZoneAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTrafficPolicyInstancesByPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyInstancesByPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTrafficPolicyVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrafficPolicyVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVPCAssociationAuthorizations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVPCAssociationAuthorizationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result testDNSAnswer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testDNSAnswerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHealthCheckAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateHostedZoneComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHostedZoneCommentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTrafficPolicyComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrafficPolicyCommentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTrafficPolicyInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrafficPolicyInstanceAsync(array $args = [])
 */
class Route53Client extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->getHandlerList()->appendInit($this->cleanIdFn(), 'route53.clean_id');
    }

    private function cleanIdFn()
    {
        return function (callable $handler) {
            return function (CommandInterface $c, RequestInterface $r = null) use ($handler) {
                foreach (['Id', 'HostedZoneId', 'DelegationSetId'] as $clean) {
                    if ($c->hasParam($clean)) {
                        $c[$clean] = $this->cleanId($c[$clean]);
                    }
                }
                return $handler($c, $r);
            };
        };
    }

    private function cleanId($id)
    {
        static $toClean = ['/hostedzone/', '/change/', '/delegationset/'];

        return str_replace($toClean, '', $id);
    }
}
