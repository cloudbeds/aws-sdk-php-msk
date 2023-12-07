<?php
namespace CloudBeds\Aws\MskFork\LocationService;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Location Service** service.
 * @method \Aws\Result associateTrackerConsumer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateTrackerConsumerAsync(array $args = [])
 * @method \Aws\Result batchDeleteDevicePositionHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteDevicePositionHistoryAsync(array $args = [])
 * @method \Aws\Result batchDeleteGeofence(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteGeofenceAsync(array $args = [])
 * @method \Aws\Result batchEvaluateGeofences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchEvaluateGeofencesAsync(array $args = [])
 * @method \Aws\Result batchGetDevicePosition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetDevicePositionAsync(array $args = [])
 * @method \Aws\Result batchPutGeofence(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutGeofenceAsync(array $args = [])
 * @method \Aws\Result batchUpdateDevicePosition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateDevicePositionAsync(array $args = [])
 * @method \Aws\Result calculateRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise calculateRouteAsync(array $args = [])
 * @method \Aws\Result calculateRouteMatrix(array $args = [])
 * @method \GuzzleHttp\Promise\Promise calculateRouteMatrixAsync(array $args = [])
 * @method \Aws\Result createGeofenceCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGeofenceCollectionAsync(array $args = [])
 * @method \Aws\Result createKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyAsync(array $args = [])
 * @method \Aws\Result createMap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMapAsync(array $args = [])
 * @method \Aws\Result createPlaceIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPlaceIndexAsync(array $args = [])
 * @method \Aws\Result createRouteCalculator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRouteCalculatorAsync(array $args = [])
 * @method \Aws\Result createTracker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrackerAsync(array $args = [])
 * @method \Aws\Result deleteGeofenceCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGeofenceCollectionAsync(array $args = [])
 * @method \Aws\Result deleteKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeyAsync(array $args = [])
 * @method \Aws\Result deleteMap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMapAsync(array $args = [])
 * @method \Aws\Result deletePlaceIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePlaceIndexAsync(array $args = [])
 * @method \Aws\Result deleteRouteCalculator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRouteCalculatorAsync(array $args = [])
 * @method \Aws\Result deleteTracker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrackerAsync(array $args = [])
 * @method \Aws\Result describeGeofenceCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGeofenceCollectionAsync(array $args = [])
 * @method \Aws\Result describeKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyAsync(array $args = [])
 * @method \Aws\Result describeMap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMapAsync(array $args = [])
 * @method \Aws\Result describePlaceIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePlaceIndexAsync(array $args = [])
 * @method \Aws\Result describeRouteCalculator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRouteCalculatorAsync(array $args = [])
 * @method \Aws\Result describeTracker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTrackerAsync(array $args = [])
 * @method \Aws\Result disassociateTrackerConsumer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateTrackerConsumerAsync(array $args = [])
 * @method \Aws\Result getDevicePosition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePositionAsync(array $args = [])
 * @method \Aws\Result getDevicePositionHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevicePositionHistoryAsync(array $args = [])
 * @method \Aws\Result getGeofence(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGeofenceAsync(array $args = [])
 * @method \Aws\Result getMapGlyphs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMapGlyphsAsync(array $args = [])
 * @method \Aws\Result getMapSprites(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMapSpritesAsync(array $args = [])
 * @method \Aws\Result getMapStyleDescriptor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMapStyleDescriptorAsync(array $args = [])
 * @method \Aws\Result getMapTile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMapTileAsync(array $args = [])
 * @method \Aws\Result getPlace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPlaceAsync(array $args = [])
 * @method \Aws\Result listDevicePositions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevicePositionsAsync(array $args = [])
 * @method \Aws\Result listGeofenceCollections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGeofenceCollectionsAsync(array $args = [])
 * @method \Aws\Result listGeofences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGeofencesAsync(array $args = [])
 * @method \Aws\Result listKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeysAsync(array $args = [])
 * @method \Aws\Result listMaps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMapsAsync(array $args = [])
 * @method \Aws\Result listPlaceIndexes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPlaceIndexesAsync(array $args = [])
 * @method \Aws\Result listRouteCalculators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRouteCalculatorsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTrackerConsumers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrackerConsumersAsync(array $args = [])
 * @method \Aws\Result listTrackers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrackersAsync(array $args = [])
 * @method \Aws\Result putGeofence(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putGeofenceAsync(array $args = [])
 * @method \Aws\Result searchPlaceIndexForPosition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchPlaceIndexForPositionAsync(array $args = [])
 * @method \Aws\Result searchPlaceIndexForSuggestions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchPlaceIndexForSuggestionsAsync(array $args = [])
 * @method \Aws\Result searchPlaceIndexForText(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchPlaceIndexForTextAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateGeofenceCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGeofenceCollectionAsync(array $args = [])
 * @method \Aws\Result updateKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKeyAsync(array $args = [])
 * @method \Aws\Result updateMap(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMapAsync(array $args = [])
 * @method \Aws\Result updatePlaceIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePlaceIndexAsync(array $args = [])
 * @method \Aws\Result updateRouteCalculator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRouteCalculatorAsync(array $args = [])
 * @method \Aws\Result updateTracker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrackerAsync(array $args = [])
 */
class LocationServiceClient extends AwsClient {}
