# # SandboxPublicTokenCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**institution_id** | **string** | The ID of the institution the Item will be associated with |
**initial_products** | [**\OpenAPI\Client\Model\Products[]**](Products.md) | The products to initially pull for the Item. May be any products that the specified &#x60;institution_id&#x60;  supports. This array may not be empty. |
**options** | [**\OpenAPI\Client\Model\SandboxPublicTokenCreateRequestOptions**](SandboxPublicTokenCreateRequestOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
