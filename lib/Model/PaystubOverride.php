<?php
/**
 * PaystubOverride
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
 * PaystubOverride Class Doc Comment
 *
 * @category Class
 * @description An object representing data from a paystub.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaystubOverride implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaystubOverride';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employer' => '\OpenAPI\Client\Model\PaystubOverrideEmployer',
        'employee' => '\OpenAPI\Client\Model\PaystubOverrideEmployee',
        'income_breakdown' => '\OpenAPI\Client\Model\IncomeBreakdown[]',
        'pay_period_details' => '\OpenAPI\Client\Model\PayPeriodDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employer' => null,
        'employee' => null,
        'income_breakdown' => null,
        'pay_period_details' => null
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
        'employer' => 'employer',
        'employee' => 'employee',
        'income_breakdown' => 'income_breakdown',
        'pay_period_details' => 'pay_period_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employer' => 'setEmployer',
        'employee' => 'setEmployee',
        'income_breakdown' => 'setIncomeBreakdown',
        'pay_period_details' => 'setPayPeriodDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employer' => 'getEmployer',
        'employee' => 'getEmployee',
        'income_breakdown' => 'getIncomeBreakdown',
        'pay_period_details' => 'getPayPeriodDetails'
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
        $this->container['employer'] = $data['employer'] ?? null;
        $this->container['employee'] = $data['employee'] ?? null;
        $this->container['income_breakdown'] = $data['income_breakdown'] ?? null;
        $this->container['pay_period_details'] = $data['pay_period_details'] ?? null;
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
     * Gets employer
     *
     * @return \OpenAPI\Client\Model\PaystubOverrideEmployer|null
     */
    public function getEmployer()
    {
        return $this->container['employer'];
    }

    /**
     * Sets employer
     *
     * @param \OpenAPI\Client\Model\PaystubOverrideEmployer|null $employer employer
     *
     * @return self
     */
    public function setEmployer($employer)
    {
        $this->container['employer'] = $employer;

        return $this;
    }

    /**
     * Gets employee
     *
     * @return \OpenAPI\Client\Model\PaystubOverrideEmployee|null
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \OpenAPI\Client\Model\PaystubOverrideEmployee|null $employee employee
     *
     * @return self
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets income_breakdown
     *
     * @return \OpenAPI\Client\Model\IncomeBreakdown[]|null
     */
    public function getIncomeBreakdown()
    {
        return $this->container['income_breakdown'];
    }

    /**
     * Sets income_breakdown
     *
     * @param \OpenAPI\Client\Model\IncomeBreakdown[]|null $income_breakdown income_breakdown
     *
     * @return self
     */
    public function setIncomeBreakdown($income_breakdown)
    {
        $this->container['income_breakdown'] = $income_breakdown;

        return $this;
    }

    /**
     * Gets pay_period_details
     *
     * @return \OpenAPI\Client\Model\PayPeriodDetails|null
     */
    public function getPayPeriodDetails()
    {
        return $this->container['pay_period_details'];
    }

    /**
     * Sets pay_period_details
     *
     * @param \OpenAPI\Client\Model\PayPeriodDetails|null $pay_period_details pay_period_details
     *
     * @return self
     */
    public function setPayPeriodDetails($pay_period_details)
    {
        $this->container['pay_period_details'] = $pay_period_details;

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


