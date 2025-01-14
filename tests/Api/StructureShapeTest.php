<?php
namespace CloudBeds\Aws\MskFork\Test\Api;

use CloudBeds\Aws\MskFork\Api\Shape;
use CloudBeds\Aws\MskFork\Api\ShapeMap;
use CloudBeds\Aws\MskFork\Api\StructureShape;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers \CloudBeds\Aws\MskFork\Api\StructureShape
 */
class StructureShapeTest extends TestCase
{
    public function testReturnsWhenMembersAreEmpty()
    {
        $s = new StructureShape([], new ShapeMap([]));
        $this->assertFalse($s->hasMember('foo'));
        $this->assertSame([], $s->getMembers());
    }

    public function testReturnsMember()
    {
        $s = new StructureShape([
            'members' => ['foo' => ['type' => 'string']]
        ], new ShapeMap([]));
        $this->assertTrue($s->hasMember('foo'));
        $this->assertInstanceOf(Shape::class, $s->getMember('foo'));
        $this->assertSame('string', $s->getMember('foo')->getType());
    }

    public function testReturnsAllMembers()
    {
        $s = new StructureShape([
            'members' => [
                'foo' => ['type' => 'string'],
                'baz' => ['type' => 'integer'],
            ]
        ], new ShapeMap([]));
        $members = $s->getMembers();
        $this->assertIsArray($members);
        $this->assertInstanceOf(Shape::class, $members['foo']);
        $this->assertInstanceOf(Shape::class, $members['baz']);
        $this->assertSame('string', $members['foo']->getType());
        $this->assertSame('integer', $members['baz']->getType());
    }

    public function testEnsuresMemberExists()
    {
        $this->expectException(\InvalidArgumentException::class);
        (new StructureShape([], new ShapeMap([])))->getMember('foo');
    }
}
