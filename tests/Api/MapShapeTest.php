<?php
namespace CloudBeds\Aws\MskFork\Test\Api;

use CloudBeds\Aws\MskFork\Api\Shape;
use CloudBeds\Aws\MskFork\Api\ShapeMap;
use CloudBeds\Aws\MskFork\Api\MapShape;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers \CloudBeds\Aws\MskFork\Api\MapShape
 */
class MapShapeTest extends TestCase
{
    public function testReturnsValue()
    {
        $s = new MapShape(['value' => ['type' => 'string']], new ShapeMap([]));
        $v = $s->getValue();
        $this->assertInstanceOf(Shape::class, $v);
        $this->assertSame('string', $v->getType());
        $this->assertSame($v, $s->getValue());
    }

    public function testFailsWhenValueIsMissing()
    {
        $this->expectException(\RuntimeException::class);
        (new MapShape([], new ShapeMap([])))->getValue();
    }

    public function testReturnsKey()
    {
        $s = new MapShape(['key' => ['type' => 'string']], new ShapeMap([]));
        $k = $s->getKey();
        $this->assertInstanceOf(Shape::class, $k);
        $this->assertSame('string', $k->getType());
    }

    public function testReturnsEmptyKey()
    {
        $s = new MapShape([], new ShapeMap([]));
        $this->assertInstanceOf(Shape::class, $s->getKey());
    }
}
