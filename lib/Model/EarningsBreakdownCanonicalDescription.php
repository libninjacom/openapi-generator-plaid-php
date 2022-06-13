<?php
/**
 * EarningsBreakdownCanonicalDescription
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
 * EarningsBreakdownCanonicalDescription Class Doc Comment
 *
 * @category Class
 * @description Commonly used term to describe the earning line item.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EarningsBreakdownCanonicalDescription
{
    /**
     * Possible values of this enum
     */
    public const BONUS = 'BONUS';

    public const COMMISSION = 'COMMISSION';

    public const OVERTIME = 'OVERTIME';

    public const PAID_TIME_OFF = 'PAID TIME OFF';

    public const REGULAR_PAY = 'REGULAR PAY';

    public const VACATION = 'VACATION';

    public const BASIC_ALLOWANCE_HOUSING = 'BASIC ALLOWANCE HOUSING';

    public const BASIC_ALLOWANCE_SUBSISTENCE = 'BASIC ALLOWANCE SUBSISTENCE';

    public const OTHER = 'OTHER';

    public const NULL = 'null';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BONUS,
            self::COMMISSION,
            self::OVERTIME,
            self::PAID_TIME_OFF,
            self::REGULAR_PAY,
            self::VACATION,
            self::BASIC_ALLOWANCE_HOUSING,
            self::BASIC_ALLOWANCE_SUBSISTENCE,
            self::OTHER,
            self::NULL
        ];
    }
}

