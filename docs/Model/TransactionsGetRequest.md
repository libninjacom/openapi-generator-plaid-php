# # TransactionsGetRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**options** | [**\OpenAPI\Client\Model\TransactionsGetRequestOptions**](TransactionsGetRequestOptions.md) |  | [optional]
**access_token** | **string** | The access token associated with the Item data is being requested for. |
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**start_date** | **\DateTime** | The earliest date for which data should be returned. Dates should be formatted as YYYY-MM-DD. |
**end_date** | **\DateTime** | The latest date for which data should be returned. Dates should be formatted as YYYY-MM-DD. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
