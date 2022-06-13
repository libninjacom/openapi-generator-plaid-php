# # PaymentInitiationPaymentTokenCreateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_token** | **string** | A &#x60;payment_token&#x60; that can be provided to Link initialization to enter the payment initiation flow |
**payment_token_expiration_time** | **\DateTime** | The date and time at which the token will expire, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format. A &#x60;payment_token&#x60; expires after 15 minutes. |
**request_id** | **string** | A unique identifier for the request, which can be used for troubleshooting. This identifier, like all Plaid identifiers, is case sensitive. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
