<?php
/**
 * InstitutionsSearchRequestOptions
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * InstitutionsSearchRequestOptions Class Doc Comment
 *
 * @category Class
 * @description An optional object to filter &#x60;/institutions/search&#x60; results.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InstitutionsSearchRequestOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InstitutionsSearchRequestOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'oauth' => 'bool',
        'include_optional_metadata' => 'bool',
        'include_auth_metadata' => 'bool',
        'include_payment_initiation_metadata' => 'bool',
        'payment_initiation' => '\OpenAPI\Client\Model\InstitutionsSearchPaymentInitiationOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'oauth' => null,
        'include_optional_metadata' => null,
        'include_auth_metadata' => null,
        'include_payment_initiation_metadata' => null,
        'payment_initiation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'oauth' => 'oauth',
        'include_optional_metadata' => 'include_optional_metadata',
        'include_auth_metadata' => 'include_auth_metadata',
        'include_payment_initiation_metadata' => 'include_payment_initiation_metadata',
        'payment_initiation' => 'payment_initiation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oauth' => 'setOauth',
        'include_optional_metadata' => 'setIncludeOptionalMetadata',
        'include_auth_metadata' => 'setIncludeAuthMetadata',
        'include_payment_initiation_metadata' => 'setIncludePaymentInitiationMetadata',
        'payment_initiation' => 'setPaymentInitiation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oauth' => 'getOauth',
        'include_optional_metadata' => 'getIncludeOptionalMetadata',
        'include_auth_metadata' => 'getIncludeAuthMetadata',
        'include_payment_initiation_metadata' => 'getIncludePaymentInitiationMetadata',
        'payment_initiation' => 'getPaymentInitiation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['oauth'] = $data['oauth'] ?? null;
        $this->container['include_optional_metadata'] = $data['include_optional_metadata'] ?? null;
        $this->container['include_auth_metadata'] = $data['include_auth_metadata'] ?? false;
        $this->container['include_payment_initiation_metadata'] = $data['include_payment_initiation_metadata'] ?? false;
        $this->container['payment_initiation'] = $data['payment_initiation'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets oauth
     *
     * @return bool|null
     */
    public function getOauth()
    {
        return $this->container['oauth'];
    }

    /**
     * Sets oauth
     *
     * @param bool|null $oauth Limit results to institutions with or without OAuth login flows.
     *
     * @return self
     */
    public function setOauth($oauth)
    {
        $this->container['oauth'] = $oauth;

        return $this;
    }

    /**
     * Gets include_optional_metadata
     *
     * @return bool|null
     */
    public function getIncludeOptionalMetadata()
    {
        return $this->container['include_optional_metadata'];
    }

    /**
     * Sets include_optional_metadata
     *
     * @param bool|null $include_optional_metadata When true, return the institution's homepage URL, logo and primary brand color.
     *
     * @return self
     */
    public function setIncludeOptionalMetadata($include_optional_metadata)
    {
        $this->container['include_optional_metadata'] = $include_optional_metadata;

        return $this;
    }

    /**
     * Gets include_auth_metadata
     *
     * @return bool|null
     */
    public function getIncludeAuthMetadata()
    {
        return $this->container['include_auth_metadata'];
    }

    /**
     * Sets include_auth_metadata
     *
     * @param bool|null $include_auth_metadata When `true`, returns metadata related to the Auth product indicating which auth methods are supported.
     *
     * @return self
     */
    public function setIncludeAuthMetadata($include_auth_metadata)
    {
        $this->container['include_auth_metadata'] = $include_auth_metadata;

        return $this;
    }

    /**
     * Gets include_payment_initiation_metadata
     *
     * @return bool|null
     */
    public function getIncludePaymentInitiationMetadata()
    {
        return $this->container['include_payment_initiation_metadata'];
    }

    /**
     * Sets include_payment_initiation_metadata
     *
     * @param bool|null $include_payment_initiation_metadata When `true`, returns metadata related to the Payment Initiation product indicating which payment configurations are supported.
     *
     * @return self
     */
    public function setIncludePaymentInitiationMetadata($include_payment_initiation_metadata)
    {
        $this->container['include_payment_initiation_metadata'] = $include_payment_initiation_metadata;

        return $this;
    }

    /**
     * Gets payment_initiation
     *
     * @return \OpenAPI\Client\Model\InstitutionsSearchPaymentInitiationOptions|null
     */
    public function getPaymentInitiation()
    {
        return $this->container['payment_initiation'];
    }

    /**
     * Sets payment_initiation
     *
     * @param \OpenAPI\Client\Model\InstitutionsSearchPaymentInitiationOptions|null $payment_initiation payment_initiation
     *
     * @return self
     */
    public function setPaymentInitiation($payment_initiation)
    {
        $this->container['payment_initiation'] = $payment_initiation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


