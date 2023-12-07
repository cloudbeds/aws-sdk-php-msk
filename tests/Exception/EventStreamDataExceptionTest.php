<?php

namespace CloudBeds\Aws\MskFork\Test\Exception;

use CloudBeds\Aws\MskFork\Exception\EventStreamDataException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Aws\Exception\EventStreamDataException
 */
class EventStreamDataExceptionTest extends TestCase
{
    public function testAccessors()
    {
        $e = new EventStreamDataException('Code', 'This is a message.');
        $this->assertSame('Code', $e->getAwsErrorCode());
        $this->assertSame('This is a message.', $e->getAwsErrorMessage());
    }
}
