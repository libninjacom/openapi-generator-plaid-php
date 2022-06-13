# # AssetReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset_report_id** | **string** | A unique ID identifying an Asset Report. Like all Plaid identifiers, this ID is case sensitive. |
**client_report_id** | **string** | An identifier you determine and submit for the Asset Report. |
**date_generated** | **\DateTime** | The date and time when the Asset Report was created, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (e.g. \&quot;2018-04-12T03:32:11Z\&quot;). |
**days_requested** | **float** | The duration of transaction history you requested |
**user** | [**\OpenAPI\Client\Model\AssetReportUser**](AssetReportUser.md) |  |
**items** | [**\OpenAPI\Client\Model\AssetReportItem[]**](AssetReportItem.md) | Data returned by Plaid about each of the Items included in the Asset Report. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
