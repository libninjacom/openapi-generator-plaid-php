<?php
/**
 * VerificationRefreshStatus
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
 * VerificationRefreshStatus Class Doc Comment
 *
 * @category Class
 * @description The verification refresh status. One of the following:  &#x60;\&quot;VERIFICATION_REFRESH_STATUS_USER_PRESENCE_REQUIRED\&quot;&#x60; User presence is required to refresh an income verification. &#x60;\&quot;VERIFICATION_REFRESH_SUCCESSFUL\&quot;&#x60; The income verification refresh was successful. &#x60;\&quot;VERIFICATION_REFRESH_NOT_FOUND\&quot;&#x60; No new data was found after the income verification refresh.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VerificationRefreshStatus
{
    /**
     * Possible values of this enum
     */
    public const STATUS_USER_PRESENCE_REQUIRED = 'VERIFICATION_REFRESH_STATUS_USER_PRESENCE_REQUIRED';

    public const SUCCESSFUL = 'VERIFICATION_REFRESH_SUCCESSFUL';

    public const NOT_FOUND = 'VERIFICATION_REFRESH_NOT_FOUND';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STATUS_USER_PRESENCE_REQUIRED,
            self::SUCCESSFUL,
            self::NOT_FOUND
        ];
    }
}


