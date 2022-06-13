# # AccountsGetResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts** | [**\OpenAPI\Client\Model\AccountBase[]**](AccountBase.md) | An array of financial institution accounts associated with the Item. If &#x60;/accounts/balance/get&#x60; was called, each account will include real-time balance information. |
**item** | [**\OpenAPI\Client\Model\Item**](Item.md) |  |
**request_id** | **string** | A unique identifier for the request, which can be used for troubleshooting. This identifier, like all Plaid identifiers, is case sensitive. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
