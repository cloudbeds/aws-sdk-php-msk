<?php
namespace CloudBeds\Aws\MskFork\SSO;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Single Sign-On** service.
 * @method \CloudBeds\Aws\MskFork\Result getRoleCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoleCredentialsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccountRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountRolesAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result listAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsAsync(array $args = [])
 * @method \CloudBeds\Aws\MskFork\Result logout(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logoutAsync(array $args = [])
 */
class SSOClient extends AwsClient {}
