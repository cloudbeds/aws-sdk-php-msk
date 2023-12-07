<?php
namespace CloudBeds\Aws\MskFork\Test\S3Control;

use CloudBeds\Aws\MskFork\Api\ApiProvider;
use CloudBeds\Aws\MskFork\S3Control\S3ControlClient;

trait S3ControlTestingTrait
{
    /**
     * Returns a test client that uses model fixtures to not be dependent on
     * the current live model files
     *
     * @param array $args
     * @return S3ControlClient
     */
    private function getTestClient(array $args)
    {
        $params = [
            'version' => '2018-08-20',
            'region' => 'us-west-2',
        ];

        return new S3ControlClient(array_merge($params, $args));
    }
}
