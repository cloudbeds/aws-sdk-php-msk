<?php
// Setup autoloading for SDK and build classes.
require __DIR__ . '/../vendor/autoload.php';

use CloudBeds\Aws\MskFork\Build\Docs\RedirectMapBuilder;

$path = __DIR__ . '/artifacts/docs/package.redirects.conf';
$apiProvider = \CloudBeds\Aws\MskFork\Api\ApiProvider::defaultProvider();

$builder = new RedirectMapBuilder($apiProvider, $path);
$builder->build();
