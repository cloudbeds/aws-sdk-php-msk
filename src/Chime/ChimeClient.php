<?php
namespace CloudBeds\Aws\MskFork\Chime;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Chime** service.
 * @method \CloudBeds\Aws\MskFork\Result associatePhoneNumberWithUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePhoneNumberWithUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associatePhoneNumbersWithVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePhoneNumbersWithVoiceConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associatePhoneNumbersWithVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePhoneNumbersWithVoiceConnectorGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result associateSigninDelegateGroupsWithAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateSigninDelegateGroupsWithAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchCreateAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchCreateChannelMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateChannelMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchCreateRoomMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateRoomMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchDeletePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeletePhoneNumberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchSuspendUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSuspendUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchUnsuspendUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUnsuspendUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchUpdatePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdatePhoneNumberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result batchUpdateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAppInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAppInstanceAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppInstanceAdminAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppInstanceUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createChannelBan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelBanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createChannelMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createChannelModerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelModeratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMediaCapturePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMediaCapturePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMeetingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMeetingDialOut(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMeetingDialOutAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createMeetingWithAttendees(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMeetingWithAttendeesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createPhoneNumberOrder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPhoneNumberOrderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createProxySession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProxySessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoomAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createRoomMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoomMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSipMediaApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSipMediaApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSipMediaApplicationCall(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSipMediaApplicationCallAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSipRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSipRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVoiceConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVoiceConnectorGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAppInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAppInstanceAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppInstanceAdminAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAppInstanceStreamingConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppInstanceStreamingConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppInstanceUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannelBan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelBanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannelMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteChannelModerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelModeratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteEventsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventsConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMediaCapturePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMediaCapturePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMeetingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deletePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePhoneNumberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteProxySession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProxySessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteRoomMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoomMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSipMediaApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSipMediaApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSipRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSipRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceConnectorEmergencyCallingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorEmergencyCallingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceConnectorOrigination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorOriginationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceConnectorProxy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorProxyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceConnectorStreamingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorStreamingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceConnectorTermination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorTerminationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteVoiceConnectorTerminationCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVoiceConnectorTerminationCredentialsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAppInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAppInstanceAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppInstanceAdminAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppInstanceUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChannelBan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelBanAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChannelMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChannelMembershipForAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelMembershipForAppInstanceUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChannelModeratedByAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelModeratedByAppInstanceUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeChannelModerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelModeratorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociatePhoneNumberFromUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePhoneNumberFromUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociatePhoneNumbersFromVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePhoneNumbersFromVoiceConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociatePhoneNumbersFromVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePhoneNumbersFromVoiceConnectorGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateSigninDelegateGroupsFromAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateSigninDelegateGroupsFromAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAppInstanceRetentionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppInstanceRetentionSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAppInstanceStreamingConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppInstanceStreamingConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getEventsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventsConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getGlobalSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGlobalSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMediaCapturePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMediaCapturePipelineAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMeetingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMessagingSessionEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMessagingSessionEndpointAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPhoneNumberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPhoneNumberOrder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPhoneNumberOrderAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getPhoneNumberSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPhoneNumberSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getProxySession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProxySessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRetentionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRetentionSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoomAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSipMediaApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSipMediaApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSipMediaApplicationLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSipMediaApplicationLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSipRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSipRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceConnectorEmergencyCallingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorEmergencyCallingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceConnectorLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceConnectorOrigination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorOriginationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceConnectorProxy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorProxyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceConnectorStreamingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorStreamingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceConnectorTermination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorTerminationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getVoiceConnectorTerminationHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVoiceConnectorTerminationHealthAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result inviteUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise inviteUsersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAppInstanceAdmins(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppInstanceAdminsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAppInstanceUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppInstanceUsersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAppInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppInstancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAttendeeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttendeeTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAttendees(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttendeesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listBots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannelBans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelBansAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannelMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelMembershipsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannelMembershipsForAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelMembershipsForAppInstanceUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannelMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelMessagesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannelModerators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelModeratorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listChannelsModeratedByAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsModeratedByAppInstanceUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMediaCapturePipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMediaCapturePipelinesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMeetingTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMeetingTagsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listMeetings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMeetingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPhoneNumberOrders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPhoneNumberOrdersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listPhoneNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPhoneNumbersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listProxySessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProxySessionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRoomMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRoomMembershipsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRooms(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRoomsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSipMediaApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSipMediaApplicationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSipRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSipRulesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSupportedPhoneNumberCountries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSupportedPhoneNumberCountriesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVoiceConnectorGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVoiceConnectorGroupsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVoiceConnectorTerminationCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVoiceConnectorTerminationCredentialsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listVoiceConnectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVoiceConnectorsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result logoutUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logoutUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAppInstanceRetentionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAppInstanceRetentionSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putAppInstanceStreamingConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAppInstanceStreamingConfigurationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putEventsConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEventsConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putRetentionSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRetentionSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putSipMediaApplicationLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSipMediaApplicationLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putVoiceConnectorEmergencyCallingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorEmergencyCallingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putVoiceConnectorLoggingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorLoggingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putVoiceConnectorOrigination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorOriginationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putVoiceConnectorProxy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorProxyAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putVoiceConnectorStreamingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorStreamingConfigurationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putVoiceConnectorTermination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorTerminationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putVoiceConnectorTerminationCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putVoiceConnectorTerminationCredentialsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result redactChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise redactChannelMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result redactConversationMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise redactConversationMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result redactRoomMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise redactRoomMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result regenerateSecurityToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise regenerateSecurityTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result resetPersonalPIN(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPersonalPINAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result restorePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restorePhoneNumberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result searchAvailablePhoneNumbers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAvailablePhoneNumbersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result sendChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendChannelMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMeetingTranscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMeetingTranscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result stopMeetingTranscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopMeetingTranscriptionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagMeetingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagAttendee(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagAttendeeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagMeeting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagMeetingAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAppInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAppInstanceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAppInstanceUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelMessageAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateChannelReadMarker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelReadMarkerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateGlobalSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGlobalSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePhoneNumber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePhoneNumberAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updatePhoneNumberSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePhoneNumberSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateProxySession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProxySessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRoom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoomAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateRoomMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoomMembershipAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSipMediaApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSipMediaApplicationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSipMediaApplicationCall(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSipMediaApplicationCallAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateSipRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSipRuleAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserSettingsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateVoiceConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVoiceConnectorAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateVoiceConnectorGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVoiceConnectorGroupAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result validateE911Address(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateE911AddressAsync(array $args = [])
 */
class ChimeClient extends AwsClient {}
