# # PaymentInitiationPaymentGetResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_id** | **string** | The ID of the payment. Like all Plaid identifiers, the &#x60;payment_id&#x60; is case sensitive. |
**amount** | [**\OpenAPI\Client\Model\PaymentAmount**](PaymentAmount.md) |  |
**status** | [**\OpenAPI\Client\Model\PaymentInitiationPaymentStatus**](PaymentInitiationPaymentStatus.md) |  |
**recipient_id** | **string** | The ID of the recipient |
**reference** | **string** | A reference for the payment. |
**adjusted_reference** | **string** | The value of the reference sent to the bank after adjustment to pass bank validation rules. | [optional]
**last_status_update** | **\DateTime** | The date and time of the last time the &#x60;status&#x60; was updated, in IS0 8601 format |
**schedule** | [**\OpenAPI\Client\Model\ExternalPaymentScheduleGet**](ExternalPaymentScheduleGet.md) |  | [optional]
**refund_details** | [**\OpenAPI\Client\Model\ExternalPaymentRefundDetails**](ExternalPaymentRefundDetails.md) |  | [optional]
**bacs** | [**\OpenAPI\Client\Model\SenderBACSNullable**](SenderBACSNullable.md) |  |
**iban** | **string** | The International Bank Account Number (IBAN) for the sender, if specified in the &#x60;/payment_initiation/payment/create&#x60; call. |
**initiated_refunds** | [**\OpenAPI\Client\Model\PaymentInitiationRefund[]**](PaymentInitiationRefund.md) | Initiated refunds associated with the payment. | [optional]
**wallet_id** | **string** | The EMI (E-Money Institution) wallet that this payment is associated with, if any. This wallet is used as an intermediary account to enable Plaid to reconcile the settlement of funds for Payment Initiation requests. | [optional]
**scheme** | [**\OpenAPI\Client\Model\PaymentScheme**](PaymentScheme.md) |  | [optional]
**adjusted_scheme** | [**\OpenAPI\Client\Model\PaymentScheme**](PaymentScheme.md) |  | [optional]
**request_id** | **string** | A unique identifier for the request, which can be used for troubleshooting. This identifier, like all Plaid identifiers, is case sensitive. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
