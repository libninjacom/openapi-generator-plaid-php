<?php
/**
 * PaymentInitiationOptionalRestrictionBacs
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
 * PaymentInitiationOptionalRestrictionBacs Class Doc Comment
 *
 * @category Class
 * @description An optional object used to restrict the accounts used for payments. If provided, the end user will be able to send payments only from the specified bank account.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentInitiationOptionalRestrictionBacs implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentInitiationOptionalRestrictionBacs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => 'string',
        'sort_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account' => null,
        'sort_code' => null
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
        'account' => 'account',
        'sort_code' => 'sort_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'sort_code' => 'setSortCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'sort_code' => 'getSortCode'
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
        $this->container['account'] = $data['account'] ?? null;
        $this->container['sort_code'] = $data['sort_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['account']) && (mb_strlen($this->container['account']) > 10)) {
            $invalidProperties[] = "invalid value for 'account', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['account']) && (mb_strlen($this->container['account']) < 1)) {
            $invalidProperties[] = "invalid value for 'account', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sort_code']) && (mb_strlen($this->container['sort_code']) > 6)) {
            $invalidProperties[] = "invalid value for 'sort_code', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['sort_code']) && (mb_strlen($this->container['sort_code']) < 6)) {
            $invalidProperties[] = "invalid value for 'sort_code', the character length must be bigger than or equal to 6.";
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
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account The account number of the account. Maximum of 10 characters.
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (!is_null($account) && (mb_strlen($account) > 10)) {
            throw new \InvalidArgumentException('invalid length for $account when calling PaymentInitiationOptionalRestrictionBacs., must be smaller than or equal to 10.');
        }
        if (!is_null($account) && (mb_strlen($account) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account when calling PaymentInitiationOptionalRestrictionBacs., must be bigger than or equal to 1.');
        }

        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets sort_code
     *
     * @return string|null
     */
    public function getSortCode()
    {
        return $this->container['sort_code'];
    }

    /**
     * Sets sort_code
     *
     * @param string|null $sort_code The 6-character sort code of the account.
     *
     * @return self
     */
    public function setSortCode($sort_code)
    {
        if (!is_null($sort_code) && (mb_strlen($sort_code) > 6)) {
            throw new \InvalidArgumentException('invalid length for $sort_code when calling PaymentInitiationOptionalRestrictionBacs., must be smaller than or equal to 6.');
        }
        if (!is_null($sort_code) && (mb_strlen($sort_code) < 6)) {
            throw new \InvalidArgumentException('invalid length for $sort_code when calling PaymentInitiationOptionalRestrictionBacs., must be bigger than or equal to 6.');
        }

        $this->container['sort_code'] = $sort_code;

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


