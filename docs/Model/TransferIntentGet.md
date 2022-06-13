# # TransferIntentGet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Plaid&#39;s unique identifier for a transfer intent object. |
**created** | **\DateTime** | The datetime the transfer was created. This will be of the form &#x60;2006-01-02T15:04:05Z&#x60;. |
**status** | **string** | The status of the transfer intent.  - &#x60;PENDING&#x60; – The transfer intent is pending. - &#x60;SUCCEEDED&#x60; – The transfer intent was successfully created. - &#x60;FAILED&#x60; – The transfer intent was unable to be created. |
**transfer_id** | **string** | Plaid&#39;s unique identifier for the transfer created through the UI. Returned only if the transfer was successfully created. Null value otherwise. |
**failure_reason** | [**\OpenAPI\Client\Model\TransferIntentGetFailureReason**](TransferIntentGetFailureReason.md) |  |
**authorization_decision** | **string** | A decision regarding the proposed transfer.  &#x60;APPROVED&#x60; – The proposed transfer has received the end user&#39;s consent and has been approved for processing. Plaid has also reviewed the proposed transfer and has approved it for processing.   &#x60;PERMITTED&#x60; – Plaid was unable to fetch the information required to approve or decline the proposed transfer. You may proceed with the transfer, but further review is recommended. Plaid is awaiting further instructions from the client.  &#x60;DECLINED&#x60; – Plaid reviewed the proposed transfer and declined processing. Refer to the &#x60;code&#x60; field in the &#x60;decision_rationale&#x60; object for details. Null value otherwise. |
**authorization_decision_rationale** | [**\OpenAPI\Client\Model\TransferAuthorizationDecisionRationale**](TransferAuthorizationDecisionRationale.md) |  |
**account_id** | **string** | The Plaid &#x60;account_id&#x60; for the account that will be debited or credited. Returned only if &#x60;account_id&#x60; was set on intent creation. | [optional]
**origination_account_id** | **string** | Plaid’s unique identifier for the origination account used for the transfer. |
**amount** | **string** | The amount of the transfer (decimal string with two digits of precision e.g. \&quot;10.00\&quot;). |
**mode** | [**\OpenAPI\Client\Model\TransferIntentCreateMode**](TransferIntentCreateMode.md) |  |
**ach_class** | [**\OpenAPI\Client\Model\ACHClass**](ACHClass.md) |  |
**user** | [**\OpenAPI\Client\Model\TransferUserInResponse**](TransferUserInResponse.md) |  |
**description** | **string** | A description for the underlying transfer. Maximum of 8 characters. |
**metadata** | **array<string,string>** | The Metadata object is a mapping of client-provided string fields to any string value. The following limitations apply: - The JSON values must be Strings (no nested JSON objects allowed) - Only ASCII characters may be used - Maximum of 50 key/value pairs - Maximum key length of 40 characters - Maximum value length of 500 characters | [optional]
**iso_currency_code** | **string** | The currency of the transfer amount, e.g. \&quot;USD\&quot; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
