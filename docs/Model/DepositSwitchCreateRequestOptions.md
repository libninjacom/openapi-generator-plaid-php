# # DepositSwitchCreateRequestOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook** | **string** | The URL registered to receive webhooks when the status of a deposit switch request has changed. | [optional]
**transaction_item_access_tokens** | **string[]** | An array of access tokens corresponding to transaction items to use when attempting to match the user to their Payroll Provider. These tokens must be created by the same client id as the one creating the switch, and have access to the transactions product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
