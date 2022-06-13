# # DepositSwitchAltCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**target_account** | [**\OpenAPI\Client\Model\DepositSwitchTargetAccount**](DepositSwitchTargetAccount.md) |  |
**target_user** | [**\OpenAPI\Client\Model\DepositSwitchTargetUser**](DepositSwitchTargetUser.md) |  |
**options** | [**\OpenAPI\Client\Model\DepositSwitchCreateRequestOptions**](DepositSwitchCreateRequestOptions.md) |  | [optional]
**country_code** | **string** | ISO-3166-1 alpha-2 country code standard. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
