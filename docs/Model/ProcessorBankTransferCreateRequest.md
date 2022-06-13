# # ProcessorBankTransferCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**idempotency_key** | **string** | A random key provided by the client, per unique bank transfer. Maximum of 50 characters.  The API supports idempotency for safely retrying requests without accidentally performing the same operation twice. For example, if a request to create a bank transfer fails due to a network connection error, you can retry the request with the same idempotency key to guarantee that only a single bank transfer is created. |
**processor_token** | **string** | The processor token obtained from the Plaid integration partner. Processor tokens are in the format: &#x60;processor-&lt;environment&gt;-&lt;identifier&gt;&#x60; |
**type** | [**\OpenAPI\Client\Model\BankTransferType**](BankTransferType.md) |  |
**network** | [**\OpenAPI\Client\Model\BankTransferNetwork**](BankTransferNetwork.md) |  |
**amount** | **string** | The amount of the bank transfer (decimal string with two digits of precision e.g. \&quot;10.00\&quot;). |
**iso_currency_code** | **string** | The currency of the transfer amount – should be set to \&quot;USD\&quot;. |
**description** | **string** | The transfer description. Maximum of 10 characters. |
**ach_class** | [**\OpenAPI\Client\Model\ACHClass**](ACHClass.md) |  | [optional]
**user** | [**\OpenAPI\Client\Model\BankTransferUser**](BankTransferUser.md) |  |
**custom_tag** | **string** | An arbitrary string provided by the client for storage with the bank transfer. May be up to 100 characters. | [optional]
**metadata** | **array<string,string>** | The Metadata object is a mapping of client-provided string fields to any string value. The following limitations apply: - The JSON values must be Strings (no nested JSON objects allowed) - Only ASCII characters may be used - Maximum of 50 key/value pairs - Maximum key length of 40 characters - Maximum value length of 500 characters | [optional]
**origination_account_id** | **string** | Plaid’s unique identifier for the origination account for this transfer. If you have more than one origination account, this value must be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
