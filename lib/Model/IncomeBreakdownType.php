<?php
/**
 * IncomeBreakdownType
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
 * IncomeBreakdownType Class Doc Comment
 *
 * @category Class
 * @description The type of income. Possible values include:   &#x60;\&quot;regular\&quot;&#x60;: regular income   &#x60;\&quot;overtime\&quot;&#x60;: overtime income   &#x60;\&quot;bonus\&quot;&#x60;: bonus income
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IncomeBreakdownType
{
    /**
     * Possible values of this enum
     */
    public const BONUS = 'bonus';

    public const OVERTIME = 'overtime';

    public const REGULAR = 'regular';

    public const NULL = 'null';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BONUS,
            self::OVERTIME,
            self::REGULAR,
            self::NULL
        ];
    }
}


