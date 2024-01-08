<?php
namespace CloudBeds\Aws\MskFork\PersonalizeRuntime;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Personalize Runtime** service.
 * @method \CloudBeds\Aws\MskFork\Result getActionRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActionRecommendationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPersonalizedRanking(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPersonalizedRankingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommendationsAsync(array $args = [])
 */
class PersonalizeRuntimeClient extends AwsClient {}
