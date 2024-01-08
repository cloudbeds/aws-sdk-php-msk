<?php
namespace CloudBeds\Aws\MskFork\SSOOIDC;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS SSO OIDC** service.
 * @method \CloudBeds\Aws\MskFork\Result createToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTokenAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result createTokenWithIAM(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTokenWithIAMAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result registerClient(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerClientAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result startDeviceAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDeviceAuthorizationAsync(array $args = [])
 */
class SSOOIDCClient extends AwsClient {}
