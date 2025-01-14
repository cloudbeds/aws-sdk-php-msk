<?php
namespace CloudBeds\Aws\MskFork\ForecastQueryService;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Forecast Query Service** service.
 * @method \CloudBeds\Aws\MskFork\Result queryForecast(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryForecastAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result queryWhatIfForecast(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryWhatIfForecastAsync(array $args = [])
 */
class ForecastQueryServiceClient extends AwsClient {}
