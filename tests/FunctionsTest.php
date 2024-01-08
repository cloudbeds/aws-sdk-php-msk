<?php
namespace CloudBeds\Aws\MskFork\Test;

use CloudBeds\Aws\MskFork;
use CloudBeds\Aws\MskFork\MockHandler;
use CloudBeds\Aws\MskFork\Result;
use CloudBeds\Aws\MskFork\S3\S3Client;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * @covers \CloudBeds\Aws\MskFork\recursive_dir_iterator()
     */
    public function testCreatesRecursiveDirIterator()
    {
        $iter = \CloudBeds\Aws\MskFork\recursive_dir_iterator(__DIR__);
        $this->assertInstanceOf('Iterator', $iter);
        $files = iterator_to_array($iter);
        $this->assertContains(__FILE__, $files);
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\dir_iterator()
     */
    public function testCreatesNonRecursiveDirIterator()
    {
        $iter = \CloudBeds\Aws\MskFork\dir_iterator(__DIR__);
        $this->assertInstanceOf('Iterator', $iter);
        $files = iterator_to_array($iter);
        $this->assertContains('FunctionsTest.php', $files);
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\or_chain()
     */
    public function testComposesOrFunctions()
    {
        $a = function ($a, $b) { return null; };
        $b = function ($a, $b) { return $a . $b; };
        $c = function ($a, $b) { return 'C'; };
        $comp = \CloudBeds\Aws\MskFork\or_chain($a, $b, $c);
        $this->assertSame('+-', $comp('+', '-'));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\or_chain()
     */
    public function testReturnsNullWhenNonResolve()
    {
        $called = [];
        $a = function () use (&$called) { $called[] = 'a'; };
        $b = function () use (&$called) { $called[] = 'b'; };
        $c = function () use (&$called) { $called[] = 'c'; };
        $comp = \CloudBeds\Aws\MskFork\or_chain($a, $b, $c);
        $this->assertNull($comp());
        $this->assertEquals(['a', 'b', 'c'], $called);
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\constantly()
     */
    public function testCreatesConstantlyFunctions()
    {
        $fn = \CloudBeds\Aws\MskFork\constantly('foo');
        $this->assertSame('foo', $fn());
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\load_compiled_json()
     */
    public function testUsesJsonCompiler()
    {
        $this->expectException(\InvalidArgumentException::class);
        \CloudBeds\Aws\MskFork\load_compiled_json('/path/to/not/here.json');
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\load_compiled_json()
     */
    public function testUsesPhpCompilationOfJsonIfPossible()
    {
        $soughtData = ['foo' => 'bar'];
        $jsonPath = sys_get_temp_dir() . '/some-file-name-' . time() . '.json';

        file_put_contents($jsonPath, json_encode($soughtData), LOCK_EX);

        $this->assertSame($soughtData, \CloudBeds\Aws\MskFork\load_compiled_json($jsonPath));

        file_put_contents($jsonPath, 'INVALID JSON', LOCK_EX);

        file_put_contents(
            "$jsonPath.php",
            '<?php return ' . var_export($soughtData, true) . ';',
            LOCK_EX
        );

        $this->assertSame($soughtData, Aws\load_compiled_json($jsonPath));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\load_compiled_json()
     */
    public function testOnlyLoadsCompiledJsonOnce()
    {
        $soughtData = ['foo' => 'bar'];
        $jsonPath = sys_get_temp_dir() . '/some-file-name-' . time() . '.json';

        file_put_contents($jsonPath, json_encode($soughtData), LOCK_EX);

        $this->assertSame($soughtData, \CloudBeds\Aws\MskFork\load_compiled_json($jsonPath));
        $jsonAtime = fileatime($jsonPath);

        file_put_contents($jsonPath, 'INVALID JSON', LOCK_EX);

        $compiledPath = "{$jsonPath}.php";
        file_put_contents(
            $compiledPath,
            '<?php return ' . var_export($soughtData, true) . ';',
            LOCK_EX
        );

        $this->assertSame($soughtData, Aws\load_compiled_json($jsonPath));
        $compiledAtime = fileatime($compiledPath);

        sleep(1);
        clearstatcache();
        $this->assertSame($soughtData, Aws\load_compiled_json($jsonPath));
        $this->assertEquals($jsonAtime, fileatime($jsonPath));
        $this->assertEquals($compiledAtime, fileatime($compiledPath));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\filter()
     */
    public function testFilter()
    {
        $data = [0, 1, 2, 3, 4];
        $func = function ($v) { return $v % 2; };
        $result = \CloudBeds\Aws\MskFork\filter($data, $func);
        $this->assertEquals([1, 3], iterator_to_array($result));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\map()
     */
    public function testMap()
    {
        $data = [0, 1, 2, 3, 4];
        $result = \CloudBeds\Aws\MskFork\map($data, function ($v) { return $v + 1; });
        $this->assertEquals([1, 2, 3, 4, 5], iterator_to_array($result));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\flatmap()
     */
    public function testFlatMap()
    {
        $data = ['Hello', 'World'];
        $xf = function ($value) { return str_split($value); };
        $result = \CloudBeds\Aws\MskFork\flatmap($data, $xf);
        $this->assertEquals(
            ['H', 'e', 'l', 'l', 'o', 'W', 'o', 'r', 'l', 'd'],
            iterator_to_array($result)
        );
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\partition()
     */
    public function testPartition()
    {
        $data = [1, 2, 3, 4, 5];
        $result = \CloudBeds\Aws\MskFork\partition($data, 2);
        $this->assertEquals([[1, 2], [3, 4], [5]], iterator_to_array($result));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\describe_type()
     */
    public function testDescribeObject()
    {
        $obj = new \stdClass();
        $this->assertSame('object(stdClass)', \CloudBeds\Aws\MskFork\describe_type($obj));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\describe_type()
     */
    public function testDescribeArray()
    {
        $arr = [0, 1, 2];
        $this->assertSame('array(3)', \CloudBeds\Aws\MskFork\describe_type($arr));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\describe_type()
     */
    public function testDescribeDoubleToFloat()
    {
        $double = (double)1.3;
        $this->assertSame('float(1.3)', \CloudBeds\Aws\MskFork\describe_type($double));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\describe_type()
     */
    public function testDescribeType()
    {
        $this->assertSame('int(1)', \CloudBeds\Aws\MskFork\describe_type(1));
        $this->assertSame('string(4) "test"', \CloudBeds\Aws\MskFork\describe_type("test"));
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\default_http_handler()
     */
    public function testGuzzleV5HttpHandler()
    {
        if (!class_exists('GuzzleHttp\Ring\Core')) {
            $this->markTestSkipped();
        }
        $this->assertInstanceOf(
            \CloudBeds\Aws\MskFork\Handler\GuzzleV5\GuzzleHandler::class,
            \CloudBeds\Aws\MskFork\default_http_handler()
        );
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\default_http_handler()
     */
    public function testGuzzleV6HttpHandler()
    {
        if (!class_exists('GuzzleHttp\Handler\StreamHandler')) {
            $this->markTestSkipped();
        }
        $this->assertInstanceOf(
            \CloudBeds\Aws\MskFork\Handler\GuzzleV6\GuzzleHandler::class,
            \CloudBeds\Aws\MskFork\default_http_handler()
        );
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\serialize()
     */
    public function testSerializesHttpRequests()
    {
        $mock = new MockHandler([new Result([])]);
        $conf = [
            'region'  => 'us-east-1',
            'version' => 'latest',
            'credentials' => [
                'key'    => 'foo',
                'secret' => 'bar'
            ],
            'handler' => $mock,
            'signature_version' => 'v4',
        ];

        $client = new S3Client($conf);
        $command = $client->getCommand('PutObject', [
            'Bucket' => 'foo',
            'Key'    => 'bar',
            'Body'   => '123'
        ]);
        $request = \CloudBeds\Aws\MskFork\serialize($command);
        $this->assertSame('/bar', $request->getRequestTarget());
        $this->assertSame('PUT', $request->getMethod());
        $this->assertSame('foo.s3.amazonaws.com', $request->getHeaderLine('Host'));
        $this->assertTrue($request->hasHeader('Authorization'));
        $this->assertTrue($request->hasHeader('X-Amz-Content-Sha256'));
        $this->assertTrue($request->hasHeader('X-Amz-Date'));
        $this->assertSame('123', (string) $request->getBody());
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\manifest()
     */
    public function testLoadsManifest()
    {
        $this->assertNotNull(\CloudBeds\Aws\MskFork\manifest());
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\manifest()
     */
    public function testServiceManifest()
    {
        $manifest = \CloudBeds\Aws\MskFork\manifest('s3');
        $data = [
            'namespace' => 'S3',
            'versions'  => [
                'latest'     => '2006-03-01',
                '2006-03-01' => '2006-03-01'
            ],
            'endpoint'  => 's3',
            'serviceIdentifier' => 's3'
        ];
        $this->assertEquals($data, $manifest);
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\manifest()
     */
    public function testAliasManifest()
    {
        $manifest = \CloudBeds\Aws\MskFork\manifest('iotdataplane');
        $data = [
            'namespace' => 'IotDataPlane',
            'versions'  => [
                'latest'     => '2015-05-28',
                '2015-05-28' => '2015-05-28'
            ],
            'endpoint'  => 'data.iot',
            'serviceIdentifier' => 'iot_data_plane'
        ];
        $this->assertEquals($data, $manifest);
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\manifest()
     */
    public function testInvalidManifest()
    {
        $this->expectException(\InvalidArgumentException::class);
        \CloudBeds\Aws\MskFork\manifest('notarealservicename');
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\is_valid_hostname()
     * @dataProvider getHostnameTestCases
     */
    public function testValidatesHostnames($hostname, $expected)
    {
        $this->assertEquals($expected, \CloudBeds\Aws\MskFork\is_valid_hostname($hostname));
    }

    public function getHostnameTestCases()
    {
        return [
            ['a', true],
            ['a.', true],
            ['0', true],
            ['1.2.3.4', true],
            ['a.b', true],
            ['a.b.c.d.e', true],
            ['a.b.c.d.e.', true],
            ['a-b.c-d', true],
            ['a--b.c--d', true],
            ['a b', false],
            ['a..b', false],
            ['a.b ', false],
            ['a-.b', false],
            ['-a.b', false],
            ['.a.b', false],
            ['<a', false],
            ['(a', false],
            ['a>', false],
            ['a)', false],
            ['.', false],
            [' ', false],
            ['-', false],
            ['', false],
            [str_repeat('a', 63), true],
            [str_repeat('a', 64), false],
            [
                str_repeat('a', 63) . '.' . str_repeat('a', 63) . '.'
                    . str_repeat('a', 63) . '.' . str_repeat('a', 61),
                true
            ],
            [
                str_repeat('a', 63) . '.' . str_repeat('a', 63) . '.'
                    . str_repeat('a', 63) . '.' . str_repeat('a', 62),
                false
            ],
        ];
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\is_valid_hostlabel()
     * @dataProvider getHostlabelTestCases
     * @param string $label
     * @param bool $expected
     */
    public function testValidatesHostlabels($label, $expected)
    {
        $this->assertEquals($expected, \CloudBeds\Aws\MskFork\is_valid_hostlabel($label));
    }

    public function getHostlabelTestCases()
    {
        return [
            ['us-west-2', true],
            ['a', true],
            ['a.b', false],
            ['2-us-west', true],
            ['1-us-west-2', true],
            ['42', true],
            ['us_west_2', false],
            ['-west-2', false],
            ['@uncoolwebsite.com', false],
            ['a-b.c-d', false],
            ['a--b', true],
            ['a b', false],
            ['<a', false],
            ['a>', false],
            [' ', false],
            ['-', false],
            ['', false],
            [str_repeat('a', 63), true],
            [str_repeat('a', 64), false],
            ['us-west-2-certainly-this-label-must-be-longer-than-63-characters-by-now', false],
        ];
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\parse_ini_file()
     * @dataProvider getIniFileTestCases
     */
    public function testParsesIniFile($ini, $expected)
    {
        $tmpFile = sys_get_temp_dir() . '/test.ini';
        file_put_contents($tmpFile, $ini);
        $this->assertEquals(
            $expected,
            MskFork\parse_ini_file($tmpFile, true, INI_SCANNER_RAW)
        );
        unlink($tmpFile);
    }

    public function getIniFileTestCases()
    {
        return [
            [
                <<<EOT
[default]
foo_key = bar
baz_key = qux
[custom]
foo_key = bar-custom
baz_key = qux-custom
EOT
                ,
                [
                    'default' => [
                        'foo_key' => 'bar',
                        'baz_key' => 'qux',
                    ],
                    'custom' => [
                        'foo_key' => 'bar-custom',
                        'baz_key' => 'qux-custom',
                    ]
                ]
            ],
            [
                <<<EOT
[default]
;Full-line comment = ignored
#Full-line comment = ignored
foo_key = bar;Inline comment = ignored
baz_key = qux
*star_key = not_ignored
EOT
                ,
                [
                    'default' => [
                        'foo_key' => 'bar',
                        'baz_key' => 'qux',
                        '*star_key' => 'not_ignored'
                    ],
                ],
            ],
        ];
    }

    /**
     * @covers \CloudBeds\Aws\MskFork\parse_ini_section_with_subsections()
     * @dataProvider getIniFileServiceTestCases
     */
    public function testParsesIniSectionsWithSubsections($ini, $expected)
    {
        $tmpFile = sys_get_temp_dir() . '/test.ini';
        file_put_contents($tmpFile, $ini);
        $this->assertEquals(
            $expected,
            \CloudBeds\Aws\MskFork\parse_ini_section_with_subsections($tmpFile, 'services my-services')
        );
        unlink($tmpFile);
    }

    public function getIniFileServiceTestCases()
    {
        return [
            [
                <<<EOT
[services my-services]
s3 =
  endpoint_url = https://exmaple.com
elastic_beanstalk =
  endpoint_url = https://exmaple.com
[default]
foo_key = bar
baz_key = qux
[custom]
foo_key = bar-custom
baz_key = qux-custom
EOT
                ,
                [
                    's3' => [
                        'endpoint_url' => 'https://exmaple.com'
                    ],
                    'elastic_beanstalk' => [
                        'endpoint_url' => 'https://exmaple.com',
                    ]
                ]
            ]
        ];
    }
}
