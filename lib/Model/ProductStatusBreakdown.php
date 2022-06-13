<?php
/**
 * ProductStatusBreakdown
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
 * ProductStatusBreakdown Class Doc Comment
 *
 * @category Class
 * @description A detailed breakdown of the institution&#39;s performance for a request type. The values for &#x60;success&#x60;, &#x60;error_plaid&#x60;, and &#x60;error_institution&#x60; sum to 1.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductStatusBreakdown implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductStatusBreakdown';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'success' => 'float',
        'error_plaid' => 'float',
        'error_institution' => 'float',
        'refresh_interval' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'success' => null,
        'error_plaid' => null,
        'error_institution' => null,
        'refresh_interval' => null
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
        'success' => 'success',
        'error_plaid' => 'error_plaid',
        'error_institution' => 'error_institution',
        'refresh_interval' => 'refresh_interval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'success' => 'setSuccess',
        'error_plaid' => 'setErrorPlaid',
        'error_institution' => 'setErrorInstitution',
        'refresh_interval' => 'setRefreshInterval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'success' => 'getSuccess',
        'error_plaid' => 'getErrorPlaid',
        'error_institution' => 'getErrorInstitution',
        'refresh_interval' => 'getRefreshInterval'
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

    public const REFRESH_INTERVAL_NORMAL = 'NORMAL';
    public const REFRESH_INTERVAL_DELAYED = 'DELAYED';
    public const REFRESH_INTERVAL_STOPPED = 'STOPPED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefreshIntervalAllowableValues()
    {
        return [
            self::REFRESH_INTERVAL_NORMAL,
            self::REFRESH_INTERVAL_DELAYED,
            self::REFRESH_INTERVAL_STOPPED,
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
        $this->container['success'] = $data['success'] ?? null;
        $this->container['error_plaid'] = $data['error_plaid'] ?? null;
        $this->container['error_institution'] = $data['error_institution'] ?? null;
        $this->container['refresh_interval'] = $data['refresh_interval'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['success'] === null) {
            $invalidProperties[] = "'success' can't be null";
        }
        if ($this->container['error_plaid'] === null) {
            $invalidProperties[] = "'error_plaid' can't be null";
        }
        if ($this->container['error_institution'] === null) {
            $invalidProperties[] = "'error_institution' can't be null";
        }
        $allowedValues = $this->getRefreshIntervalAllowableValues();
        if (!is_null($this->container['refresh_interval']) && !in_array($this->container['refresh_interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refresh_interval', must be one of '%s'",
                $this->container['refresh_interval'],
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
     * Gets success
     *
     * @return float
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param float $success The percentage of login attempts that are successful, expressed as a decimal.
     *
     * @return self
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets error_plaid
     *
     * @return float
     */
    public function getErrorPlaid()
    {
        return $this->container['error_plaid'];
    }

    /**
     * Sets error_plaid
     *
     * @param float $error_plaid The percentage of logins that are failing due to an internal Plaid issue, expressed as a decimal.
     *
     * @return self
     */
    public function setErrorPlaid($error_plaid)
    {
        $this->container['error_plaid'] = $error_plaid;

        return $this;
    }

    /**
     * Gets error_institution
     *
     * @return float
     */
    public function getErrorInstitution()
    {
        return $this->container['error_institution'];
    }

    /**
     * Sets error_institution
     *
     * @param float $error_institution The percentage of logins that are failing due to an issue in the institution's system, expressed as a decimal.
     *
     * @return self
     */
    public function setErrorInstitution($error_institution)
    {
        $this->container['error_institution'] = $error_institution;

        return $this;
    }

    /**
     * Gets refresh_interval
     *
     * @return string|null
     */
    public function getRefreshInterval()
    {
        return $this->container['refresh_interval'];
    }

    /**
     * Sets refresh_interval
     *
     * @param string|null $refresh_interval The `refresh_interval` may be `DELAYED` or `STOPPED` even when the success rate is high. This value is only returned for Transactions status breakdowns.
     *
     * @return self
     */
    public function setRefreshInterval($refresh_interval)
    {
        $allowedValues = $this->getRefreshIntervalAllowableValues();
        if (!is_null($refresh_interval) && !in_array($refresh_interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refresh_interval', must be one of '%s'",
                    $refresh_interval,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refresh_interval'] = $refresh_interval;

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

