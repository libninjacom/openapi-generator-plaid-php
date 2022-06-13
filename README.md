# OpenAPIClient-php

The Plaid REST API. Please see https://plaid.com/docs/api for more details.

For more information, please visit [https://plaid.com](https://plaid.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://production.plaid.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PlaidApi* | [**accountsBalanceGet**](docs/Api/PlaidApi.md#accountsbalanceget) | **POST** /accounts/balance/get | Retrieve real-time balance data
*PlaidApi* | [**accountsGet**](docs/Api/PlaidApi.md#accountsget) | **POST** /accounts/get | Retrieve accounts
*PlaidApi* | [**applicationGet**](docs/Api/PlaidApi.md#applicationget) | **POST** /application/get | Retrieve information about a Plaid application
*PlaidApi* | [**assetReportAuditCopyCreate**](docs/Api/PlaidApi.md#assetreportauditcopycreate) | **POST** /asset_report/audit_copy/create | Create Asset Report Audit Copy
*PlaidApi* | [**assetReportAuditCopyGet**](docs/Api/PlaidApi.md#assetreportauditcopyget) | **POST** /asset_report/audit_copy/get | Retrieve an Asset Report Audit Copy
*PlaidApi* | [**assetReportAuditCopyRemove**](docs/Api/PlaidApi.md#assetreportauditcopyremove) | **POST** /asset_report/audit_copy/remove | Remove Asset Report Audit Copy
*PlaidApi* | [**assetReportCreate**](docs/Api/PlaidApi.md#assetreportcreate) | **POST** /asset_report/create | Create an Asset Report
*PlaidApi* | [**assetReportFilter**](docs/Api/PlaidApi.md#assetreportfilter) | **POST** /asset_report/filter | Filter Asset Report
*PlaidApi* | [**assetReportGet**](docs/Api/PlaidApi.md#assetreportget) | **POST** /asset_report/get | Retrieve an Asset Report
*PlaidApi* | [**assetReportPdfGet**](docs/Api/PlaidApi.md#assetreportpdfget) | **POST** /asset_report/pdf/get | Retrieve a PDF Asset Report
*PlaidApi* | [**assetReportRefresh**](docs/Api/PlaidApi.md#assetreportrefresh) | **POST** /asset_report/refresh | Refresh an Asset Report
*PlaidApi* | [**assetReportRemove**](docs/Api/PlaidApi.md#assetreportremove) | **POST** /asset_report/remove | Delete an Asset Report
*PlaidApi* | [**authGet**](docs/Api/PlaidApi.md#authget) | **POST** /auth/get | Retrieve auth data
*PlaidApi* | [**bankTransferBalanceGet**](docs/Api/PlaidApi.md#banktransferbalanceget) | **POST** /bank_transfer/balance/get | Get balance of your Bank Transfer account
*PlaidApi* | [**bankTransferCancel**](docs/Api/PlaidApi.md#banktransfercancel) | **POST** /bank_transfer/cancel | Cancel a bank transfer
*PlaidApi* | [**bankTransferCreate**](docs/Api/PlaidApi.md#banktransfercreate) | **POST** /bank_transfer/create | Create a bank transfer
*PlaidApi* | [**bankTransferEventList**](docs/Api/PlaidApi.md#banktransfereventlist) | **POST** /bank_transfer/event/list | List bank transfer events
*PlaidApi* | [**bankTransferEventSync**](docs/Api/PlaidApi.md#banktransfereventsync) | **POST** /bank_transfer/event/sync | Sync bank transfer events
*PlaidApi* | [**bankTransferGet**](docs/Api/PlaidApi.md#banktransferget) | **POST** /bank_transfer/get | Retrieve a bank transfer
*PlaidApi* | [**bankTransferList**](docs/Api/PlaidApi.md#banktransferlist) | **POST** /bank_transfer/list | List bank transfers
*PlaidApi* | [**bankTransferMigrateAccount**](docs/Api/PlaidApi.md#banktransfermigrateaccount) | **POST** /bank_transfer/migrate_account | Migrate account into Bank Transfers
*PlaidApi* | [**bankTransferSweepGet**](docs/Api/PlaidApi.md#banktransfersweepget) | **POST** /bank_transfer/sweep/get | Retrieve a sweep
*PlaidApi* | [**bankTransferSweepList**](docs/Api/PlaidApi.md#banktransfersweeplist) | **POST** /bank_transfer/sweep/list | List sweeps
*PlaidApi* | [**categoriesGet**](docs/Api/PlaidApi.md#categoriesget) | **POST** /categories/get | Get Categories
*PlaidApi* | [**createPaymentToken**](docs/Api/PlaidApi.md#createpaymenttoken) | **POST** /payment_initiation/payment/token/create | Create payment token
*PlaidApi* | [**depositSwitchAltCreate**](docs/Api/PlaidApi.md#depositswitchaltcreate) | **POST** /deposit_switch/alt/create | Create a deposit switch without using Plaid Exchange
*PlaidApi* | [**depositSwitchCreate**](docs/Api/PlaidApi.md#depositswitchcreate) | **POST** /deposit_switch/create | Create a deposit switch
*PlaidApi* | [**depositSwitchGet**](docs/Api/PlaidApi.md#depositswitchget) | **POST** /deposit_switch/get | Retrieve a deposit switch
*PlaidApi* | [**depositSwitchTokenCreate**](docs/Api/PlaidApi.md#depositswitchtokencreate) | **POST** /deposit_switch/token/create | Create a deposit switch token
*PlaidApi* | [**employersSearch**](docs/Api/PlaidApi.md#employerssearch) | **POST** /employers/search | Search employer database
*PlaidApi* | [**employmentVerificationGet**](docs/Api/PlaidApi.md#employmentverificationget) | **POST** /employment/verification/get | Retrieve a summary of an individual&#39;s employment information
*PlaidApi* | [**identityGet**](docs/Api/PlaidApi.md#identityget) | **POST** /identity/get | Retrieve identity data
*PlaidApi* | [**incomeVerificationCreate**](docs/Api/PlaidApi.md#incomeverificationcreate) | **POST** /income/verification/create | (Deprecated) Create an income verification instance
*PlaidApi* | [**incomeVerificationDocumentsDownload**](docs/Api/PlaidApi.md#incomeverificationdocumentsdownload) | **POST** /income/verification/documents/download | Download the original documents used for income verification
*PlaidApi* | [**incomeVerificationPaystubGet**](docs/Api/PlaidApi.md#incomeverificationpaystubget) | **POST** /income/verification/paystub/get | (Deprecated) Retrieve information from a single paystub used for income verification
*PlaidApi* | [**incomeVerificationPaystubsGet**](docs/Api/PlaidApi.md#incomeverificationpaystubsget) | **POST** /income/verification/paystubs/get | Retrieve information from the paystubs used for income verification
*PlaidApi* | [**incomeVerificationPrecheck**](docs/Api/PlaidApi.md#incomeverificationprecheck) | **POST** /income/verification/precheck | Check digital income verification eligibility and optimize conversion
*PlaidApi* | [**incomeVerificationRefresh**](docs/Api/PlaidApi.md#incomeverificationrefresh) | **POST** /income/verification/refresh | Refresh an income verification
*PlaidApi* | [**incomeVerificationSummaryGet**](docs/Api/PlaidApi.md#incomeverificationsummaryget) | **POST** /income/verification/summary/get | (Deprecated) Retrieve a summary of information derived from income verification
*PlaidApi* | [**incomeVerificationTaxformsGet**](docs/Api/PlaidApi.md#incomeverificationtaxformsget) | **POST** /income/verification/taxforms/get | Retrieve information from the tax documents used for income verification
*PlaidApi* | [**institutionsGet**](docs/Api/PlaidApi.md#institutionsget) | **POST** /institutions/get | Get details of all supported institutions
*PlaidApi* | [**institutionsGetById**](docs/Api/PlaidApi.md#institutionsgetbyid) | **POST** /institutions/get_by_id | Get details of an institution
*PlaidApi* | [**institutionsSearch**](docs/Api/PlaidApi.md#institutionssearch) | **POST** /institutions/search | Search institutions
*PlaidApi* | [**investmentsHoldingsGet**](docs/Api/PlaidApi.md#investmentsholdingsget) | **POST** /investments/holdings/get | Get Investment holdings
*PlaidApi* | [**investmentsTransactionsGet**](docs/Api/PlaidApi.md#investmentstransactionsget) | **POST** /investments/transactions/get | Get investment transactions
*PlaidApi* | [**itemAccessTokenInvalidate**](docs/Api/PlaidApi.md#itemaccesstokeninvalidate) | **POST** /item/access_token/invalidate | Invalidate access_token
*PlaidApi* | [**itemApplicationList**](docs/Api/PlaidApi.md#itemapplicationlist) | **POST** /item/application/list | List a user’s connected applications
*PlaidApi* | [**itemApplicationScopesUpdate**](docs/Api/PlaidApi.md#itemapplicationscopesupdate) | **POST** /item/application/scopes/update | Update the scopes of access for a particular application
*PlaidApi* | [**itemCreatePublicToken**](docs/Api/PlaidApi.md#itemcreatepublictoken) | **POST** /item/public_token/create | Create public token
*PlaidApi* | [**itemGet**](docs/Api/PlaidApi.md#itemget) | **POST** /item/get | Retrieve an Item
*PlaidApi* | [**itemImport**](docs/Api/PlaidApi.md#itemimport) | **POST** /item/import | Import Item
*PlaidApi* | [**itemPublicTokenExchange**](docs/Api/PlaidApi.md#itempublictokenexchange) | **POST** /item/public_token/exchange | Exchange public token for an access token
*PlaidApi* | [**itemRemove**](docs/Api/PlaidApi.md#itemremove) | **POST** /item/remove | Remove an Item
*PlaidApi* | [**itemWebhookUpdate**](docs/Api/PlaidApi.md#itemwebhookupdate) | **POST** /item/webhook/update | Update Webhook URL
*PlaidApi* | [**liabilitiesGet**](docs/Api/PlaidApi.md#liabilitiesget) | **POST** /liabilities/get | Retrieve Liabilities data
*PlaidApi* | [**linkTokenCreate**](docs/Api/PlaidApi.md#linktokencreate) | **POST** /link/token/create | Create Link Token
*PlaidApi* | [**linkTokenGet**](docs/Api/PlaidApi.md#linktokenget) | **POST** /link/token/get | Get Link Token
*PlaidApi* | [**paymentInitiationPaymentCreate**](docs/Api/PlaidApi.md#paymentinitiationpaymentcreate) | **POST** /payment_initiation/payment/create | Create a payment
*PlaidApi* | [**paymentInitiationPaymentGet**](docs/Api/PlaidApi.md#paymentinitiationpaymentget) | **POST** /payment_initiation/payment/get | Get payment details
*PlaidApi* | [**paymentInitiationPaymentList**](docs/Api/PlaidApi.md#paymentinitiationpaymentlist) | **POST** /payment_initiation/payment/list | List payments
*PlaidApi* | [**paymentInitiationPaymentReverse**](docs/Api/PlaidApi.md#paymentinitiationpaymentreverse) | **POST** /payment_initiation/payment/reverse | Reverse an existing payment
*PlaidApi* | [**paymentInitiationRecipientCreate**](docs/Api/PlaidApi.md#paymentinitiationrecipientcreate) | **POST** /payment_initiation/recipient/create | Create payment recipient
*PlaidApi* | [**paymentInitiationRecipientGet**](docs/Api/PlaidApi.md#paymentinitiationrecipientget) | **POST** /payment_initiation/recipient/get | Get payment recipient
*PlaidApi* | [**paymentInitiationRecipientList**](docs/Api/PlaidApi.md#paymentinitiationrecipientlist) | **POST** /payment_initiation/recipient/list | List payment recipients
*PlaidApi* | [**processorApexProcessorTokenCreate**](docs/Api/PlaidApi.md#processorapexprocessortokencreate) | **POST** /processor/apex/processor_token/create | Create Apex bank account token
*PlaidApi* | [**processorAuthGet**](docs/Api/PlaidApi.md#processorauthget) | **POST** /processor/auth/get | Retrieve Auth data
*PlaidApi* | [**processorBalanceGet**](docs/Api/PlaidApi.md#processorbalanceget) | **POST** /processor/balance/get | Retrieve Balance data
*PlaidApi* | [**processorBankTransferCreate**](docs/Api/PlaidApi.md#processorbanktransfercreate) | **POST** /processor/bank_transfer/create | Create a bank transfer as a processor
*PlaidApi* | [**processorIdentityGet**](docs/Api/PlaidApi.md#processoridentityget) | **POST** /processor/identity/get | Retrieve Identity data
*PlaidApi* | [**processorStripeBankAccountTokenCreate**](docs/Api/PlaidApi.md#processorstripebankaccounttokencreate) | **POST** /processor/stripe/bank_account_token/create | Create Stripe bank account token
*PlaidApi* | [**processorTokenCreate**](docs/Api/PlaidApi.md#processortokencreate) | **POST** /processor/token/create | Create processor token
*PlaidApi* | [**sandboxBankTransferFireWebhook**](docs/Api/PlaidApi.md#sandboxbanktransferfirewebhook) | **POST** /sandbox/bank_transfer/fire_webhook | Manually fire a Bank Transfer webhook
*PlaidApi* | [**sandboxBankTransferSimulate**](docs/Api/PlaidApi.md#sandboxbanktransfersimulate) | **POST** /sandbox/bank_transfer/simulate | Simulate a bank transfer event in Sandbox
*PlaidApi* | [**sandboxIncomeFireWebhook**](docs/Api/PlaidApi.md#sandboxincomefirewebhook) | **POST** /sandbox/income/fire_webhook | Manually fire an Income webhook
*PlaidApi* | [**sandboxItemFireWebhook**](docs/Api/PlaidApi.md#sandboxitemfirewebhook) | **POST** /sandbox/item/fire_webhook | Fire a test webhook
*PlaidApi* | [**sandboxItemResetLogin**](docs/Api/PlaidApi.md#sandboxitemresetlogin) | **POST** /sandbox/item/reset_login | Force a Sandbox Item into an error state
*PlaidApi* | [**sandboxItemSetVerificationStatus**](docs/Api/PlaidApi.md#sandboxitemsetverificationstatus) | **POST** /sandbox/item/set_verification_status | Set verification status for Sandbox account
*PlaidApi* | [**sandboxOauthSelectAccounts**](docs/Api/PlaidApi.md#sandboxoauthselectaccounts) | **POST** /sandbox/oauth/select_accounts | Save the selected accounts when connecting to the Platypus Oauth institution
*PlaidApi* | [**sandboxProcessorTokenCreate**](docs/Api/PlaidApi.md#sandboxprocessortokencreate) | **POST** /sandbox/processor_token/create | Create a test Item and processor token
*PlaidApi* | [**sandboxPublicTokenCreate**](docs/Api/PlaidApi.md#sandboxpublictokencreate) | **POST** /sandbox/public_token/create | Create a test Item
*PlaidApi* | [**sandboxTransferRepaymentSimulate**](docs/Api/PlaidApi.md#sandboxtransferrepaymentsimulate) | **POST** /sandbox/transfer/repayment/simulate | Trigger the creation of a repayment
*PlaidApi* | [**sandboxTransferSimulate**](docs/Api/PlaidApi.md#sandboxtransfersimulate) | **POST** /sandbox/transfer/simulate | Simulate a transfer event in Sandbox
*PlaidApi* | [**sandboxTransferSweepSimulate**](docs/Api/PlaidApi.md#sandboxtransfersweepsimulate) | **POST** /sandbox/transfer/sweep/simulate | Simulate creating a sweep
*PlaidApi* | [**signalDecisionReport**](docs/Api/PlaidApi.md#signaldecisionreport) | **POST** /signal/decision/report | Report whether you initiated an ACH transaction
*PlaidApi* | [**signalEvaluate**](docs/Api/PlaidApi.md#signalevaluate) | **POST** /signal/evaluate | Evaluate a planned ACH transaction
*PlaidApi* | [**signalReturnReport**](docs/Api/PlaidApi.md#signalreturnreport) | **POST** /signal/return/report | Report a return for an ACH transaction
*PlaidApi* | [**transactionsGet**](docs/Api/PlaidApi.md#transactionsget) | **POST** /transactions/get | Get transaction data
*PlaidApi* | [**transactionsRecurringGet**](docs/Api/PlaidApi.md#transactionsrecurringget) | **POST** /transactions/recurring/get | Get streams of recurring transactions
*PlaidApi* | [**transactionsRefresh**](docs/Api/PlaidApi.md#transactionsrefresh) | **POST** /transactions/refresh | Refresh transaction data
*PlaidApi* | [**transactionsSync**](docs/Api/PlaidApi.md#transactionssync) | **POST** /transactions/sync | Get incremental transaction updates on an Item
*PlaidApi* | [**transferAuthorizationCreate**](docs/Api/PlaidApi.md#transferauthorizationcreate) | **POST** /transfer/authorization/create | Create a transfer authorization
*PlaidApi* | [**transferCancel**](docs/Api/PlaidApi.md#transfercancel) | **POST** /transfer/cancel | Cancel a transfer
*PlaidApi* | [**transferCreate**](docs/Api/PlaidApi.md#transfercreate) | **POST** /transfer/create | Create a transfer
*PlaidApi* | [**transferEventList**](docs/Api/PlaidApi.md#transfereventlist) | **POST** /transfer/event/list | List transfer events
*PlaidApi* | [**transferEventSync**](docs/Api/PlaidApi.md#transfereventsync) | **POST** /transfer/event/sync | Sync transfer events
*PlaidApi* | [**transferGet**](docs/Api/PlaidApi.md#transferget) | **POST** /transfer/get | Retrieve a transfer
*PlaidApi* | [**transferIntentCreate**](docs/Api/PlaidApi.md#transferintentcreate) | **POST** /transfer/intent/create | Create a transfer intent object to invoke the Transfer UI
*PlaidApi* | [**transferIntentGet**](docs/Api/PlaidApi.md#transferintentget) | **POST** /transfer/intent/get | Retrieve more information about a transfer intent
*PlaidApi* | [**transferList**](docs/Api/PlaidApi.md#transferlist) | **POST** /transfer/list | List transfers
*PlaidApi* | [**transferRepaymentList**](docs/Api/PlaidApi.md#transferrepaymentlist) | **POST** /transfer/repayment/list | Lists historical repayments
*PlaidApi* | [**transferRepaymentReturnList**](docs/Api/PlaidApi.md#transferrepaymentreturnlist) | **POST** /transfer/repayment/return/list | List the returns included in a repayment
*PlaidApi* | [**transferSweepGet**](docs/Api/PlaidApi.md#transfersweepget) | **POST** /transfer/sweep/get | Retrieve a sweep
*PlaidApi* | [**transferSweepList**](docs/Api/PlaidApi.md#transfersweeplist) | **POST** /transfer/sweep/list | List sweeps
*PlaidApi* | [**walletGet**](docs/Api/PlaidApi.md#walletget) | **POST** /wallet/get | Fetch an e-wallet
*PlaidApi* | [**walletTransactionExecute**](docs/Api/PlaidApi.md#wallettransactionexecute) | **POST** /wallet/transaction/execute | Execute a transaction using an e-wallet
*PlaidApi* | [**walletTransactionsList**](docs/Api/PlaidApi.md#wallettransactionslist) | **POST** /wallet/transactions/list | List e-wallet transactions
*PlaidApi* | [**webhookVerificationKeyGet**](docs/Api/PlaidApi.md#webhookverificationkeyget) | **POST** /webhook_verification_key/get | Get webhook verification key

## Models

- [ACHClass](docs/Model/ACHClass.md)
- [APR](docs/Model/APR.md)
- [AccountAccess](docs/Model/AccountAccess.md)
- [AccountAssets](docs/Model/AccountAssets.md)
- [AccountAssetsAllOf](docs/Model/AccountAssetsAllOf.md)
- [AccountBalance](docs/Model/AccountBalance.md)
- [AccountBase](docs/Model/AccountBase.md)
- [AccountFilter](docs/Model/AccountFilter.md)
- [AccountFiltersResponse](docs/Model/AccountFiltersResponse.md)
- [AccountIdentity](docs/Model/AccountIdentity.md)
- [AccountIdentityAllOf](docs/Model/AccountIdentityAllOf.md)
- [AccountProductAccess](docs/Model/AccountProductAccess.md)
- [AccountProductAccessNullable](docs/Model/AccountProductAccessNullable.md)
- [AccountSelectionCardinality](docs/Model/AccountSelectionCardinality.md)
- [AccountSubtype](docs/Model/AccountSubtype.md)
- [AccountType](docs/Model/AccountType.md)
- [AccountsBalanceGetRequest](docs/Model/AccountsBalanceGetRequest.md)
- [AccountsBalanceGetRequestOptions](docs/Model/AccountsBalanceGetRequestOptions.md)
- [AccountsGetRequest](docs/Model/AccountsGetRequest.md)
- [AccountsGetRequestOptions](docs/Model/AccountsGetRequestOptions.md)
- [AccountsGetResponse](docs/Model/AccountsGetResponse.md)
- [Address](docs/Model/Address.md)
- [AddressData](docs/Model/AddressData.md)
- [AddressDataNullable](docs/Model/AddressDataNullable.md)
- [AddressNullable](docs/Model/AddressNullable.md)
- [Application](docs/Model/Application.md)
- [ApplicationGetRequest](docs/Model/ApplicationGetRequest.md)
- [ApplicationGetResponse](docs/Model/ApplicationGetResponse.md)
- [AssetReport](docs/Model/AssetReport.md)
- [AssetReportAuditCopyCreateRequest](docs/Model/AssetReportAuditCopyCreateRequest.md)
- [AssetReportAuditCopyCreateResponse](docs/Model/AssetReportAuditCopyCreateResponse.md)
- [AssetReportAuditCopyGetRequest](docs/Model/AssetReportAuditCopyGetRequest.md)
- [AssetReportAuditCopyRemoveRequest](docs/Model/AssetReportAuditCopyRemoveRequest.md)
- [AssetReportAuditCopyRemoveResponse](docs/Model/AssetReportAuditCopyRemoveResponse.md)
- [AssetReportCreateRequest](docs/Model/AssetReportCreateRequest.md)
- [AssetReportCreateRequestOptions](docs/Model/AssetReportCreateRequestOptions.md)
- [AssetReportCreateResponse](docs/Model/AssetReportCreateResponse.md)
- [AssetReportFilterRequest](docs/Model/AssetReportFilterRequest.md)
- [AssetReportFilterResponse](docs/Model/AssetReportFilterResponse.md)
- [AssetReportGetRequest](docs/Model/AssetReportGetRequest.md)
- [AssetReportGetResponse](docs/Model/AssetReportGetResponse.md)
- [AssetReportItem](docs/Model/AssetReportItem.md)
- [AssetReportPDFGetRequest](docs/Model/AssetReportPDFGetRequest.md)
- [AssetReportRefreshRequest](docs/Model/AssetReportRefreshRequest.md)
- [AssetReportRefreshRequestOptions](docs/Model/AssetReportRefreshRequestOptions.md)
- [AssetReportRefreshResponse](docs/Model/AssetReportRefreshResponse.md)
- [AssetReportRemoveRequest](docs/Model/AssetReportRemoveRequest.md)
- [AssetReportRemoveResponse](docs/Model/AssetReportRemoveResponse.md)
- [AssetReportTransaction](docs/Model/AssetReportTransaction.md)
- [AssetReportTransactionAllOf](docs/Model/AssetReportTransactionAllOf.md)
- [AssetReportUser](docs/Model/AssetReportUser.md)
- [AssetsErrorWebhook](docs/Model/AssetsErrorWebhook.md)
- [AssetsProductReadyWebhook](docs/Model/AssetsProductReadyWebhook.md)
- [AuthGetNumbers](docs/Model/AuthGetNumbers.md)
- [AuthGetRequest](docs/Model/AuthGetRequest.md)
- [AuthGetRequestOptions](docs/Model/AuthGetRequestOptions.md)
- [AuthGetResponse](docs/Model/AuthGetResponse.md)
- [AuthMetadata](docs/Model/AuthMetadata.md)
- [AuthSupportedMethods](docs/Model/AuthSupportedMethods.md)
- [AutomaticallyVerifiedWebhook](docs/Model/AutomaticallyVerifiedWebhook.md)
- [BankInitiatedReturnRisk](docs/Model/BankInitiatedReturnRisk.md)
- [BankTransfer](docs/Model/BankTransfer.md)
- [BankTransferBalance](docs/Model/BankTransferBalance.md)
- [BankTransferBalanceGetRequest](docs/Model/BankTransferBalanceGetRequest.md)
- [BankTransferBalanceGetResponse](docs/Model/BankTransferBalanceGetResponse.md)
- [BankTransferCancelRequest](docs/Model/BankTransferCancelRequest.md)
- [BankTransferCancelResponse](docs/Model/BankTransferCancelResponse.md)
- [BankTransferCreateRequest](docs/Model/BankTransferCreateRequest.md)
- [BankTransferCreateResponse](docs/Model/BankTransferCreateResponse.md)
- [BankTransferDirection](docs/Model/BankTransferDirection.md)
- [BankTransferEvent](docs/Model/BankTransferEvent.md)
- [BankTransferEventListRequest](docs/Model/BankTransferEventListRequest.md)
- [BankTransferEventListResponse](docs/Model/BankTransferEventListResponse.md)
- [BankTransferEventSyncRequest](docs/Model/BankTransferEventSyncRequest.md)
- [BankTransferEventSyncResponse](docs/Model/BankTransferEventSyncResponse.md)
- [BankTransferEventType](docs/Model/BankTransferEventType.md)
- [BankTransferFailure](docs/Model/BankTransferFailure.md)
- [BankTransferGetRequest](docs/Model/BankTransferGetRequest.md)
- [BankTransferGetResponse](docs/Model/BankTransferGetResponse.md)
- [BankTransferListRequest](docs/Model/BankTransferListRequest.md)
- [BankTransferListResponse](docs/Model/BankTransferListResponse.md)
- [BankTransferMigrateAccountRequest](docs/Model/BankTransferMigrateAccountRequest.md)
- [BankTransferMigrateAccountResponse](docs/Model/BankTransferMigrateAccountResponse.md)
- [BankTransferNetwork](docs/Model/BankTransferNetwork.md)
- [BankTransferStatus](docs/Model/BankTransferStatus.md)
- [BankTransferSweep](docs/Model/BankTransferSweep.md)
- [BankTransferSweepGetRequest](docs/Model/BankTransferSweepGetRequest.md)
- [BankTransferSweepGetResponse](docs/Model/BankTransferSweepGetResponse.md)
- [BankTransferSweepListRequest](docs/Model/BankTransferSweepListRequest.md)
- [BankTransferSweepListResponse](docs/Model/BankTransferSweepListResponse.md)
- [BankTransferType](docs/Model/BankTransferType.md)
- [BankTransferUser](docs/Model/BankTransferUser.md)
- [BankTransfersEventsUpdateWebhook](docs/Model/BankTransfersEventsUpdateWebhook.md)
- [CategoriesGetResponse](docs/Model/CategoriesGetResponse.md)
- [Category](docs/Model/Category.md)
- [Cause](docs/Model/Cause.md)
- [ConnectedApplication](docs/Model/ConnectedApplication.md)
- [CountryCode](docs/Model/CountryCode.md)
- [CreditAccountSubtype](docs/Model/CreditAccountSubtype.md)
- [CreditCardLiability](docs/Model/CreditCardLiability.md)
- [CreditFilter](docs/Model/CreditFilter.md)
- [CustomerInitiatedReturnRisk](docs/Model/CustomerInitiatedReturnRisk.md)
- [Deductions](docs/Model/Deductions.md)
- [DeductionsBreakdown](docs/Model/DeductionsBreakdown.md)
- [DeductionsTotal](docs/Model/DeductionsTotal.md)
- [DefaultUpdateWebhook](docs/Model/DefaultUpdateWebhook.md)
- [DepositSwitchAddressData](docs/Model/DepositSwitchAddressData.md)
- [DepositSwitchAltCreateRequest](docs/Model/DepositSwitchAltCreateRequest.md)
- [DepositSwitchAltCreateResponse](docs/Model/DepositSwitchAltCreateResponse.md)
- [DepositSwitchCreateRequest](docs/Model/DepositSwitchCreateRequest.md)
- [DepositSwitchCreateRequestOptions](docs/Model/DepositSwitchCreateRequestOptions.md)
- [DepositSwitchCreateResponse](docs/Model/DepositSwitchCreateResponse.md)
- [DepositSwitchGetRequest](docs/Model/DepositSwitchGetRequest.md)
- [DepositSwitchGetResponse](docs/Model/DepositSwitchGetResponse.md)
- [DepositSwitchStateUpdateWebhook](docs/Model/DepositSwitchStateUpdateWebhook.md)
- [DepositSwitchTargetAccount](docs/Model/DepositSwitchTargetAccount.md)
- [DepositSwitchTargetUser](docs/Model/DepositSwitchTargetUser.md)
- [DepositSwitchTokenCreateRequest](docs/Model/DepositSwitchTokenCreateRequest.md)
- [DepositSwitchTokenCreateResponse](docs/Model/DepositSwitchTokenCreateResponse.md)
- [DepositoryAccountSubtype](docs/Model/DepositoryAccountSubtype.md)
- [DepositoryFilter](docs/Model/DepositoryFilter.md)
- [DistributionBreakdown](docs/Model/DistributionBreakdown.md)
- [DocType](docs/Model/DocType.md)
- [DocumentMetadata](docs/Model/DocumentMetadata.md)
- [Earnings](docs/Model/Earnings.md)
- [EarningsBreakdown](docs/Model/EarningsBreakdown.md)
- [EarningsBreakdownCanonicalDescription](docs/Model/EarningsBreakdownCanonicalDescription.md)
- [EarningsTotal](docs/Model/EarningsTotal.md)
- [Email](docs/Model/Email.md)
- [Employee](docs/Model/Employee.md)
- [EmployeeIncomeSummaryFieldString](docs/Model/EmployeeIncomeSummaryFieldString.md)
- [Employer](docs/Model/Employer.md)
- [EmployerIncomeSummaryFieldString](docs/Model/EmployerIncomeSummaryFieldString.md)
- [EmployerVerification](docs/Model/EmployerVerification.md)
- [EmployersSearchRequest](docs/Model/EmployersSearchRequest.md)
- [EmployersSearchResponse](docs/Model/EmployersSearchResponse.md)
- [EmploymentDetails](docs/Model/EmploymentDetails.md)
- [EmploymentVerification](docs/Model/EmploymentVerification.md)
- [EmploymentVerificationGetRequest](docs/Model/EmploymentVerificationGetRequest.md)
- [EmploymentVerificationGetResponse](docs/Model/EmploymentVerificationGetResponse.md)
- [EmploymentVerificationStatus](docs/Model/EmploymentVerificationStatus.md)
- [Error](docs/Model/Error.md)
- [ExternalPaymentOptions](docs/Model/ExternalPaymentOptions.md)
- [ExternalPaymentRefundDetails](docs/Model/ExternalPaymentRefundDetails.md)
- [ExternalPaymentScheduleBase](docs/Model/ExternalPaymentScheduleBase.md)
- [ExternalPaymentScheduleGet](docs/Model/ExternalPaymentScheduleGet.md)
- [ExternalPaymentScheduleRequest](docs/Model/ExternalPaymentScheduleRequest.md)
- [HealthIncident](docs/Model/HealthIncident.md)
- [HistoricalBalance](docs/Model/HistoricalBalance.md)
- [HistoricalUpdateWebhook](docs/Model/HistoricalUpdateWebhook.md)
- [Holding](docs/Model/Holding.md)
- [HoldingsDefaultUpdateWebhook](docs/Model/HoldingsDefaultUpdateWebhook.md)
- [HoldingsOverride](docs/Model/HoldingsOverride.md)
- [IdentityGetRequest](docs/Model/IdentityGetRequest.md)
- [IdentityGetRequestOptions](docs/Model/IdentityGetRequestOptions.md)
- [IdentityGetResponse](docs/Model/IdentityGetResponse.md)
- [IncidentUpdate](docs/Model/IncidentUpdate.md)
- [IncomeBreakdown](docs/Model/IncomeBreakdown.md)
- [IncomeBreakdownType](docs/Model/IncomeBreakdownType.md)
- [IncomeOverride](docs/Model/IncomeOverride.md)
- [IncomeSummary](docs/Model/IncomeSummary.md)
- [IncomeSummaryFieldNumber](docs/Model/IncomeSummaryFieldNumber.md)
- [IncomeSummaryFieldString](docs/Model/IncomeSummaryFieldString.md)
- [IncomeVerificationCreateRequest](docs/Model/IncomeVerificationCreateRequest.md)
- [IncomeVerificationCreateRequestOptions](docs/Model/IncomeVerificationCreateRequestOptions.md)
- [IncomeVerificationCreateResponse](docs/Model/IncomeVerificationCreateResponse.md)
- [IncomeVerificationDocumentsDownloadRequest](docs/Model/IncomeVerificationDocumentsDownloadRequest.md)
- [IncomeVerificationPaystubGetRequest](docs/Model/IncomeVerificationPaystubGetRequest.md)
- [IncomeVerificationPaystubGetResponse](docs/Model/IncomeVerificationPaystubGetResponse.md)
- [IncomeVerificationPaystubsGetRequest](docs/Model/IncomeVerificationPaystubsGetRequest.md)
- [IncomeVerificationPaystubsGetResponse](docs/Model/IncomeVerificationPaystubsGetResponse.md)
- [IncomeVerificationPrecheckConfidence](docs/Model/IncomeVerificationPrecheckConfidence.md)
- [IncomeVerificationPrecheckEmployer](docs/Model/IncomeVerificationPrecheckEmployer.md)
- [IncomeVerificationPrecheckEmployerAddress](docs/Model/IncomeVerificationPrecheckEmployerAddress.md)
- [IncomeVerificationPrecheckEmployerAddressData](docs/Model/IncomeVerificationPrecheckEmployerAddressData.md)
- [IncomeVerificationPrecheckMilitaryInfo](docs/Model/IncomeVerificationPrecheckMilitaryInfo.md)
- [IncomeVerificationPrecheckRequest](docs/Model/IncomeVerificationPrecheckRequest.md)
- [IncomeVerificationPrecheckResponse](docs/Model/IncomeVerificationPrecheckResponse.md)
- [IncomeVerificationPrecheckUser](docs/Model/IncomeVerificationPrecheckUser.md)
- [IncomeVerificationRefreshRequest](docs/Model/IncomeVerificationRefreshRequest.md)
- [IncomeVerificationRefreshResponse](docs/Model/IncomeVerificationRefreshResponse.md)
- [IncomeVerificationStatusWebhook](docs/Model/IncomeVerificationStatusWebhook.md)
- [IncomeVerificationSummaryGetRequest](docs/Model/IncomeVerificationSummaryGetRequest.md)
- [IncomeVerificationSummaryGetResponse](docs/Model/IncomeVerificationSummaryGetResponse.md)
- [IncomeVerificationTaxformsGetRequest](docs/Model/IncomeVerificationTaxformsGetRequest.md)
- [IncomeVerificationTaxformsGetResponse](docs/Model/IncomeVerificationTaxformsGetResponse.md)
- [IncomeVerificationWebhookStatus](docs/Model/IncomeVerificationWebhookStatus.md)
- [InflowModel](docs/Model/InflowModel.md)
- [InitialUpdateWebhook](docs/Model/InitialUpdateWebhook.md)
- [Institution](docs/Model/Institution.md)
- [InstitutionStatus](docs/Model/InstitutionStatus.md)
- [InstitutionsGetByIdRequest](docs/Model/InstitutionsGetByIdRequest.md)
- [InstitutionsGetByIdRequestOptions](docs/Model/InstitutionsGetByIdRequestOptions.md)
- [InstitutionsGetByIdResponse](docs/Model/InstitutionsGetByIdResponse.md)
- [InstitutionsGetRequest](docs/Model/InstitutionsGetRequest.md)
- [InstitutionsGetRequestOptions](docs/Model/InstitutionsGetRequestOptions.md)
- [InstitutionsGetResponse](docs/Model/InstitutionsGetResponse.md)
- [InstitutionsSearchAccountFilter](docs/Model/InstitutionsSearchAccountFilter.md)
- [InstitutionsSearchPaymentInitiationOptions](docs/Model/InstitutionsSearchPaymentInitiationOptions.md)
- [InstitutionsSearchRequest](docs/Model/InstitutionsSearchRequest.md)
- [InstitutionsSearchRequestOptions](docs/Model/InstitutionsSearchRequestOptions.md)
- [InstitutionsSearchResponse](docs/Model/InstitutionsSearchResponse.md)
- [InvestmentAccountSubtype](docs/Model/InvestmentAccountSubtype.md)
- [InvestmentFilter](docs/Model/InvestmentFilter.md)
- [InvestmentHoldingsGetRequestOptions](docs/Model/InvestmentHoldingsGetRequestOptions.md)
- [InvestmentTransaction](docs/Model/InvestmentTransaction.md)
- [InvestmentsDefaultUpdateWebhook](docs/Model/InvestmentsDefaultUpdateWebhook.md)
- [InvestmentsHoldingsGetRequest](docs/Model/InvestmentsHoldingsGetRequest.md)
- [InvestmentsHoldingsGetResponse](docs/Model/InvestmentsHoldingsGetResponse.md)
- [InvestmentsTransactionsGetRequest](docs/Model/InvestmentsTransactionsGetRequest.md)
- [InvestmentsTransactionsGetRequestOptions](docs/Model/InvestmentsTransactionsGetRequestOptions.md)
- [InvestmentsTransactionsGetResponse](docs/Model/InvestmentsTransactionsGetResponse.md)
- [InvestmentsTransactionsOverride](docs/Model/InvestmentsTransactionsOverride.md)
- [Item](docs/Model/Item.md)
- [ItemAccessTokenInvalidateRequest](docs/Model/ItemAccessTokenInvalidateRequest.md)
- [ItemAccessTokenInvalidateResponse](docs/Model/ItemAccessTokenInvalidateResponse.md)
- [ItemApplicationListRequest](docs/Model/ItemApplicationListRequest.md)
- [ItemApplicationListResponse](docs/Model/ItemApplicationListResponse.md)
- [ItemApplicationListUserAuth](docs/Model/ItemApplicationListUserAuth.md)
- [ItemApplicationScopesUpdateRequest](docs/Model/ItemApplicationScopesUpdateRequest.md)
- [ItemApplicationScopesUpdateResponse](docs/Model/ItemApplicationScopesUpdateResponse.md)
- [ItemErrorWebhook](docs/Model/ItemErrorWebhook.md)
- [ItemGetRequest](docs/Model/ItemGetRequest.md)
- [ItemGetResponse](docs/Model/ItemGetResponse.md)
- [ItemImportRequest](docs/Model/ItemImportRequest.md)
- [ItemImportRequestOptions](docs/Model/ItemImportRequestOptions.md)
- [ItemImportRequestUserAuth](docs/Model/ItemImportRequestUserAuth.md)
- [ItemImportResponse](docs/Model/ItemImportResponse.md)
- [ItemProductReadyWebhook](docs/Model/ItemProductReadyWebhook.md)
- [ItemPublicTokenCreateRequest](docs/Model/ItemPublicTokenCreateRequest.md)
- [ItemPublicTokenCreateResponse](docs/Model/ItemPublicTokenCreateResponse.md)
- [ItemPublicTokenExchangeRequest](docs/Model/ItemPublicTokenExchangeRequest.md)
- [ItemPublicTokenExchangeResponse](docs/Model/ItemPublicTokenExchangeResponse.md)
- [ItemRemoveRequest](docs/Model/ItemRemoveRequest.md)
- [ItemRemoveResponse](docs/Model/ItemRemoveResponse.md)
- [ItemStatus](docs/Model/ItemStatus.md)
- [ItemStatusInvestments](docs/Model/ItemStatusInvestments.md)
- [ItemStatusLastWebhook](docs/Model/ItemStatusLastWebhook.md)
- [ItemStatusNullable](docs/Model/ItemStatusNullable.md)
- [ItemStatusTransactions](docs/Model/ItemStatusTransactions.md)
- [ItemWebhookUpdateRequest](docs/Model/ItemWebhookUpdateRequest.md)
- [ItemWebhookUpdateResponse](docs/Model/ItemWebhookUpdateResponse.md)
- [JWKPublicKey](docs/Model/JWKPublicKey.md)
- [JWTHeader](docs/Model/JWTHeader.md)
- [LiabilitiesDefaultUpdateWebhook](docs/Model/LiabilitiesDefaultUpdateWebhook.md)
- [LiabilitiesGetRequest](docs/Model/LiabilitiesGetRequest.md)
- [LiabilitiesGetRequestOptions](docs/Model/LiabilitiesGetRequestOptions.md)
- [LiabilitiesGetResponse](docs/Model/LiabilitiesGetResponse.md)
- [LiabilitiesObject](docs/Model/LiabilitiesObject.md)
- [LiabilityOverride](docs/Model/LiabilityOverride.md)
- [LinkTokenAccountFilters](docs/Model/LinkTokenAccountFilters.md)
- [LinkTokenCreateCreditFilter](docs/Model/LinkTokenCreateCreditFilter.md)
- [LinkTokenCreateDepositoryFilter](docs/Model/LinkTokenCreateDepositoryFilter.md)
- [LinkTokenCreateInvestmentFilter](docs/Model/LinkTokenCreateInvestmentFilter.md)
- [LinkTokenCreateLoanFilter](docs/Model/LinkTokenCreateLoanFilter.md)
- [LinkTokenCreateRequest](docs/Model/LinkTokenCreateRequest.md)
- [LinkTokenCreateRequestAccountSubtypes](docs/Model/LinkTokenCreateRequestAccountSubtypes.md)
- [LinkTokenCreateRequestAuth](docs/Model/LinkTokenCreateRequestAuth.md)
- [LinkTokenCreateRequestDepositSwitch](docs/Model/LinkTokenCreateRequestDepositSwitch.md)
- [LinkTokenCreateRequestIncomeVerification](docs/Model/LinkTokenCreateRequestIncomeVerification.md)
- [LinkTokenCreateRequestPaymentInitiation](docs/Model/LinkTokenCreateRequestPaymentInitiation.md)
- [LinkTokenCreateRequestTransfer](docs/Model/LinkTokenCreateRequestTransfer.md)
- [LinkTokenCreateRequestUpdate](docs/Model/LinkTokenCreateRequestUpdate.md)
- [LinkTokenCreateRequestUser](docs/Model/LinkTokenCreateRequestUser.md)
- [LinkTokenCreateResponse](docs/Model/LinkTokenCreateResponse.md)
- [LinkTokenEUConfig](docs/Model/LinkTokenEUConfig.md)
- [LinkTokenGetMetadataResponse](docs/Model/LinkTokenGetMetadataResponse.md)
- [LinkTokenGetRequest](docs/Model/LinkTokenGetRequest.md)
- [LinkTokenGetResponse](docs/Model/LinkTokenGetResponse.md)
- [LoanAccountSubtype](docs/Model/LoanAccountSubtype.md)
- [LoanFilter](docs/Model/LoanFilter.md)
- [Location](docs/Model/Location.md)
- [MFA](docs/Model/MFA.md)
- [Meta](docs/Model/Meta.md)
- [MortgageInterestRate](docs/Model/MortgageInterestRate.md)
- [MortgageLiability](docs/Model/MortgageLiability.md)
- [MortgagePropertyAddress](docs/Model/MortgagePropertyAddress.md)
- [NetPay](docs/Model/NetPay.md)
- [NewAccountsAvailableWebhook](docs/Model/NewAccountsAvailableWebhook.md)
- [Numbers](docs/Model/Numbers.md)
- [NumbersACH](docs/Model/NumbersACH.md)
- [NumbersACHNullable](docs/Model/NumbersACHNullable.md)
- [NumbersBACS](docs/Model/NumbersBACS.md)
- [NumbersBACSNullable](docs/Model/NumbersBACSNullable.md)
- [NumbersEFT](docs/Model/NumbersEFT.md)
- [NumbersEFTNullable](docs/Model/NumbersEFTNullable.md)
- [NumbersInternational](docs/Model/NumbersInternational.md)
- [NumbersInternationalNullable](docs/Model/NumbersInternationalNullable.md)
- [OverrideAccountType](docs/Model/OverrideAccountType.md)
- [OverrideAccounts](docs/Model/OverrideAccounts.md)
- [Owner](docs/Model/Owner.md)
- [OwnerOverride](docs/Model/OwnerOverride.md)
- [PSLFStatus](docs/Model/PSLFStatus.md)
- [Pay](docs/Model/Pay.md)
- [PayFrequency](docs/Model/PayFrequency.md)
- [PayFrequencyValue](docs/Model/PayFrequencyValue.md)
- [PayPeriodDetails](docs/Model/PayPeriodDetails.md)
- [PaymentAmount](docs/Model/PaymentAmount.md)
- [PaymentInitiationAddress](docs/Model/PaymentInitiationAddress.md)
- [PaymentInitiationMetadata](docs/Model/PaymentInitiationMetadata.md)
- [PaymentInitiationOptionalRestrictionBacs](docs/Model/PaymentInitiationOptionalRestrictionBacs.md)
- [PaymentInitiationPayment](docs/Model/PaymentInitiationPayment.md)
- [PaymentInitiationPaymentCreateRequest](docs/Model/PaymentInitiationPaymentCreateRequest.md)
- [PaymentInitiationPaymentCreateResponse](docs/Model/PaymentInitiationPaymentCreateResponse.md)
- [PaymentInitiationPaymentGetRequest](docs/Model/PaymentInitiationPaymentGetRequest.md)
- [PaymentInitiationPaymentGetResponse](docs/Model/PaymentInitiationPaymentGetResponse.md)
- [PaymentInitiationPaymentListRequest](docs/Model/PaymentInitiationPaymentListRequest.md)
- [PaymentInitiationPaymentListResponse](docs/Model/PaymentInitiationPaymentListResponse.md)
- [PaymentInitiationPaymentReverseRequest](docs/Model/PaymentInitiationPaymentReverseRequest.md)
- [PaymentInitiationPaymentReverseResponse](docs/Model/PaymentInitiationPaymentReverseResponse.md)
- [PaymentInitiationPaymentStatus](docs/Model/PaymentInitiationPaymentStatus.md)
- [PaymentInitiationPaymentTokenCreateRequest](docs/Model/PaymentInitiationPaymentTokenCreateRequest.md)
- [PaymentInitiationPaymentTokenCreateResponse](docs/Model/PaymentInitiationPaymentTokenCreateResponse.md)
- [PaymentInitiationRecipient](docs/Model/PaymentInitiationRecipient.md)
- [PaymentInitiationRecipientCreateRequest](docs/Model/PaymentInitiationRecipientCreateRequest.md)
- [PaymentInitiationRecipientCreateResponse](docs/Model/PaymentInitiationRecipientCreateResponse.md)
- [PaymentInitiationRecipientGetRequest](docs/Model/PaymentInitiationRecipientGetRequest.md)
- [PaymentInitiationRecipientGetResponse](docs/Model/PaymentInitiationRecipientGetResponse.md)
- [PaymentInitiationRecipientGetResponseAllOf](docs/Model/PaymentInitiationRecipientGetResponseAllOf.md)
- [PaymentInitiationRecipientListRequest](docs/Model/PaymentInitiationRecipientListRequest.md)
- [PaymentInitiationRecipientListResponse](docs/Model/PaymentInitiationRecipientListResponse.md)
- [PaymentInitiationRefund](docs/Model/PaymentInitiationRefund.md)
- [PaymentInitiationStandingOrderMetadata](docs/Model/PaymentInitiationStandingOrderMetadata.md)
- [PaymentMeta](docs/Model/PaymentMeta.md)
- [PaymentScheduleInterval](docs/Model/PaymentScheduleInterval.md)
- [PaymentScheme](docs/Model/PaymentScheme.md)
- [PaymentStatusUpdateWebhook](docs/Model/PaymentStatusUpdateWebhook.md)
- [Paystub](docs/Model/Paystub.md)
- [PaystubAddress](docs/Model/PaystubAddress.md)
- [PaystubDeduction](docs/Model/PaystubDeduction.md)
- [PaystubDetails](docs/Model/PaystubDetails.md)
- [PaystubEmployer](docs/Model/PaystubEmployer.md)
- [PaystubOverride](docs/Model/PaystubOverride.md)
- [PaystubOverrideEmployee](docs/Model/PaystubOverrideEmployee.md)
- [PaystubOverrideEmployeeAddress](docs/Model/PaystubOverrideEmployeeAddress.md)
- [PaystubOverrideEmployer](docs/Model/PaystubOverrideEmployer.md)
- [PaystubPayFrequency](docs/Model/PaystubPayFrequency.md)
- [PaystubVerification](docs/Model/PaystubVerification.md)
- [PaystubVerificationStatus](docs/Model/PaystubVerificationStatus.md)
- [PaystubYTDDetails](docs/Model/PaystubYTDDetails.md)
- [PendingExpirationWebhook](docs/Model/PendingExpirationWebhook.md)
- [PersonalFinanceCategory](docs/Model/PersonalFinanceCategory.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PlaidError](docs/Model/PlaidError.md)
- [PlatformIds](docs/Model/PlatformIds.md)
- [ProcessorApexProcessorTokenCreateRequest](docs/Model/ProcessorApexProcessorTokenCreateRequest.md)
- [ProcessorAuthGetRequest](docs/Model/ProcessorAuthGetRequest.md)
- [ProcessorAuthGetResponse](docs/Model/ProcessorAuthGetResponse.md)
- [ProcessorBalanceGetRequest](docs/Model/ProcessorBalanceGetRequest.md)
- [ProcessorBalanceGetRequestOptions](docs/Model/ProcessorBalanceGetRequestOptions.md)
- [ProcessorBalanceGetResponse](docs/Model/ProcessorBalanceGetResponse.md)
- [ProcessorBankTransferCreateRequest](docs/Model/ProcessorBankTransferCreateRequest.md)
- [ProcessorBankTransferCreateResponse](docs/Model/ProcessorBankTransferCreateResponse.md)
- [ProcessorIdentityGetRequest](docs/Model/ProcessorIdentityGetRequest.md)
- [ProcessorIdentityGetResponse](docs/Model/ProcessorIdentityGetResponse.md)
- [ProcessorNumber](docs/Model/ProcessorNumber.md)
- [ProcessorStripeBankAccountTokenCreateRequest](docs/Model/ProcessorStripeBankAccountTokenCreateRequest.md)
- [ProcessorStripeBankAccountTokenCreateResponse](docs/Model/ProcessorStripeBankAccountTokenCreateResponse.md)
- [ProcessorTokenCreateRequest](docs/Model/ProcessorTokenCreateRequest.md)
- [ProcessorTokenCreateResponse](docs/Model/ProcessorTokenCreateResponse.md)
- [ProductAccess](docs/Model/ProductAccess.md)
- [ProductStatus](docs/Model/ProductStatus.md)
- [ProductStatusBreakdown](docs/Model/ProductStatusBreakdown.md)
- [Products](docs/Model/Products.md)
- [ProjectedIncomeSummaryFieldNumber](docs/Model/ProjectedIncomeSummaryFieldNumber.md)
- [RecaptchaRequiredError](docs/Model/RecaptchaRequiredError.md)
- [RecipientBACS](docs/Model/RecipientBACS.md)
- [RecipientBACSNullable](docs/Model/RecipientBACSNullable.md)
- [RecurringTransactionFrequency](docs/Model/RecurringTransactionFrequency.md)
- [RemovedTransaction](docs/Model/RemovedTransaction.md)
- [RequestedScopes](docs/Model/RequestedScopes.md)
- [SandboxBankTransferFireWebhookRequest](docs/Model/SandboxBankTransferFireWebhookRequest.md)
- [SandboxBankTransferFireWebhookResponse](docs/Model/SandboxBankTransferFireWebhookResponse.md)
- [SandboxBankTransferSimulateRequest](docs/Model/SandboxBankTransferSimulateRequest.md)
- [SandboxBankTransferSimulateResponse](docs/Model/SandboxBankTransferSimulateResponse.md)
- [SandboxIncomeFireWebhookRequest](docs/Model/SandboxIncomeFireWebhookRequest.md)
- [SandboxIncomeFireWebhookResponse](docs/Model/SandboxIncomeFireWebhookResponse.md)
- [SandboxItemFireWebhookRequest](docs/Model/SandboxItemFireWebhookRequest.md)
- [SandboxItemFireWebhookResponse](docs/Model/SandboxItemFireWebhookResponse.md)
- [SandboxItemResetLoginRequest](docs/Model/SandboxItemResetLoginRequest.md)
- [SandboxItemResetLoginResponse](docs/Model/SandboxItemResetLoginResponse.md)
- [SandboxItemSetVerificationStatusRequest](docs/Model/SandboxItemSetVerificationStatusRequest.md)
- [SandboxItemSetVerificationStatusResponse](docs/Model/SandboxItemSetVerificationStatusResponse.md)
- [SandboxOauthSelectAccountsRequest](docs/Model/SandboxOauthSelectAccountsRequest.md)
- [SandboxProcessorTokenCreateRequest](docs/Model/SandboxProcessorTokenCreateRequest.md)
- [SandboxProcessorTokenCreateRequestOptions](docs/Model/SandboxProcessorTokenCreateRequestOptions.md)
- [SandboxProcessorTokenCreateResponse](docs/Model/SandboxProcessorTokenCreateResponse.md)
- [SandboxPublicTokenCreateRequest](docs/Model/SandboxPublicTokenCreateRequest.md)
- [SandboxPublicTokenCreateRequestOptions](docs/Model/SandboxPublicTokenCreateRequestOptions.md)
- [SandboxPublicTokenCreateRequestOptionsTransactions](docs/Model/SandboxPublicTokenCreateRequestOptionsTransactions.md)
- [SandboxPublicTokenCreateResponse](docs/Model/SandboxPublicTokenCreateResponse.md)
- [SandboxTransferRepaymentSimulateRequest](docs/Model/SandboxTransferRepaymentSimulateRequest.md)
- [SandboxTransferRepaymentSimulateResponse](docs/Model/SandboxTransferRepaymentSimulateResponse.md)
- [SandboxTransferSimulateRequest](docs/Model/SandboxTransferSimulateRequest.md)
- [SandboxTransferSimulateResponse](docs/Model/SandboxTransferSimulateResponse.md)
- [SandboxTransferSweepSimulateRequest](docs/Model/SandboxTransferSweepSimulateRequest.md)
- [SandboxTransferSweepSimulateResponse](docs/Model/SandboxTransferSweepSimulateResponse.md)
- [Scopes](docs/Model/Scopes.md)
- [ScopesContext](docs/Model/ScopesContext.md)
- [ScopesNullable](docs/Model/ScopesNullable.md)
- [Security](docs/Model/Security.md)
- [SecurityOverride](docs/Model/SecurityOverride.md)
- [SenderBACSNullable](docs/Model/SenderBACSNullable.md)
- [ServicerAddressData](docs/Model/ServicerAddressData.md)
- [SignalAddressData](docs/Model/SignalAddressData.md)
- [SignalDecisionReportRequest](docs/Model/SignalDecisionReportRequest.md)
- [SignalDecisionReportResponse](docs/Model/SignalDecisionReportResponse.md)
- [SignalDevice](docs/Model/SignalDevice.md)
- [SignalEvaluateCoreAttributes](docs/Model/SignalEvaluateCoreAttributes.md)
- [SignalEvaluateRequest](docs/Model/SignalEvaluateRequest.md)
- [SignalEvaluateResponse](docs/Model/SignalEvaluateResponse.md)
- [SignalPersonName](docs/Model/SignalPersonName.md)
- [SignalReturnReportRequest](docs/Model/SignalReturnReportRequest.md)
- [SignalReturnReportResponse](docs/Model/SignalReturnReportResponse.md)
- [SignalScores](docs/Model/SignalScores.md)
- [SignalUser](docs/Model/SignalUser.md)
- [SimulatedTransferSweep](docs/Model/SimulatedTransferSweep.md)
- [StandaloneAccountType](docs/Model/StandaloneAccountType.md)
- [StandaloneCurrencyCodeList](docs/Model/StandaloneCurrencyCodeList.md)
- [StandaloneInvestmentTransactionType](docs/Model/StandaloneInvestmentTransactionType.md)
- [StudentLoan](docs/Model/StudentLoan.md)
- [StudentLoanRepaymentModel](docs/Model/StudentLoanRepaymentModel.md)
- [StudentLoanStatus](docs/Model/StudentLoanStatus.md)
- [StudentRepaymentPlan](docs/Model/StudentRepaymentPlan.md)
- [Taxform](docs/Model/Taxform.md)
- [TaxpayerID](docs/Model/TaxpayerID.md)
- [Total](docs/Model/Total.md)
- [TotalCanonicalDescription](docs/Model/TotalCanonicalDescription.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionAllOf](docs/Model/TransactionAllOf.md)
- [TransactionBase](docs/Model/TransactionBase.md)
- [TransactionCode](docs/Model/TransactionCode.md)
- [TransactionData](docs/Model/TransactionData.md)
- [TransactionOverride](docs/Model/TransactionOverride.md)
- [TransactionStream](docs/Model/TransactionStream.md)
- [TransactionStreamAmount](docs/Model/TransactionStreamAmount.md)
- [TransactionsGetRequest](docs/Model/TransactionsGetRequest.md)
- [TransactionsGetRequestOptions](docs/Model/TransactionsGetRequestOptions.md)
- [TransactionsGetResponse](docs/Model/TransactionsGetResponse.md)
- [TransactionsRecurringGetRequest](docs/Model/TransactionsRecurringGetRequest.md)
- [TransactionsRecurringGetResponse](docs/Model/TransactionsRecurringGetResponse.md)
- [TransactionsRefreshRequest](docs/Model/TransactionsRefreshRequest.md)
- [TransactionsRefreshResponse](docs/Model/TransactionsRefreshResponse.md)
- [TransactionsRemovedWebhook](docs/Model/TransactionsRemovedWebhook.md)
- [TransactionsSyncRequest](docs/Model/TransactionsSyncRequest.md)
- [TransactionsSyncResponse](docs/Model/TransactionsSyncResponse.md)
- [Transfer](docs/Model/Transfer.md)
- [TransferAuthorization](docs/Model/TransferAuthorization.md)
- [TransferAuthorizationCreateRequest](docs/Model/TransferAuthorizationCreateRequest.md)
- [TransferAuthorizationCreateResponse](docs/Model/TransferAuthorizationCreateResponse.md)
- [TransferAuthorizationDecisionRationale](docs/Model/TransferAuthorizationDecisionRationale.md)
- [TransferAuthorizationDevice](docs/Model/TransferAuthorizationDevice.md)
- [TransferAuthorizationGuaranteeDecision](docs/Model/TransferAuthorizationGuaranteeDecision.md)
- [TransferAuthorizationGuaranteeDecisionRationale](docs/Model/TransferAuthorizationGuaranteeDecisionRationale.md)
- [TransferAuthorizationProposedTransfer](docs/Model/TransferAuthorizationProposedTransfer.md)
- [TransferCancelRequest](docs/Model/TransferCancelRequest.md)
- [TransferCancelResponse](docs/Model/TransferCancelResponse.md)
- [TransferCreateRequest](docs/Model/TransferCreateRequest.md)
- [TransferCreateResponse](docs/Model/TransferCreateResponse.md)
- [TransferEvent](docs/Model/TransferEvent.md)
- [TransferEventListRequest](docs/Model/TransferEventListRequest.md)
- [TransferEventListResponse](docs/Model/TransferEventListResponse.md)
- [TransferEventSyncRequest](docs/Model/TransferEventSyncRequest.md)
- [TransferEventSyncResponse](docs/Model/TransferEventSyncResponse.md)
- [TransferEventType](docs/Model/TransferEventType.md)
- [TransferFailure](docs/Model/TransferFailure.md)
- [TransferGetRequest](docs/Model/TransferGetRequest.md)
- [TransferGetResponse](docs/Model/TransferGetResponse.md)
- [TransferIntentCreate](docs/Model/TransferIntentCreate.md)
- [TransferIntentCreateMode](docs/Model/TransferIntentCreateMode.md)
- [TransferIntentCreateRequest](docs/Model/TransferIntentCreateRequest.md)
- [TransferIntentCreateResponse](docs/Model/TransferIntentCreateResponse.md)
- [TransferIntentGet](docs/Model/TransferIntentGet.md)
- [TransferIntentGetFailureReason](docs/Model/TransferIntentGetFailureReason.md)
- [TransferIntentGetRequest](docs/Model/TransferIntentGetRequest.md)
- [TransferIntentGetResponse](docs/Model/TransferIntentGetResponse.md)
- [TransferListRequest](docs/Model/TransferListRequest.md)
- [TransferListResponse](docs/Model/TransferListResponse.md)
- [TransferNetwork](docs/Model/TransferNetwork.md)
- [TransferRepayment](docs/Model/TransferRepayment.md)
- [TransferRepaymentListRequest](docs/Model/TransferRepaymentListRequest.md)
- [TransferRepaymentListResponse](docs/Model/TransferRepaymentListResponse.md)
- [TransferRepaymentReturn](docs/Model/TransferRepaymentReturn.md)
- [TransferRepaymentReturnListRequest](docs/Model/TransferRepaymentReturnListRequest.md)
- [TransferRepaymentReturnListResponse](docs/Model/TransferRepaymentReturnListResponse.md)
- [TransferStatus](docs/Model/TransferStatus.md)
- [TransferSweep](docs/Model/TransferSweep.md)
- [TransferSweepGetRequest](docs/Model/TransferSweepGetRequest.md)
- [TransferSweepGetResponse](docs/Model/TransferSweepGetResponse.md)
- [TransferSweepListRequest](docs/Model/TransferSweepListRequest.md)
- [TransferSweepListResponse](docs/Model/TransferSweepListResponse.md)
- [TransferSweepStatus](docs/Model/TransferSweepStatus.md)
- [TransferType](docs/Model/TransferType.md)
- [TransferUserAddressInRequest](docs/Model/TransferUserAddressInRequest.md)
- [TransferUserAddressInResponse](docs/Model/TransferUserAddressInResponse.md)
- [TransferUserInRequest](docs/Model/TransferUserInRequest.md)
- [TransferUserInResponse](docs/Model/TransferUserInResponse.md)
- [UserCustomPassword](docs/Model/UserCustomPassword.md)
- [UserPermissionRevokedWebhook](docs/Model/UserPermissionRevokedWebhook.md)
- [VerificationAttribute](docs/Model/VerificationAttribute.md)
- [VerificationExpiredWebhook](docs/Model/VerificationExpiredWebhook.md)
- [VerificationRefreshStatus](docs/Model/VerificationRefreshStatus.md)
- [VerificationStatus](docs/Model/VerificationStatus.md)
- [W2](docs/Model/W2.md)
- [W2Box12](docs/Model/W2Box12.md)
- [W2StateAndLocalWages](docs/Model/W2StateAndLocalWages.md)
- [WalletBalance](docs/Model/WalletBalance.md)
- [WalletGetRequest](docs/Model/WalletGetRequest.md)
- [WalletGetResponse](docs/Model/WalletGetResponse.md)
- [WalletTransaction](docs/Model/WalletTransaction.md)
- [WalletTransactionAmount](docs/Model/WalletTransactionAmount.md)
- [WalletTransactionCounterparty](docs/Model/WalletTransactionCounterparty.md)
- [WalletTransactionCounterpartyBACS](docs/Model/WalletTransactionCounterpartyBACS.md)
- [WalletTransactionCounterpartyNumbers](docs/Model/WalletTransactionCounterpartyNumbers.md)
- [WalletTransactionExecuteRequest](docs/Model/WalletTransactionExecuteRequest.md)
- [WalletTransactionExecuteResponse](docs/Model/WalletTransactionExecuteResponse.md)
- [WalletTransactionStatus](docs/Model/WalletTransactionStatus.md)
- [WalletTransactionsListRequest](docs/Model/WalletTransactionsListRequest.md)
- [WalletTransactionsListResponse](docs/Model/WalletTransactionsListResponse.md)
- [Warning](docs/Model/Warning.md)
- [WebhookUpdateAcknowledgedWebhook](docs/Model/WebhookUpdateAcknowledgedWebhook.md)
- [WebhookVerificationKeyGetRequest](docs/Model/WebhookVerificationKeyGetRequest.md)
- [WebhookVerificationKeyGetResponse](docs/Model/WebhookVerificationKeyGetResponse.md)
- [YTDGrossIncomeSummaryFieldNumber](docs/Model/YTDGrossIncomeSummaryFieldNumber.md)
- [YTDNetIncomeSummaryFieldNumber](docs/Model/YTDNetIncomeSummaryFieldNumber.md)

## Authorization

### clientId

- **Type**: API key
- **API key parameter name**: PLAID-CLIENT-ID
- **Location**: HTTP header



### plaidVersion

- **Type**: API key
- **API key parameter name**: Plaid-Version
- **Location**: HTTP header



### secret

- **Type**: API key
- **API key parameter name**: PLAID-SECRET
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2020-09-14_1.64.13`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
