<?php
namespace CloudBeds\Aws\MskFork\Test\Arn;

use CloudBeds\Aws\MskFork\Arn\AccessPointArn;
use CloudBeds\Aws\MskFork\Arn\Arn;
use CloudBeds\Aws\MskFork\Arn\ArnParser;
use CloudBeds\Aws\MskFork\Arn\S3\AccessPointArn as S3AccessPointArn;
use CloudBeds\Aws\MskFork\Arn\S3\OutpostsAccessPointArn;
use CloudBeds\Aws\MskFork\Arn\S3\OutpostsBucketArn;
use CloudBeds\Aws\MskFork\Arn\S3\RegionalBucketArn;
use PHPUnit\Framework\TestCase;

/**
 * @covers \CloudBeds\Aws\MskFork\Arn\ArnParser
 */
class ArnParserTest extends TestCase
{

    /**
     * @dataProvider isArnCases
     *
     * @param $string
     * @param $expected
     */
    public function testDeterminesShouldAttemptToParseAsArn($string, $expected)
    {
        $this->assertEquals($expected, ArnParser::isArn($string));
    }

    public function isArnCases()
    {
        return [
            [
                'arn:aws:foo:us-west-2:123456789012:bar_type:baz_id',
                true
            ],
            [
                'arn:',
                true
            ],
            [
                'arn',
                false
            ],
            [
                'barn:aws:foo:us-west-2:123456789012:bar_type:baz_id',
                false
            ],
            [
                '',
                false
            ],
            [
                null,
                false
            ]
        ];
    }

    /**
     * @dataProvider parsedArnCases
     *
     * @param $string
     * @param $expected
     */
    public function testCorrectlyChoosesArnClass($string, $expected)
    {
        $this->assertTrue(ArnParser::parse($string) instanceof $expected);
    }

    public function parsedArnCases()
    {
        return [
            [
                'arn:aws:foo:us-west-2:123456789012:bar_type:baz-id',
                Arn::class
            ],
            [
                'arn:aws:foo:us-west-2:123456789012:accesspoint:baz-id',
                AccessPointArn::class
            ],
            [
                'arn:aws:s3:us-west-2:123456789012:accesspoint:baz-id',
                S3AccessPointArn::class
            ],
            [
                'arn:aws:s3-outposts:us-west-2:123456789012:outpost:op-01234567890123456:accesspoint:myaccesspoint',
                OutpostsAccessPointArn::class
            ],
            [
                'arn:aws:s3-outposts:us-west-2:123456789012:outpost:op-01234567890123456:bucket:mybucket',
                OutpostsBucketArn::class,
            ],
        ];
    }
}
