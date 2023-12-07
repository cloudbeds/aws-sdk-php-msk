<?php
namespace CloudBeds\Aws\MskFork\Test\Api;

use CloudBeds\Aws\MskFork\Api\Shape;
use CloudBeds\Aws\MskFork\Api\ShapeMap;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers \Aws\Api\ShapeMap
 */
class ShapeMapTest extends TestCase
{
    public function testReturnsShapeName()
    {
        $sm = new ShapeMap(['foo' => [], 'baz' => []]);
        $this->assertEquals(['foo', 'baz'], $sm->getShapeNames());
    }

    public function testEnsuresShapeExists()
    {
        $this->expectException(\InvalidArgumentException::class);
        $sm = new ShapeMap([]);
        $sm->resolve(['shape' => 'missing']);
    }

    public function testReturnsShapes()
    {
        $sm = new ShapeMap(['foo' => ['type' => 'string']]);
        $s = $sm->resolve(['shape' => 'foo']);
        $this->assertInstanceOf(Shape::class, $s);
        $this->assertArrayNotHasKey('shape', $s->toArray());
        $this->assertSame($s, $sm->resolve(['shape' => 'foo']));
    }
}
