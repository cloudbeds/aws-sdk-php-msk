<?php
namespace CloudBeds\Aws\MskFork\Support;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * AWS Support client.
 *
 * @method \CloudBeds\Aws\MskFork\Result addAttachmentsToSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addAttachmentsToSetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result addCommunicationToCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addCommunicationToCaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAttachment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttachmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCommunications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCommunicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCreateCaseOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCreateCaseOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSeverityLevels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSeverityLevelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSupportedLanguages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSupportedLanguagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTrustedAdvisorCheckRefreshStatuses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckRefreshStatusesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTrustedAdvisorCheckResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckResultAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTrustedAdvisorCheckSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorCheckSummariesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTrustedAdvisorChecks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrustedAdvisorChecksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result refreshTrustedAdvisorCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise refreshTrustedAdvisorCheckAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resolveCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveCaseAsync(array $args = [])
 */
class SupportClient extends AwsClient {}
