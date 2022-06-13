# # InvestmentsHoldingsGetResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts** | [**\OpenAPI\Client\Model\AccountBase[]**](AccountBase.md) | The accounts associated with the Item |
**holdings** | [**\OpenAPI\Client\Model\Holding[]**](Holding.md) | The holdings belonging to investment accounts associated with the Item. Details of the securities in the holdings are provided in the &#x60;securities&#x60; field. |
**securities** | [**\OpenAPI\Client\Model\Security[]**](Security.md) | Objects describing the securities held in the accounts associated with the Item. |
**item** | [**\OpenAPI\Client\Model\Item**](Item.md) |  |
**request_id** | **string** | A unique identifier for the request, which can be used for troubleshooting. This identifier, like all Plaid identifiers, is case sensitive. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
