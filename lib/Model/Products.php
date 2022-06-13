<?php
/**
 * Products
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Plaid API
 *
 * The Plaid REST API. Please see https://plaid.com/docs/api for more details.
 *
 * The version of the OpenAPI document: 2020-09-14_1.64.13
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Products Class Doc Comment
 *
 * @category Class
 * @description A list of products that an institution can support. All Items must be initialized with at least one product. The Balance product is always available and does not need to be specified during initialization.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Products
{
    /**
     * Possible values of this enum
     */
    public const ASSETS = 'assets';

    public const AUTH = 'auth';

    public const BALANCE = 'balance';

    public const IDENTITY = 'identity';

    public const INVESTMENTS = 'investments';

    public const LIABILITIES = 'liabilities';

    public const PAYMENT_INITIATION = 'payment_initiation';

    public const TRANSACTIONS = 'transactions';

    public const CREDIT_DETAILS = 'credit_details';

    public const INCOME = 'income';

    public const INCOME_VERIFICATION = 'income_verification';

    public const DEPOSIT_SWITCH = 'deposit_switch';

    public const STANDING_ORDERS = 'standing_orders';

    public const TRANSFER = 'transfer';

    public const EMPLOYMENT = 'employment';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASSETS,
            self::AUTH,
            self::BALANCE,
            self::IDENTITY,
            self::INVESTMENTS,
            self::LIABILITIES,
            self::PAYMENT_INITIATION,
            self::TRANSACTIONS,
            self::CREDIT_DETAILS,
            self::INCOME,
            self::INCOME_VERIFICATION,
            self::DEPOSIT_SWITCH,
            self::STANDING_ORDERS,
            self::TRANSFER,
            self::EMPLOYMENT
        ];
    }
}

