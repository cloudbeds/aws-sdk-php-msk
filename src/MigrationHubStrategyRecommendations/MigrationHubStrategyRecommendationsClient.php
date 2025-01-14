<?php
namespace CloudBeds\Aws\MskFork\MigrationHubStrategyRecommendations;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Migration Hub Strategy Recommendations** service.
 * @method \CloudBeds\Aws\MskFork\Result getApplicationComponentDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationComponentDetailsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApplicationComponentStrategies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationComponentStrategiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAssessment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssessmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getImportFileTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImportFileTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLatestAssessmentId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLatestAssessmentIdAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPortfolioPreferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPortfolioPreferencesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPortfolioSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPortfolioSummaryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecommendationReportDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommendationReportDetailsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServerDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServerDetailsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServerStrategies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServerStrategiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAnalyzableServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnalyzableServersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplicationComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationComponentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCollectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollectorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listImportFileTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImportFileTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putPortfolioPreferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPortfolioPreferencesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startAssessment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAssessmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startImportFileTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImportFileTaskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startRecommendationReportGeneration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRecommendationReportGenerationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopAssessment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAssessmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplicationComponentConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationComponentConfigAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateServerConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServerConfigAsync(array $args = [])
 */
class MigrationHubStrategyRecommendationsClient extends AwsClient {}
