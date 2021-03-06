<?php
/**
 * PayPeriodDetails
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
 * PayPeriodDetails Class Doc Comment
 *
 * @category Class
 * @description Details about the pay period.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PayPeriodDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayPeriodDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'check_amount' => 'float',
        'distribution_breakdown' => '\OpenAPI\Client\Model\DistributionBreakdown[]',
        'end_date' => '\DateTime',
        'gross_earnings' => 'float',
        'pay_date' => '\DateTime',
        'pay_frequency' => 'string',
        'pay_day' => '\DateTime',
        'start_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'check_amount' => null,
        'distribution_breakdown' => null,
        'end_date' => 'date',
        'gross_earnings' => null,
        'pay_date' => 'date',
        'pay_frequency' => null,
        'pay_day' => 'date',
        'start_date' => 'date'
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
        'check_amount' => 'check_amount',
        'distribution_breakdown' => 'distribution_breakdown',
        'end_date' => 'end_date',
        'gross_earnings' => 'gross_earnings',
        'pay_date' => 'pay_date',
        'pay_frequency' => 'pay_frequency',
        'pay_day' => 'pay_day',
        'start_date' => 'start_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'check_amount' => 'setCheckAmount',
        'distribution_breakdown' => 'setDistributionBreakdown',
        'end_date' => 'setEndDate',
        'gross_earnings' => 'setGrossEarnings',
        'pay_date' => 'setPayDate',
        'pay_frequency' => 'setPayFrequency',
        'pay_day' => 'setPayDay',
        'start_date' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'check_amount' => 'getCheckAmount',
        'distribution_breakdown' => 'getDistributionBreakdown',
        'end_date' => 'getEndDate',
        'gross_earnings' => 'getGrossEarnings',
        'pay_date' => 'getPayDate',
        'pay_frequency' => 'getPayFrequency',
        'pay_day' => 'getPayDay',
        'start_date' => 'getStartDate'
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

    public const PAY_FREQUENCY_PAY_FREQUENCY_UNKNOWN = 'PAY_FREQUENCY_UNKNOWN';
    public const PAY_FREQUENCY_PAY_FREQUENCY_WEEKLY = 'PAY_FREQUENCY_WEEKLY';
    public const PAY_FREQUENCY_PAY_FREQUENCY_BIWEEKLY = 'PAY_FREQUENCY_BIWEEKLY';
    public const PAY_FREQUENCY_PAY_FREQUENCY_SEMIMONTHLY = 'PAY_FREQUENCY_SEMIMONTHLY';
    public const PAY_FREQUENCY_PAY_FREQUENCY_MONTHLY = 'PAY_FREQUENCY_MONTHLY';
    public const PAY_FREQUENCY_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayFrequencyAllowableValues()
    {
        return [
            self::PAY_FREQUENCY_PAY_FREQUENCY_UNKNOWN,
            self::PAY_FREQUENCY_PAY_FREQUENCY_WEEKLY,
            self::PAY_FREQUENCY_PAY_FREQUENCY_BIWEEKLY,
            self::PAY_FREQUENCY_PAY_FREQUENCY_SEMIMONTHLY,
            self::PAY_FREQUENCY_PAY_FREQUENCY_MONTHLY,
            self::PAY_FREQUENCY_NULL,
        ];
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
        $this->container['check_amount'] = $data['check_amount'] ?? null;
        $this->container['distribution_breakdown'] = $data['distribution_breakdown'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['gross_earnings'] = $data['gross_earnings'] ?? null;
        $this->container['pay_date'] = $data['pay_date'] ?? null;
        $this->container['pay_frequency'] = $data['pay_frequency'] ?? null;
        $this->container['pay_day'] = $data['pay_day'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPayFrequencyAllowableValues();
        if (!is_null($this->container['pay_frequency']) && !in_array($this->container['pay_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pay_frequency', must be one of '%s'",
                $this->container['pay_frequency'],
                implode("', '", $allowedValues)
            );
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
     * Gets check_amount
     *
     * @return float|null
     */
    public function getCheckAmount()
    {
        return $this->container['check_amount'];
    }

    /**
     * Sets check_amount
     *
     * @param float|null $check_amount The amount of the paycheck.
     *
     * @return self
     */
    public function setCheckAmount($check_amount)
    {
        $this->container['check_amount'] = $check_amount;

        return $this;
    }

    /**
     * Gets distribution_breakdown
     *
     * @return \OpenAPI\Client\Model\DistributionBreakdown[]|null
     */
    public function getDistributionBreakdown()
    {
        return $this->container['distribution_breakdown'];
    }

    /**
     * Sets distribution_breakdown
     *
     * @param \OpenAPI\Client\Model\DistributionBreakdown[]|null $distribution_breakdown distribution_breakdown
     *
     * @return self
     */
    public function setDistributionBreakdown($distribution_breakdown)
    {
        $this->container['distribution_breakdown'] = $distribution_breakdown;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date The pay period end date, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format: \"yyyy-mm-dd\".
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets gross_earnings
     *
     * @return float|null
     */
    public function getGrossEarnings()
    {
        return $this->container['gross_earnings'];
    }

    /**
     * Sets gross_earnings
     *
     * @param float|null $gross_earnings Total earnings before tax/deductions.
     *
     * @return self
     */
    public function setGrossEarnings($gross_earnings)
    {
        $this->container['gross_earnings'] = $gross_earnings;

        return $this;
    }

    /**
     * Gets pay_date
     *
     * @return \DateTime|null
     */
    public function getPayDate()
    {
        return $this->container['pay_date'];
    }

    /**
     * Sets pay_date
     *
     * @param \DateTime|null $pay_date The date on which the paystub was issued, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (\"yyyy-mm-dd\").
     *
     * @return self
     */
    public function setPayDate($pay_date)
    {
        $this->container['pay_date'] = $pay_date;

        return $this;
    }

    /**
     * Gets pay_frequency
     *
     * @return string|null
     */
    public function getPayFrequency()
    {
        return $this->container['pay_frequency'];
    }

    /**
     * Sets pay_frequency
     *
     * @param string|null $pay_frequency The frequency at which an individual is paid.
     *
     * @return self
     */
    public function setPayFrequency($pay_frequency)
    {
        $allowedValues = $this->getPayFrequencyAllowableValues();
        if (!is_null($pay_frequency) && !in_array($pay_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pay_frequency', must be one of '%s'",
                    $pay_frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pay_frequency'] = $pay_frequency;

        return $this;
    }

    /**
     * Gets pay_day
     *
     * @return \DateTime|null
     * @deprecated
     */
    public function getPayDay()
    {
        return $this->container['pay_day'];
    }

    /**
     * Sets pay_day
     *
     * @param \DateTime|null $pay_day The date on which the paystub was issued, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (\"yyyy-mm-dd\").
     *
     * @return self
     * @deprecated
     */
    public function setPayDay($pay_day)
    {
        $this->container['pay_day'] = $pay_day;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date The pay period start date, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format: \"yyyy-mm-dd\".
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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


