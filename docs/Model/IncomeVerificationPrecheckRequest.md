# # IncomeVerificationPrecheckRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**user** | [**\OpenAPI\Client\Model\IncomeVerificationPrecheckUser**](IncomeVerificationPrecheckUser.md) |  | [optional]
**employer** | [**\OpenAPI\Client\Model\IncomeVerificationPrecheckEmployer**](IncomeVerificationPrecheckEmployer.md) |  | [optional]
**transactions_access_token** | **string** |  | [optional]
**transactions_access_tokens** | **string[]** | An array of access tokens corresponding to Items belonging to the user whose eligibility is being checked. Note that if the Items specified here are not already initialized with &#x60;transactions&#x60;, providing them in this field will cause these Items to be initialized with (and billed for) the Transactions product. | [optional]
**us_military_info** | [**\OpenAPI\Client\Model\IncomeVerificationPrecheckMilitaryInfo**](IncomeVerificationPrecheckMilitaryInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
