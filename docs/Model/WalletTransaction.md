# # WalletTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | A unique ID identifying the transaction |
**reference** | **string** | A reference for the transaction |
**type** | **string** | The type of of the transaction. Currently, only &#x60;\&quot;PAYOUT\&quot;&#x60; is supported. |
**amount** | [**\OpenAPI\Client\Model\WalletTransactionAmount**](WalletTransactionAmount.md) |  |
**counterparty** | [**\OpenAPI\Client\Model\WalletTransactionCounterparty**](WalletTransactionCounterparty.md) |  |
**status** | [**\OpenAPI\Client\Model\WalletTransactionStatus**](WalletTransactionStatus.md) |  |
**created_at** | **\DateTime** | Timestamp when the transaction was created, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
