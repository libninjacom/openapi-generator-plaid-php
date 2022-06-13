# # TransferAuthorizationGuaranteeDecisionRationale

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | A code representing the reason Plaid declined to guarantee this transfer:  &#x60;RETURN_BANK&#x60;: The risk of a bank-initiated return (for example, an R01/NSF) is too high to guarantee this transfer.  &#x60;RETURN_CUSTOMER&#x60;: The risk of a customer-initiated return (for example, a R10/Unauthorized) is too high to guarantee this transfer.  &#x60;GUARANTEE_LIMIT_REACHED&#x60;: This transfer is low-risk, but Guaranteed ACH has exhausted an internal limit on the number or rate of guarantees that applies to this transfer.  &#x60;RISK_ESTIMATE_UNAVAILABLE&#x60;: A risk estimate is unavailable for this Item. |
**description** | **string** | A human-readable description of why the transfer cannot be guaranteed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
