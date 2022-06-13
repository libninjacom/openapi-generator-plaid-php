# # TransactionsRemovedWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_type** | **string** | &#x60;TRANSACTIONS&#x60; |
**webhook_code** | **string** | &#x60;TRANSACTIONS_REMOVED&#x60; |
**error** | [**\OpenAPI\Client\Model\PlaidError**](PlaidError.md) |  | [optional]
**removed_transactions** | **string[]** | An array of &#x60;transaction_ids&#x60; corresponding to the removed transactions |
**item_id** | **string** | The &#x60;item_id&#x60; of the Item associated with this webhook, warning, or error |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
