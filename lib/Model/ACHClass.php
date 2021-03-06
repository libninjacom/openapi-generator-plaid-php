<?php
/**
 * ACHClass
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
 * ACHClass Class Doc Comment
 *
 * @category Class
 * @description Specifies the use case of the transfer.  Required for transfers on an ACH network. In Sandbox, only &#x60;ccd&#x60;, &#x60;ppd&#x60;, or &#x60;web&#x60; can be used.  &#x60;\&quot;arc\&quot;&#x60; - Accounts Receivable Entry  &#x60;\&quot;cbr&#x60;\&quot; - Cross Border Entry  &#x60;\&quot;ccd\&quot;&#x60; - Corporate Credit or Debit - fund transfer between two corporate bank accounts  &#x60;\&quot;cie\&quot;&#x60; - Customer Initiated Entry  &#x60;\&quot;cor\&quot;&#x60; - Automated Notification of Change  &#x60;\&quot;ctx\&quot;&#x60; - Corporate Trade Exchange  &#x60;\&quot;iat\&quot;&#x60; - International  &#x60;\&quot;mte\&quot;&#x60; - Machine Transfer Entry  &#x60;\&quot;pbr\&quot;&#x60; - Cross Border Entry  &#x60;\&quot;pop\&quot;&#x60; - Point-of-Purchase Entry  &#x60;\&quot;pos\&quot;&#x60; - Point-of-Sale Entry  &#x60;\&quot;ppd\&quot;&#x60; - Prearranged Payment or Deposit - the transfer is part of a pre-existing relationship with a consumer, eg. bill payment  &#x60;\&quot;rck\&quot;&#x60; - Re-presented Check Entry  &#x60;\&quot;tel\&quot;&#x60; - Telephone-Initiated Entry  &#x60;\&quot;web\&quot;&#x60; - Internet-Initiated Entry - debits from a consumer’s account where their authorization is obtained over the Internet
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ACHClass
{
    /**
     * Possible values of this enum
     */
    public const ARC = 'arc';

    public const CBR = 'cbr';

    public const CCD = 'ccd';

    public const CIE = 'cie';

    public const COR = 'cor';

    public const CTX = 'ctx';

    public const IAT = 'iat';

    public const MTE = 'mte';

    public const PBR = 'pbr';

    public const POP = 'pop';

    public const POS = 'pos';

    public const PPD = 'ppd';

    public const RCK = 'rck';

    public const TEL = 'tel';

    public const WEB = 'web';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ARC,
            self::CBR,
            self::CCD,
            self::CIE,
            self::COR,
            self::CTX,
            self::IAT,
            self::MTE,
            self::PBR,
            self::POP,
            self::POS,
            self::PPD,
            self::RCK,
            self::TEL,
            self::WEB
        ];
    }
}


