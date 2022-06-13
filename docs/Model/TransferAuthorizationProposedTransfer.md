# # TransferAuthorizationProposedTransfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ach_class** | [**\OpenAPI\Client\Model\ACHClass**](ACHClass.md) |  |
**account_id** | **string** | The Plaid &#x60;account_id&#x60; for the account that will be debited or credited. |
**type** | [**\OpenAPI\Client\Model\TransferType**](TransferType.md) |  |
**user** | [**\OpenAPI\Client\Model\TransferUserInResponse**](TransferUserInResponse.md) |  |
**amount** | **string** | The amount of the transfer (decimal string with two digits of precision e.g. \&quot;10.00\&quot;). |
**network** | **string** | The network or rails used for the transfer. |
**origination_account_id** | **string** | Plaid&#39;s unique identifier for the origination account that was used for this transfer. |
**iso_currency_code** | **string** | The currency of the transfer amount. The default value is \&quot;USD\&quot;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
