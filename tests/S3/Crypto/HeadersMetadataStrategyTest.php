<?php
namespace CloudBeds\Aws\MskFork\Test\S3\Crypto;

use CloudBeds\Aws\MskFork\S3\Crypto\HeadersMetadataStrategy;
use CloudBeds\Aws\MskFork\Test\Crypto\UsesMetadataEnvelopeTrait;
use PHPUnit\Framework\TestCase;

/**
 * @covers Aws\S3\Crypto\HeadersMetadataStrategy
 */
class HeadersMetadataStrategyTest extends TestCase
{
    use UsesMetadataEnvelopeTrait;

    /**
     * @dataProvider getMetadataFields
     */
    public function testSave($fields)
    {
        $strategy = new HeadersMetadataStrategy();
        $args = ['Metadata' => []];

        $updatedArgs = $strategy->save(
            $this->getMetadataEnvelope($fields),
            $args
        );
        foreach ($fields as $field => $value) {
            $this->assertEquals($value, $updatedArgs['Metadata'][$field]);
        }
    }

    /**
     * @dataProvider getMetadataResult
     */
    public function testLoad($args, $metadata)
    {
        $strategy = new HeadersMetadataStrategy();
        $envelope = $strategy->load($args);

        foreach ($envelope as $field => $value) {
            $this->assertEquals($value, $metadata[$field]);
        }
    }
}
