# # DefaultUpdateWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_type** | **string** | &#x60;TRANSACTIONS&#x60; |
**webhook_code** | **string** | &#x60;DEFAULT_UPDATE&#x60; |
**error** | [**\OpenAPI\Client\Model\PlaidError**](PlaidError.md) |  | [optional]
**new_transactions** | **float** | The number of new transactions detected since the last time this webhook was fired. |
**item_id** | **string** | The &#x60;item_id&#x60; of the Item the webhook relates to. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
