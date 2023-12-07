<?php
namespace CloudBeds\Aws\MskFork\Test\CloudTrail;

use CloudBeds\Aws\MskFork\CloudTrail\LogFileReader;
use CloudBeds\Aws\MskFork\Result;
use CloudBeds\Aws\MskFork\Test\UsesServiceTrait;
use PHPUnit\Framework\TestCase;

/**
 * @covers Aws\CloudTrail\LogFileReader
 */
class LogFileReaderTest extends TestCase
{
    use UsesServiceTrait;

    /**
     * @dataProvider dataForLogReadingTest
     */
    public function testCorrectlyReadsLogFiles($responseBody, $recordCount)
    {
        $s3Client = $this->getTestClient('s3', [
            'version' => 'latest',
            'region'  => 'us-east-1'
        ]);
        $this->addMockResults($s3Client, [
            new Result(['Body' => $responseBody])
        ]);
        $reader = new LogFileReader($s3Client);
        $records = $reader->read('test-bucket', 'test-key');
        $this->assertCount($recordCount, $records);
    }

    public function dataForLogReadingTest()
    {
        return [
            ['{"Records":[{"foo":"1"},{"bar":"2"},{"baz":"3"}]}', 3],
            ['{"Records":[]}', 0],
            ['', 0],
        ];
    }
}
