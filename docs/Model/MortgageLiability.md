# # MortgageLiability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The ID of the account that this liability belongs to. |
**account_number** | **string** | The account number of the loan. |
**current_late_fee** | **float** | The current outstanding amount charged for late payment. |
**escrow_balance** | **float** | Total amount held in escrow to pay taxes and insurance on behalf of the borrower. |
**has_pmi** | **bool** | Indicates whether the borrower has private mortgage insurance in effect. |
**has_prepayment_penalty** | **bool** | Indicates whether the borrower will pay a penalty for early payoff of mortgage. |
**interest_rate** | [**\OpenAPI\Client\Model\MortgageInterestRate**](MortgageInterestRate.md) |  |
**last_payment_amount** | **float** | The amount of the last payment. |
**last_payment_date** | **\DateTime** | The date of the last payment. Dates are returned in an [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (YYYY-MM-DD). |
**loan_type_description** | **string** | Description of the type of loan, for example &#x60;conventional&#x60;, &#x60;fixed&#x60;, or &#x60;variable&#x60;. This field is provided directly from the loan servicer and does not have an enumerated set of possible values. |
**loan_term** | **string** | Full duration of mortgage as at origination (e.g. &#x60;10 year&#x60;). |
**maturity_date** | **\DateTime** | Original date on which mortgage is due in full. Dates are returned in an [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (YYYY-MM-DD). |
**next_monthly_payment** | **float** | The amount of the next payment. |
**next_payment_due_date** | **\DateTime** | The due date for the next payment. Dates are returned in an [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (YYYY-MM-DD). |
**origination_date** | **\DateTime** | The date on which the loan was initially lent. Dates are returned in an [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (YYYY-MM-DD). |
**origination_principal_amount** | **float** | The original principal balance of the mortgage. |
**past_due_amount** | **float** | Amount of loan (principal + interest) past due for payment. |
**property_address** | [**\OpenAPI\Client\Model\MortgagePropertyAddress**](MortgagePropertyAddress.md) |  |
**ytd_interest_paid** | **float** | The year to date (YTD) interest paid. |
**ytd_principal_paid** | **float** | The YTD principal paid. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
