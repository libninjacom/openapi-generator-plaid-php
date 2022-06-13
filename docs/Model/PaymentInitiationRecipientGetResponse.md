# # PaymentInitiationRecipientGetResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recipient_id** | **string** | The ID of the recipient. |
**name** | **string** | The name of the recipient. |
**address** | [**\OpenAPI\Client\Model\PaymentInitiationAddress**](PaymentInitiationAddress.md) |  | [optional]
**iban** | **string** | The International Bank Account Number (IBAN) for the recipient. | [optional]
**bacs** | [**\OpenAPI\Client\Model\RecipientBACSNullable**](RecipientBACSNullable.md) |  | [optional]
**emi_recipient_id** | **string** | The EMI (E-Money Institution) recipient that this recipient is associated with, if any. This EMI recipient is used as an intermediary account to enable Plaid to reconcile the settlement of funds for Payment Initiation requests. | [optional]
**request_id** | **string** | A unique identifier for the request, which can be used for troubleshooting. This identifier, like all Plaid identifiers, is case sensitive. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
