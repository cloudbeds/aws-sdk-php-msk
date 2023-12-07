<?php
namespace CloudBeds\Aws\MskFork\Arn\S3;

use CloudBeds\Aws\MskFork\Arn\ArnInterface;

/**
 * @internal
 */
interface BucketArnInterface extends ArnInterface
{
    public function getBucketName();
}
