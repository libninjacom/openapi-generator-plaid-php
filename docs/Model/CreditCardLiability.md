# # CreditCardLiability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the account that this liability belongs to. |
**aprs** | [**\OpenAPI\Client\Model\APR[]**](APR.md) | The various interest rates that apply to the account. |
**is_overdue** | **bool** | true if a payment is currently overdue. Availability for this field is limited. |
**last_payment_amount** | **float** | The amount of the last payment. |
**last_payment_date** | **\DateTime** | The date of the last payment. Dates are returned in an [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (YYYY-MM-DD). Availability for this field is limited. |
**last_statement_issue_date** | **\DateTime** | The date of the last statement. Dates are returned in an [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (YYYY-MM-DD). |
**last_statement_balance** | **float** | The total amount owed as of the last statement issued |
**minimum_payment_amount** | **float** | The minimum payment due for the next billing cycle. |
**next_payment_due_date** | **\DateTime** | The due date for the next payment. The due date is &#x60;null&#x60; if a payment is not expected. Dates are returned in an [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (YYYY-MM-DD). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
