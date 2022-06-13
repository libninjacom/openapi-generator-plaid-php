# # SandboxBankTransferSimulateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Your Plaid API &#x60;client_id&#x60;. The &#x60;client_id&#x60; is required and may be provided either in the &#x60;PLAID-CLIENT-ID&#x60; header or as part of a request body. | [optional]
**secret** | **string** | Your Plaid API &#x60;secret&#x60;. The &#x60;secret&#x60; is required and may be provided either in the &#x60;PLAID-SECRET&#x60; header or as part of a request body. | [optional]
**bank_transfer_id** | **string** | Plaid’s unique identifier for a bank transfer. |
**event_type** | **string** | The asynchronous event to be simulated. May be: &#x60;posted&#x60;, &#x60;failed&#x60;, or &#x60;reversed&#x60;.  An error will be returned if the event type is incompatible with the current transfer status. Compatible status --&gt; event type transitions include:  &#x60;pending&#x60; --&gt; &#x60;failed&#x60;  &#x60;pending&#x60; --&gt; &#x60;posted&#x60;  &#x60;posted&#x60; --&gt; &#x60;reversed&#x60; |
**failure_reason** | [**\OpenAPI\Client\Model\BankTransferFailure**](BankTransferFailure.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
