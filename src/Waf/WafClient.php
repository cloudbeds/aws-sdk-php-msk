<?php
namespace CloudBeds\Aws\MskFork\Waf;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS WAF** service.
 *
 * @method \CloudBeds\Aws\MskFork\Result createByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createByteMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGeoMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGeoMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIPSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRateBasedRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRateBasedRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRegexMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRegexMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRegexPatternSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRegexPatternSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuleGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSizeConstraintSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSqlInjectionMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebACLAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWebACLMigrationStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebACLMigrationStackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createXssMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteByteMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteGeoMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGeoMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIPSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePermissionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePermissionPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRateBasedRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRateBasedRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRegexMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegexMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRegexPatternSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegexPatternSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSizeConstraintSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSqlInjectionMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebACLAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteXssMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getByteMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChangeToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangeTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChangeTokenStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChangeTokenStatusAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGeoMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGeoMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIPSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPermissionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPermissionPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRateBasedRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRateBasedRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRateBasedRuleManagedKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRateBasedRuleManagedKeysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRegexMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegexMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRegexPatternSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegexPatternSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuleGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSampledRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSampledRequestsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSizeConstraintSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSqlInjectionMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWebACLAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getXssMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listActivatedRulesInRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActivatedRulesInRuleGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listByteMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listByteMatchSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listGeoMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGeoMatchSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listIPSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIPSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLoggingConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLoggingConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRateBasedRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRateBasedRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRegexMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRegexMatchSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRegexPatternSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRegexPatternSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRuleGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRuleGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSizeConstraintSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSizeConstraintSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSqlInjectionMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSqlInjectionMatchSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSubscribedRuleGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscribedRuleGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWebACLs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWebACLsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listXssMatchSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listXssMatchSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPermissionPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPermissionPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateByteMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateByteMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGeoMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGeoMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateIPSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIPSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRateBasedRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRateBasedRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRegexMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRegexMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRegexPatternSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRegexPatternSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRuleGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuleGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSizeConstraintSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSizeConstraintSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSqlInjectionMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSqlInjectionMatchSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateWebACL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWebACLAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateXssMatchSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateXssMatchSetAsync(array $args = [])
 */
class WafClient extends AwsClient {}
