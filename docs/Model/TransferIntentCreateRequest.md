# # TransferIntentCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. |
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. |
**account_id** | **string** | The Plaid &#x60;account_id&#x60; for the account that will be debited or credited. | [optional]
**mode** | [**\OpenAPI\Client\Model\TransferIntentCreateMode**](TransferIntentCreateMode.md) |  |
**amount** | **string** | The amount of the transfer (decimal string with two digits of precision e.g. \&quot;10.00\&quot;). |
**description** | **string** | A description for the underlying transfer. Maximum of 8 characters. |
**ach_class** | [**\OpenAPI\Client\Model\ACHClass**](ACHClass.md) |  |
**origination_account_id** | **string** | Plaid’s unique identifier for the origination account for the intent. If not provided, the default account will be used. | [optional]
**user** | [**\OpenAPI\Client\Model\TransferUserInRequest**](TransferUserInRequest.md) |  |
**metadata** | **array<string,string>** | The Metadata object is a mapping of client-provided string fields to any string value. The following limitations apply: - The JSON values must be Strings (no nested JSON objects allowed) - Only ASCII characters may be used - Maximum of 50 key/value pairs - Maximum key length of 40 characters - Maximum value length of 500 characters | [optional]
**iso_currency_code** | **string** | The currency of the transfer amount, e.g. \&quot;USD\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
