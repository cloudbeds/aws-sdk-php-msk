<?php
namespace CloudBeds\Aws\MskFork\Exception;

use CloudBeds\Aws\MskFork\HasMonitoringEventsTrait;
use CloudBeds\Aws\MskFork\MonitoringEventsInterface;

class IncalculablePayloadException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
