# # TransferAuthorizationCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**access_token** | **string** | The Plaid &#x60;access_token&#x60; for the account that will be debited or credited. |
**account_id** | **string** | The Plaid &#x60;account_id&#x60; for the account that will be debited or credited. |
**type** | [**\OpenAPI\Client\Model\TransferType**](TransferType.md) |  |
**network** | [**\OpenAPI\Client\Model\TransferNetwork**](TransferNetwork.md) |  |
**amount** | **string** | The amount of the transfer (decimal string with two digits of precision e.g. \&quot;10.00\&quot;). |
**ach_class** | [**\OpenAPI\Client\Model\ACHClass**](ACHClass.md) |  |
**user** | [**\OpenAPI\Client\Model\TransferUserInRequest**](TransferUserInRequest.md) |  |
**device** | [**\OpenAPI\Client\Model\TransferAuthorizationDevice**](TransferAuthorizationDevice.md) |  | [optional]
**origination_account_id** | **string** | Plaid&#39;s unique identifier for the origination account for this authorization. If not specified, the default account will be used. | [optional]
**iso_currency_code** | **string** | The currency of the transfer amount. The default value is \&quot;USD\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
