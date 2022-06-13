# # EarningsBreakdown

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**canonical_description** | [**\OpenAPI\Client\Model\EarningsBreakdownCanonicalDescription**](EarningsBreakdownCanonicalDescription.md) |  | [optional]
**current_amount** | **float** | Raw amount of the earning line item. | [optional]
**description** | **string** | Description of the earning line item. | [optional]
**hours** | **float** | Number of hours applicable for this earning. | [optional]
**iso_currency_code** | **string** | The ISO-4217 currency code of the line item. Always &#x60;null&#x60; if &#x60;unofficial_currency_code&#x60; is non-null. | [optional]
**rate** | **float** | Hourly rate applicable for this earning. | [optional]
**unofficial_currency_code** | **string** | The unofficial currency code associated with the line item. Always &#x60;null&#x60; if &#x60;iso_currency_code&#x60; is non-&#x60;null&#x60;. Unofficial currency codes are used for currencies that do not have official ISO currency codes, such as cryptocurrencies and the currencies of certain countries.  See the [currency code schema](https://plaid.com/docs/api/accounts#currency-code-schema) for a full listing of supported &#x60;iso_currency_code&#x60;s. | [optional]
**ytd_amount** | **float** | The year-to-date amount of the deduction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
