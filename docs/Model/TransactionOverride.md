# # TransactionOverride

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_transacted** | **\DateTime** | The date of the transaction, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) (YYYY-MM-DD) format. Transactions in Sandbox will move from pending to posted once their transaction date has been reached. If a &#x60;date_transacted&#x60; is not provided by the institution, a transaction date may be available in the [&#x60;authorized_date&#x60;](https://plaid.com/docs/api/products/#transactions-get-response-transactions-authorized-date) field. |
**date_posted** | **\DateTime** | The date the transaction posted, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) (YYYY-MM-DD) format. Posted dates in the past or present will result in posted transactions; posted dates in the future will result in pending transactions. |
**amount** | **float** | The transaction amount. Can be negative. |
**description** | **string** | The transaction description. |
**currency** | **string** | The ISO-4217 format currency code for the transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
