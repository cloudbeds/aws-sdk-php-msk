<?php
namespace CloudBeds\Aws\MskFork\Test\Endpoint;

use CloudBeds\Aws\MskFork\Endpoint\EndpointProvider;
use CloudBeds\Aws\MskFork\Endpoint\PartitionEndpointProvider;
use CloudBeds\Aws\MskFork\Endpoint\PatternEndpointProvider;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers Aws\Endpoint\EndpointProvider
 */
class EndpointProviderTest extends TestCase
{
    public function testThrowsWhenUnresolved()
    {
        $this->expectException(\Aws\Exception\UnresolvedEndpointException::class);
        EndpointProvider::resolve(function() {}, []);
    }

    public function testThrowsWhenNotArray()
    {
        $this->expectException(\Aws\Exception\UnresolvedEndpointException::class);
        EndpointProvider::resolve(function() { return 'foo'; }, []);
    }

    public function testCreatesDefaultProvider()
    {
        $p = EndpointProvider::defaultProvider();
        $this->assertInstanceOf(PartitionEndpointProvider::class, $p);
    }

    public function testCreatesProviderFromPatterns()
    {
        $p = EndpointProvider::patterns([
            '*/*' => ['endpoint' => 'foo.com']
        ]);
        $this->assertInstanceOf(PatternEndpointProvider::class, $p);
        $result = EndpointProvider::resolve($p, []);
        $this->assertSame('https://foo.com', $result['endpoint']);
    }
}
