# # OverrideAccounts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\OverrideAccountType**](OverrideAccountType.md) |  |
**subtype** | [**\OpenAPI\Client\Model\AccountSubtype**](AccountSubtype.md) |  |
**starting_balance** | **float** | If provided, the account will start with this amount as the current balance. |
**force_available_balance** | **float** | If provided, the account will always have this amount as its  available balance, regardless of current balance or changes in transactions over time. |
**currency** | **string** | ISO-4217 currency code. If provided, the account will be denominated in the given currency. Transactions will also be in this currency by default. |
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  |
**numbers** | [**\OpenAPI\Client\Model\Numbers**](Numbers.md) |  |
**transactions** | [**\OpenAPI\Client\Model\TransactionOverride[]**](TransactionOverride.md) | Specify the list of transactions on the account. |
**holdings** | [**\OpenAPI\Client\Model\HoldingsOverride**](HoldingsOverride.md) |  | [optional]
**investment_transactions** | [**\OpenAPI\Client\Model\InvestmentsTransactionsOverride**](InvestmentsTransactionsOverride.md) |  | [optional]
**identity** | [**\OpenAPI\Client\Model\OwnerOverride**](OwnerOverride.md) |  |
**liability** | [**\OpenAPI\Client\Model\LiabilityOverride**](LiabilityOverride.md) |  |
**inflow_model** | [**\OpenAPI\Client\Model\InflowModel**](InflowModel.md) |  |
**income** | [**\OpenAPI\Client\Model\IncomeOverride**](IncomeOverride.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
