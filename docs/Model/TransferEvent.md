# # TransferEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **int** | Plaid’s unique identifier for this event. IDs are sequential unsigned 64-bit integers. |
**timestamp** | **\DateTime** | The datetime when this event occurred. This will be of the form &#x60;2006-01-02T15:04:05Z&#x60;. |
**event_type** | [**\OpenAPI\Client\Model\TransferEventType**](TransferEventType.md) |  |
**account_id** | **string** | The account ID associated with the transfer. |
**transfer_id** | **string** | Plaid’s unique identifier for a transfer. |
**origination_account_id** | **string** | The ID of the origination account that this balance belongs to. |
**transfer_type** | [**\OpenAPI\Client\Model\TransferType**](TransferType.md) |  |
**transfer_amount** | **string** | The amount of the transfer (decimal string with two digits of precision e.g. \&quot;10.00\&quot;). |
**failure_reason** | [**\OpenAPI\Client\Model\TransferFailure**](TransferFailure.md) |  |
**sweep_id** | **string** | Plaid’s unique identifier for a sweep. |
**sweep_amount** | **string** | A signed amount of how much was &#x60;swept&#x60; or &#x60;reverse_swept&#x60; (decimal string with two digits of precision e.g. \&quot;-5.50\&quot;). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
