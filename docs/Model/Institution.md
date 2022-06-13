# # Institution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**institution_id** | **string** | Unique identifier for the institution |
**name** | **string** | The official name of the institution |
**products** | [**\OpenAPI\Client\Model\Products[]**](Products.md) | A list of the Plaid products supported by the institution. Note that only institutions that support Instant Auth will return &#x60;auth&#x60; in the product array; institutions that do not list &#x60;auth&#x60; may still support other Auth methods such as Instant Match or Automated Micro-deposit Verification. To identify institutions that support those methods, use the &#x60;auth_metadata&#x60; object. For more details, see [Full Auth coverage](https://plaid.com/docs/auth/coverage/). |
**country_codes** | [**\OpenAPI\Client\Model\CountryCode[]**](CountryCode.md) | A list of the country codes supported by the institution. |
**url** | **string** | The URL for the institution&#39;s website | [optional]
**primary_color** | **string** | Hexadecimal representation of the primary color used by the institution | [optional]
**logo** | **string** | Base64 encoded representation of the institution&#39;s logo | [optional]
**routing_numbers** | **string[]** | A partial list of routing numbers associated with the institution. This list is provided for the purpose of looking up institutions by routing number. It is not comprehensive and should never be used as a complete list of routing numbers for an institution. |
**oauth** | **bool** | Indicates that the institution has an OAuth login flow. |
**status** | [**\OpenAPI\Client\Model\InstitutionStatus**](InstitutionStatus.md) |  | [optional]
**payment_initiation_metadata** | [**\OpenAPI\Client\Model\PaymentInitiationMetadata**](PaymentInitiationMetadata.md) |  | [optional]
**auth_metadata** | [**\OpenAPI\Client\Model\AuthMetadata**](AuthMetadata.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
