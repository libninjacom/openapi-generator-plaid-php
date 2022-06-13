# # ProcessorBalanceGetRequestOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**min_last_updated_datetime** | **\DateTime** | Timestamp in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (&#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;) indicating the oldest acceptable balance when making a request to &#x60;/accounts/balance/get&#x60;.  If the balance that is pulled for &#x60;ins_128026&#x60; (Capital One) is older than the given timestamp, an &#x60;INVALID_REQUEST&#x60; error with the code of &#x60;LAST_UPDATED_DATETIME_OUT_OF_RANGE&#x60; will be returned with the most recent timestamp for the requested account contained in the response.  This field is only used when the institution is &#x60;ins_128026&#x60; (Capital One), in which case a value must be provided or an &#x60;INVALID_REQUEST&#x60; error with the code of &#x60;INVALID_FIELD&#x60; will be returned. For all other institutions, this field is ignored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)