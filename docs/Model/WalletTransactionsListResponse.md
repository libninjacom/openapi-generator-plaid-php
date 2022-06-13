# # WalletTransactionsListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactions** | [**\OpenAPI\Client\Model\WalletTransaction[]**](WalletTransaction.md) | An array of transactions of an e-wallet, associated with the given &#x60;wallet_id&#x60; |
**next_cursor** | **string** | Cursor used for fetching transactions created before the latest transaction provided in this response | [optional]
**request_id** | **string** | A unique identifier for the request, which can be used for troubleshooting. This identifier, like all Plaid identifiers, is case sensitive. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
