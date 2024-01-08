<?php
namespace CloudBeds\Aws\MskFork\GlueDataBrew;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Glue DataBrew** service.
 * @method \CloudBeds\Aws\MskFork\Result batchDeleteRecipeVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteRecipeVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createProfileJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProfileJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRecipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRecipeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRecipeJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRuleset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRulesetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRecipeVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecipeVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRuleset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRulesetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRuleset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRulesetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScheduleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecipeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecipeVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecipes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecipesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRulesets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSchedules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchedulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result publishRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishRecipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendProjectSessionAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendProjectSessionActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startProjectSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startProjectSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopJobRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopJobRunAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateProfileJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProfileJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecipeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRecipeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecipeJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRuleset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRulesetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScheduleAsync(array $args = [])
 */
class GlueDataBrewClient extends AwsClient {}
