# # PaymentStatusUpdateWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_type** | **string** | &#x60;PAYMENT_INITIATION&#x60; |
**webhook_code** | **string** | &#x60;PAYMENT_STATUS_UPDATE&#x60; |
**payment_id** | **string** | The &#x60;payment_id&#x60; for the payment being updated |
**new_payment_status** | [**\OpenAPI\Client\Model\PaymentInitiationPaymentStatus**](PaymentInitiationPaymentStatus.md) |  |
**old_payment_status** | [**\OpenAPI\Client\Model\PaymentInitiationPaymentStatus**](PaymentInitiationPaymentStatus.md) |  |
**original_reference** | **string** | The original value of the reference when creating the payment. |
**adjusted_reference** | **string** | The value of the reference sent to the bank after adjustment to pass bank validation rules. | [optional]
**original_start_date** | **\DateTime** | The original value of the &#x60;start_date&#x60; provided during the creation of a standing order. If the payment is not a standing order, this field will be &#x60;null&#x60;. |
**adjusted_start_date** | **\DateTime** | The start date sent to the bank after adjusting for holidays or weekends.  Will be provided in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (YYYY-MM-DD). If the start date did not require adjustment, or if the payment is not a standing order, this field will be &#x60;null&#x60;. |
**timestamp** | **\DateTime** | The timestamp of the update, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format, e.g. &#x60;\&quot;2017-09-14T14:42:19.350Z\&quot;&#x60; |
**error** | [**\OpenAPI\Client\Model\PlaidError**](PlaidError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
