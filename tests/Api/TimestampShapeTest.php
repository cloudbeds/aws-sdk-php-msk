<?php
namespace CloudBeds\Aws\MskFork\Test\Api;

use CloudBeds\Aws\MskFork\Api\TimestampShape;
use CloudBeds\Aws\MskFork\Api\ShapeMap;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers \CloudBeds\Aws\MskFork\Api\TimestampShape
 */
class TimestampShapeTest extends TestCase
{
    public function formatProvider()
    {
        $t = strtotime('january 5, 1999');

        return [
            ['january 5, 1999', 'iso8601', '1999-01-05T00:00:00Z'],
            ['january 5, 1999', 'rfc822', 'Tue, 05 Jan 1999 00:00:00 GMT'],
            ['january 5, 1999', 'unixTimestamp', '915494400'],
            [$t, 'iso8601', '1999-01-05T00:00:00Z'],
            [$t, 'rfc822', 'Tue, 05 Jan 1999 00:00:00 GMT'],
            [new \DateTime('january 5, 1999'), 'unixTimestamp', '915494400'],
            [new \DateTime('january 5, 1999'), 'iso8601', '1999-01-05T00:00:00Z'],
            [new \DateTime('january 5, 1999'), 'rfc822', 'Tue, 05 Jan 1999 00:00:00 GMT'],
            [new \DateTimeImmutable('january 5, 1999'), 'unixTimestamp', '915494400'],
            [new \DateTimeImmutable('january 5, 1999'), 'iso8601', '1999-01-05T00:00:00Z'],
            [new \DateTimeImmutable('january 5, 1999'), 'rfc822', 'Tue, 05 Jan 1999 00:00:00 GMT']
        ];
    }

    /**
     * @dataProvider formatProvider
     */
    public function testFormatsData($value, $format, $result)
    {
        $s = new TimestampShape([], new ShapeMap([]));
        $this->assertEquals($result, $s->format($value, $format));
    }

    public function testValidatesTimestampFormat()
    {
        $this->expectException(\UnexpectedValueException::class);
        $s = new TimestampShape([], new ShapeMap([]));
        $s->format('now', 'foo');
    }

    public function testValidatesTimestampValue()
    {
        $this->expectException(\InvalidArgumentException::class);
        $s = new TimestampShape([], new ShapeMap([]));
        $s->format(true, 'iso8601');
    }
}
