# # TransactionsGetRequestOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_ids** | **string[]** | A list of &#x60;account_ids&#x60; to retrieve for the Item  Note: An error will be returned if a provided &#x60;account_id&#x60; is not associated with the Item. | [optional]
**count** | **int** | The number of transactions to fetch. | [optional] [default to 100]
**offset** | **int** | The number of transactions to skip. The default value is 0. | [optional] [default to 0]
**include_original_description** | **bool** | Include the raw unparsed transaction description from the financial institution. This field is disabled by default. If you need this information in addition to the parsed data provided, contact your Plaid Account Manager. | [optional] [default to false]
**include_personal_finance_category_beta** | **bool** | Include the &#x60;personal_finance_category&#x60; object in the response. This feature is currently in beta – to request access, contact transactions-feedback@plaid.com. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
