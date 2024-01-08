<?php
namespace CloudBeds\Aws\MskFork\GreengrassV2;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Greengrass V2** service.
 * @method \CloudBeds\Aws\MskFork\Result associateServiceRoleToAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateServiceRoleToAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchAssociateClientDeviceWithCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchAssociateClientDeviceWithCoreDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDisassociateClientDeviceFromCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisassociateClientDeviceFromCoreDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result cancelDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createComponentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComponentVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteComponentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCoreDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComponentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateServiceRoleFromAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateServiceRoleFromAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComponentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getComponentVersionArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComponentVersionArtifactAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectivityInfoAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCoreDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceRoleForAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceRoleForAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listClientDevicesAssociatedWithCoreDevice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClientDevicesAssociatedWithCoreDeviceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listComponentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listCoreDevices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoreDevicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeploymentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listEffectiveDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEffectiveDeploymentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listInstalledComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInstalledComponentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resolveComponentCandidates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveComponentCandidatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectivityInfoAsync(array $args = [])
 */
class GreengrassV2Client extends AwsClient {}
