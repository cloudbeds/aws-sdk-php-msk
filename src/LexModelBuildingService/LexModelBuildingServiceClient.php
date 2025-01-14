<?php
namespace CloudBeds\Aws\MskFork\LexModelBuildingService;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Lex Model Building Service** service.
 * @method \CloudBeds\Aws\MskFork\Result createBotVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBotVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createIntentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIntentVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createSlotTypeVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSlotTypeVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBotAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBotAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBotChannelAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBotChannelAssociationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteBotVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBotVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteIntent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteIntentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntentVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSlotType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSlotTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSlotTypeVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSlotTypeVersionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteUtterances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUtterancesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBotAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBotAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotAliasesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBotChannelAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotChannelAssociationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBotChannelAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotChannelAssociationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBotVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBotsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBuiltinIntent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBuiltinIntentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBuiltinIntents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBuiltinIntentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getBuiltinSlotTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBuiltinSlotTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getExport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIntent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIntentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntentVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getIntents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntentsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMigrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getMigrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMigrationsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSlotType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSlotTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSlotTypeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSlotTypeVersionsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getSlotTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSlotTypesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getUtterancesView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUtterancesViewAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBotAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putBotAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putBotAliasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putIntent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putIntentAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putSlotType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSlotTypeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImportAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startMigration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMigrationAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class LexModelBuildingServiceClient extends AwsClient {}
