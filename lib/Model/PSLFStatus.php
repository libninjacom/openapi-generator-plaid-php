<?php
/**
 * PSLFStatus
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
 * PSLFStatus Class Doc Comment
 *
 * @category Class
 * @description Information about the student&#39;s eligibility in the Public Service Loan Forgiveness program. This is only returned if the institution is Fedloan (&#x60;ins_116527&#x60;).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PSLFStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PSLFStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'estimated_eligibility_date' => '\DateTime',
        'payments_made' => 'float',
        'payments_remaining' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'estimated_eligibility_date' => 'date',
        'payments_made' => null,
        'payments_remaining' => null
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
        'estimated_eligibility_date' => 'estimated_eligibility_date',
        'payments_made' => 'payments_made',
        'payments_remaining' => 'payments_remaining'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'estimated_eligibility_date' => 'setEstimatedEligibilityDate',
        'payments_made' => 'setPaymentsMade',
        'payments_remaining' => 'setPaymentsRemaining'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'estimated_eligibility_date' => 'getEstimatedEligibilityDate',
        'payments_made' => 'getPaymentsMade',
        'payments_remaining' => 'getPaymentsRemaining'
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
        $this->container['estimated_eligibility_date'] = $data['estimated_eligibility_date'] ?? null;
        $this->container['payments_made'] = $data['payments_made'] ?? null;
        $this->container['payments_remaining'] = $data['payments_remaining'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['estimated_eligibility_date'] === null) {
            $invalidProperties[] = "'estimated_eligibility_date' can't be null";
        }
        if ($this->container['payments_made'] === null) {
            $invalidProperties[] = "'payments_made' can't be null";
        }
        if ($this->container['payments_remaining'] === null) {
            $invalidProperties[] = "'payments_remaining' can't be null";
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
     * Gets estimated_eligibility_date
     *
     * @return \DateTime
     */
    public function getEstimatedEligibilityDate()
    {
        return $this->container['estimated_eligibility_date'];
    }

    /**
     * Sets estimated_eligibility_date
     *
     * @param \DateTime $estimated_eligibility_date The estimated date borrower will have completed 120 qualifying monthly payments. Returned in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (YYYY-MM-DD).
     *
     * @return self
     */
    public function setEstimatedEligibilityDate($estimated_eligibility_date)
    {
        $this->container['estimated_eligibility_date'] = $estimated_eligibility_date;

        return $this;
    }

    /**
     * Gets payments_made
     *
     * @return float
     */
    public function getPaymentsMade()
    {
        return $this->container['payments_made'];
    }

    /**
     * Sets payments_made
     *
     * @param float $payments_made The number of qualifying payments that have been made.
     *
     * @return self
     */
    public function setPaymentsMade($payments_made)
    {
        $this->container['payments_made'] = $payments_made;

        return $this;
    }

    /**
     * Gets payments_remaining
     *
     * @return float
     */
    public function getPaymentsRemaining()
    {
        return $this->container['payments_remaining'];
    }

    /**
     * Sets payments_remaining
     *
     * @param float $payments_remaining The number of qualifying payments remaining.
     *
     * @return self
     */
    public function setPaymentsRemaining($payments_remaining)
    {
        $this->container['payments_remaining'] = $payments_remaining;

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


