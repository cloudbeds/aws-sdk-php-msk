<?php
namespace CloudBeds\Aws\MskFork\EventBridge;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon EventBridge** service.
 * @method \CloudBeds\Aws\MskFork\Result activateEventSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateEventSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelReplay(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelReplayAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createApiDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createArchiveAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEventBus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventBusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPartnerEventSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPartnerEventSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deactivateEventSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateEventSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deauthorizeConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deauthorizeConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApiDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteArchiveAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEventBus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventBusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePartnerEventSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePartnerEventSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeApiDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApiDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeArchiveAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventBus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventBusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePartnerEventSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePartnerEventSourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplay(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplayAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApiDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApiDestinationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listArchives(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listArchivesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConnectionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEventBuses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventBusesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEventSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventSourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPartnerEventSourceAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPartnerEventSourceAccountsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPartnerEventSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPartnerEventSourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReplays(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReplaysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRuleNamesByTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRuleNamesByTargetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTargetsByRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsByRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPartnerEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPartnerEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTargetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removePermissionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTargetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startReplay(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReplayAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result testEventPattern(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testEventPatternAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApiDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateArchive(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateArchiveAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEndpointAsync(array $args = [])
 */
class EventBridgeClient extends AwsClient {
    public function __construct(array $args)
    {
        parent::__construct($args);

        if ($this->isUseEndpointV2()) {
            $stack = $this->getHandlerList();
            $isCustomEndpoint = isset($args['endpoint']);
            $stack->appendBuild(
                EventBridgeEndpointMiddleware::wrap(
                    $this->getRegion(),
                    [
                        'use_fips_endpoint' =>
                            $this->getConfig('use_fips_endpoint')->isUseFipsEndpoint(),
                        'dual_stack' =>
                            $this->getConfig('use_dual_stack_endpoint')->isUseDualStackEndpoint(),
                    ],
                    $this->getConfig('endpoint_provider'),
                    $isCustomEndpoint
                ),
                'eventbridge.endpoint_middleware'
            );
        }
    }
}
