<?php
namespace CloudBeds\Aws\MskFork\Arn\S3;

use CloudBeds\Aws\MskFork\Arn\AccessPointArn as BaseAccessPointArn;
use CloudBeds\Aws\MskFork\Arn\AccessPointArnInterface;
use CloudBeds\Aws\MskFork\Arn\ArnInterface;
use CloudBeds\Aws\MskFork\Arn\Exception\InvalidArnException;

/**
 * @internal
 */
class AccessPointArn extends BaseAccessPointArn implements AccessPointArnInterface
{
    /**
     * Validation specific to AccessPointArn
     *
     * @param array $data
     */
    public static function validate(array $data)
    {
        parent::validate($data);
        if ($data['service'] !== 's3') {
            throw new InvalidArnException("The 3rd component of an S3 access"
                . " point ARN represents the region and must be 's3'.");
        }
    }
}