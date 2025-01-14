<?php

namespace CloudBeds\Aws\MskFork\Test\EndpointDiscovery;

use CloudBeds\Aws\MskFork\EndpointDiscovery\Configuration;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;
use Psr\Log\InvalidArgumentException;

/**
 * @covers \CloudBeds\Aws\MskFork\EndpointDiscovery\Configuration
 */
class ConfigurationTest extends TestCase
{
    public function testGetsCorrectValues()
    {
        $config = new Configuration(true, 2000);
        $this->assertTrue($config->isEnabled());
        $this->assertSame(2000, $config->getCacheLimit());
    }

    public function testToArray()
    {
        $config = new Configuration(true, 3000);
        $expected = [
            'enabled' => true,
            'cache_limit' => 3000,
        ];
        $this->assertEquals($expected, $config->toArray());
    }

    public function testHandlesInvalidCacheLimit()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Configuration(true, 'not_a_cache_limit');
    }

    public function testHandlesInvalidEnabled()
    {
        $config = new Configuration('not_a_bool', 4000);
        $this->assertFalse($config->isEnabled());
    }
}
