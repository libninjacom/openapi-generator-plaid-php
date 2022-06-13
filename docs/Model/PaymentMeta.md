# # PaymentMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference_number** | **string** | The transaction reference number supplied by the financial institution. |
**ppd_id** | **string** | The ACH PPD ID for the payer. |
**payee** | **string** | For transfers, the party that is receiving the transaction. |
**by_order_of** | **string** | The party initiating a wire transfer. Will be &#x60;null&#x60; if the transaction is not a wire transfer. |
**payer** | **string** | For transfers, the party that is paying the transaction. |
**payment_method** | **string** | The type of transfer, e.g. &#39;ACH&#39; |
**payment_processor** | **string** | The name of the payment processor |
**reason** | **string** | The payer-supplied description of the transfer. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
