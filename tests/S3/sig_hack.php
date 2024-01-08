<?php
namespace CloudBeds\Aws\MskFork\S3;

require_once __DIR__ . '/../Signature/sig_hack.php';

// Hack gmdate() to returned the canned result.
function gmdate($format, $ts = null)
{
    return \CloudBeds\Aws\MskFork\Signature\gmdate($format, $ts);
}
