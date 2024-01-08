<?php
namespace CloudBeds\Aws\MskFork\ARCZonalShift;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS ARC - Zonal Shift** service.
 * @method \CloudBeds\Aws\MskFork\Result cancelZonalShift(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelZonalShiftAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPracticeRunConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPracticeRunConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePracticeRunConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePracticeRunConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getManagedResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getManagedResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAutoshifts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAutoshiftsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listManagedResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listManagedResourcesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listZonalShifts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listZonalShiftsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startZonalShift(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startZonalShiftAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePracticeRunConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePracticeRunConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateZonalAutoshiftConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateZonalAutoshiftConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateZonalShift(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateZonalShiftAsync(array $args = [])
 */
class ARCZonalShiftClient extends AwsClient {}
