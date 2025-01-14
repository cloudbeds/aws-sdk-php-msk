<?php
namespace CloudBeds\Aws\MskFork\S3\UseArnRegion;

use CloudBeds\Aws\MskFork;
use CloudBeds\Aws\MskFork\S3\UseArnRegion\Exception\ConfigurationException;

class Configuration implements ConfigurationInterface
{
    private $useArnRegion;

    public function __construct($useArnRegion)
    {
        $this->useArnRegion = MskFork\boolean_value($useArnRegion);
        if (is_null($this->useArnRegion)) {
            throw new ConfigurationException("'use_arn_region' config option"
                . " must be a boolean value.");
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isUseArnRegion()
    {
        return $this->useArnRegion;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            'use_arn_region' => $this->isUseArnRegion(),
        ];
    }
}
