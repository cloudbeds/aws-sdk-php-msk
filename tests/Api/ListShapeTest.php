<?php
namespace CloudBeds\Aws\MskFork\Test\Api;

use CloudBeds\Aws\MskFork\Api\Shape;
use CloudBeds\Aws\MskFork\Api\ShapeMap;
use CloudBeds\Aws\MskFork\Api\ListShape;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers \Aws\Api\ListShape
 */
class ListShapeTest extends TestCase
{
    public function testReturnsMember()
    {
        $s = new ListShape(
            ['member' => ['type' => 'string']],
            new ShapeMap([])
        );

        $m = $s->getMember();
        $this->assertInstanceOf(Shape::class, $m);
        $this->assertSame($m, $s->getMember());
        $this->assertSame('string', $m->getType());
    }

    public function testFailsWhenMemberIsMissing()
    {
        $this->expectException(\RuntimeException::class);
        (new ListShape([], new ShapeMap([])))->getMember();
    }
}
