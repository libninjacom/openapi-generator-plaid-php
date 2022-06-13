# # TransferIntentCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Plaid&#39;s unique identifier for the transfer intent object. |
**created** | **\DateTime** | The datetime the transfer was created. This will be of the form &#x60;2006-01-02T15:04:05Z&#x60;. |
**status** | **string** | The status of the transfer intent.  - &#x60;PENDING&#x60; – The transfer intent is pending. - &#x60;SUCCEEDED&#x60; – The transfer intent was successfully created. - &#x60;FAILED&#x60; – The transfer intent was unable to be created. |
**account_id** | **string** | The Plaid &#x60;account_id&#x60; for the account that will be debited or credited. Returned only if &#x60;account_id&#x60; was set on intent creation. | [optional]
**origination_account_id** | **string** | Plaid’s unique identifier for the origination account for the intent. If not provided, the default account will be used. |
**amount** | **string** | The amount of the transfer (decimal string with two digits of precision e.g. \&quot;10.00\&quot;). |
**mode** | [**\OpenAPI\Client\Model\TransferIntentCreateMode**](TransferIntentCreateMode.md) |  |
**ach_class** | [**\OpenAPI\Client\Model\ACHClass**](ACHClass.md) |  |
**user** | [**\OpenAPI\Client\Model\TransferUserInResponse**](TransferUserInResponse.md) |  |
**description** | **string** | A description for the underlying transfer. Maximum of 8 characters. |
**metadata** | **array<string,string>** | The Metadata object is a mapping of client-provided string fields to any string value. The following limitations apply: - The JSON values must be Strings (no nested JSON objects allowed) - Only ASCII characters may be used - Maximum of 50 key/value pairs - Maximum key length of 40 characters - Maximum value length of 500 characters | [optional]
**iso_currency_code** | **string** | The currency of the transfer amount, e.g. \&quot;USD\&quot; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
