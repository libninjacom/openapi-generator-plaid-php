<?php
/**
 * AssetReport
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
 * AssetReport Class Doc Comment
 *
 * @category Class
 * @description An object representing an Asset Report
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AssetReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssetReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset_report_id' => 'string',
        'client_report_id' => 'string',
        'date_generated' => '\DateTime',
        'days_requested' => 'float',
        'user' => '\OpenAPI\Client\Model\AssetReportUser',
        'items' => '\OpenAPI\Client\Model\AssetReportItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asset_report_id' => null,
        'client_report_id' => null,
        'date_generated' => 'date-time',
        'days_requested' => null,
        'user' => null,
        'items' => null
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
        'asset_report_id' => 'asset_report_id',
        'client_report_id' => 'client_report_id',
        'date_generated' => 'date_generated',
        'days_requested' => 'days_requested',
        'user' => 'user',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_report_id' => 'setAssetReportId',
        'client_report_id' => 'setClientReportId',
        'date_generated' => 'setDateGenerated',
        'days_requested' => 'setDaysRequested',
        'user' => 'setUser',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_report_id' => 'getAssetReportId',
        'client_report_id' => 'getClientReportId',
        'date_generated' => 'getDateGenerated',
        'days_requested' => 'getDaysRequested',
        'user' => 'getUser',
        'items' => 'getItems'
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
        $this->container['asset_report_id'] = $data['asset_report_id'] ?? null;
        $this->container['client_report_id'] = $data['client_report_id'] ?? null;
        $this->container['date_generated'] = $data['date_generated'] ?? null;
        $this->container['days_requested'] = $data['days_requested'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asset_report_id'] === null) {
            $invalidProperties[] = "'asset_report_id' can't be null";
        }
        if ($this->container['client_report_id'] === null) {
            $invalidProperties[] = "'client_report_id' can't be null";
        }
        if ($this->container['date_generated'] === null) {
            $invalidProperties[] = "'date_generated' can't be null";
        }
        if ($this->container['days_requested'] === null) {
            $invalidProperties[] = "'days_requested' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets asset_report_id
     *
     * @return string
     */
    public function getAssetReportId()
    {
        return $this->container['asset_report_id'];
    }

    /**
     * Sets asset_report_id
     *
     * @param string $asset_report_id A unique ID identifying an Asset Report. Like all Plaid identifiers, this ID is case sensitive.
     *
     * @return self
     */
    public function setAssetReportId($asset_report_id)
    {
        $this->container['asset_report_id'] = $asset_report_id;

        return $this;
    }

    /**
     * Gets client_report_id
     *
     * @return string
     */
    public function getClientReportId()
    {
        return $this->container['client_report_id'];
    }

    /**
     * Sets client_report_id
     *
     * @param string $client_report_id An identifier you determine and submit for the Asset Report.
     *
     * @return self
     */
    public function setClientReportId($client_report_id)
    {
        $this->container['client_report_id'] = $client_report_id;

        return $this;
    }

    /**
     * Gets date_generated
     *
     * @return \DateTime
     */
    public function getDateGenerated()
    {
        return $this->container['date_generated'];
    }

    /**
     * Sets date_generated
     *
     * @param \DateTime $date_generated The date and time when the Asset Report was created, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) format (e.g. \"2018-04-12T03:32:11Z\").
     *
     * @return self
     */
    public function setDateGenerated($date_generated)
    {
        $this->container['date_generated'] = $date_generated;

        return $this;
    }

    /**
     * Gets days_requested
     *
     * @return float
     */
    public function getDaysRequested()
    {
        return $this->container['days_requested'];
    }

    /**
     * Sets days_requested
     *
     * @param float $days_requested The duration of transaction history you requested
     *
     * @return self
     */
    public function setDaysRequested($days_requested)
    {
        $this->container['days_requested'] = $days_requested;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\AssetReportUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\AssetReportUser $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\AssetReportItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\AssetReportItem[] $items Data returned by Plaid about each of the Items included in the Asset Report.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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

