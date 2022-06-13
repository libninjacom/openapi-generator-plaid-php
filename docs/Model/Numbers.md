# # Numbers

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Will be used for the account number. | [optional]
**ach_routing** | **string** | Must be a valid ACH routing number. | [optional]
**ach_wire_routing** | **string** | Must be a valid wire transfer routing number. | [optional]
**eft_institution** | **string** | EFT institution number. Must be specified alongside &#x60;eft_branch&#x60;. | [optional]
**eft_branch** | **string** | EFT branch number. Must be specified alongside &#x60;eft_institution&#x60;. | [optional]
**international_bic** | **string** | Bank identifier code (BIC). Must be specified alongside &#x60;international_iban&#x60;. | [optional]
**international_iban** | **string** | International bank account number (IBAN). If no account number is specified via &#x60;account&#x60;, will also be used as the account number by default. Must be specified alongside &#x60;international_bic&#x60;. | [optional]
**bacs_sort_code** | **string** | BACS sort code | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
