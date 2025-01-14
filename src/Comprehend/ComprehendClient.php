<?php
namespace CloudBeds\Aws\MskFork\Comprehend;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Comprehend** service.
 * @method \CloudBeds\Aws\MskFork\Result batchDetectDominantLanguage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDetectDominantLanguageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDetectEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDetectEntitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDetectKeyPhrases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDetectKeyPhrasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDetectSentiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDetectSentimentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDetectSyntax(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDetectSyntaxAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDetectTargetedSentiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDetectTargetedSentimentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result classifyDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise classifyDocumentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result containsPiiEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise containsPiiEntitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDocumentClassifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentClassifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEntityRecognizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEntityRecognizerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createFlywheel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFlywheelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDocumentClassifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentClassifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEntityRecognizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEntityRecognizerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFlywheel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFlywheelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDataset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDocumentClassificationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentClassificationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDocumentClassifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentClassifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDominantLanguageDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDominantLanguageDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEntitiesDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEntitiesDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEntityRecognizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEntityRecognizerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeEventsDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventsDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFlywheel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFlywheelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFlywheelIteration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFlywheelIterationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeKeyPhrasesDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyPhrasesDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describePiiEntitiesDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePiiEntitiesDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSentimentDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSentimentDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTargetedSentimentDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTargetedSentimentDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeTopicsDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTopicsDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectDominantLanguage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectDominantLanguageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectEntitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectKeyPhrases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectKeyPhrasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectPiiEntities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectPiiEntitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectSentiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectSentimentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectSyntax(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectSyntaxAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectTargetedSentiment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectTargetedSentimentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detectToxicContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectToxicContentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importModelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDatasets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDocumentClassificationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentClassificationJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDocumentClassifierSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentClassifierSummariesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDocumentClassifiers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentClassifiersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDominantLanguageDetectionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDominantLanguageDetectionJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEntitiesDetectionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEntitiesDetectionJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEntityRecognizerSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEntityRecognizerSummariesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEntityRecognizers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEntityRecognizersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEventsDetectionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventsDetectionJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFlywheelIterationHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFlywheelIterationHistoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFlywheels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFlywheelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listKeyPhrasesDetectionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeyPhrasesDetectionJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPiiEntitiesDetectionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPiiEntitiesDetectionJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSentimentDetectionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSentimentDetectionJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTargetedSentimentDetectionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetedSentimentDetectionJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTopicsDetectionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTopicsDetectionJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startDocumentClassificationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDocumentClassificationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startDominantLanguageDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDominantLanguageDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startEntitiesDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startEntitiesDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startEventsDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startEventsDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startFlywheelIteration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFlywheelIterationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startKeyPhrasesDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startKeyPhrasesDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startPiiEntitiesDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPiiEntitiesDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startSentimentDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSentimentDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startTargetedSentimentDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTargetedSentimentDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startTopicsDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTopicsDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopDominantLanguageDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDominantLanguageDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopEntitiesDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopEntitiesDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopEventsDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopEventsDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopKeyPhrasesDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopKeyPhrasesDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopPiiEntitiesDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopPiiEntitiesDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopSentimentDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopSentimentDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopTargetedSentimentDetectionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTargetedSentimentDetectionJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopTrainingDocumentClassifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTrainingDocumentClassifierAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopTrainingEntityRecognizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopTrainingEntityRecognizerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateFlywheel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFlywheelAsync(array $args = [])
 */
class ComprehendClient extends AwsClient {}
