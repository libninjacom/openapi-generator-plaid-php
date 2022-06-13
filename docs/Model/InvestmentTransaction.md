# # InvestmentTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**investment_transaction_id** | **string** | The ID of the Investment transaction, unique across all Plaid transactions. Like all Plaid identifiers, the &#x60;investment_transaction_id&#x60; is case sensitive. |
**cancel_transaction_id** | **string** | A legacy field formerly used internally by Plaid to identify certain canceled transactions. | [optional]
**account_id** | **string** | The &#x60;account_id&#x60; of the account against which this transaction posted. |
**security_id** | **string** | The &#x60;security_id&#x60; to which this transaction is related. |
**date** | **\DateTime** | The [ISO 8601](https://wikipedia.org/wiki/ISO_8601) posting date for the transaction. |
**name** | **string** | The institution’s description of the transaction. |
**quantity** | **float** | The number of units of the security involved in this transaction. |
**amount** | **float** | The complete value of the transaction. Positive values when cash is debited, e.g. purchases of stock; negative values when cash is credited, e.g. sales of stock. Treatment remains the same for cash-only movements unassociated with securities. |
**price** | **float** | The price of the security at which this transaction occurred. |
**fees** | **float** | The combined value of all fees applied to this transaction |
**type** | **string** | Value is one of the following: &#x60;buy&#x60;: Buying an investment &#x60;sell&#x60;: Selling an investment &#x60;cancel&#x60;: A cancellation of a pending transaction &#x60;cash&#x60;: Activity that modifies a cash position &#x60;fee&#x60;: A fee on the account &#x60;transfer&#x60;: Activity which modifies a position, but not through buy/sell activity e.g. options exercise, portfolio transfer  For descriptions of possible transaction types and subtypes, see the [Investment transaction types schema](https://plaid.com/docs/api/accounts/#investment-transaction-types-schema). |
**subtype** | **string** | For descriptions of possible transaction types and subtypes, see the [Investment transaction types schema](https://plaid.com/docs/api/accounts/#investment-transaction-types-schema). |
**iso_currency_code** | **string** | The ISO-4217 currency code of the transaction. Always &#x60;null&#x60; if &#x60;unofficial_currency_code&#x60; is non-&#x60;null&#x60;. |
**unofficial_currency_code** | **string** | The unofficial currency code associated with the holding. Always &#x60;null&#x60; if &#x60;iso_currency_code&#x60; is non-&#x60;null&#x60;. Unofficial currency codes are used for currencies that do not have official ISO currency codes, such as cryptocurrencies and the currencies of certain countries.  See the [currency code schema](https://plaid.com/docs/api/accounts#currency-code-schema) for a full listing of supported &#x60;iso_currency_code&#x60;s. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
