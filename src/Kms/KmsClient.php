<?php
namespace CloudBeds\Aws\MskFork\Kms;

use CloudBeds\Aws\MskFork\AwsClient;

/**
 * This client is used to interact with the **AWS Key Management Service**.
 *
 * @method \Aws\Result cancelKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelKeyDeletionAsync(array $args = [])
 * @method \Aws\Result connectCustomKeyStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise connectCustomKeyStoreAsync(array $args = [])
 * @method \Aws\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \Aws\Result createCustomKeyStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomKeyStoreAsync(array $args = [])
 * @method \Aws\Result createGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGrantAsync(array $args = [])
 * @method \Aws\Result createKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyAsync(array $args = [])
 * @method \Aws\Result decrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise decryptAsync(array $args = [])
 * @method \Aws\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \Aws\Result deleteCustomKeyStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomKeyStoreAsync(array $args = [])
 * @method \Aws\Result deleteImportedKeyMaterial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImportedKeyMaterialAsync(array $args = [])
 * @method \Aws\Result describeCustomKeyStores(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomKeyStoresAsync(array $args = [])
 * @method \Aws\Result describeKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyAsync(array $args = [])
 * @method \Aws\Result disableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyAsync(array $args = [])
 * @method \Aws\Result disableKeyRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableKeyRotationAsync(array $args = [])
 * @method \Aws\Result disconnectCustomKeyStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disconnectCustomKeyStoreAsync(array $args = [])
 * @method \Aws\Result enableKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyAsync(array $args = [])
 * @method \Aws\Result enableKeyRotation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableKeyRotationAsync(array $args = [])
 * @method \Aws\Result encrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise encryptAsync(array $args = [])
 * @method \Aws\Result generateDataKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyAsync(array $args = [])
 * @method \Aws\Result generateDataKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyPairAsync(array $args = [])
 * @method \Aws\Result generateDataKeyPairWithoutPlaintext(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyPairWithoutPlaintextAsync(array $args = [])
 * @method \Aws\Result generateDataKeyWithoutPlaintext(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateDataKeyWithoutPlaintextAsync(array $args = [])
 * @method \Aws\Result generateMac(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateMacAsync(array $args = [])
 * @method \Aws\Result generateRandom(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateRandomAsync(array $args = [])
 * @method \Aws\Result getKeyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPolicyAsync(array $args = [])
 * @method \Aws\Result getKeyRotationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyRotationStatusAsync(array $args = [])
 * @method \Aws\Result getParametersForImport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersForImportAsync(array $args = [])
 * @method \Aws\Result getPublicKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPublicKeyAsync(array $args = [])
 * @method \Aws\Result importKeyMaterial(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeyMaterialAsync(array $args = [])
 * @method \Aws\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \Aws\Result listGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGrantsAsync(array $args = [])
 * @method \Aws\Result listKeyPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeyPoliciesAsync(array $args = [])
 * @method \Aws\Result listKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKeysAsync(array $args = [])
 * @method \Aws\Result listResourceTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceTagsAsync(array $args = [])
 * @method \Aws\Result listRetirableGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRetirableGrantsAsync(array $args = [])
 * @method \Aws\Result putKeyPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putKeyPolicyAsync(array $args = [])
 * @method \Aws\Result reEncrypt(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reEncryptAsync(array $args = [])
 * @method \Aws\Result replicateKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise replicateKeyAsync(array $args = [])
 * @method \Aws\Result retireGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retireGrantAsync(array $args = [])
 * @method \Aws\Result revokeGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeGrantAsync(array $args = [])
 * @method \Aws\Result scheduleKeyDeletion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scheduleKeyDeletionAsync(array $args = [])
 * @method \Aws\Result sign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \Aws\Result updateCustomKeyStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCustomKeyStoreAsync(array $args = [])
 * @method \Aws\Result updateKeyDescription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKeyDescriptionAsync(array $args = [])
 * @method \Aws\Result updatePrimaryRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePrimaryRegionAsync(array $args = [])
 * @method \Aws\Result verify(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyAsync(array $args = [])
 * @method \Aws\Result verifyMac(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifyMacAsync(array $args = [])
 */
class KmsClient extends AwsClient {}
