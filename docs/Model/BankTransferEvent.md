# # BankTransferEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **int** | Plaid’s unique identifier for this event. IDs are sequential unsigned 64-bit integers. |
**timestamp** | **\DateTime** | The datetime when this event occurred. This will be of the form &#x60;2006-01-02T15:04:05Z&#x60;. |
**event_type** | [**\OpenAPI\Client\Model\BankTransferEventType**](BankTransferEventType.md) |  |
**account_id** | **string** | The account ID associated with the bank transfer. |
**bank_transfer_id** | **string** | Plaid’s unique identifier for a bank transfer. |
**origination_account_id** | **string** | The ID of the origination account that this balance belongs to. |
**bank_transfer_type** | [**\OpenAPI\Client\Model\BankTransferType**](BankTransferType.md) |  |
**bank_transfer_amount** | **string** | The bank transfer amount. |
**bank_transfer_iso_currency_code** | **string** | The currency of the bank transfer amount. |
**failure_reason** | [**\OpenAPI\Client\Model\BankTransferFailure**](BankTransferFailure.md) |  |
**direction** | [**\OpenAPI\Client\Model\BankTransferDirection**](BankTransferDirection.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
