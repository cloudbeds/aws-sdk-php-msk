<?php
namespace CloudBeds\Aws\MskFork\Personalize;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Personalize** service.
 * @method \CloudBeds\Aws\MskFork\Result createBatchInferenceJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBatchInferenceJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBatchSegmentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBatchSegmentJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCampaignAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDatasetExportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetExportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDatasetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDatasetImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEventTracker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventTrackerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMetricAttribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMetricAttributionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRecommender(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRecommenderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSolution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSolutionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSolutionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSolutionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCampaignAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDatasetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEventTracker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventTrackerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMetricAttribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMetricAttributionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRecommender(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecommenderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSolution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSolutionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAlgorithm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlgorithmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBatchInferenceJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBatchInferenceJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeBatchSegmentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBatchSegmentJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCampaignAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDatasetExportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetExportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDatasetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDatasetImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventTracker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventTrackerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFeatureTransformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFeatureTransformationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFilterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeMetricAttribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricAttributionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRecommender(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecommenderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSchemaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSolution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSolutionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSolutionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSolutionVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSolutionMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolutionMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBatchInferenceJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBatchInferenceJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBatchSegmentJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBatchSegmentJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCampaigns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCampaignsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatasetExportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetExportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatasetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatasetImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetImportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEventTrackers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventTrackersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFiltersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMetricAttributionMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricAttributionMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMetricAttributions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMetricAttributionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecipes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecipesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecommenders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecommendersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSolutionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSolutionVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSolutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSolutionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startRecommender(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRecommenderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopRecommender(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRecommenderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopSolutionVersionCreation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopSolutionVersionCreationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCampaignAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateMetricAttribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMetricAttributionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRecommender(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecommenderAsync(array $args = [])
 */
class PersonalizeClient extends AwsClient {}
