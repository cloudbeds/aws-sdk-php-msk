<?php
namespace CloudBeds\Aws\MskFork\mgn;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Application Migration Service** service.
 * @method \CloudBeds\Aws\MskFork\Result archiveApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise archiveApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result archiveWave(array $args = [])
 * @method \GuzzleHttp\Promise\Promise archiveWaveAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateSourceServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSourceServersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result changeServerLifeCycleState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise changeServerLifeCycleStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createLaunchConfigurationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLaunchConfigurationTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createReplicationConfigurationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationConfigurationTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWave(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWaveAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteLaunchConfigurationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLaunchConfigurationTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteReplicationConfigurationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationConfigurationTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSourceServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSourceServerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVcenterClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVcenterClientAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteWave(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWaveAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeJobLogItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobLogItemsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeLaunchConfigurationTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLaunchConfigurationTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeReplicationConfigurationTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReplicationConfigurationTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSourceServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSourceServersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeVcenterClients(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVcenterClientsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateSourceServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateSourceServersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disconnectFromService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disconnectFromServiceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result finalizeCutover(array $args = [])
 * @method \GuzzleHttp\Promise\Promise finalizeCutoverAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLaunchConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result initializeService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initializeServiceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listConnectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConnectorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listExportErrors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExportErrorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listExports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listExportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listImportErrors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImportErrorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listImports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImportsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listManagedAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listManagedAccountsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSourceServerActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSourceServerActionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTemplateActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTemplateActionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWaves(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWavesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result markAsArchived(array $args = [])
 * @method \GuzzleHttp\Promise\Promise markAsArchivedAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result pauseReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pauseReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putSourceServerAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSourceServerActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putTemplateAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putTemplateActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeSourceServerAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeSourceServerActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeTemplateAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTemplateActionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resumeReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result retryDataReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retryDataReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startCutover(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startCutoverAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startTest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTestAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopReplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result terminateTargetInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateTargetInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result unarchiveApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unarchiveApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result unarchiveWave(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unarchiveWaveAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLaunchConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateLaunchConfigurationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLaunchConfigurationTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReplicationConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateReplicationConfigurationTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReplicationConfigurationTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSourceServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSourceServerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSourceServerReplicationType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSourceServerReplicationTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateWave(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWaveAsync(array $args = [])
 */
class mgnClient extends AwsClient {}
