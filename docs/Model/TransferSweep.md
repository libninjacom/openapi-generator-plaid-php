# # TransferSweep

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier of the sweep. |
**created** | **\DateTime** | The datetime when the sweep occurred, in RFC 3339 format. |
**amount** | **string** | Signed decimal amount of the sweep as it appears on your sweep account ledger (e.g. \&quot;-10.00\&quot;)  If amount is not present, the sweep was net-settled to zero and outstanding debits and credits between the sweep account and Plaid are balanced. |
**iso_currency_code** | **string** | The currency of the sweep, e.g. \&quot;USD\&quot;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
