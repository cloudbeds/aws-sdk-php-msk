<?php
namespace CloudBeds\Aws\MskFork\Test\S3;

use CloudBeds\Aws\MskFork\Test\UsesServiceTrait;
use CloudBeds\Aws\MskFork\S3\GetBucketLocationParser;
use CloudBeds\Aws\MskFork\Command;
use CloudBeds\Aws\MskFork\Result;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * @covers Aws\S3\GetBucketLocationParser
 */
class GetBucketLocationParserTest extends TestCase
{
    use UsesServiceTrait;

    /**
     * @dataProvider getTestCases
     */
    public function testParsesLocationFromGetBucketLocationOperations(
        $commandName, $responseBody, $expectedValue
    ) {
        $parser = new GetBucketLocationParser(function () {
            return new Result();
        });

        $command = new Command($commandName);
        $response = new Response(200, [], $responseBody);

        $result = $parser($command, $response);

        $this->assertEquals($expectedValue, $result['LocationConstraint']);
    }

    public function getTestCases()
    {
        return [
            ['GetBucketLocation', '<LocationConstraint>us-west-2</LocationConstraint>', 'us-west-2'],
            ['GetBucketLocation', '<LocationConstraint>EU</LocationConstraint>',        'eu-west-1'],
            ['GetBucketLocation', '<LocationConstraint/>',                              'us-east-1'],
            ['GetBucket',         '<LocationConstraint>us-west-2</LocationConstraint>', null],
        ];
    }
}
