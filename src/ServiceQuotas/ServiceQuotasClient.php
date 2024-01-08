<?php
namespace CloudBeds\Aws\MskFork\ServiceQuotas;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **Service Quotas** service.
 * @method \CloudBeds\Aws\MskFork\Result associateServiceQuotaTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateServiceQuotaTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result deleteServiceQuotaIncreaseRequestFromTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceQuotaIncreaseRequestFromTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result disassociateServiceQuotaTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateServiceQuotaTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAWSDefaultServiceQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAWSDefaultServiceQuotaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getAssociationForServiceQuotaTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssociationForServiceQuotaTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getRequestedServiceQuotaChange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRequestedServiceQuotaChangeAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceQuotaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result getServiceQuotaIncreaseRequestFromTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceQuotaIncreaseRequestFromTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAWSDefaultServiceQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAWSDefaultServiceQuotasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRequestedServiceQuotaChangeHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRequestedServiceQuotaChangeHistoryAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listRequestedServiceQuotaChangeHistoryByQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRequestedServiceQuotaChangeHistoryByQuotaAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServiceQuotaIncreaseRequestsInTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceQuotaIncreaseRequestsInTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServiceQuotas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceQuotasAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServicesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result putServiceQuotaIncreaseRequestIntoTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putServiceQuotaIncreaseRequestIntoTemplateAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result requestServiceQuotaIncrease(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestServiceQuotaIncreaseAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class ServiceQuotasClient extends AwsClient {}
