<?php
/**
 * StandaloneInvestmentTransactionType
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
 * StandaloneInvestmentTransactionType Class Doc Comment
 *
 * @category Class
 * @description Valid values for investment transaction types and subtypes. Note that transactions representing inflow of cash will appear as negative amounts, outflow of cash will appear as positive amounts.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StandaloneInvestmentTransactionType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandaloneInvestmentTransactionType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buy' => 'string',
        'sell' => 'string',
        'cancel' => 'string',
        'cash' => 'string',
        'fee' => 'string',
        'transfer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buy' => null,
        'sell' => null,
        'cancel' => null,
        'cash' => null,
        'fee' => null,
        'transfer' => null
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
        'buy' => 'buy',
        'sell' => 'sell',
        'cancel' => 'cancel',
        'cash' => 'cash',
        'fee' => 'fee',
        'transfer' => 'transfer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buy' => 'setBuy',
        'sell' => 'setSell',
        'cancel' => 'setCancel',
        'cash' => 'setCash',
        'fee' => 'setFee',
        'transfer' => 'setTransfer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buy' => 'getBuy',
        'sell' => 'getSell',
        'cancel' => 'getCancel',
        'cash' => 'getCash',
        'fee' => 'getFee',
        'transfer' => 'getTransfer'
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
        $this->container['buy'] = $data['buy'] ?? null;
        $this->container['sell'] = $data['sell'] ?? null;
        $this->container['cancel'] = $data['cancel'] ?? null;
        $this->container['cash'] = $data['cash'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['transfer'] = $data['transfer'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['buy'] === null) {
            $invalidProperties[] = "'buy' can't be null";
        }
        if ($this->container['sell'] === null) {
            $invalidProperties[] = "'sell' can't be null";
        }
        if ($this->container['cancel'] === null) {
            $invalidProperties[] = "'cancel' can't be null";
        }
        if ($this->container['cash'] === null) {
            $invalidProperties[] = "'cash' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        if ($this->container['transfer'] === null) {
            $invalidProperties[] = "'transfer' can't be null";
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
     * Gets buy
     *
     * @return string
     */
    public function getBuy()
    {
        return $this->container['buy'];
    }

    /**
     * Sets buy
     *
     * @param string $buy Buying an investment
     *
     * @return self
     */
    public function setBuy($buy)
    {
        $this->container['buy'] = $buy;

        return $this;
    }

    /**
     * Gets sell
     *
     * @return string
     */
    public function getSell()
    {
        return $this->container['sell'];
    }

    /**
     * Sets sell
     *
     * @param string $sell Selling an investment
     *
     * @return self
     */
    public function setSell($sell)
    {
        $this->container['sell'] = $sell;

        return $this;
    }

    /**
     * Gets cancel
     *
     * @return string
     */
    public function getCancel()
    {
        return $this->container['cancel'];
    }

    /**
     * Sets cancel
     *
     * @param string $cancel A cancellation of a pending transaction
     *
     * @return self
     */
    public function setCancel($cancel)
    {
        $this->container['cancel'] = $cancel;

        return $this;
    }

    /**
     * Gets cash
     *
     * @return string
     */
    public function getCash()
    {
        return $this->container['cash'];
    }

    /**
     * Sets cash
     *
     * @param string $cash Activity that modifies a cash position
     *
     * @return self
     */
    public function setCash($cash)
    {
        $this->container['cash'] = $cash;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string $fee Fees on the account, e.g. commission, bookkeeping, options-related.
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets transfer
     *
     * @return string
     */
    public function getTransfer()
    {
        return $this->container['transfer'];
    }

    /**
     * Sets transfer
     *
     * @param string $transfer Activity that modifies a position, but not through buy/sell activity e.g. options exercise, portfolio transfer
     *
     * @return self
     */
    public function setTransfer($transfer)
    {
        $this->container['transfer'] = $transfer;

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


