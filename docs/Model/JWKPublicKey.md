# # JWKPublicKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alg** | **string** | The alg member identifies the cryptographic algorithm family used with the key. |
**crv** | **string** | The crv member identifies the cryptographic curve used with the key. |
**kid** | **string** | The kid (Key ID) member can be used to match a specific key. This can be used, for instance, to choose among a set of keys within the JWK during key rollover. |
**kty** | **string** | The kty (key type) parameter identifies the cryptographic algorithm family used with the key, such as RSA or EC. |
**use** | **string** | The use (public key use) parameter identifies the intended use of the public key. |
**x** | **string** | The x member contains the x coordinate for the elliptic curve point. |
**y** | **string** | The y member contains the y coordinate for the elliptic curve point. |
**created_at** | **int** | The timestamp when the key was created, in Unix time. |
**expired_at** | **int** | The timestamp when the key expired, in Unix time. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
