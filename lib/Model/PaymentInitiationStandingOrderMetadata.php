<?php
/**
 * PaymentInitiationStandingOrderMetadata
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
 * PaymentInitiationStandingOrderMetadata Class Doc Comment
 *
 * @category Class
 * @description Metadata specifically related to valid Payment Initiation standing order configurations for the institution.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentInitiationStandingOrderMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentInitiationStandingOrderMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'supports_standing_order_end_date' => 'bool',
        'supports_standing_order_negative_execution_days' => 'bool',
        'valid_standing_order_intervals' => '\OpenAPI\Client\Model\PaymentScheduleInterval[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'supports_standing_order_end_date' => null,
        'supports_standing_order_negative_execution_days' => null,
        'valid_standing_order_intervals' => null
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
        'supports_standing_order_end_date' => 'supports_standing_order_end_date',
        'supports_standing_order_negative_execution_days' => 'supports_standing_order_negative_execution_days',
        'valid_standing_order_intervals' => 'valid_standing_order_intervals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supports_standing_order_end_date' => 'setSupportsStandingOrderEndDate',
        'supports_standing_order_negative_execution_days' => 'setSupportsStandingOrderNegativeExecutionDays',
        'valid_standing_order_intervals' => 'setValidStandingOrderIntervals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supports_standing_order_end_date' => 'getSupportsStandingOrderEndDate',
        'supports_standing_order_negative_execution_days' => 'getSupportsStandingOrderNegativeExecutionDays',
        'valid_standing_order_intervals' => 'getValidStandingOrderIntervals'
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
        $this->container['supports_standing_order_end_date'] = $data['supports_standing_order_end_date'] ?? null;
        $this->container['supports_standing_order_negative_execution_days'] = $data['supports_standing_order_negative_execution_days'] ?? null;
        $this->container['valid_standing_order_intervals'] = $data['valid_standing_order_intervals'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['supports_standing_order_end_date'] === null) {
            $invalidProperties[] = "'supports_standing_order_end_date' can't be null";
        }
        if ($this->container['supports_standing_order_negative_execution_days'] === null) {
            $invalidProperties[] = "'supports_standing_order_negative_execution_days' can't be null";
        }
        if ($this->container['valid_standing_order_intervals'] === null) {
            $invalidProperties[] = "'valid_standing_order_intervals' can't be null";
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
     * Gets supports_standing_order_end_date
     *
     * @return bool
     */
    public function getSupportsStandingOrderEndDate()
    {
        return $this->container['supports_standing_order_end_date'];
    }

    /**
     * Sets supports_standing_order_end_date
     *
     * @param bool $supports_standing_order_end_date Indicates whether the institution supports closed-ended standing orders by providing an end date.
     *
     * @return self
     */
    public function setSupportsStandingOrderEndDate($supports_standing_order_end_date)
    {
        $this->container['supports_standing_order_end_date'] = $supports_standing_order_end_date;

        return $this;
    }

    /**
     * Gets supports_standing_order_negative_execution_days
     *
     * @return bool
     */
    public function getSupportsStandingOrderNegativeExecutionDays()
    {
        return $this->container['supports_standing_order_negative_execution_days'];
    }

    /**
     * Sets supports_standing_order_negative_execution_days
     *
     * @param bool $supports_standing_order_negative_execution_days This is only applicable to `MONTHLY` standing orders. Indicates whether the institution supports negative integers (-1 to -5) for setting up a `MONTHLY` standing order relative to the end of the month.
     *
     * @return self
     */
    public function setSupportsStandingOrderNegativeExecutionDays($supports_standing_order_negative_execution_days)
    {
        $this->container['supports_standing_order_negative_execution_days'] = $supports_standing_order_negative_execution_days;

        return $this;
    }

    /**
     * Gets valid_standing_order_intervals
     *
     * @return \OpenAPI\Client\Model\PaymentScheduleInterval[]
     */
    public function getValidStandingOrderIntervals()
    {
        return $this->container['valid_standing_order_intervals'];
    }

    /**
     * Sets valid_standing_order_intervals
     *
     * @param \OpenAPI\Client\Model\PaymentScheduleInterval[] $valid_standing_order_intervals A list of the valid standing order intervals supported by the institution.
     *
     * @return self
     */
    public function setValidStandingOrderIntervals($valid_standing_order_intervals)
    {
        $this->container['valid_standing_order_intervals'] = $valid_standing_order_intervals;

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


