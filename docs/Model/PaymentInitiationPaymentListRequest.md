# # PaymentInitiationPaymentListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**count** | **int** | The maximum number of payments to return. If &#x60;count&#x60; is not specified, a maximum of 10 payments will be returned, beginning with the most recent payment before the cursor (if specified). | [optional] [default to 10]
**cursor** | **\DateTime** | A string in RFC 3339 format (i.e. \&quot;2019-12-06T22:35:49Z\&quot;). Only payments created before the cursor will be returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)