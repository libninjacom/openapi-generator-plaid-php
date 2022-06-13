# # IncomeVerificationTaxformsGetResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** | A unique identifier for the request, which can be used for troubleshooting. This identifier, like all Plaid identifiers, is case sensitive. | [optional]
**document_metadata** | [**\OpenAPI\Client\Model\DocumentMetadata[]**](DocumentMetadata.md) |  |
**taxforms** | [**\OpenAPI\Client\Model\Taxform[]**](Taxform.md) | A list of forms. |
**error** | [**\OpenAPI\Client\Model\PlaidError**](PlaidError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
