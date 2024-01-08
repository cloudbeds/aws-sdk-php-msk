<?php
namespace CloudBeds\Aws\MskFork\BillingConductor;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWSBillingConductor** service.
 * @method \CloudBeds\Aws\MskFork\Result associateAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateAccountsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associatePricingRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePricingRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchAssociateResourcesToCustomLineItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchAssociateResourcesToCustomLineItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDisassociateResourcesFromCustomLineItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisassociateResourcesFromCustomLineItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBillingGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCustomLineItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomLineItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPricingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPricingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPricingRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPricingRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBillingGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCustomLineItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomLineItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePricingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePricingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePricingRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePricingRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateAccountsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociatePricingRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePricingRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccountAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBillingGroupCostReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBillingGroupCostReportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBillingGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBillingGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCustomLineItemVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCustomLineItemVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCustomLineItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCustomLineItemsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPricingPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPricingPlansAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPricingPlansAssociatedWithPricingRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPricingPlansAssociatedWithPricingRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPricingRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPricingRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPricingRulesAssociatedToPricingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPricingRulesAssociatedToPricingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listResourcesAssociatedToCustomLineItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesAssociatedToCustomLineItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBillingGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCustomLineItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCustomLineItemAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePricingPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePricingPlanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePricingRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePricingRuleAsync(array $args = [])
 */
class BillingConductorClient extends AwsClient {}
