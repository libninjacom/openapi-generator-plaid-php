# # PaymentInitiationRecipientCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**name** | **string** | The name of the recipient |
**iban** | **string** | The International Bank Account Number (IBAN) for the recipient. If BACS data is not provided, an IBAN is required. | [optional]
**bacs** | [**\OpenAPI\Client\Model\RecipientBACSNullable**](RecipientBACSNullable.md) |  | [optional]
**address** | [**\OpenAPI\Client\Model\PaymentInitiationAddress**](PaymentInitiationAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
