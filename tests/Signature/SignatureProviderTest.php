<?php
namespace CloudBeds\Aws\MskFork\Test\Signature;

use CloudBeds\Aws\MskFork\Signature\AnonymousSignature;
use CloudBeds\Aws\MskFork\Signature\S3ExpressSignature;
use CloudBeds\Aws\MskFork\Signature\S3SignatureV4;
use CloudBeds\Aws\MskFork\Signature\SignatureInterface;
use CloudBeds\Aws\MskFork\Signature\SignatureProvider;
use CloudBeds\Aws\MskFork\Signature\SignatureV4;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @covers Aws\Signature\SignatureProvider
 */
class SignatureProviderTest extends TestCase
{
    public function versionProvider()
    {
        return [
            ['v4', SignatureV4::class, 'foo'],
            ['v4', S3SignatureV4::class, 's3'],
            ['v4', S3SignatureV4::class, 's3control'],
            ['v4', S3SignatureV4::class, 's3-object-lambda'],
            ['v4a', S3SignatureV4::class, 's3'],
            ['v4a', S3SignatureV4::class, 's3control'],
            ['v4a', S3SignatureV4::class, 's3-object-lambda'],
            ['v4a', SignatureV4::class, 'eventbridge'],
            ['v4a', SignatureV4::class, 'eventbridge'],
            ['v4a', SignatureV4::class, 'eventbridge'],
            ['v4-s3express', S3ExpressSignature::class, 's3express'],
            ['v4-unsigned-body', SignatureV4::class, 'foo'],
            ['anonymous', AnonymousSignature::class, 's3']
        ];
    }

    /**
     * @dataProvider versionProvider
     */
    public function testCreatesSignatureFromVersionString($v, $type, $service)
    {
        $fn = SignatureProvider::version();
        $result = $fn($v, $service, 'baz');
        $this->assertInstanceOf($type, $result);
    }

    public function testCanMemoizeSignatures()
    {
        $fn = SignatureProvider::version();
        $fn = SignatureProvider::memoize($fn);
        $a = $fn('v4', 'ec2', 'us-west-2');
        $this->assertSame($a, $fn('v4', 'ec2', 'us-west-2'));
        $this->assertNotSame($a, $fn('v4', 'ec2', 'us-east-1'));
    }

    public function testResolvesSignaturesSuccessfully()
    {
        $this->assertInstanceOf(
            SignatureInterface::class,
            SignatureProvider::resolve(
                SignatureProvider::version(),
                'v4',
                'ec2',
                'us-west-2'
            )
        );
    }

    public function testResolvesSignaturesWithException()
    {
        $this->expectException(\Aws\Exception\UnresolvedSignatureException::class);
        $fn = SignatureProvider::defaultProvider();
        SignatureProvider::resolve($fn, 'foooo', '', '');
    }
}
