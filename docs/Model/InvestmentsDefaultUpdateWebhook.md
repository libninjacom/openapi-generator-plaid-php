# # InvestmentsDefaultUpdateWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_type** | **string** | &#x60;INVESTMENTS_TRANSACTIONS&#x60; |
**webhook_code** | **string** | &#x60;DEFAULT_UPDATE&#x60; |
**item_id** | **string** | The &#x60;item_id&#x60; of the Item associated with this webhook, warning, or error |
**error** | [**\OpenAPI\Client\Model\PlaidError**](PlaidError.md) |  | [optional]
**new_investments_transactions** | **float** | The number of new transactions reported since the last time this webhook was fired. |
**canceled_investments_transactions** | **float** | The number of canceled transactions reported since the last time this webhook was fired. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
