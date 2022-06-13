# # ConnectedApplication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_id** | **string** | This field will map to the application ID that is returned from /item/applications/list, or provided to the institution in an oauth redirect. |
**name** | **string** | The name of the application |
**logo** | **string** | A URL that links to the application logo image (will be deprecated in the future, please use logo_url). |
**logo_url** | **string** | A URL that links to the application logo image. |
**application_url** | **string** | The URL for the application&#39;s website |
**reason_for_access** | **string** | A string provided by the connected app stating why they use their respective enabled products. |
**created_at** | **\DateTime** | The date this application was linked in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) (YYYY-MM-DD) format in UTC. |
**join_date** | **\DateTime** | The date this application was granted production access at Plaid in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) (YYYY-MM-DD) format in UTC. |
**product_data_types** | **string[]** | (Deprecated) A list of enums representing the data collected and products enabled for this connected application. |
**scopes** | [**\OpenAPI\Client\Model\ScopesNullable**](ScopesNullable.md) |  | [optional]
**requested_scopes** | [**\OpenAPI\Client\Model\RequestedScopes**](RequestedScopes.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
