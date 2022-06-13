<?php
/**
 * PayFrequencyValue
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
 * PayFrequencyValue Class Doc Comment
 *
 * @category Class
 * @description The frequency of the pay period.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayFrequencyValue
{
    /**
     * Possible values of this enum
     */
    public const MONTHLY = 'monthly';

    public const SEMIMONTHLY = 'semimonthly';

    public const WEEKLY = 'weekly';

    public const BIWEEKLY = 'biweekly';

    public const UNKNOWN = 'unknown';

    public const NULL = 'null';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MONTHLY,
            self::SEMIMONTHLY,
            self::WEEKLY,
            self::BIWEEKLY,
            self::UNKNOWN,
            self::NULL
        ];
    }
}


