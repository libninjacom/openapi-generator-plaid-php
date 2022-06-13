# # BankTransferEventListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**start_date** | **\DateTime** | The start datetime of bank transfers to list. This should be in RFC 3339 format (i.e. &#x60;2019-12-06T22:35:49Z&#x60;) | [optional]
**end_date** | **\DateTime** | The end datetime of bank transfers to list. This should be in RFC 3339 format (i.e. &#x60;2019-12-06T22:35:49Z&#x60;) | [optional]
**bank_transfer_id** | **string** | Plaid’s unique identifier for a bank transfer. | [optional]
**account_id** | **string** | The account ID to get events for all transactions to/from an account. | [optional]
**bank_transfer_type** | **string** | The type of bank transfer. This will be either &#x60;debit&#x60; or &#x60;credit&#x60;.  A &#x60;debit&#x60; indicates a transfer of money into your origination account; a &#x60;credit&#x60; indicates a transfer of money out of your origination account. | [optional]
**event_types** | [**\OpenAPI\Client\Model\BankTransferEventType[]**](BankTransferEventType.md) | Filter events by event type. | [optional]
**count** | **int** | The maximum number of bank transfer events to return. If the number of events matching the above parameters is greater than &#x60;count&#x60;, the most recent events will be returned. | [optional] [default to 25]
**offset** | **int** | The offset into the list of bank transfer events. When &#x60;count&#x60;&#x3D;25 and &#x60;offset&#x60;&#x3D;0, the first 25 events will be returned. When &#x60;count&#x60;&#x3D;25 and &#x60;offset&#x60;&#x3D;25, the next 25 bank transfer events will be returned. | [optional] [default to 0]
**origination_account_id** | **string** | The origination account ID to get events for transfers from a specific origination account. | [optional]
**direction** | **string** | Indicates the direction of the transfer: &#x60;outbound&#x60;: for API-initiated transfers &#x60;inbound&#x60;: for payments received by the FBO account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
