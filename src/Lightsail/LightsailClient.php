<?php
namespace CloudBeds\Aws\MskFork\Lightsail;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Lightsail** service.
 * @method \CloudBeds\Aws\MskFork\Result allocateStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateStaticIpAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result attachCertificateToDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachCertificateToDistributionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result attachDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachDiskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result attachInstancesToLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachInstancesToLoadBalancerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result attachLoadBalancerTlsCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachLoadBalancerTlsCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result attachStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachStaticIpAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result closeInstancePublicPorts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeInstancePublicPortsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result copySnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copySnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBucketAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBucketAccessKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCloudFormationStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudFormationStackAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createContactMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContactMethodAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createContainerService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContainerServiceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createContainerServiceDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContainerServiceDeploymentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createContainerServiceRegistryLogin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContainerServiceRegistryLoginAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDiskFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiskFromSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDiskSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiskSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDistributionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDomainEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainEntryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createGUISessionAccessDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGUISessionAccessDetailsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createInstanceSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createInstancesFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesFromSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyPairAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLoadBalancerTlsCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerTlsCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRelationalDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRelationalDatabaseFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRelationalDatabaseFromSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRelationalDatabaseSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRelationalDatabaseSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAutoSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAutoSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBucketAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBucketAccessKeyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteContactMethod(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContactMethodAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteContainerImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContainerImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteContainerService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContainerServiceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDiskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDiskSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDiskSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDistributionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDomainEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainEntryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteInstanceSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeyPairAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteKnownHostKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKnownHostKeysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLoadBalancerTlsCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerTlsCertificateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRelationalDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRelationalDatabaseSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRelationalDatabaseSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detachCertificateFromDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachCertificateFromDistributionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detachDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachDiskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detachInstancesFromLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachInstancesFromLoadBalancerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result detachStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachStaticIpAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disableAddOn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAddOnAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result downloadDefaultKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadDefaultKeyPairAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result enableAddOn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAddOnAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result exportSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getActiveNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActiveNamesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAlarms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAlarmsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAutoSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAutoSnapshotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBlueprints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlueprintsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketAccessKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketAccessKeysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketBundlesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBucketMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketMetricDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBuckets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBundlesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCertificatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCloudFormationStackRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudFormationStackRecordsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContactMethods(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactMethodsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContainerAPIMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerAPIMetadataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContainerImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerImagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContainerLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerLogAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContainerServiceDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerServiceDeploymentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContainerServiceMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerServiceMetricDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContainerServicePowers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerServicePowersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getContainerServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerServicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCostEstimate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCostEstimateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiskAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDiskSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiskSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDiskSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiskSnapshotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDisks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDisksAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDistributionBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDistributionBundlesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDistributionLatestCacheReset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDistributionLatestCacheResetAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDistributionMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDistributionMetricDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDistributions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDistributionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getExportSnapshotRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportSnapshotRecordsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInstanceAccessDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAccessDetailsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInstanceMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceMetricDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInstancePortStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstancePortStatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInstanceSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInstanceSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceSnapshotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInstanceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPairAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getKeyPairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPairsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoadBalancerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoadBalancerMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoadBalancerMetricDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoadBalancerTlsCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoadBalancerTlsCertificatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoadBalancerTlsPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoadBalancerTlsPoliciesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoadBalancersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getOperationsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseBlueprints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseBlueprintsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseBundlesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseLogEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseLogStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseLogStreamsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseMasterUserPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseMasterUserPasswordAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseMetricDataAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseParametersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseSnapshotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabaseSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseSnapshotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRelationalDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStaticIpAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getStaticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStaticIpsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result importKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeyPairAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result isVpcPeered(array $args = [])
 * @method \GuzzleHttp\Promise\Promise isVpcPeeredAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result openInstancePublicPorts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openInstancePublicPortsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result peerVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise peerVpcAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putInstancePublicPorts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInstancePublicPortsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rebootInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result rebootRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootRelationalDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerContainerImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerContainerImageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result releaseStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseStaticIpAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resetDistributionCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetDistributionCacheAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendContactMethodVerification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendContactMethodVerificationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setIpAddressType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIpAddressTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result setResourceAccessForBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setResourceAccessForBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startGUISession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startGUISessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRelationalDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopGUISession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopGUISessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRelationalDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result testAlarm(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testAlarmAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result unpeerVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unpeerVpcAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateBucket(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBucketAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateBucketBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBucketBundleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateContainerService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContainerServiceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDistribution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDistributionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDistributionBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDistributionBundleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDomainEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainEntryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateInstanceMetadataOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInstanceMetadataOptionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLoadBalancerAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLoadBalancerAttributeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRelationalDatabaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRelationalDatabaseParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRelationalDatabaseParametersAsync(array $args = [])
 */
class LightsailClient extends AwsClient {}
