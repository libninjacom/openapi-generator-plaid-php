# # PaymentInitiationMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supports_international_payments** | **bool** | Indicates whether the institution supports payments from a different country. |
**maximum_payment_amount** | **array<string,string>** | A mapping of currency to maximum payment amount (denominated in the smallest unit of currency) supported by the institution.  Example: &#x60;{\&quot;GBP\&quot;: \&quot;10000\&quot;}&#x60; |
**supports_refund_details** | **bool** | Indicates whether the institution supports returning refund details when initiating a payment. |
**standing_order_metadata** | [**\OpenAPI\Client\Model\PaymentInitiationStandingOrderMetadata**](PaymentInitiationStandingOrderMetadata.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
