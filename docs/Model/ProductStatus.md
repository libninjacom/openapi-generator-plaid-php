# # ProductStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | This field is deprecated in favor of the &#x60;breakdown&#x60; object, which provides more granular institution health data.  &#x60;HEALTHY&#x60;: the majority of requests are successful &#x60;DEGRADED&#x60;: only some requests are successful &#x60;DOWN&#x60;: all requests are failing |
**last_status_change** | **\DateTime** | [ISO 8601](https://wikipedia.org/wiki/ISO_8601) formatted timestamp of the last status change for the institution. |
**breakdown** | [**\OpenAPI\Client\Model\ProductStatusBreakdown**](ProductStatusBreakdown.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
