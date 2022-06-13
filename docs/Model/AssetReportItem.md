# # AssetReportItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **string** | The &#x60;item_id&#x60; of the Item associated with this webhook, warning, or error |
**institution_name** | **string** | The full financial institution name associated with the Item. |
**institution_id** | **string** | The id of the financial institution associated with the Item. |
**date_last_updated** | **\DateTime** | The date and time when this Item’s data was last retrieved from the financial institution, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format. |
**accounts** | [**\OpenAPI\Client\Model\AccountAssets[]**](AccountAssets.md) | Data about each of the accounts open on the Item. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
