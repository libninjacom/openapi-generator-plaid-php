<?php
/**
 * TransactionsGetResponse
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
 * TransactionsGetResponse Class Doc Comment
 *
 * @category Class
 * @description TransactionsGetResponse defines the response schema for &#x60;/transactions/get&#x60;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionsGetResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionsGetResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accounts' => '\OpenAPI\Client\Model\AccountBase[]',
        'transactions' => '\OpenAPI\Client\Model\Transaction[]',
        'total_transactions' => 'int',
        'item' => '\OpenAPI\Client\Model\Item',
        'request_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accounts' => null,
        'transactions' => null,
        'total_transactions' => null,
        'item' => null,
        'request_id' => null
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
        'accounts' => 'accounts',
        'transactions' => 'transactions',
        'total_transactions' => 'total_transactions',
        'item' => 'item',
        'request_id' => 'request_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounts' => 'setAccounts',
        'transactions' => 'setTransactions',
        'total_transactions' => 'setTotalTransactions',
        'item' => 'setItem',
        'request_id' => 'setRequestId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounts' => 'getAccounts',
        'transactions' => 'getTransactions',
        'total_transactions' => 'getTotalTransactions',
        'item' => 'getItem',
        'request_id' => 'getRequestId'
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
        $this->container['accounts'] = $data['accounts'] ?? null;
        $this->container['transactions'] = $data['transactions'] ?? null;
        $this->container['total_transactions'] = $data['total_transactions'] ?? null;
        $this->container['item'] = $data['item'] ?? null;
        $this->container['request_id'] = $data['request_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accounts'] === null) {
            $invalidProperties[] = "'accounts' can't be null";
        }
        if ($this->container['transactions'] === null) {
            $invalidProperties[] = "'transactions' can't be null";
        }
        if ($this->container['total_transactions'] === null) {
            $invalidProperties[] = "'total_transactions' can't be null";
        }
        if ($this->container['item'] === null) {
            $invalidProperties[] = "'item' can't be null";
        }
        if ($this->container['request_id'] === null) {
            $invalidProperties[] = "'request_id' can't be null";
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
     * Gets accounts
     *
     * @return \OpenAPI\Client\Model\AccountBase[]
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \OpenAPI\Client\Model\AccountBase[] $accounts An array containing the `accounts` associated with the Item for which transactions are being returned. Each transaction can be mapped to its corresponding account via the `account_id` field.
     *
     * @return self
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \OpenAPI\Client\Model\Transaction[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \OpenAPI\Client\Model\Transaction[] $transactions An array containing transactions from the account. Transactions are returned in reverse chronological order, with the most recent at the beginning of the array. The maximum number of transactions returned is determined by the `count` parameter.
     *
     * @return self
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets total_transactions
     *
     * @return int
     */
    public function getTotalTransactions()
    {
        return $this->container['total_transactions'];
    }

    /**
     * Sets total_transactions
     *
     * @param int $total_transactions The total number of transactions available within the date range specified. If `total_transactions` is larger than the size of the `transactions` array, more transactions are available and can be fetched via manipulating the `offset` parameter.
     *
     * @return self
     */
    public function setTotalTransactions($total_transactions)
    {
        $this->container['total_transactions'] = $total_transactions;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \OpenAPI\Client\Model\Item
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \OpenAPI\Client\Model\Item $item item
     *
     * @return self
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id A unique identifier for the request, which can be used for troubleshooting. This identifier, like all Plaid identifiers, is case sensitive.
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

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


