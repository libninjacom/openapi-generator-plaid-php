# # LiabilitiesDefaultUpdateWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_type** | **string** | &#x60;LIABILITIES&#x60; |
**webhook_code** | **string** | &#x60;DEFAULT_UPDATE&#x60; |
**item_id** | **string** | The &#x60;item_id&#x60; of the Item associated with this webhook, warning, or error |
**error** | [**\OpenAPI\Client\Model\PlaidError**](PlaidError.md) |  |
**account_ids_with_new_liabilities** | **string[]** | An array of &#x60;account_id&#x60;&#39;s for accounts that contain new liabilities.&#39; |
**account_ids_with_updated_liabilities** | **array<string,string[]>** | An object with keys of &#x60;account_id&#x60;&#39;s that are mapped to their respective liabilities fields that changed.  Example: &#x60;{ \&quot;XMBvvyMGQ1UoLbKByoMqH3nXMj84ALSdE5B58\&quot;: [\&quot;past_amount_due\&quot;] }&#x60; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
