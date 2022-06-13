# # InstitutionsSearchRequestOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**oauth** | **bool** | Limit results to institutions with or without OAuth login flows. | [optional]
**include_optional_metadata** | **bool** | When true, return the institution&#39;s homepage URL, logo and primary brand color. | [optional]
**include_auth_metadata** | **bool** | When &#x60;true&#x60;, returns metadata related to the Auth product indicating which auth methods are supported. | [optional] [default to false]
**include_payment_initiation_metadata** | **bool** | When &#x60;true&#x60;, returns metadata related to the Payment Initiation product indicating which payment configurations are supported. | [optional] [default to false]
**payment_initiation** | [**\OpenAPI\Client\Model\InstitutionsSearchPaymentInitiationOptions**](InstitutionsSearchPaymentInitiationOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
