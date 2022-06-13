# # HoldingsDefaultUpdateWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_type** | **string** | &#x60;HOLDINGS&#x60; |
**webhook_code** | **string** | &#x60;DEFAULT_UPDATE&#x60; |
**item_id** | **string** | The &#x60;item_id&#x60; of the Item associated with this webhook, warning, or error |
**error** | [**\OpenAPI\Client\Model\PlaidError**](PlaidError.md) |  | [optional]
**new_holdings** | **float** | The number of new holdings reported since the last time this webhook was fired. |
**updated_holdings** | **float** | The number of updated holdings reported since the last time this webhook was fired. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
