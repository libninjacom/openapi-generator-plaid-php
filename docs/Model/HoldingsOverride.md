# # HoldingsOverride

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**institution_price** | **float** | The last price given by the institution for this security |
**institution_price_as_of** | **\DateTime** | The date at which &#x60;institution_price&#x60; was current. Must be formatted as an [ISO 8601](https://wikipedia.org/wiki/ISO_8601) date. | [optional]
**cost_basis** | **float** | The average original value of the holding. Multiple cost basis values for the same security purchased at different prices are not supported. | [optional]
**quantity** | **float** | The total quantity of the asset held, as reported by the financial institution. |
**currency** | **string** | Either a valid &#x60;iso_currency_code&#x60; or &#x60;unofficial_currency_code&#x60; |
**security** | [**\OpenAPI\Client\Model\SecurityOverride**](SecurityOverride.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
