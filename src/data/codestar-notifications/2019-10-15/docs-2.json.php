<?php
// This file was auto-generated from sdk-root/src/data/codestar-notifications/2019-10-15/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>This AWS CodeStar Notifications API Reference provides descriptions and usage examples of the operations and data types for the AWS CodeStar Notifications API. You can use the AWS CodeStar Notifications API to work with the following objects:</p> <p>Notification rules, by calling the following: </p> <ul> <li> <p> <a>CreateNotificationRule</a>, which creates a notification rule for a resource in your account. </p> </li> <li> <p> <a>DeleteNotificationRule</a>, which deletes a notification rule. </p> </li> <li> <p> <a>DescribeNotificationRule</a>, which provides information about a notification rule. </p> </li> <li> <p> <a>ListNotificationRules</a>, which lists the notification rules associated with your account. </p> </li> <li> <p> <a>UpdateNotificationRule</a>, which changes the name, events, or targets associated with a notification rule. </p> </li> <li> <p> <a>Subscribe</a>, which subscribes a target to a notification rule. </p> </li> <li> <p> <a>Unsubscribe</a>, which removes a target from a notification rule. </p> </li> </ul> <p>Targets, by calling the following: </p> <ul> <li> <p> <a>DeleteTarget</a>, which removes a notification rule target from a notification rule. </p> </li> <li> <p> <a>ListTargets</a>, which lists the targets associated with a notification rule. </p> </li> </ul> <p>Events, by calling the following: </p> <ul> <li> <p> <a>ListEventTypes</a>, which lists the event types you can include in a notification rule. </p> </li> </ul> <p>Tags, by calling the following: </p> <ul> <li> <p> <a>ListTagsForResource</a>, which lists the tags already associated with a notification rule in your account. </p> </li> <li> <p> <a>TagResource</a>, which associates a tag you provide with a notification rule in your account. </p> </li> <li> <p> <a>UntagResource</a>, which removes a tag from a notification rule in your account. </p> </li> </ul> <p> For information about how to use CloudBeds\Aws\MskFork CodeStar Notifications, see the <a href="https://docs.aws.amazon.com/dtconsole/latest/userguide/what-is-dtconsole.html">Amazon Web Services Developer Tools Console User Guide</a>. </p>', 'operations' => [ 'CreateNotificationRule' => '<p>Creates a notification rule for a resource. The rule specifies the events you want notifications about and the targets (such as Chatbot topics or Chatbot clients configured for Slack) where you want to receive them.</p>', 'DeleteNotificationRule' => '<p>Deletes a notification rule for a resource.</p>', 'DeleteTarget' => '<p>Deletes a specified target for notifications.</p>', 'DescribeNotificationRule' => '<p>Returns information about a specified notification rule.</p>', 'ListEventTypes' => '<p>Returns information about the event types available for configuring notifications.</p>', 'ListNotificationRules' => '<p>Returns a list of the notification rules for an Amazon Web Services account.</p>', 'ListTagsForResource' => '<p>Returns a list of the tags associated with a notification rule.</p>', 'ListTargets' => '<p>Returns a list of the notification rule targets for an Amazon Web Services account.</p>', 'Subscribe' => '<p>Creates an association between a notification rule and an Chatbot topic or Chatbot client so that the associated target can receive notifications when the events described in the rule are triggered.</p>', 'TagResource' => '<p>Associates a set of provided tags with a notification rule.</p>', 'Unsubscribe' => '<p>Removes an association between a notification rule and an Chatbot topic so that subscribers to that topic stop receiving notifications when the events described in the rule are triggered.</p>', 'UntagResource' => '<p>Removes the association between one or more provided tags and a notification rule.</p>', 'UpdateNotificationRule' => '<p>Updates a notification rule for a resource. You can change the events that trigger the notification rule, the status of the rule, and the targets that receive the notifications.</p> <note> <p>To add or remove tags for a notification rule, you must use <a>TagResource</a> and <a>UntagResource</a>.</p> </note>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>AWS CodeStar Notifications can\'t create the notification rule because you do not have sufficient permissions.</p>', 'refs' => [], ], 'ClientRequestToken' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationRuleRequest$ClientRequestToken' => '<p>A unique, client-generated idempotency token that, when provided in a request, ensures the request cannot be repeated with a changed parameter. If a request with the same parameters is received and a token is included, the request returns information about the initial request that used that token.</p> <note> <p>The Amazon Web Services SDKs prepopulate client request tokens. If you are using an Amazon Web Services SDK, an idempotency token is created for you.</p> </note>', 'SubscribeRequest$ClientRequestToken' => '<p>An enumeration token that, when provided in a request, returns the next batch of the results.</p>', ], ], 'ConcurrentModificationException' => [ 'base' => '<p>AWS CodeStar Notifications can\'t complete the request because the resource is being modified by another process. Wait a few minutes and try again.</p>', 'refs' => [], ], 'ConfigurationException' => [ 'base' => '<p>Some or all of the configuration is incomplete, missing, or not valid.</p>', 'refs' => [], ], 'CreateNotificationRuleRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateNotificationRuleResult' => [ 'base' => NULL, 'refs' => [], ], 'CreatedTimestamp' => [ 'base' => NULL, 'refs' => [ 'DescribeNotificationRuleResult$CreatedTimestamp' => '<p>The date and time the notification rule was created, in timestamp format.</p>', ], ], 'DeleteNotificationRuleRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteNotificationRuleResult' => [ 'base' => NULL, 'refs' => [], ], 'DeleteTargetRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteTargetResult' => [ 'base' => NULL, 'refs' => [], ], 'DescribeNotificationRuleRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeNotificationRuleResult' => [ 'base' => NULL, 'refs' => [], ], 'DetailType' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationRuleRequest$DetailType' => '<p>The level of detail to include in the notifications for this resource. <code>BASIC</code> will include only the contents of the event as it would appear in Amazon CloudWatch. <code>FULL</code> will include any supplemental information provided by AWS CodeStar Notifications and/or the service for the resource for which the notification is created.</p>', 'DescribeNotificationRuleResult$DetailType' => '<p>The level of detail included in the notifications for this resource. BASIC will include only the contents of the event as it would appear in Amazon CloudWatch. FULL will include any supplemental information provided by AWS CodeStar Notifications and/or the service for the resource for which the notification is created.</p>', 'UpdateNotificationRuleRequest$DetailType' => '<p>The level of detail to include in the notifications for this resource. BASIC will include only the contents of the event as it would appear in Amazon CloudWatch. FULL will include any supplemental information provided by AWS CodeStar Notifications and/or the service for the resource for which the notification is created.</p>', ], ], 'EventTypeBatch' => [ 'base' => NULL, 'refs' => [ 'DescribeNotificationRuleResult$EventTypes' => '<p>A list of the event types associated with the notification rule.</p>', 'ListEventTypesResult$EventTypes' => '<p>Information about each event, including service name, resource type, event ID, and event name.</p>', ], ], 'EventTypeId' => [ 'base' => NULL, 'refs' => [ 'EventTypeIds$member' => NULL, 'EventTypeSummary$EventTypeId' => '<p>The system-generated ID of the event. For a complete list of event types and IDs, see <a href="https://docs.aws.amazon.com/codestar-notifications/latest/userguide/concepts.html#concepts-api">Notification concepts</a> in the <i>Developer Tools Console User Guide</i>.</p>', ], ], 'EventTypeIds' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationRuleRequest$EventTypeIds' => '<p>A list of event types associated with this notification rule. For a list of allowed events, see <a>EventTypeSummary</a>.</p>', 'UpdateNotificationRuleRequest$EventTypeIds' => '<p>A list of event types associated with this notification rule. For a complete list of event types and IDs, see <a href="https://docs.aws.amazon.com/codestar-notifications/latest/userguide/concepts.html#concepts-api">Notification concepts</a> in the <i>Developer Tools Console User Guide</i>.</p>', ], ], 'EventTypeName' => [ 'base' => NULL, 'refs' => [ 'EventTypeSummary$EventTypeName' => '<p>The name of the event.</p>', ], ], 'EventTypeSummary' => [ 'base' => '<p>Returns information about an event that has triggered a notification rule.</p>', 'refs' => [ 'EventTypeBatch$member' => NULL, ], ], 'ForceUnsubscribeAll' => [ 'base' => NULL, 'refs' => [ 'DeleteTargetRequest$ForceUnsubscribeAll' => '<p>A Boolean value that can be used to delete all associations with this Chatbot topic. The default value is FALSE. If set to TRUE, all associations between that target and every notification rule in your Amazon Web Services account are deleted.</p>', ], ], 'InvalidNextTokenException' => [ 'base' => '<p>The value for the enumeration token used in the request to return the next batch of the results is not valid. </p>', 'refs' => [], ], 'LastModifiedTimestamp' => [ 'base' => NULL, 'refs' => [ 'DescribeNotificationRuleResult$LastModifiedTimestamp' => '<p>The date and time the notification rule was most recently updated, in timestamp format.</p>', ], ], 'LimitExceededException' => [ 'base' => '<p>One of the AWS CodeStar Notifications limits has been exceeded. Limits apply to accounts, notification rules, notifications, resources, and targets. For more information, see Limits.</p>', 'refs' => [], ], 'ListEventTypesFilter' => [ 'base' => '<p>Information about a filter to apply to the list of returned event types. You can filter by resource type or service name.</p>', 'refs' => [ 'ListEventTypesFilters$member' => NULL, ], ], 'ListEventTypesFilterName' => [ 'base' => NULL, 'refs' => [ 'ListEventTypesFilter$Name' => '<p>The system-generated name of the filter type you want to filter by.</p>', ], ], 'ListEventTypesFilterValue' => [ 'base' => NULL, 'refs' => [ 'ListEventTypesFilter$Value' => '<p>The name of the resource type (for example, pipeline) or service name (for example, CodePipeline) that you want to filter by.</p>', ], ], 'ListEventTypesFilters' => [ 'base' => NULL, 'refs' => [ 'ListEventTypesRequest$Filters' => '<p>The filters to use to return information by service or resource type.</p>', ], ], 'ListEventTypesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListEventTypesResult' => [ 'base' => NULL, 'refs' => [], ], 'ListNotificationRulesFilter' => [ 'base' => '<p>Information about a filter to apply to the list of returned notification rules. You can filter by event type, owner, resource, or target.</p>', 'refs' => [ 'ListNotificationRulesFilters$member' => NULL, ], ], 'ListNotificationRulesFilterName' => [ 'base' => NULL, 'refs' => [ 'ListNotificationRulesFilter$Name' => '<p>The name of the attribute you want to use to filter the returned notification rules.</p>', ], ], 'ListNotificationRulesFilterValue' => [ 'base' => NULL, 'refs' => [ 'ListNotificationRulesFilter$Value' => '<p>The value of the attribute you want to use to filter the returned notification rules. For example, if you specify filtering by <i>RESOURCE</i> in Name, you might specify the ARN of a pipeline in CodePipeline for the value.</p>', ], ], 'ListNotificationRulesFilters' => [ 'base' => NULL, 'refs' => [ 'ListNotificationRulesRequest$Filters' => '<p>The filters to use to return information by service or resource type. For valid values, see <a>ListNotificationRulesFilter</a>.</p> <note> <p>A filter with the same name can appear more than once when used with OR statements. Filters with different names should be applied with AND statements.</p> </note>', ], ], 'ListNotificationRulesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListNotificationRulesResult' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResult' => [ 'base' => NULL, 'refs' => [], ], 'ListTargetsFilter' => [ 'base' => '<p>Information about a filter to apply to the list of returned targets. You can filter by target type, address, or status. For example, to filter results to notification rules that have active Chatbot topics as targets, you could specify a ListTargetsFilter Name as <code>TargetType</code> and a Value of <code>SNS</code>, and a Name of <code>TARGET_STATUS</code> and a Value of <code>ACTIVE</code>.</p>', 'refs' => [ 'ListTargetsFilters$member' => NULL, ], ], 'ListTargetsFilterName' => [ 'base' => NULL, 'refs' => [ 'ListTargetsFilter$Name' => '<p>The name of the attribute you want to use to filter the returned targets.</p>', ], ], 'ListTargetsFilterValue' => [ 'base' => NULL, 'refs' => [ 'ListTargetsFilter$Value' => '<p>The value of the attribute you want to use to filter the returned targets. For example, if you specify <code>SNS</code> for the Target type, you could specify an Amazon Resource Name (ARN) for a topic as the value.</p>', ], ], 'ListTargetsFilters' => [ 'base' => NULL, 'refs' => [ 'ListTargetsRequest$Filters' => '<p>The filters to use to return information by service or resource type. Valid filters include target type, target address, and target status.</p> <note> <p>A filter with the same name can appear more than once when used with OR statements. Filters with different names should be applied with AND statements.</p> </note>', ], ], 'ListTargetsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTargetsResult' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListEventTypesRequest$MaxResults' => '<p>A non-negative integer used to limit the number of returned results. The default number is 50. The maximum number of results that can be returned is 100.</p>', 'ListNotificationRulesRequest$MaxResults' => '<p>A non-negative integer used to limit the number of returned results. The maximum number of results that can be returned is 100.</p>', 'ListTargetsRequest$MaxResults' => '<p>A non-negative integer used to limit the number of returned results. The maximum number of results that can be returned is 100.</p>', ], ], 'Message' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'ConcurrentModificationException$Message' => NULL, 'ConfigurationException$Message' => NULL, 'InvalidNextTokenException$Message' => NULL, 'LimitExceededException$Message' => NULL, 'ResourceAlreadyExistsException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ValidationException$Message' => NULL, ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListEventTypesRequest$NextToken' => '<p>An enumeration token that, when provided in a request, returns the next batch of the results.</p>', 'ListEventTypesResult$NextToken' => '<p>An enumeration token that can be used in a request to return the next batch of the results.</p>', 'ListNotificationRulesRequest$NextToken' => '<p>An enumeration token that, when provided in a request, returns the next batch of the results.</p>', 'ListNotificationRulesResult$NextToken' => '<p>An enumeration token that can be used in a request to return the next batch of the results.</p>', 'ListTargetsRequest$NextToken' => '<p>An enumeration token that, when provided in a request, returns the next batch of the results.</p>', 'ListTargetsResult$NextToken' => '<p>An enumeration token that can be used in a request to return the next batch of results.</p>', ], ], 'NotificationRuleArn' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationRuleResult$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule.</p>', 'DeleteNotificationRuleRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule you want to delete.</p>', 'DeleteNotificationRuleResult$Arn' => '<p>The Amazon Resource Name (ARN) of the deleted notification rule.</p>', 'DescribeNotificationRuleRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule.</p>', 'DescribeNotificationRuleResult$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule.</p>', 'ListTagsForResourceRequest$Arn' => '<p>The Amazon Resource Name (ARN) for the notification rule.</p>', 'NotificationRuleSummary$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule.</p>', 'SubscribeRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule for which you want to create the association.</p>', 'SubscribeResult$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule for which you have created assocations.</p>', 'TagResourceRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule to tag.</p>', 'UnsubscribeRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule.</p>', 'UnsubscribeResult$Arn' => '<p>The Amazon Resource Name (ARN) of the the notification rule from which you have removed a subscription.</p>', 'UntagResourceRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule from which to remove the tags.</p>', 'UpdateNotificationRuleRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the notification rule.</p>', ], ], 'NotificationRuleBatch' => [ 'base' => NULL, 'refs' => [ 'ListNotificationRulesResult$NotificationRules' => '<p>The list of notification rules for the Amazon Web Services account, by Amazon Resource Name (ARN) and ID. </p>', ], ], 'NotificationRuleCreatedBy' => [ 'base' => NULL, 'refs' => [ 'DescribeNotificationRuleResult$CreatedBy' => '<p>The name or email alias of the person who created the notification rule.</p>', ], ], 'NotificationRuleId' => [ 'base' => NULL, 'refs' => [ 'NotificationRuleSummary$Id' => '<p>The unique ID of the notification rule.</p>', ], ], 'NotificationRuleName' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationRuleRequest$Name' => '<p>The name for the notification rule. Notification rule names must be unique in your Amazon Web Services account.</p>', 'DescribeNotificationRuleResult$Name' => '<p>The name of the notification rule.</p>', 'UpdateNotificationRuleRequest$Name' => '<p>The name of the notification rule.</p>', ], ], 'NotificationRuleResource' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationRuleRequest$Resource' => '<p>The Amazon Resource Name (ARN) of the resource to associate with the notification rule. Supported resources include pipelines in CodePipeline, repositories in CodeCommit, and build projects in CodeBuild.</p>', 'DescribeNotificationRuleResult$Resource' => '<p>The Amazon Resource Name (ARN) of the resource associated with the notification rule.</p>', ], ], 'NotificationRuleStatus' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationRuleRequest$Status' => '<p>The status of the notification rule. The default value is <code>ENABLED</code>. If the status is set to <code>DISABLED</code>, notifications aren\'t sent for the notification rule.</p>', 'DescribeNotificationRuleResult$Status' => '<p>The status of the notification rule. Valid statuses are on (sending notifications) or off (not sending notifications).</p>', 'UpdateNotificationRuleRequest$Status' => '<p>The status of the notification rule. Valid statuses include enabled (sending notifications) or disabled (not sending notifications).</p>', ], ], 'NotificationRuleSummary' => [ 'base' => '<p>Information about a specified notification rule.</p>', 'refs' => [ 'NotificationRuleBatch$member' => NULL, ], ], 'ResourceAlreadyExistsException' => [ 'base' => '<p>A resource with the same name or ID already exists. Notification rule names must be unique in your Amazon Web Services account.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>AWS CodeStar Notifications can\'t find a resource that matches the provided ARN. </p>', 'refs' => [], ], 'ResourceType' => [ 'base' => NULL, 'refs' => [ 'EventTypeSummary$ResourceType' => '<p>The resource type of the event.</p>', ], ], 'ServiceName' => [ 'base' => NULL, 'refs' => [ 'EventTypeSummary$ServiceName' => '<p>The name of the service for which the event applies.</p>', ], ], 'SubscribeRequest' => [ 'base' => NULL, 'refs' => [], ], 'SubscribeResult' => [ 'base' => NULL, 'refs' => [], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeys$member' => NULL, 'Tags$key' => NULL, ], ], 'TagKeys' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>The key names of the tags to remove.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResult' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tags$value' => NULL, ], ], 'Tags' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationRuleRequest$Tags' => '<p>A list of tags to apply to this notification rule. Key names cannot start with "<code>aws</code>". </p>', 'DescribeNotificationRuleResult$Tags' => '<p>The tags associated with the notification rule.</p>', 'ListTagsForResourceResult$Tags' => '<p>The tags associated with the notification rule.</p>', 'TagResourceRequest$Tags' => '<p>The list of tags to associate with the resource. Tag key names cannot start with "<code>aws</code>".</p>', 'TagResourceResult$Tags' => '<p>The list of tags associated with the resource.</p>', ], ], 'Target' => [ 'base' => '<p>Information about the Chatbot topics or Chatbot clients associated with a notification rule.</p>', 'refs' => [ 'SubscribeRequest$Target' => NULL, 'Targets$member' => NULL, ], ], 'TargetAddress' => [ 'base' => NULL, 'refs' => [ 'DeleteTargetRequest$TargetAddress' => '<p>The Amazon Resource Name (ARN) of the Chatbot topic or Chatbot client to delete.</p>', 'Target$TargetAddress' => '<p>The Amazon Resource Name (ARN) of the Chatbot topic or Chatbot client.</p>', 'TargetSummary$TargetAddress' => '<p>The Amazon Resource Name (ARN) of the Chatbot topic or Chatbot client.</p>', 'UnsubscribeRequest$TargetAddress' => '<p>The ARN of the Chatbot topic to unsubscribe from the notification rule.</p>', ], ], 'TargetStatus' => [ 'base' => NULL, 'refs' => [ 'TargetSummary$TargetStatus' => '<p>The status of the target.</p>', ], ], 'TargetSummary' => [ 'base' => '<p>Information about the targets specified for a notification rule.</p>', 'refs' => [ 'TargetsBatch$member' => NULL, ], ], 'TargetType' => [ 'base' => NULL, 'refs' => [ 'Target$TargetType' => '<p>The target type. Can be an Chatbot topic or Chatbot client.</p> <ul> <li> <p>Chatbot topics are specified as <code>SNS</code>.</p> </li> <li> <p>Chatbot clients are specified as <code>AWSChatbotSlack</code>.</p> </li> </ul>', 'TargetSummary$TargetType' => '<p>The type of the target (for example, <code>SNS</code>).</p> <ul> <li> <p>Chatbot topics are specified as <code>SNS</code>.</p> </li> <li> <p>Chatbot clients are specified as <code>AWSChatbotSlack</code>.</p> </li> </ul>', ], ], 'Targets' => [ 'base' => NULL, 'refs' => [ 'CreateNotificationRuleRequest$Targets' => '<p>A list of Amazon Resource Names (ARNs) of Amazon Simple Notification Service topics and Chatbot clients to associate with the notification rule.</p>', 'UpdateNotificationRuleRequest$Targets' => '<p>The address and type of the targets to receive notifications from this notification rule.</p>', ], ], 'TargetsBatch' => [ 'base' => NULL, 'refs' => [ 'DescribeNotificationRuleResult$Targets' => '<p>A list of the Chatbot topics and Chatbot clients associated with the notification rule.</p>', 'ListTargetsResult$Targets' => '<p>The list of notification rule targets. </p>', ], ], 'UnsubscribeRequest' => [ 'base' => NULL, 'refs' => [], ], 'UnsubscribeResult' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResult' => [ 'base' => NULL, 'refs' => [], ], 'UpdateNotificationRuleRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateNotificationRuleResult' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>One or more parameter values are not valid.</p>', 'refs' => [], ], ],];
