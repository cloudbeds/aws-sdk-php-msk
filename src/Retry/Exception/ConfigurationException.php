<?php
namespace CloudBeds\Aws\MskFork\Retry\Exception;

use CloudBeds\Aws\MskFork\HasMonitoringEventsTrait;
use CloudBeds\Aws\MskFork\MonitoringEventsInterface;

/**
 * Represents an error interacting with retry configuration
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
