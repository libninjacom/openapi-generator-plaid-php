<?php
/**
 * PaystubPayFrequency
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
 * PaystubPayFrequency Class Doc Comment
 *
 * @category Class
 * @description The frequency at which the employee is paid. Possible values: &#x60;MONTHLY&#x60;, &#x60;BI-WEEKLY&#x60;, &#x60;WEEKLY&#x60;, &#x60;SEMI-MONTHLY&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaystubPayFrequency
{
    /**
     * Possible values of this enum
     */
    public const MONTHLY = 'MONTHLY';

    public const BI_WEEKLY = 'BI-WEEKLY';

    public const WEEKLY = 'WEEKLY';

    public const SEMI_MONTHLY = 'SEMI-MONTHLY';

    public const NULL = 'null';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MONTHLY,
            self::BI_WEEKLY,
            self::WEEKLY,
            self::SEMI_MONTHLY,
            self::NULL
        ];
    }
}


