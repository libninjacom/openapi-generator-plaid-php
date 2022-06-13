# # SandboxItemFireWebhookRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**access_token** | **string** | The access token associated with the Item data is being requested for. |
**webhook_code** | **string** | The following values for &#x60;webhook_code&#x60; are supported:  * &#x60;DEFAULT_UPDATE&#x60; * &#x60;NEW_ACCOUNTS_AVAILABLE&#x60; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
