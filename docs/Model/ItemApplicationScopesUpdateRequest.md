# # ItemApplicationScopesUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**access_token** | **string** | The access token associated with the Item data is being requested for. |
**application_id** | **string** | This field will map to the application ID that is returned from /item/applications/list, or provided to the institution in an oauth redirect. |
**scopes** | [**\OpenAPI\Client\Model\Scopes**](Scopes.md) |  |
**state** | **string** | When scopes are updated during enrollment, this field must be populated with the state sent to the partner in the OAuth Login URI. This field is required when the context is &#x60;ENROLLMENT&#x60;. | [optional]
**context** | [**\OpenAPI\Client\Model\ScopesContext**](ScopesContext.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)