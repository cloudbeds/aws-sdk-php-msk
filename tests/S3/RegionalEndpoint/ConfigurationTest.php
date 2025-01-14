<?php

namespace CloudBeds\Aws\MskFork\Test\S3\RegionalEndpoint;

use CloudBeds\Aws\MskFork\Sts\RegionalEndpoints\Configuration;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers \CloudBeds\Aws\MskFork\S3\RegionalEndpoint\Configuration
 */
class ConfigurationTest extends TestCase
{
    public function testGetsCorrectValues()
    {
        $config = new Configuration('regional');
        $this->assertSame('regional', $config->getEndpointsType());
    }

    public function testAcceptsNonLowercase()
    {
        $config = new Configuration('rEgIoNaL');
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
