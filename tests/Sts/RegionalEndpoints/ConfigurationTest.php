<?php

namespace CloudBeds\Aws\MskFork\Test\Sts\RegionalEndpoints;

use CloudBeds\Aws\MskFork\Sts\RegionalEndpoints\Configuration;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers \CloudBeds\Aws\MskFork\Sts\RegionalEndpoints\Configuration
 */
class ConfigurationTest extends TestCase
{
    public function testGetsCorrectValues()
    {
        $config = new Configuration('regional');
        $this->assertSame('regional', $config->getEndpointsType());
    }

    public function testToArray()
    {
        $config = new Configuration('regional');
        $expected = [
            'endpoints_type' => 'regional',
        ];
        $this->assertEquals($expected, $config->toArray());
    }

    public function testThrowsOnInvalidEndpointsType()
    {
        $this->expectExceptionMessage("Configuration parameter must either be 'legacy' or 'regional'.");
        $this->expectException(\InvalidArgumentException::class);
        new Configuration('invalid_type');
    }
}
