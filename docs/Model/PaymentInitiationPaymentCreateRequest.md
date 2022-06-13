# # PaymentInitiationPaymentCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**recipient_id** | **string** | The ID of the recipient the payment is for. |
**reference** | **string** | A reference for the payment. This must be an alphanumeric string with at most 18 characters and must not contain any special characters (since not all institutions support them). |
**amount** | [**\OpenAPI\Client\Model\PaymentAmount**](PaymentAmount.md) |  |
**schedule** | [**\OpenAPI\Client\Model\ExternalPaymentScheduleRequest**](ExternalPaymentScheduleRequest.md) |  | [optional]
**options** | [**\OpenAPI\Client\Model\ExternalPaymentOptions**](ExternalPaymentOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
