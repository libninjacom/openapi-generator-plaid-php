<?php
/**
 * AuthSupportedMethods
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
 * AuthSupportedMethods Class Doc Comment
 *
 * @category Class
 * @description Metadata specifically related to which auth methods an institution supports.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AuthSupportedMethods implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthSupportedMethods';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instant_auth' => 'bool',
        'instant_match' => 'bool',
        'automated_micro_deposits' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instant_auth' => null,
        'instant_match' => null,
        'automated_micro_deposits' => null
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
        'instant_auth' => 'instant_auth',
        'instant_match' => 'instant_match',
        'automated_micro_deposits' => 'automated_micro_deposits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instant_auth' => 'setInstantAuth',
        'instant_match' => 'setInstantMatch',
        'automated_micro_deposits' => 'setAutomatedMicroDeposits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instant_auth' => 'getInstantAuth',
        'instant_match' => 'getInstantMatch',
        'automated_micro_deposits' => 'getAutomatedMicroDeposits'
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
        $this->container['instant_auth'] = $data['instant_auth'] ?? null;
        $this->container['instant_match'] = $data['instant_match'] ?? null;
        $this->container['automated_micro_deposits'] = $data['automated_micro_deposits'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['instant_auth'] === null) {
            $invalidProperties[] = "'instant_auth' can't be null";
        }
        if ($this->container['instant_match'] === null) {
            $invalidProperties[] = "'instant_match' can't be null";
        }
        if ($this->container['automated_micro_deposits'] === null) {
            $invalidProperties[] = "'automated_micro_deposits' can't be null";
        }
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
     * Gets instant_auth
     *
     * @return bool
     */
    public function getInstantAuth()
    {
        return $this->container['instant_auth'];
    }

    /**
     * Sets instant_auth
     *
     * @param bool $instant_auth Indicates if instant auth is supported.
     *
     * @return self
     */
    public function setInstantAuth($instant_auth)
    {
        $this->container['instant_auth'] = $instant_auth;

        return $this;
    }

    /**
     * Gets instant_match
     *
     * @return bool
     */
    public function getInstantMatch()
    {
        return $this->container['instant_match'];
    }

    /**
     * Sets instant_match
     *
     * @param bool $instant_match Indicates if instant match is supported.
     *
     * @return self
     */
    public function setInstantMatch($instant_match)
    {
        $this->container['instant_match'] = $instant_match;

        return $this;
    }

    /**
     * Gets automated_micro_deposits
     *
     * @return bool
     */
    public function getAutomatedMicroDeposits()
    {
        return $this->container['automated_micro_deposits'];
    }

    /**
     * Sets automated_micro_deposits
     *
     * @param bool $automated_micro_deposits Indicates if automated microdeposits are supported.
     *
     * @return self
     */
    public function setAutomatedMicroDeposits($automated_micro_deposits)
    {
        $this->container['automated_micro_deposits'] = $automated_micro_deposits;

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


