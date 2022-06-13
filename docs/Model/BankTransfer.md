# # BankTransfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Plaid’s unique identifier for a bank transfer. |
**ach_class** | [**\OpenAPI\Client\Model\ACHClass**](ACHClass.md) |  |
**account_id** | **string** | The account ID that should be credited/debited for this bank transfer. |
**type** | [**\OpenAPI\Client\Model\BankTransferType**](BankTransferType.md) |  |
**user** | [**\OpenAPI\Client\Model\BankTransferUser**](BankTransferUser.md) |  |
**amount** | **string** | The amount of the bank transfer (decimal string with two digits of precision e.g. \&quot;10.00\&quot;). |
**iso_currency_code** | **string** | The currency of the transfer amount, e.g. \&quot;USD\&quot; |
**description** | **string** | The description of the transfer. |
**created** | **\DateTime** | The datetime when this bank transfer was created. This will be of the form &#x60;2006-01-02T15:04:05Z&#x60; |
**status** | [**\OpenAPI\Client\Model\BankTransferStatus**](BankTransferStatus.md) |  |
**network** | [**\OpenAPI\Client\Model\BankTransferNetwork**](BankTransferNetwork.md) |  |
**cancellable** | **bool** | When &#x60;true&#x60;, you can still cancel this bank transfer. |
**failure_reason** | [**\OpenAPI\Client\Model\BankTransferFailure**](BankTransferFailure.md) |  |
**custom_tag** | **string** | A string containing the custom tag provided by the client in the create request. Will be null if not provided. |
**metadata** | **array<string,string>** | The Metadata object is a mapping of client-provided string fields to any string value. The following limitations apply: - The JSON values must be Strings (no nested JSON objects allowed) - Only ASCII characters may be used - Maximum of 50 key/value pairs - Maximum key length of 40 characters - Maximum value length of 500 characters |
**origination_account_id** | **string** | Plaid’s unique identifier for the origination account that was used for this transfer. |
**direction** | [**\OpenAPI\Client\Model\BankTransferDirection**](BankTransferDirection.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
