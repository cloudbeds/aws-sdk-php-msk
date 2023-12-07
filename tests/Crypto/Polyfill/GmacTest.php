<?php
namespace CloudBeds\Aws\MskFork\Test\Crypto\Polyfill;

use CloudBeds\Aws\MskFork\Crypto\Polyfill\Gmac;
use CloudBeds\Aws\MskFork\Crypto\Polyfill\Key;
use PHPUnit\Framework\TestCase;

/**
 * Class GmacTest
 * @package Aws\Test\Crypto\Polyfill
 */
class GmacTest extends TestCase
{
    public function testConstructor()
    {
        $key = new Key(str_repeat("\xff", 32));
        $hash = new Gmac(
            $key,
            str_repeat("\x00", 15) . "\x01",
            256
        );
        $this->assertInstanceOf(Gmac::class, $hash);
    }
}
