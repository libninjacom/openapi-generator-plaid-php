# OpenAPI\Client\PlaidApi

All URIs are relative to https://production.plaid.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsBalanceGet()**](PlaidApi.md#accountsBalanceGet) | **POST** /accounts/balance/get | Retrieve real-time balance data
[**accountsGet()**](PlaidApi.md#accountsGet) | **POST** /accounts/get | Retrieve accounts
[**applicationGet()**](PlaidApi.md#applicationGet) | **POST** /application/get | Retrieve information about a Plaid application
[**assetReportAuditCopyCreate()**](PlaidApi.md#assetReportAuditCopyCreate) | **POST** /asset_report/audit_copy/create | Create Asset Report Audit Copy
[**assetReportAuditCopyGet()**](PlaidApi.md#assetReportAuditCopyGet) | **POST** /asset_report/audit_copy/get | Retrieve an Asset Report Audit Copy
[**assetReportAuditCopyRemove()**](PlaidApi.md#assetReportAuditCopyRemove) | **POST** /asset_report/audit_copy/remove | Remove Asset Report Audit Copy
[**assetReportCreate()**](PlaidApi.md#assetReportCreate) | **POST** /asset_report/create | Create an Asset Report
[**assetReportFilter()**](PlaidApi.md#assetReportFilter) | **POST** /asset_report/filter | Filter Asset Report
[**assetReportGet()**](PlaidApi.md#assetReportGet) | **POST** /asset_report/get | Retrieve an Asset Report
[**assetReportPdfGet()**](PlaidApi.md#assetReportPdfGet) | **POST** /asset_report/pdf/get | Retrieve a PDF Asset Report
[**assetReportRefresh()**](PlaidApi.md#assetReportRefresh) | **POST** /asset_report/refresh | Refresh an Asset Report
[**assetReportRemove()**](PlaidApi.md#assetReportRemove) | **POST** /asset_report/remove | Delete an Asset Report
[**authGet()**](PlaidApi.md#authGet) | **POST** /auth/get | Retrieve auth data
[**bankTransferBalanceGet()**](PlaidApi.md#bankTransferBalanceGet) | **POST** /bank_transfer/balance/get | Get balance of your Bank Transfer account
[**bankTransferCancel()**](PlaidApi.md#bankTransferCancel) | **POST** /bank_transfer/cancel | Cancel a bank transfer
[**bankTransferCreate()**](PlaidApi.md#bankTransferCreate) | **POST** /bank_transfer/create | Create a bank transfer
[**bankTransferEventList()**](PlaidApi.md#bankTransferEventList) | **POST** /bank_transfer/event/list | List bank transfer events
[**bankTransferEventSync()**](PlaidApi.md#bankTransferEventSync) | **POST** /bank_transfer/event/sync | Sync bank transfer events
[**bankTransferGet()**](PlaidApi.md#bankTransferGet) | **POST** /bank_transfer/get | Retrieve a bank transfer
[**bankTransferList()**](PlaidApi.md#bankTransferList) | **POST** /bank_transfer/list | List bank transfers
[**bankTransferMigrateAccount()**](PlaidApi.md#bankTransferMigrateAccount) | **POST** /bank_transfer/migrate_account | Migrate account into Bank Transfers
[**bankTransferSweepGet()**](PlaidApi.md#bankTransferSweepGet) | **POST** /bank_transfer/sweep/get | Retrieve a sweep
[**bankTransferSweepList()**](PlaidApi.md#bankTransferSweepList) | **POST** /bank_transfer/sweep/list | List sweeps
[**categoriesGet()**](PlaidApi.md#categoriesGet) | **POST** /categories/get | Get Categories
[**createPaymentToken()**](PlaidApi.md#createPaymentToken) | **POST** /payment_initiation/payment/token/create | Create payment token
[**depositSwitchAltCreate()**](PlaidApi.md#depositSwitchAltCreate) | **POST** /deposit_switch/alt/create | Create a deposit switch without using Plaid Exchange
[**depositSwitchCreate()**](PlaidApi.md#depositSwitchCreate) | **POST** /deposit_switch/create | Create a deposit switch
[**depositSwitchGet()**](PlaidApi.md#depositSwitchGet) | **POST** /deposit_switch/get | Retrieve a deposit switch
[**depositSwitchTokenCreate()**](PlaidApi.md#depositSwitchTokenCreate) | **POST** /deposit_switch/token/create | Create a deposit switch token
[**employersSearch()**](PlaidApi.md#employersSearch) | **POST** /employers/search | Search employer database
[**employmentVerificationGet()**](PlaidApi.md#employmentVerificationGet) | **POST** /employment/verification/get | Retrieve a summary of an individual&#39;s employment information
[**identityGet()**](PlaidApi.md#identityGet) | **POST** /identity/get | Retrieve identity data
[**incomeVerificationCreate()**](PlaidApi.md#incomeVerificationCreate) | **POST** /income/verification/create | (Deprecated) Create an income verification instance
[**incomeVerificationDocumentsDownload()**](PlaidApi.md#incomeVerificationDocumentsDownload) | **POST** /income/verification/documents/download | Download the original documents used for income verification
[**incomeVerificationPaystubGet()**](PlaidApi.md#incomeVerificationPaystubGet) | **POST** /income/verification/paystub/get | (Deprecated) Retrieve information from a single paystub used for income verification
[**incomeVerificationPaystubsGet()**](PlaidApi.md#incomeVerificationPaystubsGet) | **POST** /income/verification/paystubs/get | Retrieve information from the paystubs used for income verification
[**incomeVerificationPrecheck()**](PlaidApi.md#incomeVerificationPrecheck) | **POST** /income/verification/precheck | Check digital income verification eligibility and optimize conversion
[**incomeVerificationRefresh()**](PlaidApi.md#incomeVerificationRefresh) | **POST** /income/verification/refresh | Refresh an income verification
[**incomeVerificationSummaryGet()**](PlaidApi.md#incomeVerificationSummaryGet) | **POST** /income/verification/summary/get | (Deprecated) Retrieve a summary of information derived from income verification
[**incomeVerificationTaxformsGet()**](PlaidApi.md#incomeVerificationTaxformsGet) | **POST** /income/verification/taxforms/get | Retrieve information from the tax documents used for income verification
[**institutionsGet()**](PlaidApi.md#institutionsGet) | **POST** /institutions/get | Get details of all supported institutions
[**institutionsGetById()**](PlaidApi.md#institutionsGetById) | **POST** /institutions/get_by_id | Get details of an institution
[**institutionsSearch()**](PlaidApi.md#institutionsSearch) | **POST** /institutions/search | Search institutions
[**investmentsHoldingsGet()**](PlaidApi.md#investmentsHoldingsGet) | **POST** /investments/holdings/get | Get Investment holdings
[**investmentsTransactionsGet()**](PlaidApi.md#investmentsTransactionsGet) | **POST** /investments/transactions/get | Get investment transactions
[**itemAccessTokenInvalidate()**](PlaidApi.md#itemAccessTokenInvalidate) | **POST** /item/access_token/invalidate | Invalidate access_token
[**itemApplicationList()**](PlaidApi.md#itemApplicationList) | **POST** /item/application/list | List a user’s connected applications
[**itemApplicationScopesUpdate()**](PlaidApi.md#itemApplicationScopesUpdate) | **POST** /item/application/scopes/update | Update the scopes of access for a particular application
[**itemCreatePublicToken()**](PlaidApi.md#itemCreatePublicToken) | **POST** /item/public_token/create | Create public token
[**itemGet()**](PlaidApi.md#itemGet) | **POST** /item/get | Retrieve an Item
[**itemImport()**](PlaidApi.md#itemImport) | **POST** /item/import | Import Item
[**itemPublicTokenExchange()**](PlaidApi.md#itemPublicTokenExchange) | **POST** /item/public_token/exchange | Exchange public token for an access token
[**itemRemove()**](PlaidApi.md#itemRemove) | **POST** /item/remove | Remove an Item
[**itemWebhookUpdate()**](PlaidApi.md#itemWebhookUpdate) | **POST** /item/webhook/update | Update Webhook URL
[**liabilitiesGet()**](PlaidApi.md#liabilitiesGet) | **POST** /liabilities/get | Retrieve Liabilities data
[**linkTokenCreate()**](PlaidApi.md#linkTokenCreate) | **POST** /link/token/create | Create Link Token
[**linkTokenGet()**](PlaidApi.md#linkTokenGet) | **POST** /link/token/get | Get Link Token
[**paymentInitiationPaymentCreate()**](PlaidApi.md#paymentInitiationPaymentCreate) | **POST** /payment_initiation/payment/create | Create a payment
[**paymentInitiationPaymentGet()**](PlaidApi.md#paymentInitiationPaymentGet) | **POST** /payment_initiation/payment/get | Get payment details
[**paymentInitiationPaymentList()**](PlaidApi.md#paymentInitiationPaymentList) | **POST** /payment_initiation/payment/list | List payments
[**paymentInitiationPaymentReverse()**](PlaidApi.md#paymentInitiationPaymentReverse) | **POST** /payment_initiation/payment/reverse | Reverse an existing payment
[**paymentInitiationRecipientCreate()**](PlaidApi.md#paymentInitiationRecipientCreate) | **POST** /payment_initiation/recipient/create | Create payment recipient
[**paymentInitiationRecipientGet()**](PlaidApi.md#paymentInitiationRecipientGet) | **POST** /payment_initiation/recipient/get | Get payment recipient
[**paymentInitiationRecipientList()**](PlaidApi.md#paymentInitiationRecipientList) | **POST** /payment_initiation/recipient/list | List payment recipients
[**processorApexProcessorTokenCreate()**](PlaidApi.md#processorApexProcessorTokenCreate) | **POST** /processor/apex/processor_token/create | Create Apex bank account token
[**processorAuthGet()**](PlaidApi.md#processorAuthGet) | **POST** /processor/auth/get | Retrieve Auth data
[**processorBalanceGet()**](PlaidApi.md#processorBalanceGet) | **POST** /processor/balance/get | Retrieve Balance data
[**processorBankTransferCreate()**](PlaidApi.md#processorBankTransferCreate) | **POST** /processor/bank_transfer/create | Create a bank transfer as a processor
[**processorIdentityGet()**](PlaidApi.md#processorIdentityGet) | **POST** /processor/identity/get | Retrieve Identity data
[**processorStripeBankAccountTokenCreate()**](PlaidApi.md#processorStripeBankAccountTokenCreate) | **POST** /processor/stripe/bank_account_token/create | Create Stripe bank account token
[**processorTokenCreate()**](PlaidApi.md#processorTokenCreate) | **POST** /processor/token/create | Create processor token
[**sandboxBankTransferFireWebhook()**](PlaidApi.md#sandboxBankTransferFireWebhook) | **POST** /sandbox/bank_transfer/fire_webhook | Manually fire a Bank Transfer webhook
[**sandboxBankTransferSimulate()**](PlaidApi.md#sandboxBankTransferSimulate) | **POST** /sandbox/bank_transfer/simulate | Simulate a bank transfer event in Sandbox
[**sandboxIncomeFireWebhook()**](PlaidApi.md#sandboxIncomeFireWebhook) | **POST** /sandbox/income/fire_webhook | Manually fire an Income webhook
[**sandboxItemFireWebhook()**](PlaidApi.md#sandboxItemFireWebhook) | **POST** /sandbox/item/fire_webhook | Fire a test webhook
[**sandboxItemResetLogin()**](PlaidApi.md#sandboxItemResetLogin) | **POST** /sandbox/item/reset_login | Force a Sandbox Item into an error state
[**sandboxItemSetVerificationStatus()**](PlaidApi.md#sandboxItemSetVerificationStatus) | **POST** /sandbox/item/set_verification_status | Set verification status for Sandbox account
[**sandboxOauthSelectAccounts()**](PlaidApi.md#sandboxOauthSelectAccounts) | **POST** /sandbox/oauth/select_accounts | Save the selected accounts when connecting to the Platypus Oauth institution
[**sandboxProcessorTokenCreate()**](PlaidApi.md#sandboxProcessorTokenCreate) | **POST** /sandbox/processor_token/create | Create a test Item and processor token
[**sandboxPublicTokenCreate()**](PlaidApi.md#sandboxPublicTokenCreate) | **POST** /sandbox/public_token/create | Create a test Item
[**sandboxTransferRepaymentSimulate()**](PlaidApi.md#sandboxTransferRepaymentSimulate) | **POST** /sandbox/transfer/repayment/simulate | Trigger the creation of a repayment
[**sandboxTransferSimulate()**](PlaidApi.md#sandboxTransferSimulate) | **POST** /sandbox/transfer/simulate | Simulate a transfer event in Sandbox
[**sandboxTransferSweepSimulate()**](PlaidApi.md#sandboxTransferSweepSimulate) | **POST** /sandbox/transfer/sweep/simulate | Simulate creating a sweep
[**signalDecisionReport()**](PlaidApi.md#signalDecisionReport) | **POST** /signal/decision/report | Report whether you initiated an ACH transaction
[**signalEvaluate()**](PlaidApi.md#signalEvaluate) | **POST** /signal/evaluate | Evaluate a planned ACH transaction
[**signalReturnReport()**](PlaidApi.md#signalReturnReport) | **POST** /signal/return/report | Report a return for an ACH transaction
[**transactionsGet()**](PlaidApi.md#transactionsGet) | **POST** /transactions/get | Get transaction data
[**transactionsRecurringGet()**](PlaidApi.md#transactionsRecurringGet) | **POST** /transactions/recurring/get | Get streams of recurring transactions
[**transactionsRefresh()**](PlaidApi.md#transactionsRefresh) | **POST** /transactions/refresh | Refresh transaction data
[**transactionsSync()**](PlaidApi.md#transactionsSync) | **POST** /transactions/sync | Get incremental transaction updates on an Item
[**transferAuthorizationCreate()**](PlaidApi.md#transferAuthorizationCreate) | **POST** /transfer/authorization/create | Create a transfer authorization
[**transferCancel()**](PlaidApi.md#transferCancel) | **POST** /transfer/cancel | Cancel a transfer
[**transferCreate()**](PlaidApi.md#transferCreate) | **POST** /transfer/create | Create a transfer
[**transferEventList()**](PlaidApi.md#transferEventList) | **POST** /transfer/event/list | List transfer events
[**transferEventSync()**](PlaidApi.md#transferEventSync) | **POST** /transfer/event/sync | Sync transfer events
[**transferGet()**](PlaidApi.md#transferGet) | **POST** /transfer/get | Retrieve a transfer
[**transferIntentCreate()**](PlaidApi.md#transferIntentCreate) | **POST** /transfer/intent/create | Create a transfer intent object to invoke the Transfer UI
[**transferIntentGet()**](PlaidApi.md#transferIntentGet) | **POST** /transfer/intent/get | Retrieve more information about a transfer intent
[**transferList()**](PlaidApi.md#transferList) | **POST** /transfer/list | List transfers
[**transferRepaymentList()**](PlaidApi.md#transferRepaymentList) | **POST** /transfer/repayment/list | Lists historical repayments
[**transferRepaymentReturnList()**](PlaidApi.md#transferRepaymentReturnList) | **POST** /transfer/repayment/return/list | List the returns included in a repayment
[**transferSweepGet()**](PlaidApi.md#transferSweepGet) | **POST** /transfer/sweep/get | Retrieve a sweep
[**transferSweepList()**](PlaidApi.md#transferSweepList) | **POST** /transfer/sweep/list | List sweeps
[**walletGet()**](PlaidApi.md#walletGet) | **POST** /wallet/get | Fetch an e-wallet
[**walletTransactionExecute()**](PlaidApi.md#walletTransactionExecute) | **POST** /wallet/transaction/execute | Execute a transaction using an e-wallet
[**walletTransactionsList()**](PlaidApi.md#walletTransactionsList) | **POST** /wallet/transactions/list | List e-wallet transactions
[**webhookVerificationKeyGet()**](PlaidApi.md#webhookVerificationKeyGet) | **POST** /webhook_verification_key/get | Get webhook verification key


## `accountsBalanceGet()`

```php
accountsBalanceGet($accounts_balance_get_request): \OpenAPI\Client\Model\AccountsGetResponse
```

Retrieve real-time balance data

The `/accounts/balance/get` endpoint returns the real-time balance for each of an Item's accounts. While other endpoints may return a balance object, only `/accounts/balance/get` forces the available and current balance fields to be refreshed rather than cached. This endpoint can be used for existing Items that were added via any of Plaid’s other products. This endpoint can be used as long as Link has been initialized with any other product, `balance` itself is not a product that can be used to initialize Link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounts_balance_get_request = {"access_token":"string","secret":"string","client_id":"string","options":{"account_ids":["string"]}}; // \OpenAPI\Client\Model\AccountsBalanceGetRequest

try {
    $result = $apiInstance->accountsBalanceGet($accounts_balance_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->accountsBalanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounts_balance_get_request** | [**\OpenAPI\Client\Model\AccountsBalanceGetRequest**](../Model/AccountsBalanceGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountsGetResponse**](../Model/AccountsGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGet()`

```php
accountsGet($accounts_get_request): \OpenAPI\Client\Model\AccountsGetResponse
```

Retrieve accounts

The `/accounts/get` endpoint can be used to retrieve a list of accounts associated with any linked Item. Plaid will only return active bank accounts — that is, accounts that are not closed and are capable of carrying a balance.  This endpoint only returns accounts that were permissioned by the user when they initially created the Item. If a user creates a new account after the initial link, you can capture this event through the [`NEW_ACCOUNTS_AVAILABLE`](https://plaid.com/docs/api/webhooks/#item-new_accounts_available) webhook and then use Link's [update mode](https://plaid.com/docs/link/update-mode/) to request that the user share this new account with you.  This endpoint retrieves cached information, rather than extracting fresh information from the institution. As a result, balances returned may not be up-to-date; for realtime balance information, use `/accounts/balance/get` instead. Note that some information is nullable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounts_get_request = {"client_id":"string","secret":"string","access_token":"string","options":{"account_ids":["string"]}}; // \OpenAPI\Client\Model\AccountsGetRequest

try {
    $result = $apiInstance->accountsGet($accounts_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounts_get_request** | [**\OpenAPI\Client\Model\AccountsGetRequest**](../Model/AccountsGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountsGetResponse**](../Model/AccountsGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationGet()`

```php
applicationGet($application_get_request): \OpenAPI\Client\Model\ApplicationGetResponse
```

Retrieve information about a Plaid application

Allows financial institutions to retrieve information about Plaid clients for the purpose of building control-tower experiences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_get_request = new \OpenAPI\Client\Model\ApplicationGetRequest(); // \OpenAPI\Client\Model\ApplicationGetRequest | 

try {
    $result = $apiInstance->applicationGet($application_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->applicationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_get_request** | [**\OpenAPI\Client\Model\ApplicationGetRequest**](../Model/ApplicationGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApplicationGetResponse**](../Model/ApplicationGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetReportAuditCopyCreate()`

```php
assetReportAuditCopyCreate($asset_report_audit_copy_create_request): \OpenAPI\Client\Model\AssetReportAuditCopyCreateResponse
```

Create Asset Report Audit Copy

Plaid can provide an Audit Copy of any Asset Report directly to a participating third party on your behalf. For example, Plaid can supply an Audit Copy directly to Fannie Mae on your behalf if you participate in the Day 1 Certainty™ program. An Audit Copy contains the same underlying data as the Asset Report.  To grant access to an Audit Copy, use the `/asset_report/audit_copy/create` endpoint to create an `audit_copy_token` and then pass that token to the third party who needs access. Each third party has its own `auditor_id`, for example `fannie_mae`. You’ll need to create a separate Audit Copy for each third party to whom you want to grant access to the Report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_report_audit_copy_create_request = new \OpenAPI\Client\Model\AssetReportAuditCopyCreateRequest(); // \OpenAPI\Client\Model\AssetReportAuditCopyCreateRequest

try {
    $result = $apiInstance->assetReportAuditCopyCreate($asset_report_audit_copy_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->assetReportAuditCopyCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_report_audit_copy_create_request** | [**\OpenAPI\Client\Model\AssetReportAuditCopyCreateRequest**](../Model/AssetReportAuditCopyCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AssetReportAuditCopyCreateResponse**](../Model/AssetReportAuditCopyCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetReportAuditCopyGet()`

```php
assetReportAuditCopyGet($asset_report_audit_copy_get_request): \OpenAPI\Client\Model\AssetReportGetResponse
```

Retrieve an Asset Report Audit Copy

`/asset_report/audit_copy/get` allows auditors to get a copy of an Asset Report that was previously shared via the `/asset_report/audit_copy/create` endpoint.  The caller of `/asset_report/audit_copy/create` must provide the `audit_copy_token` to the auditor.  This token can then be used to call `/asset_report/audit_copy/create`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_report_audit_copy_get_request = new \OpenAPI\Client\Model\AssetReportAuditCopyGetRequest(); // \OpenAPI\Client\Model\AssetReportAuditCopyGetRequest

try {
    $result = $apiInstance->assetReportAuditCopyGet($asset_report_audit_copy_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->assetReportAuditCopyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_report_audit_copy_get_request** | [**\OpenAPI\Client\Model\AssetReportAuditCopyGetRequest**](../Model/AssetReportAuditCopyGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AssetReportGetResponse**](../Model/AssetReportGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetReportAuditCopyRemove()`

```php
assetReportAuditCopyRemove($asset_report_audit_copy_remove_request): \OpenAPI\Client\Model\AssetReportAuditCopyRemoveResponse
```

Remove Asset Report Audit Copy

The `/asset_report/audit_copy/remove` endpoint allows you to remove an Audit Copy. Removing an Audit Copy invalidates the `audit_copy_token` associated with it, meaning both you and any third parties holding the token will no longer be able to use it to access Report data. Items associated with the Asset Report, the Asset Report itself and other Audit Copies of it are not affected and will remain accessible after removing the given Audit Copy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_report_audit_copy_remove_request = new \OpenAPI\Client\Model\AssetReportAuditCopyRemoveRequest(); // \OpenAPI\Client\Model\AssetReportAuditCopyRemoveRequest | 

try {
    $result = $apiInstance->assetReportAuditCopyRemove($asset_report_audit_copy_remove_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->assetReportAuditCopyRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_report_audit_copy_remove_request** | [**\OpenAPI\Client\Model\AssetReportAuditCopyRemoveRequest**](../Model/AssetReportAuditCopyRemoveRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AssetReportAuditCopyRemoveResponse**](../Model/AssetReportAuditCopyRemoveResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetReportCreate()`

```php
assetReportCreate($asset_report_create_request): \OpenAPI\Client\Model\AssetReportCreateResponse
```

Create an Asset Report

The `/asset_report/create` endpoint initiates the process of creating an Asset Report, which can then be retrieved by passing the `asset_report_token` return value to the `/asset_report/get` or `/asset_report/pdf/get` endpoints.  The Asset Report takes some time to be created and is not available immediately after calling `/asset_report/create`. When the Asset Report is ready to be retrieved using `/asset_report/get` or `/asset_report/pdf/get`, Plaid will fire a `PRODUCT_READY` webhook. For full details of the webhook schema, see [Asset Report webhooks](https://plaid.com/docs/api/webhooks/#assets-webhooks).  The `/asset_report/create` endpoint creates an Asset Report at a moment in time. Asset Reports are immutable. To get an updated Asset Report, use the `/asset_report/refresh` endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_report_create_request = new \OpenAPI\Client\Model\AssetReportCreateRequest(); // \OpenAPI\Client\Model\AssetReportCreateRequest

try {
    $result = $apiInstance->assetReportCreate($asset_report_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->assetReportCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_report_create_request** | [**\OpenAPI\Client\Model\AssetReportCreateRequest**](../Model/AssetReportCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AssetReportCreateResponse**](../Model/AssetReportCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetReportFilter()`

```php
assetReportFilter($asset_report_filter_request): \OpenAPI\Client\Model\AssetReportFilterResponse
```

Filter Asset Report

By default, an Asset Report will contain all of the accounts on a given Item. In some cases, you may not want the Asset Report to contain all accounts. For example, you might have the end user choose which accounts are relevant in Link using the Account Select view, which you can enable in the dashboard. Or, you might always exclude certain account types or subtypes, which you can identify by using the `/accounts/get` endpoint. To narrow an Asset Report to only a subset of accounts, use the `/asset_report/filter` endpoint.  To exclude certain Accounts from an Asset Report, first use the `/asset_report/create` endpoint to create the report, then send the `asset_report_token` along with a list of `account_ids` to exclude to the `/asset_report/filter` endpoint, to create a new Asset Report which contains only a subset of the original Asset Report's data.  Because Asset Reports are immutable, calling `/asset_report/filter` does not alter the original Asset Report in any way; rather, `/asset_report/filter` creates a new Asset Report with a new token and id. Asset Reports created via `/asset_report/filter` do not contain new Asset data, and are not billed.  Plaid will fire a [`PRODUCT_READY`](https://plaid.com/docs/api/webhooks) webhook once generation of the filtered Asset Report has completed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_report_filter_request = new \OpenAPI\Client\Model\AssetReportFilterRequest(); // \OpenAPI\Client\Model\AssetReportFilterRequest | 

try {
    $result = $apiInstance->assetReportFilter($asset_report_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->assetReportFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_report_filter_request** | [**\OpenAPI\Client\Model\AssetReportFilterRequest**](../Model/AssetReportFilterRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AssetReportFilterResponse**](../Model/AssetReportFilterResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetReportGet()`

```php
assetReportGet($asset_report_get_request): \OpenAPI\Client\Model\AssetReportGetResponse
```

Retrieve an Asset Report

The `/asset_report/get` endpoint retrieves the Asset Report in JSON format. Before calling `/asset_report/get`, you must first create the Asset Report using `/asset_report/create` (or filter an Asset Report using `/asset_report/filter`) and then wait for the [`PRODUCT_READY`](https://plaid.com/docs/api/webhooks) webhook to fire, indicating that the Report is ready to be retrieved.  By default, an Asset Report includes transaction descriptions as returned by the bank, as opposed to parsed and categorized by Plaid. You can also receive cleaned and categorized transactions, as well as additional insights like merchant name or location information. We call this an Asset Report with Insights. An Asset Report with Insights provides transaction category, location, and merchant information in addition to the transaction strings provided in a standard Asset Report.  To retrieve an Asset Report with Insights, call the `/asset_report/get` endpoint with `include_insights` set to `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_report_get_request = new \OpenAPI\Client\Model\AssetReportGetRequest(); // \OpenAPI\Client\Model\AssetReportGetRequest | 

try {
    $result = $apiInstance->assetReportGet($asset_report_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->assetReportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_report_get_request** | [**\OpenAPI\Client\Model\AssetReportGetRequest**](../Model/AssetReportGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AssetReportGetResponse**](../Model/AssetReportGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetReportPdfGet()`

```php
assetReportPdfGet($asset_report_pdf_get_request): \SplFileObject
```

Retrieve a PDF Asset Report

The `/asset_report/pdf/get` endpoint retrieves the Asset Report in PDF format. Before calling `/asset_report/pdf/get`, you must first create the Asset Report using `/asset_report/create` (or filter an Asset Report using `/asset_report/filter`) and then wait for the [`PRODUCT_READY`](https://plaid.com/docs/api/webhooks) webhook to fire, indicating that the Report is ready to be retrieved.  The response to `/asset_report/pdf/get` is the PDF binary data. The `request_id`  is returned in the `Plaid-Request-ID` header.  [View a sample PDF Asset Report](https://plaid.com/documents/sample-asset-report.pdf).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_report_pdf_get_request = new \OpenAPI\Client\Model\AssetReportPDFGetRequest(); // \OpenAPI\Client\Model\AssetReportPDFGetRequest | 

try {
    $result = $apiInstance->assetReportPdfGet($asset_report_pdf_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->assetReportPdfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_report_pdf_get_request** | [**\OpenAPI\Client\Model\AssetReportPDFGetRequest**](../Model/AssetReportPDFGetRequest.md)|  |

### Return type

**\SplFileObject**

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetReportRefresh()`

```php
assetReportRefresh($asset_report_refresh_request): \OpenAPI\Client\Model\AssetReportRefreshResponse
```

Refresh an Asset Report

An Asset Report is an immutable snapshot of a user's assets. In order to \"refresh\" an Asset Report you created previously, you can use the `/asset_report/refresh` endpoint to create a new Asset Report based on the old one, but with the most recent data available.  The new Asset Report will contain the same Items as the original Report, as well as the same filters applied by any call to `/asset_report/filter`. By default, the new Asset Report will also use the same parameters you submitted with your original `/asset_report/create` request, but the original `days_requested` value and the values of any parameters in the `options` object can be overridden with new values. To change these arguments, simply supply new values for them in your request to `/asset_report/refresh`. Submit an empty string (\"\") for any previously-populated fields you would like set as empty.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_report_refresh_request = new \OpenAPI\Client\Model\AssetReportRefreshRequest(); // \OpenAPI\Client\Model\AssetReportRefreshRequest | 

try {
    $result = $apiInstance->assetReportRefresh($asset_report_refresh_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->assetReportRefresh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_report_refresh_request** | [**\OpenAPI\Client\Model\AssetReportRefreshRequest**](../Model/AssetReportRefreshRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AssetReportRefreshResponse**](../Model/AssetReportRefreshResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetReportRemove()`

```php
assetReportRemove($asset_report_remove_request): \OpenAPI\Client\Model\AssetReportRemoveResponse
```

Delete an Asset Report

The `/item/remove` endpoint allows you to invalidate an `access_token`, meaning you will not be able to create new Asset Reports with it. Removing an Item does not affect any Asset Reports or Audit Copies you have already created, which will remain accessible until you remove them specifically.  The `/asset_report/remove` endpoint allows you to remove an Asset Report. Removing an Asset Report invalidates its `asset_report_token`, meaning you will no longer be able to use it to access Report data or create new Audit Copies. Removing an Asset Report does not affect the underlying Items, but does invalidate any `audit_copy_tokens` associated with the Asset Report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_report_remove_request = new \OpenAPI\Client\Model\AssetReportRemoveRequest(); // \OpenAPI\Client\Model\AssetReportRemoveRequest | 

try {
    $result = $apiInstance->assetReportRemove($asset_report_remove_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->assetReportRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_report_remove_request** | [**\OpenAPI\Client\Model\AssetReportRemoveRequest**](../Model/AssetReportRemoveRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AssetReportRemoveResponse**](../Model/AssetReportRemoveResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authGet()`

```php
authGet($auth_get_request): \OpenAPI\Client\Model\AuthGetResponse
```

Retrieve auth data

The `/auth/get` endpoint returns the bank account and bank identification numbers (such as routing numbers, for US accounts) associated with an Item's checking and savings accounts, along with high-level account data and balances when available.  Note: This request may take some time to complete if `auth` was not specified as an initial product when creating the Item. This is because Plaid must communicate directly with the institution to retrieve the data.  Also note that `/auth/get` will not return data for any new accounts opened after the Item was created. To obtain data for new accounts, create a new Item.  Versioning note: In API version 2017-03-08, the schema of the `numbers` object returned by this endpoint is substantially different. For details, see [Plaid API versioning](https://plaid.com/docs/api/versioning/#version-2018-05-22).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_get_request = new \OpenAPI\Client\Model\AuthGetRequest(); // \OpenAPI\Client\Model\AuthGetRequest | 

try {
    $result = $apiInstance->authGet($auth_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->authGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_get_request** | [**\OpenAPI\Client\Model\AuthGetRequest**](../Model/AuthGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\AuthGetResponse**](../Model/AuthGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferBalanceGet()`

```php
bankTransferBalanceGet($bank_transfer_balance_get_request): \OpenAPI\Client\Model\BankTransferBalanceGetResponse
```

Get balance of your Bank Transfer account

Use the `/bank_transfer/balance/get` endpoint to see the available balance in your bank transfer account. Debit transfers increase this balance once their status is posted. Credit transfers decrease this balance when they are created.  The transactable balance shows the amount in your account that you are able to use for transfers, and is essentially your available balance minus your minimum balance.  Note that this endpoint can only be used with FBO accounts, when using Bank Transfers in the Full Service configuration. It cannot be used on your own account when using Bank Transfers in the BTS Platform configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_balance_get_request = new \OpenAPI\Client\Model\BankTransferBalanceGetRequest(); // \OpenAPI\Client\Model\BankTransferBalanceGetRequest

try {
    $result = $apiInstance->bankTransferBalanceGet($bank_transfer_balance_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferBalanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_balance_get_request** | [**\OpenAPI\Client\Model\BankTransferBalanceGetRequest**](../Model/BankTransferBalanceGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferBalanceGetResponse**](../Model/BankTransferBalanceGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferCancel()`

```php
bankTransferCancel($bank_transfer_cancel_request): \OpenAPI\Client\Model\BankTransferCancelResponse
```

Cancel a bank transfer

Use the `/bank_transfer/cancel` endpoint to cancel a bank transfer.  A transfer is eligible for cancelation if the `cancellable` property returned by `/bank_transfer/get` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_cancel_request = new \OpenAPI\Client\Model\BankTransferCancelRequest(); // \OpenAPI\Client\Model\BankTransferCancelRequest

try {
    $result = $apiInstance->bankTransferCancel($bank_transfer_cancel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_cancel_request** | [**\OpenAPI\Client\Model\BankTransferCancelRequest**](../Model/BankTransferCancelRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferCancelResponse**](../Model/BankTransferCancelResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferCreate()`

```php
bankTransferCreate($bank_transfer_create_request): \OpenAPI\Client\Model\BankTransferCreateResponse
```

Create a bank transfer

Use the `/bank_transfer/create` endpoint to initiate a new bank transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_create_request = new \OpenAPI\Client\Model\BankTransferCreateRequest(); // \OpenAPI\Client\Model\BankTransferCreateRequest

try {
    $result = $apiInstance->bankTransferCreate($bank_transfer_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_create_request** | [**\OpenAPI\Client\Model\BankTransferCreateRequest**](../Model/BankTransferCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferCreateResponse**](../Model/BankTransferCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferEventList()`

```php
bankTransferEventList($bank_transfer_event_list_request): \OpenAPI\Client\Model\BankTransferEventListResponse
```

List bank transfer events

Use the `/bank_transfer/event/list` endpoint to get a list of bank transfer events based on specified filter criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_event_list_request = new \OpenAPI\Client\Model\BankTransferEventListRequest(); // \OpenAPI\Client\Model\BankTransferEventListRequest

try {
    $result = $apiInstance->bankTransferEventList($bank_transfer_event_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferEventList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_event_list_request** | [**\OpenAPI\Client\Model\BankTransferEventListRequest**](../Model/BankTransferEventListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferEventListResponse**](../Model/BankTransferEventListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferEventSync()`

```php
bankTransferEventSync($bank_transfer_event_sync_request): \OpenAPI\Client\Model\BankTransferEventSyncResponse
```

Sync bank transfer events

`/bank_transfer/event/sync` allows you to request up to the next 25 bank transfer events that happened after a specific `event_id`. Use the `/bank_transfer/event/sync` endpoint to guarantee you have seen all bank transfer events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_event_sync_request = new \OpenAPI\Client\Model\BankTransferEventSyncRequest(); // \OpenAPI\Client\Model\BankTransferEventSyncRequest

try {
    $result = $apiInstance->bankTransferEventSync($bank_transfer_event_sync_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferEventSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_event_sync_request** | [**\OpenAPI\Client\Model\BankTransferEventSyncRequest**](../Model/BankTransferEventSyncRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferEventSyncResponse**](../Model/BankTransferEventSyncResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferGet()`

```php
bankTransferGet($bank_transfer_get_request): \OpenAPI\Client\Model\BankTransferGetResponse
```

Retrieve a bank transfer

The `/bank_transfer/get` fetches information about the bank transfer corresponding to the given `bank_transfer_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_get_request = new \OpenAPI\Client\Model\BankTransferGetRequest(); // \OpenAPI\Client\Model\BankTransferGetRequest

try {
    $result = $apiInstance->bankTransferGet($bank_transfer_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_get_request** | [**\OpenAPI\Client\Model\BankTransferGetRequest**](../Model/BankTransferGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferGetResponse**](../Model/BankTransferGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferList()`

```php
bankTransferList($bank_transfer_list_request): \OpenAPI\Client\Model\BankTransferListResponse
```

List bank transfers

Use the `/bank_transfer/list` endpoint to see a list of all your bank transfers and their statuses. Results are paginated; use the `count` and `offset` query parameters to retrieve the desired bank transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_list_request = new \OpenAPI\Client\Model\BankTransferListRequest(); // \OpenAPI\Client\Model\BankTransferListRequest

try {
    $result = $apiInstance->bankTransferList($bank_transfer_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_list_request** | [**\OpenAPI\Client\Model\BankTransferListRequest**](../Model/BankTransferListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferListResponse**](../Model/BankTransferListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferMigrateAccount()`

```php
bankTransferMigrateAccount($bank_transfer_migrate_account_request): \OpenAPI\Client\Model\BankTransferMigrateAccountResponse
```

Migrate account into Bank Transfers

As an alternative to adding Items via Link, you can also use the `/bank_transfer/migrate_account` endpoint to migrate known account and routing numbers to Plaid Items.  Note that Items created in this way are not compatible with endpoints for other products, such as `/accounts/balance/get`, and can only be used with Bank Transfer endpoints.  If you require access to other endpoints, create the Item through Link instead.  Access to `/bank_transfer/migrate_account` is not enabled by default; to obtain access, contact your Plaid Account Manager.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_migrate_account_request = new \OpenAPI\Client\Model\BankTransferMigrateAccountRequest(); // \OpenAPI\Client\Model\BankTransferMigrateAccountRequest

try {
    $result = $apiInstance->bankTransferMigrateAccount($bank_transfer_migrate_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferMigrateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_migrate_account_request** | [**\OpenAPI\Client\Model\BankTransferMigrateAccountRequest**](../Model/BankTransferMigrateAccountRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferMigrateAccountResponse**](../Model/BankTransferMigrateAccountResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferSweepGet()`

```php
bankTransferSweepGet($bank_transfer_sweep_get_request): \OpenAPI\Client\Model\BankTransferSweepGetResponse
```

Retrieve a sweep

The `/bank_transfer/sweep/get` endpoint fetches information about the sweep corresponding to the given `sweep_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_sweep_get_request = new \OpenAPI\Client\Model\BankTransferSweepGetRequest(); // \OpenAPI\Client\Model\BankTransferSweepGetRequest

try {
    $result = $apiInstance->bankTransferSweepGet($bank_transfer_sweep_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferSweepGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_sweep_get_request** | [**\OpenAPI\Client\Model\BankTransferSweepGetRequest**](../Model/BankTransferSweepGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferSweepGetResponse**](../Model/BankTransferSweepGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankTransferSweepList()`

```php
bankTransferSweepList($bank_transfer_sweep_list_request): \OpenAPI\Client\Model\BankTransferSweepListResponse
```

List sweeps

The `/bank_transfer/sweep/list` endpoint fetches information about the sweeps matching the given filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_sweep_list_request = new \OpenAPI\Client\Model\BankTransferSweepListRequest(); // \OpenAPI\Client\Model\BankTransferSweepListRequest

try {
    $result = $apiInstance->bankTransferSweepList($bank_transfer_sweep_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->bankTransferSweepList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_sweep_list_request** | [**\OpenAPI\Client\Model\BankTransferSweepListRequest**](../Model/BankTransferSweepListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankTransferSweepListResponse**](../Model/BankTransferSweepListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesGet()`

```php
categoriesGet($body): \OpenAPI\Client\Model\CategoriesGetResponse
```

Get Categories

Send a request to the `/categories/get` endpoint to get detailed information on categories returned by Plaid. This endpoint does not require authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->categoriesGet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->categoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\OpenAPI\Client\Model\CategoriesGetResponse**](../Model/CategoriesGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentToken()`

```php
createPaymentToken($payment_initiation_payment_token_create_request): \OpenAPI\Client\Model\PaymentInitiationPaymentTokenCreateResponse
```

Create payment token

The `/payment_initiation/payment/token/create` endpoint has been deprecated. New Plaid customers will be unable to use this endpoint, and existing customers are encouraged to migrate to the newer, `link_token`-based flow. The recommended flow is to provide the `payment_id` to `/link/token/create`, which returns a `link_token` used to initialize Link.  The `/payment_initiation/payment/token/create` is used to create a `payment_token`, which can then be used in Link initialization to enter a payment initiation flow. You can only use a `payment_token` once. If this attempt fails, the end user aborts the flow, or the token expires, you will need to create a new payment token. Creating a new payment token does not require end user input.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_initiation_payment_token_create_request = new \OpenAPI\Client\Model\PaymentInitiationPaymentTokenCreateRequest(); // \OpenAPI\Client\Model\PaymentInitiationPaymentTokenCreateRequest

try {
    $result = $apiInstance->createPaymentToken($payment_initiation_payment_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->createPaymentToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_initiation_payment_token_create_request** | [**\OpenAPI\Client\Model\PaymentInitiationPaymentTokenCreateRequest**](../Model/PaymentInitiationPaymentTokenCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentInitiationPaymentTokenCreateResponse**](../Model/PaymentInitiationPaymentTokenCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositSwitchAltCreate()`

```php
depositSwitchAltCreate($deposit_switch_alt_create_request): \OpenAPI\Client\Model\DepositSwitchAltCreateResponse
```

Create a deposit switch without using Plaid Exchange

This endpoint provides an alternative to `/deposit_switch/create` for customers who have not yet fully integrated with Plaid Exchange. Like `/deposit_switch/create`, it creates a deposit switch entity that will be persisted throughout the lifecycle of the switch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deposit_switch_alt_create_request = new \OpenAPI\Client\Model\DepositSwitchAltCreateRequest(); // \OpenAPI\Client\Model\DepositSwitchAltCreateRequest

try {
    $result = $apiInstance->depositSwitchAltCreate($deposit_switch_alt_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->depositSwitchAltCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deposit_switch_alt_create_request** | [**\OpenAPI\Client\Model\DepositSwitchAltCreateRequest**](../Model/DepositSwitchAltCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\DepositSwitchAltCreateResponse**](../Model/DepositSwitchAltCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositSwitchCreate()`

```php
depositSwitchCreate($deposit_switch_create_request): \OpenAPI\Client\Model\DepositSwitchCreateResponse
```

Create a deposit switch

This endpoint creates a deposit switch entity that will be persisted throughout the lifecycle of the switch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deposit_switch_create_request = new \OpenAPI\Client\Model\DepositSwitchCreateRequest(); // \OpenAPI\Client\Model\DepositSwitchCreateRequest

try {
    $result = $apiInstance->depositSwitchCreate($deposit_switch_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->depositSwitchCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deposit_switch_create_request** | [**\OpenAPI\Client\Model\DepositSwitchCreateRequest**](../Model/DepositSwitchCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\DepositSwitchCreateResponse**](../Model/DepositSwitchCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositSwitchGet()`

```php
depositSwitchGet($deposit_switch_get_request): \OpenAPI\Client\Model\DepositSwitchGetResponse
```

Retrieve a deposit switch

This endpoint returns information related to how the user has configured their payroll allocation and the state of the switch. You can use this information to build logic related to the user's direct deposit allocation preferences.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deposit_switch_get_request = new \OpenAPI\Client\Model\DepositSwitchGetRequest(); // \OpenAPI\Client\Model\DepositSwitchGetRequest

try {
    $result = $apiInstance->depositSwitchGet($deposit_switch_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->depositSwitchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deposit_switch_get_request** | [**\OpenAPI\Client\Model\DepositSwitchGetRequest**](../Model/DepositSwitchGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\DepositSwitchGetResponse**](../Model/DepositSwitchGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositSwitchTokenCreate()`

```php
depositSwitchTokenCreate($deposit_switch_token_create_request): \OpenAPI\Client\Model\DepositSwitchTokenCreateResponse
```

Create a deposit switch token

In order for the end user to take action, you will need to create a public token representing the deposit switch. This token is used to initialize Link. It can be used one time and expires after 30 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deposit_switch_token_create_request = new \OpenAPI\Client\Model\DepositSwitchTokenCreateRequest(); // \OpenAPI\Client\Model\DepositSwitchTokenCreateRequest

try {
    $result = $apiInstance->depositSwitchTokenCreate($deposit_switch_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->depositSwitchTokenCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deposit_switch_token_create_request** | [**\OpenAPI\Client\Model\DepositSwitchTokenCreateRequest**](../Model/DepositSwitchTokenCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\DepositSwitchTokenCreateResponse**](../Model/DepositSwitchTokenCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employersSearch()`

```php
employersSearch($employers_search_request): \OpenAPI\Client\Model\EmployersSearchResponse
```

Search employer database

`/employers/search` allows you the ability to search Plaid’s database of known employers, for use with Deposit Switch. You can use this endpoint to look up a user's employer in order to confirm that they are supported. Users with non-supported employers can then be routed out of the Deposit Switch flow.  The data in the employer database is currently limited. As the Deposit Switch and Income products progress through their respective beta periods, more employers are being regularly added. Because the employer database is frequently updated, we recommend that you do not cache or store data from this endpoint for more than a day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employers_search_request = new \OpenAPI\Client\Model\EmployersSearchRequest(); // \OpenAPI\Client\Model\EmployersSearchRequest

try {
    $result = $apiInstance->employersSearch($employers_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->employersSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employers_search_request** | [**\OpenAPI\Client\Model\EmployersSearchRequest**](../Model/EmployersSearchRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\EmployersSearchResponse**](../Model/EmployersSearchResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employmentVerificationGet()`

```php
employmentVerificationGet($employment_verification_get_request): \OpenAPI\Client\Model\EmploymentVerificationGetResponse
```

Retrieve a summary of an individual's employment information

`/employment/verification/get` returns a list of employments through a user payroll that was verified by an end user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employment_verification_get_request = new \OpenAPI\Client\Model\EmploymentVerificationGetRequest(); // \OpenAPI\Client\Model\EmploymentVerificationGetRequest

try {
    $result = $apiInstance->employmentVerificationGet($employment_verification_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->employmentVerificationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employment_verification_get_request** | [**\OpenAPI\Client\Model\EmploymentVerificationGetRequest**](../Model/EmploymentVerificationGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\EmploymentVerificationGetResponse**](../Model/EmploymentVerificationGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityGet()`

```php
identityGet($identity_get_request): \OpenAPI\Client\Model\IdentityGetResponse
```

Retrieve identity data

The `/identity/get` endpoint allows you to retrieve various account holder information on file with the financial institution, including names, emails, phone numbers, and addresses. Only name data is guaranteed to be returned; other fields will be empty arrays if not provided by the institution.  Note: This request may take some time to complete if identity was not specified as an initial product when creating the Item. This is because Plaid must communicate directly with the institution to retrieve the data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identity_get_request = new \OpenAPI\Client\Model\IdentityGetRequest(); // \OpenAPI\Client\Model\IdentityGetRequest | 

try {
    $result = $apiInstance->identityGet($identity_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->identityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_get_request** | [**\OpenAPI\Client\Model\IdentityGetRequest**](../Model/IdentityGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\IdentityGetResponse**](../Model/IdentityGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomeVerificationCreate()`

```php
incomeVerificationCreate($income_verification_create_request): \OpenAPI\Client\Model\IncomeVerificationCreateResponse
```

(Deprecated) Create an income verification instance

`/income/verification/create` begins the income verification process by returning an `income_verification_id`. You can then provide the `income_verification_id` to `/link/token/create` under the `income_verification` parameter in order to create a Link instance that will prompt the user to go through the income verification flow. Plaid will fire an `INCOME` webhook once the user completes the Payroll Income flow, or when the uploaded documents in the Document Income flow have finished processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$income_verification_create_request = new \OpenAPI\Client\Model\IncomeVerificationCreateRequest(); // \OpenAPI\Client\Model\IncomeVerificationCreateRequest

try {
    $result = $apiInstance->incomeVerificationCreate($income_verification_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->incomeVerificationCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **income_verification_create_request** | [**\OpenAPI\Client\Model\IncomeVerificationCreateRequest**](../Model/IncomeVerificationCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\IncomeVerificationCreateResponse**](../Model/IncomeVerificationCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomeVerificationDocumentsDownload()`

```php
incomeVerificationDocumentsDownload($income_verification_documents_download_request): \SplFileObject
```

Download the original documents used for income verification

`/income/verification/documents/download` provides the ability to download the source documents associated with the verification.  If Document Income was used, the documents will be those the user provided in Link. For Payroll Income, the most recent files available for download from the payroll provider will be available from this endpoint.  The response to `/income/verification/documents/download` is a ZIP file in binary data. If a `document_id` is passed, a single document will be contained in this file. If not, the response will contain all documents associated with the verification.  The `request_id` is returned in the `Plaid-Request-ID` header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$income_verification_documents_download_request = new \OpenAPI\Client\Model\IncomeVerificationDocumentsDownloadRequest(); // \OpenAPI\Client\Model\IncomeVerificationDocumentsDownloadRequest

try {
    $result = $apiInstance->incomeVerificationDocumentsDownload($income_verification_documents_download_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->incomeVerificationDocumentsDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **income_verification_documents_download_request** | [**\OpenAPI\Client\Model\IncomeVerificationDocumentsDownloadRequest**](../Model/IncomeVerificationDocumentsDownloadRequest.md)|  |

### Return type

**\SplFileObject**

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomeVerificationPaystubGet()`

```php
incomeVerificationPaystubGet($income_verification_paystub_get_request): \OpenAPI\Client\Model\IncomeVerificationPaystubGetResponse
```

(Deprecated) Retrieve information from a single paystub used for income verification

/income/verification/paystub/get returns information from a single paystub used for income verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$income_verification_paystub_get_request = new \OpenAPI\Client\Model\IncomeVerificationPaystubGetRequest(); // \OpenAPI\Client\Model\IncomeVerificationPaystubGetRequest

try {
    $result = $apiInstance->incomeVerificationPaystubGet($income_verification_paystub_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->incomeVerificationPaystubGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **income_verification_paystub_get_request** | [**\OpenAPI\Client\Model\IncomeVerificationPaystubGetRequest**](../Model/IncomeVerificationPaystubGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\IncomeVerificationPaystubGetResponse**](../Model/IncomeVerificationPaystubGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomeVerificationPaystubsGet()`

```php
incomeVerificationPaystubsGet($income_verification_paystubs_get_request): \OpenAPI\Client\Model\IncomeVerificationPaystubsGetResponse
```

Retrieve information from the paystubs used for income verification

`/income/verification/paystubs/get` returns the information collected from the paystubs that were used to verify an end user's income. It can be called once the status of the verification has been set to `VERIFICATION_STATUS_PROCESSING_COMPLETE`, as reported by the `INCOME: verification_status` webhook. Attempting to call the endpoint before verification has been completed will result in an error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$income_verification_paystubs_get_request = new \OpenAPI\Client\Model\IncomeVerificationPaystubsGetRequest(); // \OpenAPI\Client\Model\IncomeVerificationPaystubsGetRequest | 

try {
    $result = $apiInstance->incomeVerificationPaystubsGet($income_verification_paystubs_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->incomeVerificationPaystubsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **income_verification_paystubs_get_request** | [**\OpenAPI\Client\Model\IncomeVerificationPaystubsGetRequest**](../Model/IncomeVerificationPaystubsGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\IncomeVerificationPaystubsGetResponse**](../Model/IncomeVerificationPaystubsGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomeVerificationPrecheck()`

```php
incomeVerificationPrecheck($income_verification_precheck_request): \OpenAPI\Client\Model\IncomeVerificationPrecheckResponse
```

Check digital income verification eligibility and optimize conversion

`/income/verification/precheck` is an optional endpoint that can be called before initializing a Link session for income verification. It evaluates whether a given user is supportable by digital income verification and returns a `precheck_id` that can be provided to `/link/token/create`. If the user is eligible for digital verification, providing the `precheck_id` in this way will generate a Link UI optimized for the end user and their specific employer. If the user cannot be confirmed as eligible, the `precheck_id` can still be provided to `/link/token/create` and the user can still use the income verification flow, but they may be required to manually upload a paystub to verify their income.  While all request fields are optional, providing either `employer` or `transactions_access_tokens` data will increase the chance of receiving a useful result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$income_verification_precheck_request = new \OpenAPI\Client\Model\IncomeVerificationPrecheckRequest(); // \OpenAPI\Client\Model\IncomeVerificationPrecheckRequest

try {
    $result = $apiInstance->incomeVerificationPrecheck($income_verification_precheck_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->incomeVerificationPrecheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **income_verification_precheck_request** | [**\OpenAPI\Client\Model\IncomeVerificationPrecheckRequest**](../Model/IncomeVerificationPrecheckRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\IncomeVerificationPrecheckResponse**](../Model/IncomeVerificationPrecheckResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomeVerificationRefresh()`

```php
incomeVerificationRefresh($income_verification_refresh_request): \OpenAPI\Client\Model\IncomeVerificationRefreshResponse
```

Refresh an income verification

`/income/verification/refresh` refreshes a given income verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$income_verification_refresh_request = new \OpenAPI\Client\Model\IncomeVerificationRefreshRequest(); // \OpenAPI\Client\Model\IncomeVerificationRefreshRequest

try {
    $result = $apiInstance->incomeVerificationRefresh($income_verification_refresh_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->incomeVerificationRefresh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **income_verification_refresh_request** | [**\OpenAPI\Client\Model\IncomeVerificationRefreshRequest**](../Model/IncomeVerificationRefreshRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\IncomeVerificationRefreshResponse**](../Model/IncomeVerificationRefreshResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomeVerificationSummaryGet()`

```php
incomeVerificationSummaryGet($income_verification_summary_get_request): \OpenAPI\Client\Model\IncomeVerificationSummaryGetResponse
```

(Deprecated) Retrieve a summary of information derived from income verification

`/income/verification/summary/get` returns a verification summary for the income that was verified for an end user. It can be called once the status of the verification has been set to `VERIFICATION_STATUS_PROCESSING_COMPLETE`, as reported by the `INCOME: verification_status` webhook. Attempting to call the endpoint before verification has been completed will result in an error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$income_verification_summary_get_request = new \OpenAPI\Client\Model\IncomeVerificationSummaryGetRequest(); // \OpenAPI\Client\Model\IncomeVerificationSummaryGetRequest

try {
    $result = $apiInstance->incomeVerificationSummaryGet($income_verification_summary_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->incomeVerificationSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **income_verification_summary_get_request** | [**\OpenAPI\Client\Model\IncomeVerificationSummaryGetRequest**](../Model/IncomeVerificationSummaryGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\IncomeVerificationSummaryGetResponse**](../Model/IncomeVerificationSummaryGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomeVerificationTaxformsGet()`

```php
incomeVerificationTaxformsGet($request_body): \OpenAPI\Client\Model\IncomeVerificationTaxformsGetResponse
```

Retrieve information from the tax documents used for income verification

`/income/verification/taxforms/get` returns the information collected from forms that were used to verify an end user's income. It can be called once the status of the verification has been set to `VERIFICATION_STATUS_PROCESSING_COMPLETE`, as reported by the `INCOME: verification_status` webhook. Attempting to call the endpoint before verification has been completed will result in an error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed> | 

try {
    $result = $apiInstance->incomeVerificationTaxformsGet($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->incomeVerificationTaxformsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  |

### Return type

[**\OpenAPI\Client\Model\IncomeVerificationTaxformsGetResponse**](../Model/IncomeVerificationTaxformsGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `institutionsGet()`

```php
institutionsGet($institutions_get_request): \OpenAPI\Client\Model\InstitutionsGetResponse
```

Get details of all supported institutions

Returns a JSON response containing details on all financial institutions currently supported by Plaid. Because Plaid supports thousands of institutions, results are paginated.  If there is no overlap between an institution’s enabled products and a client’s enabled products, then the institution will be filtered out from the response. As a result, the number of institutions returned may not match the count specified in the call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institutions_get_request = new \OpenAPI\Client\Model\InstitutionsGetRequest(); // \OpenAPI\Client\Model\InstitutionsGetRequest | 

try {
    $result = $apiInstance->institutionsGet($institutions_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->institutionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **institutions_get_request** | [**\OpenAPI\Client\Model\InstitutionsGetRequest**](../Model/InstitutionsGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\InstitutionsGetResponse**](../Model/InstitutionsGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `institutionsGetById()`

```php
institutionsGetById($institutions_get_by_id_request): \OpenAPI\Client\Model\InstitutionsGetByIdResponse
```

Get details of an institution

Returns a JSON response containing details on a specified financial institution currently supported by Plaid.   Versioning note: API versions 2019-05-29 and earlier allow use of the `public_key` parameter instead of the `client_id` and `secret` to authenticate to this endpoint. The `public_key` has been deprecated; all customers are encouraged to use `client_id` and `secret` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institutions_get_by_id_request = new \OpenAPI\Client\Model\InstitutionsGetByIdRequest(); // \OpenAPI\Client\Model\InstitutionsGetByIdRequest | 

try {
    $result = $apiInstance->institutionsGetById($institutions_get_by_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->institutionsGetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **institutions_get_by_id_request** | [**\OpenAPI\Client\Model\InstitutionsGetByIdRequest**](../Model/InstitutionsGetByIdRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\InstitutionsGetByIdResponse**](../Model/InstitutionsGetByIdResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `institutionsSearch()`

```php
institutionsSearch($institutions_search_request): \OpenAPI\Client\Model\InstitutionsSearchResponse
```

Search institutions

Returns a JSON response containing details for institutions that match the query parameters, up to a maximum of ten institutions per query.  Versioning note: API versions 2019-05-29 and earlier allow use of the `public_key` parameter instead of the `client_id` and `secret` parameters to authenticate to this endpoint. The `public_key` parameter has since been deprecated; all customers are encouraged to use `client_id` and `secret` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institutions_search_request = new \OpenAPI\Client\Model\InstitutionsSearchRequest(); // \OpenAPI\Client\Model\InstitutionsSearchRequest

try {
    $result = $apiInstance->institutionsSearch($institutions_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->institutionsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **institutions_search_request** | [**\OpenAPI\Client\Model\InstitutionsSearchRequest**](../Model/InstitutionsSearchRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\InstitutionsSearchResponse**](../Model/InstitutionsSearchResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentsHoldingsGet()`

```php
investmentsHoldingsGet($investments_holdings_get_request): \OpenAPI\Client\Model\InvestmentsHoldingsGetResponse
```

Get Investment holdings

The `/investments/holdings/get` endpoint allows developers to receive user-authorized stock position data for `investment`-type accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investments_holdings_get_request = new \OpenAPI\Client\Model\InvestmentsHoldingsGetRequest(); // \OpenAPI\Client\Model\InvestmentsHoldingsGetRequest

try {
    $result = $apiInstance->investmentsHoldingsGet($investments_holdings_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->investmentsHoldingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **investments_holdings_get_request** | [**\OpenAPI\Client\Model\InvestmentsHoldingsGetRequest**](../Model/InvestmentsHoldingsGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\InvestmentsHoldingsGetResponse**](../Model/InvestmentsHoldingsGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentsTransactionsGet()`

```php
investmentsTransactionsGet($investments_transactions_get_request): \OpenAPI\Client\Model\InvestmentsTransactionsGetResponse
```

Get investment transactions

The `/investments/transactions/get` endpoint allows developers to retrieve user-authorized transaction data for investment accounts.  Transactions are returned in reverse-chronological order, and the sequence of transaction ordering is stable and will not shift.  Due to the potentially large number of investment transactions associated with an Item, results are paginated. Manipulate the count and offset parameters in conjunction with the `total_investment_transactions` response body field to fetch all available investment transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investments_transactions_get_request = new \OpenAPI\Client\Model\InvestmentsTransactionsGetRequest(); // \OpenAPI\Client\Model\InvestmentsTransactionsGetRequest

try {
    $result = $apiInstance->investmentsTransactionsGet($investments_transactions_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->investmentsTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **investments_transactions_get_request** | [**\OpenAPI\Client\Model\InvestmentsTransactionsGetRequest**](../Model/InvestmentsTransactionsGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\InvestmentsTransactionsGetResponse**](../Model/InvestmentsTransactionsGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemAccessTokenInvalidate()`

```php
itemAccessTokenInvalidate($item_access_token_invalidate_request): \OpenAPI\Client\Model\ItemAccessTokenInvalidateResponse
```

Invalidate access_token

By default, the `access_token` associated with an Item does not expire and should be stored in a persistent, secure manner.  You can use the `/item/access_token/invalidate` endpoint to rotate the `access_token` associated with an Item. The endpoint returns a new `access_token` and immediately invalidates the previous `access_token`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_access_token_invalidate_request = new \OpenAPI\Client\Model\ItemAccessTokenInvalidateRequest(); // \OpenAPI\Client\Model\ItemAccessTokenInvalidateRequest

try {
    $result = $apiInstance->itemAccessTokenInvalidate($item_access_token_invalidate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->itemAccessTokenInvalidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_access_token_invalidate_request** | [**\OpenAPI\Client\Model\ItemAccessTokenInvalidateRequest**](../Model/ItemAccessTokenInvalidateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemAccessTokenInvalidateResponse**](../Model/ItemAccessTokenInvalidateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemApplicationList()`

```php
itemApplicationList($item_application_list_request): \OpenAPI\Client\Model\ItemApplicationListResponse
```

List a user’s connected applications

List a user’s connected applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_application_list_request = new \OpenAPI\Client\Model\ItemApplicationListRequest(); // \OpenAPI\Client\Model\ItemApplicationListRequest

try {
    $result = $apiInstance->itemApplicationList($item_application_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->itemApplicationList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_application_list_request** | [**\OpenAPI\Client\Model\ItemApplicationListRequest**](../Model/ItemApplicationListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemApplicationListResponse**](../Model/ItemApplicationListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemApplicationScopesUpdate()`

```php
itemApplicationScopesUpdate($item_application_scopes_update_request): \OpenAPI\Client\Model\ItemApplicationScopesUpdateResponse
```

Update the scopes of access for a particular application

Enable consumers to update product access on selected accounts for an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_application_scopes_update_request = new \OpenAPI\Client\Model\ItemApplicationScopesUpdateRequest(); // \OpenAPI\Client\Model\ItemApplicationScopesUpdateRequest

try {
    $result = $apiInstance->itemApplicationScopesUpdate($item_application_scopes_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->itemApplicationScopesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_application_scopes_update_request** | [**\OpenAPI\Client\Model\ItemApplicationScopesUpdateRequest**](../Model/ItemApplicationScopesUpdateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemApplicationScopesUpdateResponse**](../Model/ItemApplicationScopesUpdateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemCreatePublicToken()`

```php
itemCreatePublicToken($item_public_token_create_request): \OpenAPI\Client\Model\ItemPublicTokenCreateResponse
```

Create public token

Note: As of July 2020, the `/item/public_token/create` endpoint is deprecated. Instead, use `/link/token/create` with an `access_token` to create a Link token for use with [update mode](https://plaid.com/docs/link/update-mode).  If you need your user to take action to restore or resolve an error associated with an Item, generate a public token with the `/item/public_token/create` endpoint and then initialize Link with that `public_token`.  A `public_token` is one-time use and expires after 30 minutes. You use a `public_token` to initialize Link in [update mode](https://plaid.com/docs/link/update-mode) for a particular Item. You can generate a `public_token` for an Item even if you did not use Link to create the Item originally.  The `/item/public_token/create` endpoint is **not** used to create your initial `public_token`. If you have not already received an `access_token` for a specific Item, use Link to obtain your `public_token` instead. See the [Quickstart](https://plaid.com/docs/quickstart) for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_public_token_create_request = new \OpenAPI\Client\Model\ItemPublicTokenCreateRequest(); // \OpenAPI\Client\Model\ItemPublicTokenCreateRequest

try {
    $result = $apiInstance->itemCreatePublicToken($item_public_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->itemCreatePublicToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_public_token_create_request** | [**\OpenAPI\Client\Model\ItemPublicTokenCreateRequest**](../Model/ItemPublicTokenCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemPublicTokenCreateResponse**](../Model/ItemPublicTokenCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemGet()`

```php
itemGet($item_get_request): \OpenAPI\Client\Model\ItemGetResponse
```

Retrieve an Item

Returns information about the status of an Item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_get_request = new \OpenAPI\Client\Model\ItemGetRequest(); // \OpenAPI\Client\Model\ItemGetRequest | 

try {
    $result = $apiInstance->itemGet($item_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->itemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_get_request** | [**\OpenAPI\Client\Model\ItemGetRequest**](../Model/ItemGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemGetResponse**](../Model/ItemGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemImport()`

```php
itemImport($item_import_request): \OpenAPI\Client\Model\ItemImportResponse
```

Import Item

`/item/import` creates an Item via your Plaid Exchange Integration and returns an `access_token`. As part of an `/item/import` request, you will include a User ID (`user_auth.user_id`) and Authentication Token (`user_auth.auth_token`) that enable data aggregation through your Plaid Exchange API endpoints. These authentication principals are to be chosen by you.  Upon creating an Item via `/item/import`, Plaid will automatically begin an extraction of that Item through the Plaid Exchange infrastructure you have already integrated. This will automatically generate the Plaid native account ID for the account the user will switch their direct deposit to (`target_account_id`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_import_request = new \OpenAPI\Client\Model\ItemImportRequest(); // \OpenAPI\Client\Model\ItemImportRequest

try {
    $result = $apiInstance->itemImport($item_import_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->itemImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_import_request** | [**\OpenAPI\Client\Model\ItemImportRequest**](../Model/ItemImportRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemImportResponse**](../Model/ItemImportResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemPublicTokenExchange()`

```php
itemPublicTokenExchange($item_public_token_exchange_request): \OpenAPI\Client\Model\ItemPublicTokenExchangeResponse
```

Exchange public token for an access token

Exchange a Link `public_token` for an API `access_token`. Link hands off the `public_token` client-side via the `onSuccess` callback once a user has successfully created an Item. The `public_token` is ephemeral and expires after 30 minutes.  The response also includes an `item_id` that should be stored with the `access_token`. The `item_id` is used to identify an Item in a webhook. The `item_id` can also be retrieved by making an `/item/get` request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_public_token_exchange_request = new \OpenAPI\Client\Model\ItemPublicTokenExchangeRequest(); // \OpenAPI\Client\Model\ItemPublicTokenExchangeRequest

try {
    $result = $apiInstance->itemPublicTokenExchange($item_public_token_exchange_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->itemPublicTokenExchange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_public_token_exchange_request** | [**\OpenAPI\Client\Model\ItemPublicTokenExchangeRequest**](../Model/ItemPublicTokenExchangeRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemPublicTokenExchangeResponse**](../Model/ItemPublicTokenExchangeResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemRemove()`

```php
itemRemove($item_remove_request): \OpenAPI\Client\Model\ItemRemoveResponse
```

Remove an Item

The `/item/remove`  endpoint allows you to remove an Item. Once removed, the `access_token`  associated with the Item is no longer valid and cannot be used to access any data that was associated with the Item.  Note that in the Development environment, issuing an `/item/remove`  request will not decrement your live credential count. To increase your credential account in Development, contact Support.  Also note that for certain OAuth-based institutions, an Item removed via `/item/remove` may still show as an active connection in the institution's OAuth permission manager.  API versions 2019-05-29 and earlier return a `removed` boolean as part of the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_remove_request = new \OpenAPI\Client\Model\ItemRemoveRequest(); // \OpenAPI\Client\Model\ItemRemoveRequest | 

try {
    $result = $apiInstance->itemRemove($item_remove_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->itemRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_remove_request** | [**\OpenAPI\Client\Model\ItemRemoveRequest**](../Model/ItemRemoveRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemRemoveResponse**](../Model/ItemRemoveResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `itemWebhookUpdate()`

```php
itemWebhookUpdate($item_webhook_update_request): \OpenAPI\Client\Model\ItemWebhookUpdateResponse
```

Update Webhook URL

The POST `/item/webhook/update` allows you to update the webhook URL associated with an Item. This request triggers a [`WEBHOOK_UPDATE_ACKNOWLEDGED`](https://plaid.com/docs/api/webhooks/#item-webhook-update-acknowledged) webhook to the newly specified webhook URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_webhook_update_request = new \OpenAPI\Client\Model\ItemWebhookUpdateRequest(); // \OpenAPI\Client\Model\ItemWebhookUpdateRequest

try {
    $result = $apiInstance->itemWebhookUpdate($item_webhook_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->itemWebhookUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_webhook_update_request** | [**\OpenAPI\Client\Model\ItemWebhookUpdateRequest**](../Model/ItemWebhookUpdateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ItemWebhookUpdateResponse**](../Model/ItemWebhookUpdateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `liabilitiesGet()`

```php
liabilitiesGet($liabilities_get_request): \OpenAPI\Client\Model\LiabilitiesGetResponse
```

Retrieve Liabilities data

The `/liabilities/get` endpoint returns various details about an Item with loan or credit accounts. Liabilities data is available primarily for US financial institutions, with some limited coverage of Canadian institutions. Currently supported account types are account type `credit` with account subtype `credit card` or `paypal`, and account type `loan` with account subtype `student` or `mortgage`. To limit accounts listed in Link to types and subtypes supported by Liabilities, you can use the `account_filters` parameter when [creating a Link token](https://plaid.com/docs/api/tokens/#linktokencreate).  The types of information returned by Liabilities can include balances and due dates, loan terms, and account details such as original loan amount and guarantor. Data is refreshed approximately once per day; the latest data can be retrieved by calling `/liabilities/get`.  Note: This request may take some time to complete if `liabilities` was not specified as an initial product when creating the Item. This is because Plaid must communicate directly with the institution to retrieve the additional data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$liabilities_get_request = new \OpenAPI\Client\Model\LiabilitiesGetRequest(); // \OpenAPI\Client\Model\LiabilitiesGetRequest

try {
    $result = $apiInstance->liabilitiesGet($liabilities_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->liabilitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **liabilities_get_request** | [**\OpenAPI\Client\Model\LiabilitiesGetRequest**](../Model/LiabilitiesGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\LiabilitiesGetResponse**](../Model/LiabilitiesGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkTokenCreate()`

```php
linkTokenCreate($link_token_create_request): \OpenAPI\Client\Model\LinkTokenCreateResponse
```

Create Link Token

The `/link/token/create` endpoint creates a `link_token`, which is required as a parameter when initializing Link. Once Link has been initialized, it returns a `public_token`, which can then be exchanged for an `access_token` via `/item/public_token/exchange` as part of the main Link flow.  A `link_token` generated by `/link/token/create` is also used to initialize other Link flows, such as the update mode flow for tokens with expired credentials, or the Payment Initiation (Europe) flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_token_create_request = new \OpenAPI\Client\Model\LinkTokenCreateRequest(); // \OpenAPI\Client\Model\LinkTokenCreateRequest | 

try {
    $result = $apiInstance->linkTokenCreate($link_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->linkTokenCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **link_token_create_request** | [**\OpenAPI\Client\Model\LinkTokenCreateRequest**](../Model/LinkTokenCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\LinkTokenCreateResponse**](../Model/LinkTokenCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkTokenGet()`

```php
linkTokenGet($link_token_get_request): \OpenAPI\Client\Model\LinkTokenGetResponse
```

Get Link Token

The `/link/token/get` endpoint gets information about a previously-created `link_token` using the `/link/token/create` endpoint. It can be useful for debugging purposes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_token_get_request = new \OpenAPI\Client\Model\LinkTokenGetRequest(); // \OpenAPI\Client\Model\LinkTokenGetRequest | 

try {
    $result = $apiInstance->linkTokenGet($link_token_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->linkTokenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **link_token_get_request** | [**\OpenAPI\Client\Model\LinkTokenGetRequest**](../Model/LinkTokenGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\LinkTokenGetResponse**](../Model/LinkTokenGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentInitiationPaymentCreate()`

```php
paymentInitiationPaymentCreate($payment_initiation_payment_create_request): \OpenAPI\Client\Model\PaymentInitiationPaymentCreateResponse
```

Create a payment

After creating a payment recipient, you can use the `/payment_initiation/payment/create` endpoint to create a payment to that recipient.  Payments can be one-time or standing order (recurring) and can be denominated in either EUR or GBP.  If making domestic GBP-denominated payments, your recipient must have been created with BACS numbers. In general, EUR-denominated payments will be sent via SEPA Credit Transfer and GBP-denominated payments will be sent via the Faster Payments network, but the payment network used will be determined by the institution. Payments sent via Faster Payments will typically arrive immediately, while payments sent via SEPA Credit Transfer will typically arrive in one business day.  Standing orders (recurring payments) must be denominated in GBP and can only be sent to recipients in the UK. Once created, standing order payments cannot be modified or canceled via the API. An end user can cancel or modify a standing order directly on their banking application or website, or by contacting the bank. Standing orders will follow the payment rules of the underlying rails (Faster Payments in UK). Payments can be sent Monday to Friday, excluding bank holidays. If the pre-arranged date falls on a weekend or bank holiday, the payment is made on the next working day. It is not possible to guarantee the exact time the payment will reach the recipient’s account, although at least 90% of standing order payments are sent by 6am.  In the Development environment, payments must be below 5 GBP / EUR. For details on any payment limits in Production, contact your Plaid Account Manager.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_initiation_payment_create_request = new \OpenAPI\Client\Model\PaymentInitiationPaymentCreateRequest(); // \OpenAPI\Client\Model\PaymentInitiationPaymentCreateRequest | 

try {
    $result = $apiInstance->paymentInitiationPaymentCreate($payment_initiation_payment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->paymentInitiationPaymentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_initiation_payment_create_request** | [**\OpenAPI\Client\Model\PaymentInitiationPaymentCreateRequest**](../Model/PaymentInitiationPaymentCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentInitiationPaymentCreateResponse**](../Model/PaymentInitiationPaymentCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentInitiationPaymentGet()`

```php
paymentInitiationPaymentGet($payment_initiation_payment_get_request): \OpenAPI\Client\Model\PaymentInitiationPaymentGetResponse
```

Get payment details

The `/payment_initiation/payment/get` endpoint can be used to check the status of a payment, as well as to receive basic information such as recipient and payment amount. In the case of standing orders, the `/payment_initiation/payment/get` endpoint will provide information about the status of the overall standing order itself; the API cannot be used to retrieve payment status for individual payments within a standing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_initiation_payment_get_request = new \OpenAPI\Client\Model\PaymentInitiationPaymentGetRequest(); // \OpenAPI\Client\Model\PaymentInitiationPaymentGetRequest | 

try {
    $result = $apiInstance->paymentInitiationPaymentGet($payment_initiation_payment_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->paymentInitiationPaymentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_initiation_payment_get_request** | [**\OpenAPI\Client\Model\PaymentInitiationPaymentGetRequest**](../Model/PaymentInitiationPaymentGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentInitiationPaymentGetResponse**](../Model/PaymentInitiationPaymentGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentInitiationPaymentList()`

```php
paymentInitiationPaymentList($payment_initiation_payment_list_request): \OpenAPI\Client\Model\PaymentInitiationPaymentListResponse
```

List payments

The `/payment_initiation/payment/list` endpoint can be used to retrieve all created payments. By default, the 10 most recent payments are returned. You can request more payments and paginate through the results using the optional `count` and `cursor` parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_initiation_payment_list_request = new \OpenAPI\Client\Model\PaymentInitiationPaymentListRequest(); // \OpenAPI\Client\Model\PaymentInitiationPaymentListRequest

try {
    $result = $apiInstance->paymentInitiationPaymentList($payment_initiation_payment_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->paymentInitiationPaymentList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_initiation_payment_list_request** | [**\OpenAPI\Client\Model\PaymentInitiationPaymentListRequest**](../Model/PaymentInitiationPaymentListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentInitiationPaymentListResponse**](../Model/PaymentInitiationPaymentListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentInitiationPaymentReverse()`

```php
paymentInitiationPaymentReverse($payment_initiation_payment_reverse_request): \OpenAPI\Client\Model\PaymentInitiationPaymentReverseResponse
```

Reverse an existing payment

Reverse a previously initiated payment.  A payment can only be reversed once and will be refunded to the original sender's account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_initiation_payment_reverse_request = new \OpenAPI\Client\Model\PaymentInitiationPaymentReverseRequest(); // \OpenAPI\Client\Model\PaymentInitiationPaymentReverseRequest

try {
    $result = $apiInstance->paymentInitiationPaymentReverse($payment_initiation_payment_reverse_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->paymentInitiationPaymentReverse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_initiation_payment_reverse_request** | [**\OpenAPI\Client\Model\PaymentInitiationPaymentReverseRequest**](../Model/PaymentInitiationPaymentReverseRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentInitiationPaymentReverseResponse**](../Model/PaymentInitiationPaymentReverseResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentInitiationRecipientCreate()`

```php
paymentInitiationRecipientCreate($payment_initiation_recipient_create_request): \OpenAPI\Client\Model\PaymentInitiationRecipientCreateResponse
```

Create payment recipient

Create a payment recipient for payment initiation.  The recipient must be in Europe, within a country that is a member of the Single Euro Payment Area (SEPA).  For a standing order (recurring) payment, the recipient must be in the UK.  The endpoint is idempotent: if a developer has already made a request with the same payment details, Plaid will return the same `recipient_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_initiation_recipient_create_request = new \OpenAPI\Client\Model\PaymentInitiationRecipientCreateRequest(); // \OpenAPI\Client\Model\PaymentInitiationRecipientCreateRequest

try {
    $result = $apiInstance->paymentInitiationRecipientCreate($payment_initiation_recipient_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->paymentInitiationRecipientCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_initiation_recipient_create_request** | [**\OpenAPI\Client\Model\PaymentInitiationRecipientCreateRequest**](../Model/PaymentInitiationRecipientCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentInitiationRecipientCreateResponse**](../Model/PaymentInitiationRecipientCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentInitiationRecipientGet()`

```php
paymentInitiationRecipientGet($payment_initiation_recipient_get_request): \OpenAPI\Client\Model\PaymentInitiationRecipientGetResponse
```

Get payment recipient

Get details about a payment recipient you have previously created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_initiation_recipient_get_request = new \OpenAPI\Client\Model\PaymentInitiationRecipientGetRequest(); // \OpenAPI\Client\Model\PaymentInitiationRecipientGetRequest

try {
    $result = $apiInstance->paymentInitiationRecipientGet($payment_initiation_recipient_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->paymentInitiationRecipientGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_initiation_recipient_get_request** | [**\OpenAPI\Client\Model\PaymentInitiationRecipientGetRequest**](../Model/PaymentInitiationRecipientGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentInitiationRecipientGetResponse**](../Model/PaymentInitiationRecipientGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentInitiationRecipientList()`

```php
paymentInitiationRecipientList($payment_initiation_recipient_list_request): \OpenAPI\Client\Model\PaymentInitiationRecipientListResponse
```

List payment recipients

The `/payment_initiation/recipient/list` endpoint list the payment recipients that you have previously created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_initiation_recipient_list_request = new \OpenAPI\Client\Model\PaymentInitiationRecipientListRequest(); // \OpenAPI\Client\Model\PaymentInitiationRecipientListRequest

try {
    $result = $apiInstance->paymentInitiationRecipientList($payment_initiation_recipient_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->paymentInitiationRecipientList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_initiation_recipient_list_request** | [**\OpenAPI\Client\Model\PaymentInitiationRecipientListRequest**](../Model/PaymentInitiationRecipientListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentInitiationRecipientListResponse**](../Model/PaymentInitiationRecipientListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processorApexProcessorTokenCreate()`

```php
processorApexProcessorTokenCreate($processor_apex_processor_token_create_request): \OpenAPI\Client\Model\ProcessorTokenCreateResponse
```

Create Apex bank account token

Used to create a token suitable for sending to Apex to enable Plaid-Apex integrations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor_apex_processor_token_create_request = new \OpenAPI\Client\Model\ProcessorApexProcessorTokenCreateRequest(); // \OpenAPI\Client\Model\ProcessorApexProcessorTokenCreateRequest | 

try {
    $result = $apiInstance->processorApexProcessorTokenCreate($processor_apex_processor_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->processorApexProcessorTokenCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processor_apex_processor_token_create_request** | [**\OpenAPI\Client\Model\ProcessorApexProcessorTokenCreateRequest**](../Model/ProcessorApexProcessorTokenCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorTokenCreateResponse**](../Model/ProcessorTokenCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processorAuthGet()`

```php
processorAuthGet($processor_auth_get_request): \OpenAPI\Client\Model\ProcessorAuthGetResponse
```

Retrieve Auth data

The `/processor/auth/get` endpoint returns the bank account and bank identification number (such as the routing number, for US accounts), for a checking or savings account that''s associated with a given `processor_token`. The endpoint also returns high-level account data and balances when available.   Versioning note: API versions 2019-05-29 and earlier use a different schema for the `numbers` object returned by this endpoint. For details, see [Plaid API versioning](https://plaid.com/docs/api/versioning/#version-2020-09-14).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor_auth_get_request = new \OpenAPI\Client\Model\ProcessorAuthGetRequest(); // \OpenAPI\Client\Model\ProcessorAuthGetRequest

try {
    $result = $apiInstance->processorAuthGet($processor_auth_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->processorAuthGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processor_auth_get_request** | [**\OpenAPI\Client\Model\ProcessorAuthGetRequest**](../Model/ProcessorAuthGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorAuthGetResponse**](../Model/ProcessorAuthGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processorBalanceGet()`

```php
processorBalanceGet($processor_balance_get_request): \OpenAPI\Client\Model\ProcessorBalanceGetResponse
```

Retrieve Balance data

The `/processor/balance/get` endpoint returns the real-time balance for each of an Item's accounts. While other endpoints may return a balance object, only `/processor/balance/get` forces the available and current balance fields to be refreshed rather than cached.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor_balance_get_request = new \OpenAPI\Client\Model\ProcessorBalanceGetRequest(); // \OpenAPI\Client\Model\ProcessorBalanceGetRequest | The `/processor/balance/get` endpoint returns the real-time balance for the account associated with a given `processor_token`.  The current balance is the total amount of funds in the account. The available balance is the current balance less any outstanding holds or debits that have not yet posted to the account.  Note that not all institutions calculate the available balance. In the event that available balance is unavailable from the institution, Plaid will return an available balance value of `null`.

try {
    $result = $apiInstance->processorBalanceGet($processor_balance_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->processorBalanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processor_balance_get_request** | [**\OpenAPI\Client\Model\ProcessorBalanceGetRequest**](../Model/ProcessorBalanceGetRequest.md)| The &#x60;/processor/balance/get&#x60; endpoint returns the real-time balance for the account associated with a given &#x60;processor_token&#x60;.  The current balance is the total amount of funds in the account. The available balance is the current balance less any outstanding holds or debits that have not yet posted to the account.  Note that not all institutions calculate the available balance. In the event that available balance is unavailable from the institution, Plaid will return an available balance value of &#x60;null&#x60;. |

### Return type

[**\OpenAPI\Client\Model\ProcessorBalanceGetResponse**](../Model/ProcessorBalanceGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processorBankTransferCreate()`

```php
processorBankTransferCreate($processor_bank_transfer_create_request): \OpenAPI\Client\Model\ProcessorBankTransferCreateResponse
```

Create a bank transfer as a processor

Use the `/processor/bank_transfer/create` endpoint to initiate a new bank transfer as a processor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor_bank_transfer_create_request = new \OpenAPI\Client\Model\ProcessorBankTransferCreateRequest(); // \OpenAPI\Client\Model\ProcessorBankTransferCreateRequest

try {
    $result = $apiInstance->processorBankTransferCreate($processor_bank_transfer_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->processorBankTransferCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processor_bank_transfer_create_request** | [**\OpenAPI\Client\Model\ProcessorBankTransferCreateRequest**](../Model/ProcessorBankTransferCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorBankTransferCreateResponse**](../Model/ProcessorBankTransferCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processorIdentityGet()`

```php
processorIdentityGet($processor_identity_get_request): \OpenAPI\Client\Model\ProcessorIdentityGetResponse
```

Retrieve Identity data

The `/processor/identity/get` endpoint allows you to retrieve various account holder information on file with the financial institution, including names, emails, phone numbers, and addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor_identity_get_request = new \OpenAPI\Client\Model\ProcessorIdentityGetRequest(); // \OpenAPI\Client\Model\ProcessorIdentityGetRequest

try {
    $result = $apiInstance->processorIdentityGet($processor_identity_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->processorIdentityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processor_identity_get_request** | [**\OpenAPI\Client\Model\ProcessorIdentityGetRequest**](../Model/ProcessorIdentityGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorIdentityGetResponse**](../Model/ProcessorIdentityGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processorStripeBankAccountTokenCreate()`

```php
processorStripeBankAccountTokenCreate($processor_stripe_bank_account_token_create_request): \OpenAPI\Client\Model\ProcessorStripeBankAccountTokenCreateResponse
```

Create Stripe bank account token

Used to create a token suitable for sending to Stripe to enable Plaid-Stripe integrations. For a detailed guide on integrating Stripe, see [Add Stripe to your app](https://plaid.com/docs/auth/partnerships/stripe/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor_stripe_bank_account_token_create_request = new \OpenAPI\Client\Model\ProcessorStripeBankAccountTokenCreateRequest(); // \OpenAPI\Client\Model\ProcessorStripeBankAccountTokenCreateRequest | 

try {
    $result = $apiInstance->processorStripeBankAccountTokenCreate($processor_stripe_bank_account_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->processorStripeBankAccountTokenCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processor_stripe_bank_account_token_create_request** | [**\OpenAPI\Client\Model\ProcessorStripeBankAccountTokenCreateRequest**](../Model/ProcessorStripeBankAccountTokenCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorStripeBankAccountTokenCreateResponse**](../Model/ProcessorStripeBankAccountTokenCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processorTokenCreate()`

```php
processorTokenCreate($processor_token_create_request): \OpenAPI\Client\Model\ProcessorTokenCreateResponse
```

Create processor token

Used to create a token suitable for sending to one of Plaid's partners to enable integrations. Note that Stripe partnerships use bank account tokens instead; see `/processor/stripe/bank_account_token/create` for creating tokens for use with Stripe integrations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor_token_create_request = new \OpenAPI\Client\Model\ProcessorTokenCreateRequest(); // \OpenAPI\Client\Model\ProcessorTokenCreateRequest | 

try {
    $result = $apiInstance->processorTokenCreate($processor_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->processorTokenCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processor_token_create_request** | [**\OpenAPI\Client\Model\ProcessorTokenCreateRequest**](../Model/ProcessorTokenCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProcessorTokenCreateResponse**](../Model/ProcessorTokenCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxBankTransferFireWebhook()`

```php
sandboxBankTransferFireWebhook($sandbox_bank_transfer_fire_webhook_request): \OpenAPI\Client\Model\SandboxBankTransferFireWebhookResponse
```

Manually fire a Bank Transfer webhook

Use the `/sandbox/bank_transfer/fire_webhook` endpoint to manually trigger a Bank Transfers webhook in the Sandbox environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_bank_transfer_fire_webhook_request = new \OpenAPI\Client\Model\SandboxBankTransferFireWebhookRequest(); // \OpenAPI\Client\Model\SandboxBankTransferFireWebhookRequest

try {
    $result = $apiInstance->sandboxBankTransferFireWebhook($sandbox_bank_transfer_fire_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxBankTransferFireWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_bank_transfer_fire_webhook_request** | [**\OpenAPI\Client\Model\SandboxBankTransferFireWebhookRequest**](../Model/SandboxBankTransferFireWebhookRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxBankTransferFireWebhookResponse**](../Model/SandboxBankTransferFireWebhookResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxBankTransferSimulate()`

```php
sandboxBankTransferSimulate($sandbox_bank_transfer_simulate_request): \OpenAPI\Client\Model\SandboxBankTransferSimulateResponse
```

Simulate a bank transfer event in Sandbox

Use the `/sandbox/bank_transfer/simulate` endpoint to simulate a bank transfer event in the Sandbox environment.  Note that while an event will be simulated and will appear when using endpoints such as `/bank_transfer/event/sync` or `/bank_transfer/event/list`, no transactions will actually take place and funds will not move between accounts, even within the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_bank_transfer_simulate_request = new \OpenAPI\Client\Model\SandboxBankTransferSimulateRequest(); // \OpenAPI\Client\Model\SandboxBankTransferSimulateRequest

try {
    $result = $apiInstance->sandboxBankTransferSimulate($sandbox_bank_transfer_simulate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxBankTransferSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_bank_transfer_simulate_request** | [**\OpenAPI\Client\Model\SandboxBankTransferSimulateRequest**](../Model/SandboxBankTransferSimulateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxBankTransferSimulateResponse**](../Model/SandboxBankTransferSimulateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxIncomeFireWebhook()`

```php
sandboxIncomeFireWebhook($sandbox_income_fire_webhook_request): \OpenAPI\Client\Model\SandboxIncomeFireWebhookResponse
```

Manually fire an Income webhook

Use the `/sandbox/income/fire_webhook` endpoint to manually trigger an Income webhook in the Sandbox environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_income_fire_webhook_request = new \OpenAPI\Client\Model\SandboxIncomeFireWebhookRequest(); // \OpenAPI\Client\Model\SandboxIncomeFireWebhookRequest

try {
    $result = $apiInstance->sandboxIncomeFireWebhook($sandbox_income_fire_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxIncomeFireWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_income_fire_webhook_request** | [**\OpenAPI\Client\Model\SandboxIncomeFireWebhookRequest**](../Model/SandboxIncomeFireWebhookRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxIncomeFireWebhookResponse**](../Model/SandboxIncomeFireWebhookResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxItemFireWebhook()`

```php
sandboxItemFireWebhook($sandbox_item_fire_webhook_request): \OpenAPI\Client\Model\SandboxItemFireWebhookResponse
```

Fire a test webhook

The `/sandbox/item/fire_webhook` endpoint is used to test that code correctly handles webhooks. This endpoint can trigger a Transactions `DEFAULT_UPDATE` webhook to be fired for a given Sandbox Item. If the Item does not support Transactions, a `SANDBOX_PRODUCT_NOT_ENABLED` error will result. This endpoint can also trigger a `NEW_ACCOUNTS_AVAILABLE` webhook to be fired for a given Sandbox Item created with Account Select v2. Note that this endpoint is provided for developer ease-of-use and is not required for testing webhooks; webhooks will also fire in Sandbox under the same conditions that they would in Production or Development.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_item_fire_webhook_request = new \OpenAPI\Client\Model\SandboxItemFireWebhookRequest(); // \OpenAPI\Client\Model\SandboxItemFireWebhookRequest | 

try {
    $result = $apiInstance->sandboxItemFireWebhook($sandbox_item_fire_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxItemFireWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_item_fire_webhook_request** | [**\OpenAPI\Client\Model\SandboxItemFireWebhookRequest**](../Model/SandboxItemFireWebhookRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxItemFireWebhookResponse**](../Model/SandboxItemFireWebhookResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxItemResetLogin()`

```php
sandboxItemResetLogin($sandbox_item_reset_login_request): \OpenAPI\Client\Model\SandboxItemResetLoginResponse
```

Force a Sandbox Item into an error state

`/sandbox/item/reset_login/` forces an Item into an `ITEM_LOGIN_REQUIRED` state in order to simulate an Item whose login is no longer valid. This makes it easy to test Link's [update mode](https://plaid.com/docs/link/update-mode) flow in the Sandbox environment.  After calling `/sandbox/item/reset_login`, You can then use Plaid Link update mode to restore the Item to a good state. An `ITEM_LOGIN_REQUIRED` webhook will also be fired after a call to this endpoint, if one is associated with the Item.   In the Sandbox, Items will transition to an `ITEM_LOGIN_REQUIRED` error state automatically after 30 days, even if this endpoint is not called.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_item_reset_login_request = new \OpenAPI\Client\Model\SandboxItemResetLoginRequest(); // \OpenAPI\Client\Model\SandboxItemResetLoginRequest

try {
    $result = $apiInstance->sandboxItemResetLogin($sandbox_item_reset_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxItemResetLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_item_reset_login_request** | [**\OpenAPI\Client\Model\SandboxItemResetLoginRequest**](../Model/SandboxItemResetLoginRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxItemResetLoginResponse**](../Model/SandboxItemResetLoginResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxItemSetVerificationStatus()`

```php
sandboxItemSetVerificationStatus($sandbox_item_set_verification_status_request): \OpenAPI\Client\Model\SandboxItemSetVerificationStatusResponse
```

Set verification status for Sandbox account

The `/sandbox/item/set_verification_status` endpoint can be used to change the verification status of an Item in in the Sandbox in order to simulate the Automated Micro-deposit flow.  Note that not all Plaid developer accounts are enabled for micro-deposit based verification by default. Your account must be enabled for this feature in order to test it in Sandbox. To enable this features or check your status, contact your account manager or [submit a product access Support ticket](https://dashboard.plaid.com/support/new/product-and-development/product-troubleshooting/request-product-access).  For more information on testing Automated Micro-deposits in Sandbox, see [Auth full coverage testing](https://plaid.com/docs/auth/coverage/testing#).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_item_set_verification_status_request = new \OpenAPI\Client\Model\SandboxItemSetVerificationStatusRequest(); // \OpenAPI\Client\Model\SandboxItemSetVerificationStatusRequest

try {
    $result = $apiInstance->sandboxItemSetVerificationStatus($sandbox_item_set_verification_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxItemSetVerificationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_item_set_verification_status_request** | [**\OpenAPI\Client\Model\SandboxItemSetVerificationStatusRequest**](../Model/SandboxItemSetVerificationStatusRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxItemSetVerificationStatusResponse**](../Model/SandboxItemSetVerificationStatusResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxOauthSelectAccounts()`

```php
sandboxOauthSelectAccounts($sandbox_oauth_select_accounts_request): array<string,mixed>
```

Save the selected accounts when connecting to the Platypus Oauth institution

Save the selected accounts when connecting to the Platypus Oauth institution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_oauth_select_accounts_request = new \OpenAPI\Client\Model\SandboxOauthSelectAccountsRequest(); // \OpenAPI\Client\Model\SandboxOauthSelectAccountsRequest

try {
    $result = $apiInstance->sandboxOauthSelectAccounts($sandbox_oauth_select_accounts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxOauthSelectAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_oauth_select_accounts_request** | [**\OpenAPI\Client\Model\SandboxOauthSelectAccountsRequest**](../Model/SandboxOauthSelectAccountsRequest.md)|  |

### Return type

**array<string,mixed>**

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxProcessorTokenCreate()`

```php
sandboxProcessorTokenCreate($sandbox_processor_token_create_request): \OpenAPI\Client\Model\SandboxProcessorTokenCreateResponse
```

Create a test Item and processor token

Use the `/sandbox/processor_token/create` endpoint to create a valid `processor_token` for an arbitrary institution ID and test credentials. The created `processor_token` corresponds to a new Sandbox Item. You can then use this `processor_token` with the `/processor/` API endpoints in Sandbox. You can also use `/sandbox/processor_token/create` with the [`user_custom` test username](https://plaid.com/docs/sandbox/user-custom) to generate a test account with custom data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_processor_token_create_request = new \OpenAPI\Client\Model\SandboxProcessorTokenCreateRequest(); // \OpenAPI\Client\Model\SandboxProcessorTokenCreateRequest

try {
    $result = $apiInstance->sandboxProcessorTokenCreate($sandbox_processor_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxProcessorTokenCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_processor_token_create_request** | [**\OpenAPI\Client\Model\SandboxProcessorTokenCreateRequest**](../Model/SandboxProcessorTokenCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxProcessorTokenCreateResponse**](../Model/SandboxProcessorTokenCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxPublicTokenCreate()`

```php
sandboxPublicTokenCreate($sandbox_public_token_create_request): \OpenAPI\Client\Model\SandboxPublicTokenCreateResponse
```

Create a test Item

Use the `/sandbox/public_token/create` endpoint to create a valid `public_token`  for an arbitrary institution ID, initial products, and test credentials. The created `public_token` maps to a new Sandbox Item. You can then call `/item/public_token/exchange` to exchange the `public_token` for an `access_token` and perform all API actions. `/sandbox/public_token/create` can also be used with the [`user_custom` test username](https://plaid.com/docs/sandbox/user-custom) to generate a test account with custom data. `/sandbox/public_token/create` cannot be used with OAuth institutions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_public_token_create_request = new \OpenAPI\Client\Model\SandboxPublicTokenCreateRequest(); // \OpenAPI\Client\Model\SandboxPublicTokenCreateRequest | 

try {
    $result = $apiInstance->sandboxPublicTokenCreate($sandbox_public_token_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxPublicTokenCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_public_token_create_request** | [**\OpenAPI\Client\Model\SandboxPublicTokenCreateRequest**](../Model/SandboxPublicTokenCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxPublicTokenCreateResponse**](../Model/SandboxPublicTokenCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxTransferRepaymentSimulate()`

```php
sandboxTransferRepaymentSimulate($sandbox_transfer_repayment_simulate_request): \OpenAPI\Client\Model\SandboxTransferRepaymentSimulateResponse
```

Trigger the creation of a repayment

Use the `/sandbox/transfer/repayment/simulate` endpoint to trigger the creation of a repayment. As a side effect of calling this route, a repayment is created that includes all unreimbursed returns of guaranteed transfers. If there are no such returns, an 400 error is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_transfer_repayment_simulate_request = new \OpenAPI\Client\Model\SandboxTransferRepaymentSimulateRequest(); // \OpenAPI\Client\Model\SandboxTransferRepaymentSimulateRequest

try {
    $result = $apiInstance->sandboxTransferRepaymentSimulate($sandbox_transfer_repayment_simulate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxTransferRepaymentSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_transfer_repayment_simulate_request** | [**\OpenAPI\Client\Model\SandboxTransferRepaymentSimulateRequest**](../Model/SandboxTransferRepaymentSimulateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxTransferRepaymentSimulateResponse**](../Model/SandboxTransferRepaymentSimulateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxTransferSimulate()`

```php
sandboxTransferSimulate($sandbox_transfer_simulate_request): \OpenAPI\Client\Model\SandboxTransferSimulateResponse
```

Simulate a transfer event in Sandbox

Use the `/sandbox/transfer/simulate` endpoint to simulate a transfer event in the Sandbox environment.  Note that while an event will be simulated and will appear when using endpoints such as `/transfer/event/sync` or `/transfer/event/list`, no transactions will actually take place and funds will not move between accounts, even within the Sandbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_transfer_simulate_request = new \OpenAPI\Client\Model\SandboxTransferSimulateRequest(); // \OpenAPI\Client\Model\SandboxTransferSimulateRequest

try {
    $result = $apiInstance->sandboxTransferSimulate($sandbox_transfer_simulate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxTransferSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_transfer_simulate_request** | [**\OpenAPI\Client\Model\SandboxTransferSimulateRequest**](../Model/SandboxTransferSimulateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxTransferSimulateResponse**](../Model/SandboxTransferSimulateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sandboxTransferSweepSimulate()`

```php
sandboxTransferSweepSimulate($sandbox_transfer_sweep_simulate_request): \OpenAPI\Client\Model\SandboxTransferSweepSimulateResponse
```

Simulate creating a sweep

Use the `/sandbox/transfer/sweep/simulate` endpoint to create a sweep and associated events in the Sandbox environment. Upon calling this endpoint, all `posted` or `pending` transfers with a sweep status of `unswept` will become `swept`, and all `reversed` transfers with a sweep status of `swept` will become `reverse_swept`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_transfer_sweep_simulate_request = new \OpenAPI\Client\Model\SandboxTransferSweepSimulateRequest(); // \OpenAPI\Client\Model\SandboxTransferSweepSimulateRequest

try {
    $result = $apiInstance->sandboxTransferSweepSimulate($sandbox_transfer_sweep_simulate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->sandboxTransferSweepSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sandbox_transfer_sweep_simulate_request** | [**\OpenAPI\Client\Model\SandboxTransferSweepSimulateRequest**](../Model/SandboxTransferSweepSimulateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SandboxTransferSweepSimulateResponse**](../Model/SandboxTransferSweepSimulateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signalDecisionReport()`

```php
signalDecisionReport($signal_decision_report_request): \OpenAPI\Client\Model\SignalDecisionReportResponse
```

Report whether you initiated an ACH transaction

After calling `/signal/evaluate`, call `/signal/decision/report` to report whether the transaction was initiated. This endpoint will return an `INVALID_REQUEST` error if called a second time with a different value for `initiated`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signal_decision_report_request = new \OpenAPI\Client\Model\SignalDecisionReportRequest(); // \OpenAPI\Client\Model\SignalDecisionReportRequest

try {
    $result = $apiInstance->signalDecisionReport($signal_decision_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->signalDecisionReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signal_decision_report_request** | [**\OpenAPI\Client\Model\SignalDecisionReportRequest**](../Model/SignalDecisionReportRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SignalDecisionReportResponse**](../Model/SignalDecisionReportResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signalEvaluate()`

```php
signalEvaluate($signal_evaluate_request): \OpenAPI\Client\Model\SignalEvaluateResponse
```

Evaluate a planned ACH transaction

Use `/signal/evaluate` to evaluate a planned ACH transaction to get a return risk assessment (such as a risk score and risk tier) and additional risk signals.  In order to obtain a valid score for an ACH transaction, Plaid must have an access token for the account, and the Item must be healthy (receiving product updates) or have recently been in a healthy state. If the transaction does not meet eligibility requirements, an error will be returned corresponding to the underlying cause. If `/signal/evaluate` is called on the same transaction multiple times within a 24-hour period, cached results may be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signal_evaluate_request = new \OpenAPI\Client\Model\SignalEvaluateRequest(); // \OpenAPI\Client\Model\SignalEvaluateRequest

try {
    $result = $apiInstance->signalEvaluate($signal_evaluate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->signalEvaluate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signal_evaluate_request** | [**\OpenAPI\Client\Model\SignalEvaluateRequest**](../Model/SignalEvaluateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SignalEvaluateResponse**](../Model/SignalEvaluateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signalReturnReport()`

```php
signalReturnReport($signal_return_report_request): \OpenAPI\Client\Model\SignalReturnReportResponse
```

Report a return for an ACH transaction

Call the `/signal/return/report` endpoint to report a returned transaction that was previously sent to the `/signal/evaluate` endpoint. Your feedback will be used by the foo to incorporate the latest risk trend in your portfolio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signal_return_report_request = new \OpenAPI\Client\Model\SignalReturnReportRequest(); // \OpenAPI\Client\Model\SignalReturnReportRequest

try {
    $result = $apiInstance->signalReturnReport($signal_return_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->signalReturnReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signal_return_report_request** | [**\OpenAPI\Client\Model\SignalReturnReportRequest**](../Model/SignalReturnReportRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SignalReturnReportResponse**](../Model/SignalReturnReportResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsGet()`

```php
transactionsGet($transactions_get_request): \OpenAPI\Client\Model\TransactionsGetResponse
```

Get transaction data

The `/transactions/get` endpoint allows developers to receive user-authorized transaction data for credit, depository, and some loan-type accounts (only those with account subtype `student`; coverage may be limited). For transaction history from investments accounts, use the [Investments endpoint](https://plaid.com/docs/api/products#investments) instead. Transaction data is standardized across financial institutions, and in many cases transactions are linked to a clean name, entity type, location, and category. Similarly, account data is standardized and returned with a clean name, number, balance, and other meta information where available.  Transactions are returned in reverse-chronological order, and the sequence of transaction ordering is stable and will not shift.  Transactions are not immutable and can also be removed altogether by the institution; a removed transaction will no longer appear in `/transactions/get`.  For more details, see [Pending and posted transactions](https://plaid.com/docs/transactions/transactions-data/#pending-and-posted-transactions).  Due to the potentially large number of transactions associated with an Item, results are paginated. Manipulate the `count` and `offset` parameters in conjunction with the `total_transactions` response body field to fetch all available transactions.  Data returned by `/transactions/get` will be the data available for the Item as of the most recent successful check for new transactions. Plaid typically checks for new data multiple times a day, but these checks may occur less frequently, such as once a day, depending on the institution. An Item's `status.transactions.last_successful_update` field will show the timestamp of the most recent successful update. To force Plaid to check for new transactions, you can use the `/transactions/refresh` endpoint.  Note that data may not be immediately available to `/transactions/get`. Plaid will begin to prepare transactions data upon Item link, if Link was initialized with `transactions`, or upon the first call to `/transactions/get`, if it wasn't. To be alerted when transaction data is ready to be fetched, listen for the [`INITIAL_UPDATE`](https://plaid.com/docs/api/webhooks#transactions-initial_update) and [`HISTORICAL_UPDATE`](https://plaid.com/docs/api/webhooks#transactions-historical_update) webhooks. If no transaction history is ready when `/transactions/get` is called, it will return a `PRODUCT_NOT_READY` error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactions_get_request = new \OpenAPI\Client\Model\TransactionsGetRequest(); // \OpenAPI\Client\Model\TransactionsGetRequest

try {
    $result = $apiInstance->transactionsGet($transactions_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactions_get_request** | [**\OpenAPI\Client\Model\TransactionsGetRequest**](../Model/TransactionsGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransactionsGetResponse**](../Model/TransactionsGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsRecurringGet()`

```php
transactionsRecurringGet($transactions_recurring_get_request): \OpenAPI\Client\Model\TransactionsRecurringGetResponse
```

Get streams of recurring transactions

The `/transactions/recurring/get` endpoint identifies and returns groups of transactions that occur on a regular basis for the inputted Item and accounts.  The product is currently in beta. To request access, contact transactions-feedback@plaid.com.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactions_recurring_get_request = new \OpenAPI\Client\Model\TransactionsRecurringGetRequest(); // \OpenAPI\Client\Model\TransactionsRecurringGetRequest

try {
    $result = $apiInstance->transactionsRecurringGet($transactions_recurring_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transactionsRecurringGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactions_recurring_get_request** | [**\OpenAPI\Client\Model\TransactionsRecurringGetRequest**](../Model/TransactionsRecurringGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransactionsRecurringGetResponse**](../Model/TransactionsRecurringGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsRefresh()`

```php
transactionsRefresh($transactions_refresh_request): \OpenAPI\Client\Model\TransactionsRefreshResponse
```

Refresh transaction data

`/transactions/refresh` is an optional endpoint for users of the Transactions product. It initiates an on-demand extraction to fetch the newest transactions for an Item. This on-demand extraction takes place in addition to the periodic extractions that automatically occur multiple times a day for any Transactions-enabled Item. If changes to transactions are discovered after calling `/transactions/refresh`, Plaid will fire a webhook: [`TRANSACTIONS_REMOVED`](https://plaid.com/docs/api/webhooks#deleted-transactions-detected) will be fired if any removed transactions are detected, and [`DEFAULT_UPDATE`](https://plaid.com/docs/api/webhooks#transactions-default_update) will be fired if any new transactions are detected. New transactions can be fetched by calling `/transactions/get`.  Access to `/transactions/refresh` in Production is specific to certain pricing plans. If you cannot access `/transactions/refresh` in Production, [contact Sales](https://www.plaid.com/contact) for assistance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactions_refresh_request = new \OpenAPI\Client\Model\TransactionsRefreshRequest(); // \OpenAPI\Client\Model\TransactionsRefreshRequest

try {
    $result = $apiInstance->transactionsRefresh($transactions_refresh_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transactionsRefresh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactions_refresh_request** | [**\OpenAPI\Client\Model\TransactionsRefreshRequest**](../Model/TransactionsRefreshRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransactionsRefreshResponse**](../Model/TransactionsRefreshResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsSync()`

```php
transactionsSync($transactions_sync_request): \OpenAPI\Client\Model\TransactionsSyncResponse
```

Get incremental transaction updates on an Item

The `/transactions/sync` endpoint returns item transactions as a set of delta updates. Subsequent calls to the endpoint using the cursor returned in the response will return new added, modified, and removed transactions since the last call to the endpoint  The product is currently in beta. To request access, contact transactions-feedback@plaid.com.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactions_sync_request = new \OpenAPI\Client\Model\TransactionsSyncRequest(); // \OpenAPI\Client\Model\TransactionsSyncRequest

try {
    $result = $apiInstance->transactionsSync($transactions_sync_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transactionsSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactions_sync_request** | [**\OpenAPI\Client\Model\TransactionsSyncRequest**](../Model/TransactionsSyncRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransactionsSyncResponse**](../Model/TransactionsSyncResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferAuthorizationCreate()`

```php
transferAuthorizationCreate($transfer_authorization_create_request): \OpenAPI\Client\Model\TransferAuthorizationCreateResponse
```

Create a transfer authorization

Use the `/transfer/authorization/create` endpoint to determine transfer failure risk.  In Plaid's sandbox environment the decisions will be returned as follows:    - To approve a transfer, make an authorization request with an `amount` less than the available balance in the account.    - To decline a transfer with the rationale code `NSF`, the available balance on the account must be less than the authorization `amount`. See [Create Sandbox test data](https://plaid.com/docs/sandbox/user-custom/) for details on how to customize data in Sandbox.    - To decline a transfer with the rationale code `RISK`, the available balance on the account must be exactly $0. See [Create Sandbox test data](https://plaid.com/docs/sandbox/user-custom/) for details on how to customize data in Sandbox.    - To permit a transfer with the rationale code `MANUALLY_VERIFIED_ITEM`, create an Item in Link through the [Same Day Micro-deposits flow](https://plaid.com/docs/auth/coverage/testing/#testing-same-day-micro-deposits).    - To permit a transfer with the rationale code `LOGIN_REQUIRED`, [reset the login for an Item](https://plaid.com/docs/sandbox/#item_login_required).  All username/password combinations other than the ones listed above will result in a decision of permitted and rationale code `ERROR`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_authorization_create_request = new \OpenAPI\Client\Model\TransferAuthorizationCreateRequest(); // \OpenAPI\Client\Model\TransferAuthorizationCreateRequest

try {
    $result = $apiInstance->transferAuthorizationCreate($transfer_authorization_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferAuthorizationCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_authorization_create_request** | [**\OpenAPI\Client\Model\TransferAuthorizationCreateRequest**](../Model/TransferAuthorizationCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferAuthorizationCreateResponse**](../Model/TransferAuthorizationCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferCancel()`

```php
transferCancel($transfer_cancel_request): \OpenAPI\Client\Model\TransferCancelResponse
```

Cancel a transfer

Use the `/transfer/cancel` endpoint to cancel a transfer.  A transfer is eligible for cancelation if the `cancellable` property returned by `/transfer/get` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_cancel_request = new \OpenAPI\Client\Model\TransferCancelRequest(); // \OpenAPI\Client\Model\TransferCancelRequest

try {
    $result = $apiInstance->transferCancel($transfer_cancel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_cancel_request** | [**\OpenAPI\Client\Model\TransferCancelRequest**](../Model/TransferCancelRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferCancelResponse**](../Model/TransferCancelResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferCreate()`

```php
transferCreate($transfer_create_request): \OpenAPI\Client\Model\TransferCreateResponse
```

Create a transfer

Use the `/transfer/create` endpoint to initiate a new transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_create_request = new \OpenAPI\Client\Model\TransferCreateRequest(); // \OpenAPI\Client\Model\TransferCreateRequest

try {
    $result = $apiInstance->transferCreate($transfer_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_create_request** | [**\OpenAPI\Client\Model\TransferCreateRequest**](../Model/TransferCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferCreateResponse**](../Model/TransferCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferEventList()`

```php
transferEventList($transfer_event_list_request): \OpenAPI\Client\Model\TransferEventListResponse
```

List transfer events

Use the `/transfer/event/list` endpoint to get a list of transfer events based on specified filter criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_event_list_request = new \OpenAPI\Client\Model\TransferEventListRequest(); // \OpenAPI\Client\Model\TransferEventListRequest

try {
    $result = $apiInstance->transferEventList($transfer_event_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferEventList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_event_list_request** | [**\OpenAPI\Client\Model\TransferEventListRequest**](../Model/TransferEventListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferEventListResponse**](../Model/TransferEventListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferEventSync()`

```php
transferEventSync($transfer_event_sync_request): \OpenAPI\Client\Model\TransferEventSyncResponse
```

Sync transfer events

`/transfer/event/sync` allows you to request up to the next 25 transfer events that happened after a specific `event_id`. Use the `/transfer/event/sync` endpoint to guarantee you have seen all transfer events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_event_sync_request = new \OpenAPI\Client\Model\TransferEventSyncRequest(); // \OpenAPI\Client\Model\TransferEventSyncRequest

try {
    $result = $apiInstance->transferEventSync($transfer_event_sync_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferEventSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_event_sync_request** | [**\OpenAPI\Client\Model\TransferEventSyncRequest**](../Model/TransferEventSyncRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferEventSyncResponse**](../Model/TransferEventSyncResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferGet()`

```php
transferGet($transfer_get_request): \OpenAPI\Client\Model\TransferGetResponse
```

Retrieve a transfer

The `/transfer/get` fetches information about the transfer corresponding to the given `transfer_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_get_request = new \OpenAPI\Client\Model\TransferGetRequest(); // \OpenAPI\Client\Model\TransferGetRequest

try {
    $result = $apiInstance->transferGet($transfer_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_get_request** | [**\OpenAPI\Client\Model\TransferGetRequest**](../Model/TransferGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferGetResponse**](../Model/TransferGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferIntentCreate()`

```php
transferIntentCreate($transfer_intent_create_request): \OpenAPI\Client\Model\TransferIntentCreateResponse
```

Create a transfer intent object to invoke the Transfer UI

Use the `/transfer/intent/create` endpoint to generate a transfer intent object and invoke the Transfer UI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_intent_create_request = new \OpenAPI\Client\Model\TransferIntentCreateRequest(); // \OpenAPI\Client\Model\TransferIntentCreateRequest

try {
    $result = $apiInstance->transferIntentCreate($transfer_intent_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferIntentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_intent_create_request** | [**\OpenAPI\Client\Model\TransferIntentCreateRequest**](../Model/TransferIntentCreateRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferIntentCreateResponse**](../Model/TransferIntentCreateResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferIntentGet()`

```php
transferIntentGet($request_body): \OpenAPI\Client\Model\TransferIntentGetResponse
```

Retrieve more information about a transfer intent

Use the `/transfer/intent/get` endpoint to retrieve more information about a transfer intent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->transferIntentGet($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferIntentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferIntentGetResponse**](../Model/TransferIntentGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferList()`

```php
transferList($transfer_list_request): \OpenAPI\Client\Model\TransferListResponse
```

List transfers

Use the `/transfer/list` endpoint to see a list of all your transfers and their statuses. Results are paginated; use the `count` and `offset` query parameters to retrieve the desired transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_list_request = new \OpenAPI\Client\Model\TransferListRequest(); // \OpenAPI\Client\Model\TransferListRequest

try {
    $result = $apiInstance->transferList($transfer_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_list_request** | [**\OpenAPI\Client\Model\TransferListRequest**](../Model/TransferListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferListResponse**](../Model/TransferListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferRepaymentList()`

```php
transferRepaymentList($transfer_repayment_list_request): \OpenAPI\Client\Model\TransferRepaymentListResponse
```

Lists historical repayments

The `/transfer/repayment/list` endpoint fetches repayments matching the given filters. Repayments are returned in reverse-chronological order (most recent first) starting at the given `start_time`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_repayment_list_request = {"start_time":"2022-01-10T12:34:56Z","count":1}; // \OpenAPI\Client\Model\TransferRepaymentListRequest

try {
    $result = $apiInstance->transferRepaymentList($transfer_repayment_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferRepaymentList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_repayment_list_request** | [**\OpenAPI\Client\Model\TransferRepaymentListRequest**](../Model/TransferRepaymentListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferRepaymentListResponse**](../Model/TransferRepaymentListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferRepaymentReturnList()`

```php
transferRepaymentReturnList($transfer_repayment_return_list_request): \OpenAPI\Client\Model\TransferRepaymentReturnListResponse
```

List the returns included in a repayment

The `/transfer/repayment/return/list` endpoint retrieves the set of returns that were batched together into the specified repayment. The sum of amounts of returns retrieved by this request equals the amount of the repayment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_repayment_return_list_request = {"start_time":"2022-01-10T12:34:56Z","count":1,"repayment_id":"d4bfce70-2470-4298-ae87-5e9b3e18bfaf"}; // \OpenAPI\Client\Model\TransferRepaymentReturnListRequest

try {
    $result = $apiInstance->transferRepaymentReturnList($transfer_repayment_return_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferRepaymentReturnList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_repayment_return_list_request** | [**\OpenAPI\Client\Model\TransferRepaymentReturnListRequest**](../Model/TransferRepaymentReturnListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferRepaymentReturnListResponse**](../Model/TransferRepaymentReturnListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferSweepGet()`

```php
transferSweepGet($transfer_sweep_get_request): \OpenAPI\Client\Model\TransferSweepGetResponse
```

Retrieve a sweep

The `/transfer/sweep/get` endpoint fetches a sweep corresponding to the given `sweep_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_sweep_get_request = new \OpenAPI\Client\Model\TransferSweepGetRequest(); // \OpenAPI\Client\Model\TransferSweepGetRequest

try {
    $result = $apiInstance->transferSweepGet($transfer_sweep_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferSweepGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_sweep_get_request** | [**\OpenAPI\Client\Model\TransferSweepGetRequest**](../Model/TransferSweepGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferSweepGetResponse**](../Model/TransferSweepGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferSweepList()`

```php
transferSweepList($transfer_sweep_list_request): \OpenAPI\Client\Model\TransferSweepListResponse
```

List sweeps

The `/transfer/sweep/list` endpoint fetches sweeps matching the given filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_sweep_list_request = new \OpenAPI\Client\Model\TransferSweepListRequest(); // \OpenAPI\Client\Model\TransferSweepListRequest

try {
    $result = $apiInstance->transferSweepList($transfer_sweep_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->transferSweepList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_sweep_list_request** | [**\OpenAPI\Client\Model\TransferSweepListRequest**](../Model/TransferSweepListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\TransferSweepListResponse**](../Model/TransferSweepListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletGet()`

```php
walletGet($wallet_get_request): \OpenAPI\Client\Model\WalletGetResponse
```

Fetch an e-wallet

Fetch an e-wallet. The response includes the current balance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_get_request = new \OpenAPI\Client\Model\WalletGetRequest(); // \OpenAPI\Client\Model\WalletGetRequest

try {
    $result = $apiInstance->walletGet($wallet_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->walletGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_get_request** | [**\OpenAPI\Client\Model\WalletGetRequest**](../Model/WalletGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\WalletGetResponse**](../Model/WalletGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletTransactionExecute()`

```php
walletTransactionExecute($wallet_transaction_execute_request): \OpenAPI\Client\Model\WalletTransactionExecuteResponse
```

Execute a transaction using an e-wallet

Execute a transaction using the specified e-wallet. Specify the e-wallet to debit from, the counterparty to credit to, the idempotency key to prevent duplicate payouts, the amount and reference for the payout. The payouts are executed over the Faster Payment rails, where settlement usually only takes a few seconds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_transaction_execute_request = new \OpenAPI\Client\Model\WalletTransactionExecuteRequest(); // \OpenAPI\Client\Model\WalletTransactionExecuteRequest

try {
    $result = $apiInstance->walletTransactionExecute($wallet_transaction_execute_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->walletTransactionExecute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_transaction_execute_request** | [**\OpenAPI\Client\Model\WalletTransactionExecuteRequest**](../Model/WalletTransactionExecuteRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\WalletTransactionExecuteResponse**](../Model/WalletTransactionExecuteResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletTransactionsList()`

```php
walletTransactionsList($wallet_transactions_list_request): \OpenAPI\Client\Model\WalletTransactionsListResponse
```

List e-wallet transactions

This endpoint lists the latest transactions of the specified e-wallet. Transactions are returned in descending order by the `created_at` time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_transactions_list_request = new \OpenAPI\Client\Model\WalletTransactionsListRequest(); // \OpenAPI\Client\Model\WalletTransactionsListRequest

try {
    $result = $apiInstance->walletTransactionsList($wallet_transactions_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->walletTransactionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_transactions_list_request** | [**\OpenAPI\Client\Model\WalletTransactionsListRequest**](../Model/WalletTransactionsListRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\WalletTransactionsListResponse**](../Model/WalletTransactionsListResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookVerificationKeyGet()`

```php
webhookVerificationKeyGet($webhook_verification_key_get_request): \OpenAPI\Client\Model\WebhookVerificationKeyGetResponse
```

Get webhook verification key

Plaid signs all outgoing webhooks and provides JSON Web Tokens (JWTs) so that you can verify the authenticity of any incoming webhooks to your application. A message signature is included in the `Plaid-Verification` header.  The `/webhook_verification_key/get` endpoint provides a JSON Web Key (JWK) that can be used to verify a JWT.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-CLIENT-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-CLIENT-ID', 'Bearer');

// Configure API key authorization: plaidVersion
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Plaid-Version', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Plaid-Version', 'Bearer');

// Configure API key authorization: secret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('PLAID-SECRET', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PLAID-SECRET', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_verification_key_get_request = new \OpenAPI\Client\Model\WebhookVerificationKeyGetRequest(); // \OpenAPI\Client\Model\WebhookVerificationKeyGetRequest | 

try {
    $result = $apiInstance->webhookVerificationKeyGet($webhook_verification_key_get_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaidApi->webhookVerificationKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_verification_key_get_request** | [**\OpenAPI\Client\Model\WebhookVerificationKeyGetRequest**](../Model/WebhookVerificationKeyGetRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\WebhookVerificationKeyGetResponse**](../Model/WebhookVerificationKeyGetResponse.md)

### Authorization

[clientId](../../README.md#clientId), [plaidVersion](../../README.md#plaidVersion), [secret](../../README.md#secret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
