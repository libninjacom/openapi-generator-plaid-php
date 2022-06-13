# # PaymentInitiationStandingOrderMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supports_standing_order_end_date** | **bool** | Indicates whether the institution supports closed-ended standing orders by providing an end date. |
**supports_standing_order_negative_execution_days** | **bool** | This is only applicable to &#x60;MONTHLY&#x60; standing orders. Indicates whether the institution supports negative integers (-1 to -5) for setting up a &#x60;MONTHLY&#x60; standing order relative to the end of the month. |
**valid_standing_order_intervals** | [**\OpenAPI\Client\Model\PaymentScheduleInterval[]**](PaymentScheduleInterval.md) | A list of the valid standing order intervals supported by the institution. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
