<?php
namespace CloudBeds\Aws\MskFork\Test\Ssm;

use CloudBeds\Aws\MskFork\Ssm\SsmClient;
use CloudBeds\Aws\MskFork\MockHandler;
use CloudBeds\Aws\MskFork\Result;
use PHPUnit\Framework\TestCase;

/**
 * @covers Aws\Ssm\SsmClient
 */
class SsmClientTest extends TestCase
{
    public function testCanDisableAutoFillPerClient()
    {
        $ec2 = new SsmClient([
            'region'  => 'us-east-1',
            'version' => 'latest',
            'idempotency_auto_fill' => false,
        ]);

        $mock = new MockHandler([
            function ($command, $request) {
                $this->assertNull($command['ClientToken']);
                return new Result();
            }
        ]);

        $ec2->getHandlerList()->setHandler($mock);

        $ec2->createMaintenanceWindow([
            'Name' => 'test',
            'Schedule' => 'foo',
            'Duration' => 2,
            'Cutoff' => 1,
            'AllowUnassociatedTargets' => false
        ]);
    }

    public function testCanOverwriteAutoFillToken()
    {
        $ec2 = new SsmClient([
            'region'  => 'us-east-1',
            'version' => 'latest',
            'idempotency_auto_fill' => true,
        ]);

        $mock = new MockHandler([
            function ($command, $request) {
                $this->assertSame('foo', $command['ClientToken']);
                return new Result();
            }
        ]);

        $ec2->getHandlerList()->setHandler($mock);

        $ec2->createMaintenanceWindow([
            'Name' => 'test',
            'Schedule' => 'bar',
            'Duration' => 2,
            'Cutoff' => 1,
            'AllowUnassociatedTargets' => false,
            'ClientToken' => 'foo'
        ]);
    }
}
