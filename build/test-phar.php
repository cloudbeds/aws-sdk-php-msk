<?php
require __DIR__ . '/artifacts/aws.phar';

$conf = [
    'credentials' => ['key' => 'foo', 'secret' => 'bar'],
    'region'      => 'us-west-2',
    'version'     => 'latest'
];

// Ensure that a client can be created.
$s3 = new Aws\S3\S3Client($conf);
// Ensure that waiters can be found.
$s3->getPaginator('ListObjects');

// Legacy factory instantiation.
Aws\DynamoDb\DynamoDbClient::factory($conf);

// JMESPath autoloader
\JmesPath\search('foo', ['foo' => 'bar']);

// React autoloader
$checks = [
    'JmesPath\\search',
    'Cloudbeds\\Aws\\MskFork\\dir_iterator',
];

foreach ($checks as $check) {
    if (!function_exists($check)) {
        echo $check . ' not found';
        exit(1);
    }
}

$classMethodChecks = [
    'GuzzleHttp\\Promise\\Utils' => 'inspect',
    'GuzzleHttp\\Psr7\\Utils' => 'streamFor',
];

foreach ($classMethodChecks as $class => $method) {
    if (!method_exists($class, $method)
    ) {
        echo $class . '::' . $method . ' not found';
        exit(1);
    }
}

echo 'Version=' . \CloudBeds\Aws\MskFork\Sdk::VERSION;
