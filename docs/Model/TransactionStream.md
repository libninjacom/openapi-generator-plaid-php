# # TransactionStream

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the account to which the stream belongs |
**stream_id** | **string** | A unique id for the stream |
**category_id** | **string** | The ID of the category to which this transaction belongs. See [Categories](https://plaid.com/docs/#category-overview). |
**category** | **string[]** | A hierarchical array of the categories to which this transaction belongs. See [Categories](https://plaid.com/docs/#category-overview). |
**description** | **string** | A description of the transaction stream. |
**first_date** | **\DateTime** | The posted date of the earliest transaction in the stream. |
**last_date** | **\DateTime** | The posted date of the latest transaction in the stream. |
**frequency** | [**\OpenAPI\Client\Model\RecurringTransactionFrequency**](RecurringTransactionFrequency.md) |  |
**transaction_ids** | **string[]** | An array of Plaid transaction IDs belonging to the stream, sorted by posted date. |
**average_amount** | [**\OpenAPI\Client\Model\TransactionStreamAmount**](TransactionStreamAmount.md) |  |
**is_active** | **bool** | indicates whether the transaction stream is still live. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
