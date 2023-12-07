<?php
namespace CloudBeds\Aws\MskFork\Endpoint\UseFipsEndpoint\Exception;

use CloudBeds\Aws\MskFork\HasMonitoringEventsTrait;
use CloudBeds\Aws\MskFork\MonitoringEventsInterface;

/**
 * Represents an error interacting with configuration for useFipsRegion
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
