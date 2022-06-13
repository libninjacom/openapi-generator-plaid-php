# # TransferCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**idempotency_key** | **string** | Deprecated. &#x60;authorization_id&#x60; is now for used idempotency instead.  A random key provided by the client, per unique transfer. Maximum of 50 characters.  The API supports idempotency for safely retrying requests without accidentally performing the same operation twice. For example, if a request to create a transfer fails due to a network connection error, you can retry the request with the same idempotency key to guarantee that only a single transfer is created. | [optional]
**access_token** | **string** | The Plaid &#x60;access_token&#x60; for the account that will be debited or credited. |
**account_id** | **string** | The Plaid &#x60;account_id&#x60; for the account that will be debited or credited. |
**authorization_id** | **string** | Plaid’s unique identifier for a transfer authorization. This parameter also serves the purpose of acting as an idempotency identifier. |
**type** | [**\OpenAPI\Client\Model\TransferType**](TransferType.md) |  |
**network** | [**\OpenAPI\Client\Model\TransferNetwork**](TransferNetwork.md) |  |
**amount** | **string** | The amount of the transfer (decimal string with two digits of precision e.g. \&quot;10.00\&quot;). |
**description** | **string** | The transfer description. Maximum of 10 characters. |
**ach_class** | [**\OpenAPI\Client\Model\ACHClass**](ACHClass.md) |  |
**user** | [**\OpenAPI\Client\Model\TransferUserInRequest**](TransferUserInRequest.md) |  |
**metadata** | **array<string,string>** | The Metadata object is a mapping of client-provided string fields to any string value. The following limitations apply: - The JSON values must be Strings (no nested JSON objects allowed) - Only ASCII characters may be used - Maximum of 50 key/value pairs - Maximum key length of 40 characters - Maximum value length of 500 characters | [optional]
**origination_account_id** | **string** | Plaid’s unique identifier for the origination account for this transfer. If you have more than one origination account, this value must be specified. Otherwise, this field should be left blank. | [optional]
**iso_currency_code** | **string** | The currency of the transfer amount. The default value is \&quot;USD\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
