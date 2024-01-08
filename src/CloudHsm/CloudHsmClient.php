<?php
namespace CloudBeds\Aws\MskFork\CloudHsm;

use CloudBeds\Aws\MskFork\Api\ApiProvider;
use CloudBeds\Aws\MskFork\Api\DocModel;
use CloudBeds\Aws\MskFork\Api\Service;
use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with **AWS CloudHSM**.
 *
 * @method \CloudBeds\Aws\MskFork\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHapgAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHsmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLunaClientAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHapgAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHsmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLunaClientAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHapgAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHsmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLunaClientAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConfigFiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigFilesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAvailableZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableZonesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHapgs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHapgsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listHsms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHsmsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listLunaClients(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLunaClientsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyHapg(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyHapgAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyHsm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyHsmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result modifyLunaClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyLunaClientAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 */
class CloudHsmClient extends AwsClient {}
