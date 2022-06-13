# # WalletTransactionExecuteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**idempotency_key** | **string** | A random key provided by the client, per unique wallet transaction. Maximum of 128 characters.  The API supports idempotency for safely retrying requests without accidentally performing the same operation twice. If a request to execute a wallet transaction fails due to a network connection error, then after a minimum delay of one minute, you can retry the request with the same idempotency key to guarantee that only a single wallet transaction is created. If the request was successfully processed, it will prevent any transaction that uses the same idempotency key, and was received within 24 hours of the first request, from being processed. |
**wallet_id** | **string** | The ID of the e-wallet to debit from |
**counterparty** | [**\OpenAPI\Client\Model\WalletTransactionCounterparty**](WalletTransactionCounterparty.md) |  |
**amount** | [**\OpenAPI\Client\Model\WalletTransactionAmount**](WalletTransactionAmount.md) |  |
**reference** | **string** | A reference for the transaction. This must be an alphanumeric string with at most 18 characters and must not contain any special characters or spaces. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
