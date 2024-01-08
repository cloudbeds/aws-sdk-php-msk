<?php
namespace CloudBeds\Aws\MskFork\Pinpoint;

use CloudBeds\Aws\MskFork\Api\ApiProvider;
use CloudBeds\Aws\MskFork\Api\DocModel;
use CloudBeds\Aws\MskFork\Api\Service;
use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Pinpoint** service.
 * @method \CloudBeds\Aws\MskFork\Result createApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCampaignAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEmailTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createExportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createExportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createInAppTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInAppTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createJourney(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJourneyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPushTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPushTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRecommenderConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRecommenderConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSegment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSegmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSmsTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSmsTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createVoiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVoiceTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAdmChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAdmChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApnsChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApnsChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApnsSandboxChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApnsSandboxChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApnsVoipChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApnsVoipChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApnsVoipSandboxChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApnsVoipSandboxChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBaiduChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBaiduChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCampaignAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEmailChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEmailChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEmailTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEventStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteGcmChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGcmChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteInAppTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInAppTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteJourney(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJourneyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePushTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePushTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRecommenderConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRecommenderConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSegment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSegmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSmsChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSmsChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSmsTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSmsTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteUserEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAdmChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAdmChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApnsChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApnsChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApnsSandboxChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApnsSandboxChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApnsVoipChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApnsVoipChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApnsVoipSandboxChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApnsVoipSandboxChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApplicationDateRangeKpi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationDateRangeKpiAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApplicationSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApplicationSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBaiduChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBaiduChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCampaignActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignActivitiesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCampaignDateRangeKpi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignDateRangeKpiAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCampaignVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCampaignVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getCampaigns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCampaignsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEmailChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEmailChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEmailTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUserEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEventStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getExportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getExportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGcmChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGcmChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImportJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInAppMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInAppMessagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getInAppTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInAppTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJourney(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJourneyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJourneyDateRangeKpi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJourneyDateRangeKpiAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJourneyExecutionActivityMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJourneyExecutionActivityMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJourneyExecutionMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJourneyExecutionMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJourneyRunExecutionActivityMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJourneyRunExecutionActivityMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJourneyRunExecutionMetrics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJourneyRunExecutionMetricsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getJourneyRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJourneyRunsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPushTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPushTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecommenderConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommenderConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRecommenderConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRecommenderConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSegment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSegmentExportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentExportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSegmentImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentImportJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSegmentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSegmentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSegments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSegmentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSmsChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSmsChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSmsTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSmsTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUserEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserEndpointsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listJourneys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJourneysAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTemplateVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTemplateVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTemplatesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result phoneNumberValidate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise phoneNumberValidateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putEventStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventStreamAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result removeAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAttributesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendMessagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendOTPMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendOTPMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendUsersMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendUsersMessagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAdmChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAdmChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApnsChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApnsChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApnsSandboxChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApnsSandboxChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApnsVoipChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApnsVoipChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApnsVoipSandboxChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApnsVoipSandboxChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateApplicationSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateBaiduChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBaiduChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCampaignAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEmailChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEmailChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEmailTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateUserEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateUserEndpointsBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserEndpointsBatchAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGcmChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGcmChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateInAppTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInAppTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateJourney(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJourneyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateJourneyState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJourneyStateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePushTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePushTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRecommenderConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRecommenderConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSegment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSegmentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSmsChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSmsChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSmsTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSmsTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateTemplateActiveVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTemplateActiveVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateVoiceChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVoiceChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateVoiceTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVoiceTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result verifyOTPMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyOTPMessageAsync(array $args = [])
 */
class PinpointClient extends AwsClient {}