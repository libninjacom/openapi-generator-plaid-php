<?php
/**
 * HistoricalUpdateWebhook
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
 * HistoricalUpdateWebhook Class Doc Comment
 *
 * @category Class
 * @description Fired when an Item&#39;s historical transaction pull is completed and Plaid has prepared as much historical transaction data as possible for the Item. Once this webhook has been fired, transaction data beyond the most recent 30 days can be fetched for the Item. If [Account Select v2](https://plaid.com/docs/link/customization/#account-select) is enabled, this webhook will also be fired if account selections for the Item are updated, with &#x60;new_transactions&#x60; set to the number of net new transactions pulled after the account selection update.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class HistoricalUpdateWebhook implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HistoricalUpdateWebhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'webhook_type' => 'string',
        'webhook_code' => 'string',
        'error' => '\OpenAPI\Client\Model\PlaidError',
        'new_transactions' => 'float',
        'item_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'webhook_type' => null,
        'webhook_code' => null,
        'error' => null,
        'new_transactions' => null,
        'item_id' => null
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
        'webhook_type' => 'webhook_type',
        'webhook_code' => 'webhook_code',
        'error' => 'error',
        'new_transactions' => 'new_transactions',
        'item_id' => 'item_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webhook_type' => 'setWebhookType',
        'webhook_code' => 'setWebhookCode',
        'error' => 'setError',
        'new_transactions' => 'setNewTransactions',
        'item_id' => 'setItemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webhook_type' => 'getWebhookType',
        'webhook_code' => 'getWebhookCode',
        'error' => 'getError',
        'new_transactions' => 'getNewTransactions',
        'item_id' => 'getItemId'
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
        $this->container['webhook_type'] = $data['webhook_type'] ?? null;
        $this->container['webhook_code'] = $data['webhook_code'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
        $this->container['new_transactions'] = $data['new_transactions'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['webhook_type'] === null) {
            $invalidProperties[] = "'webhook_type' can't be null";
        }
        if ($this->container['webhook_code'] === null) {
            $invalidProperties[] = "'webhook_code' can't be null";
        }
        if ($this->container['new_transactions'] === null) {
            $invalidProperties[] = "'new_transactions' can't be null";
        }
        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
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
     * Gets webhook_type
     *
     * @return string
     */
    public function getWebhookType()
    {
        return $this->container['webhook_type'];
    }

    /**
     * Sets webhook_type
     *
     * @param string $webhook_type `TRANSACTIONS`
     *
     * @return self
     */
    public function setWebhookType($webhook_type)
    {
        $this->container['webhook_type'] = $webhook_type;

        return $this;
    }

    /**
     * Gets webhook_code
     *
     * @return string
     */
    public function getWebhookCode()
    {
        return $this->container['webhook_code'];
    }

    /**
     * Sets webhook_code
     *
     * @param string $webhook_code `HISTORICAL_UPDATE`
     *
     * @return self
     */
    public function setWebhookCode($webhook_code)
    {
        $this->container['webhook_code'] = $webhook_code;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \OpenAPI\Client\Model\PlaidError|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \OpenAPI\Client\Model\PlaidError|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets new_transactions
     *
     * @return float
     */
    public function getNewTransactions()
    {
        return $this->container['new_transactions'];
    }

    /**
     * Sets new_transactions
     *
     * @param float $new_transactions The number of new, unfetched transactions available
     *
     * @return self
     */
    public function setNewTransactions($new_transactions)
    {
        $this->container['new_transactions'] = $new_transactions;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id The `item_id` of the Item associated with this webhook, warning, or error
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

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


