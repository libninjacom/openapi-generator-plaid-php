<?php
/**
 * TransferSweepStatus
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
 * TransferSweepStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the sweep for the transfer. &#x60;unswept&#x60;: The transfer hasn&#39;t been swept yet. &#x60;swept&#x60;: The transfer was swept to the sweep account. &#x60;reverse_swept&#x60;: The transfer was reversed, funds were pulled back or pushed back to the sweep account. &#x60;null&#x60;: The transfer will never be swept (e.g. if the transfer is cancelled or reversed before being swept)
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransferSweepStatus
{
    /**
     * Possible values of this enum
     */
    public const NULL = 'null';

    public const UNSWEPT = 'unswept';

    public const SWEPT = 'swept';

    public const REVERSE_SWEPT = 'reverse_swept';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NULL,
            self::UNSWEPT,
            self::SWEPT,
            self::REVERSE_SWEPT
        ];
    }
}


