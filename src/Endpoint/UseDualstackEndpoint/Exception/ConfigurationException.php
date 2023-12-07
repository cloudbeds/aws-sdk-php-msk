<?php
namespace CloudBeds\Aws\MskFork\Endpoint\UseDualstackEndpoint\Exception;

use CloudBeds\Aws\MskFork\HasMonitoringEventsTrait;
use CloudBeds\Aws\MskFork\MonitoringEventsInterface;

/**
 * Represents an error interacting with configuration for useDualstackRegion
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
