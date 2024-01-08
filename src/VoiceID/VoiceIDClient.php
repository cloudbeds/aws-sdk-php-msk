<?php
namespace CloudBeds\Aws\MskFork\VoiceID;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Amazon Voice ID** service.
 * @method \CloudBeds\Aws\MskFork\Result associateFraudster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateFraudsterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createWatchlist(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWatchlistAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteFraudster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFraudsterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteSpeaker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSpeakerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteWatchlist(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWatchlistAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFraudster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFraudsterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeFraudsterRegistrationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFraudsterRegistrationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSpeaker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpeakerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeSpeakerEnrollmentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpeakerEnrollmentJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result describeWatchlist(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWatchlistAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateFraudster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFraudsterAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result evaluateSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise evaluateSessionAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFraudsterRegistrationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFraudsterRegistrationJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listFraudsters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFraudstersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSpeakerEnrollmentJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSpeakerEnrollmentJobsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listSpeakers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSpeakersAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listWatchlists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWatchlistsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result optOutSpeaker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise optOutSpeakerAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startFraudsterRegistrationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFraudsterRegistrationJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startSpeakerEnrollmentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSpeakerEnrollmentJobAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result updateWatchlist(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWatchlistAsync(array $args = [])
 */
class VoiceIDClient extends AwsClient {}
