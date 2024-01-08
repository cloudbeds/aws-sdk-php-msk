<?php
namespace CloudBeds\Aws\MskFork\CodeGuruReviewer;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon CodeGuru Reviewer** service.
 * @method \CloudBeds\Aws\MskFork\Result associateRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateRepositoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCodeReview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCodeReviewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeCodeReview(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeReviewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRecommendationFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecommendationFeedbackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeRepositoryAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRepositoryAssociationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRepositoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCodeReviews(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCodeReviewsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecommendationFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecommendationFeedbackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRepositoryAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositoryAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRecommendationFeedback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRecommendationFeedbackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class CodeGuruReviewerClient extends AwsClient {}
