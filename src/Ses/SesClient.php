<?php
namespace CloudBeds\Aws\MskFork\Ses;

use CloudBeds\Aws\MskFork\Api\ApiProvider;
use CloudBeds\Aws\MskFork\Api\DocModel;
use CloudBeds\Aws\MskFork\Api\Service;
use CloudBeds\Aws\MskFork\Credentials\CredentialsInterface;

/**
 * This client is used to interact with the **Amazon Simple Email Service (Amazon SES)**.
 *
 * @method \CloudBeds\Aws\MskFork\Result cloneReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cloneReceiptRuleSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetEventDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConfigurationSetTrackingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetTrackingOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCustomVerificationEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomVerificationEmailTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReceiptFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReceiptFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReceiptRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReceiptRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReceiptRuleSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetEventDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConfigurationSetTrackingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetTrackingOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCustomVerificationEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomVerificationEmailTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteIdentityPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReceiptFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReceiptFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReceiptRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReceiptRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReceiptRuleSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVerifiedEmailAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVerifiedEmailAddressAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeActiveReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActiveReceiptRuleSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConfigurationSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReceiptRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReceiptRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReceiptRuleSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountSendingEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSendingEnabledAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCustomVerificationEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCustomVerificationEmailTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIdentityDkimAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityDkimAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIdentityMailFromDomainAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityMailFromDomainAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIdentityNotificationAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityNotificationAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIdentityPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityPoliciesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIdentityVerificationAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityVerificationAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSendQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSendQuotaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSendStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSendStatisticsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listConfigurationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCustomVerificationEmailTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCustomVerificationEmailTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listIdentityPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityPoliciesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReceiptFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceiptFiltersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listReceiptRuleSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceiptRuleSetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVerifiedEmailAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVerifiedEmailAddressesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putConfigurationSetDeliveryOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetDeliveryOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putIdentityPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIdentityPolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result reorderReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reorderReceiptRuleSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendBounce(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendBounceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendBulkTemplatedEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendBulkTemplatedEmailAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendCustomVerificationEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendCustomVerificationEmailAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendEmailAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendRawEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendRawEmailAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendTemplatedEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTemplatedEmailAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setActiveReceiptRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setActiveReceiptRuleSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setIdentityDkimEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityDkimEnabledAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setIdentityFeedbackForwardingEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityFeedbackForwardingEnabledAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setIdentityHeadersInNotificationsEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityHeadersInNotificationsEnabledAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setIdentityMailFromDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityMailFromDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setIdentityNotificationTopic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIdentityNotificationTopicAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setReceiptRulePosition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setReceiptRulePositionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result testRenderTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testRenderTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAccountSendingEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountSendingEnabledAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationSetEventDestinationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConfigurationSetReputationMetricsEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationSetReputationMetricsEnabledAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConfigurationSetSendingEnabled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationSetSendingEnabledAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConfigurationSetTrackingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationSetTrackingOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCustomVerificationEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCustomVerificationEmailTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateReceiptRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReceiptRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result verifyDomainDkim(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyDomainDkimAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result verifyDomainIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyDomainIdentityAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result verifyEmailAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyEmailAddressAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result verifyEmailIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyEmailIdentityAsync(array $args = [])
 */
class SesClient extends \CloudBeds\Aws\MskFork\AwsClient
{
    /**
     * @deprecated This method will no longer work due to the deprecation of
     *             V2 credentials with SES as of 03/25/2021
     * Create an SMTP password for a given IAM user's credentials.
     *
     * The SMTP username is the Access Key ID for the provided credentials.
     *
     * @link http://docs.aws.amazon.com/ses/latest/DeveloperGuide/smtp-credentials.html#smtp-credentials-convert
     *
     * @param CredentialsInterface $creds
     *
     * @return string
     */
    public static function generateSmtpPassword(CredentialsInterface $creds)
    {
        static $version = "\x02";
        static $algo = 'sha256';
        static $message = 'SendRawEmail';
        $signature = hash_hmac($algo, $message, $creds->getSecretKey(), true);

        return base64_encode($version . $signature);
    }

    /**
     * Create an SMTP password for a given IAM user's credentials.
     *
     * The SMTP username is the Access Key ID for the provided credentials. This
     * utility method is not guaranteed to work indefinitely and is provided as
     * a convenience to customers using the generateSmtpPassword method.  It is
     * not recommended for use in production
     *
     * @link https://docs.aws.amazon.com/ses/latest/DeveloperGuide/smtp-credentials.html#smtp-credentials-convert
     *
     * @param CredentialsInterface $creds
     * @param string $region
     *
     * @return string
     */
    public static function generateSmtpPasswordV4(CredentialsInterface $creds, $region)
    {
        $key = $creds->getSecretKey();

        $date = "11111111";
        $service = "ses";
        $terminal = "aws4_request";
        $message = "SendRawEmail";
        $version = 0x04;

        $signature = self::sign($date, "AWS4" . $key);
        $signature = self::sign($region, $signature);
        $signature = self::sign($service, $signature);
        $signature = self::sign($terminal, $signature);
        $signature = self::sign($message, $signature);
        $signatureAndVersion = pack('c', $version) . $signature;

        return  base64_encode($signatureAndVersion);
    }

    private static function sign($key, $message) {
        return hash_hmac('sha256', $key, $message, true);
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        $b64 = '<div class="alert alert-info">This value will be base64 encoded on your behalf.</div>';

        $docs['shapes']['RawMessage']['append'] = $b64;

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
