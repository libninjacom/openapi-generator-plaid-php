<?php
/**
 * BankTransferEvent
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
 * BankTransferEvent Class Doc Comment
 *
 * @category Class
 * @description Represents an event in the Bank Transfers API.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankTransferEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankTransferEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_id' => 'int',
        'timestamp' => '\DateTime',
        'event_type' => '\OpenAPI\Client\Model\BankTransferEventType',
        'account_id' => 'string',
        'bank_transfer_id' => 'string',
        'origination_account_id' => 'string',
        'bank_transfer_type' => '\OpenAPI\Client\Model\BankTransferType',
        'bank_transfer_amount' => 'string',
        'bank_transfer_iso_currency_code' => 'string',
        'failure_reason' => '\OpenAPI\Client\Model\BankTransferFailure',
        'direction' => '\OpenAPI\Client\Model\BankTransferDirection'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_id' => null,
        'timestamp' => 'date-time',
        'event_type' => null,
        'account_id' => null,
        'bank_transfer_id' => null,
        'origination_account_id' => null,
        'bank_transfer_type' => null,
        'bank_transfer_amount' => null,
        'bank_transfer_iso_currency_code' => null,
        'failure_reason' => null,
        'direction' => null
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
        'event_id' => 'event_id',
        'timestamp' => 'timestamp',
        'event_type' => 'event_type',
        'account_id' => 'account_id',
        'bank_transfer_id' => 'bank_transfer_id',
        'origination_account_id' => 'origination_account_id',
        'bank_transfer_type' => 'bank_transfer_type',
        'bank_transfer_amount' => 'bank_transfer_amount',
        'bank_transfer_iso_currency_code' => 'bank_transfer_iso_currency_code',
        'failure_reason' => 'failure_reason',
        'direction' => 'direction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_id' => 'setEventId',
        'timestamp' => 'setTimestamp',
        'event_type' => 'setEventType',
        'account_id' => 'setAccountId',
        'bank_transfer_id' => 'setBankTransferId',
        'origination_account_id' => 'setOriginationAccountId',
        'bank_transfer_type' => 'setBankTransferType',
        'bank_transfer_amount' => 'setBankTransferAmount',
        'bank_transfer_iso_currency_code' => 'setBankTransferIsoCurrencyCode',
        'failure_reason' => 'setFailureReason',
        'direction' => 'setDirection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_id' => 'getEventId',
        'timestamp' => 'getTimestamp',
        'event_type' => 'getEventType',
        'account_id' => 'getAccountId',
        'bank_transfer_id' => 'getBankTransferId',
        'origination_account_id' => 'getOriginationAccountId',
        'bank_transfer_type' => 'getBankTransferType',
        'bank_transfer_amount' => 'getBankTransferAmount',
        'bank_transfer_iso_currency_code' => 'getBankTransferIsoCurrencyCode',
        'failure_reason' => 'getFailureReason',
        'direction' => 'getDirection'
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
        $this->container['event_id'] = $data['event_id'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['bank_transfer_id'] = $data['bank_transfer_id'] ?? null;
        $this->container['origination_account_id'] = $data['origination_account_id'] ?? null;
        $this->container['bank_transfer_type'] = $data['bank_transfer_type'] ?? null;
        $this->container['bank_transfer_amount'] = $data['bank_transfer_amount'] ?? null;
        $this->container['bank_transfer_iso_currency_code'] = $data['bank_transfer_iso_currency_code'] ?? null;
        $this->container['failure_reason'] = $data['failure_reason'] ?? null;
        $this->container['direction'] = $data['direction'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['event_id'] === null) {
            $invalidProperties[] = "'event_id' can't be null";
        }
        if (($this->container['event_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'event_id', must be bigger than or equal to 0.";
        }

        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['bank_transfer_id'] === null) {
            $invalidProperties[] = "'bank_transfer_id' can't be null";
        }
        if ($this->container['origination_account_id'] === null) {
            $invalidProperties[] = "'origination_account_id' can't be null";
        }
        if ($this->container['bank_transfer_type'] === null) {
            $invalidProperties[] = "'bank_transfer_type' can't be null";
        }
        if ($this->container['bank_transfer_amount'] === null) {
            $invalidProperties[] = "'bank_transfer_amount' can't be null";
        }
        if ($this->container['bank_transfer_iso_currency_code'] === null) {
            $invalidProperties[] = "'bank_transfer_iso_currency_code' can't be null";
        }
        if ($this->container['failure_reason'] === null) {
            $invalidProperties[] = "'failure_reason' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
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
     * Gets event_id
     *
     * @return int
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param int $event_id Plaid???s unique identifier for this event. IDs are sequential unsigned 64-bit integers.
     *
     * @return self
     */
    public function setEventId($event_id)
    {

        if (($event_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $event_id when calling BankTransferEvent., must be bigger than or equal to 0.');
        }

        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp The datetime when this event occurred. This will be of the form `2006-01-02T15:04:05Z`.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return \OpenAPI\Client\Model\BankTransferEventType
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param \OpenAPI\Client\Model\BankTransferEventType $event_type event_type
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id The account ID associated with the bank transfer.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets bank_transfer_id
     *
     * @return string
     */
    public function getBankTransferId()
    {
        return $this->container['bank_transfer_id'];
    }

    /**
     * Sets bank_transfer_id
     *
     * @param string $bank_transfer_id Plaid???s unique identifier for a bank transfer.
     *
     * @return self
     */
    public function setBankTransferId($bank_transfer_id)
    {
        $this->container['bank_transfer_id'] = $bank_transfer_id;

        return $this;
    }

    /**
     * Gets origination_account_id
     *
     * @return string
     */
    public function getOriginationAccountId()
    {
        return $this->container['origination_account_id'];
    }

    /**
     * Sets origination_account_id
     *
     * @param string $origination_account_id The ID of the origination account that this balance belongs to.
     *
     * @return self
     */
    public function setOriginationAccountId($origination_account_id)
    {
        $this->container['origination_account_id'] = $origination_account_id;

        return $this;
    }

    /**
     * Gets bank_transfer_type
     *
     * @return \OpenAPI\Client\Model\BankTransferType
     */
    public function getBankTransferType()
    {
        return $this->container['bank_transfer_type'];
    }

    /**
     * Sets bank_transfer_type
     *
     * @param \OpenAPI\Client\Model\BankTransferType $bank_transfer_type bank_transfer_type
     *
     * @return self
     */
    public function setBankTransferType($bank_transfer_type)
    {
        $this->container['bank_transfer_type'] = $bank_transfer_type;

        return $this;
    }

    /**
     * Gets bank_transfer_amount
     *
     * @return string
     */
    public function getBankTransferAmount()
    {
        return $this->container['bank_transfer_amount'];
    }

    /**
     * Sets bank_transfer_amount
     *
     * @param string $bank_transfer_amount The bank transfer amount.
     *
     * @return self
     */
    public function setBankTransferAmount($bank_transfer_amount)
    {
        $this->container['bank_transfer_amount'] = $bank_transfer_amount;

        return $this;
    }

    /**
     * Gets bank_transfer_iso_currency_code
     *
     * @return string
     */
    public function getBankTransferIsoCurrencyCode()
    {
        return $this->container['bank_transfer_iso_currency_code'];
    }

    /**
     * Sets bank_transfer_iso_currency_code
     *
     * @param string $bank_transfer_iso_currency_code The currency of the bank transfer amount.
     *
     * @return self
     */
    public function setBankTransferIsoCurrencyCode($bank_transfer_iso_currency_code)
    {
        $this->container['bank_transfer_iso_currency_code'] = $bank_transfer_iso_currency_code;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return \OpenAPI\Client\Model\BankTransferFailure
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \OpenAPI\Client\Model\BankTransferFailure $failure_reason failure_reason
     *
     * @return self
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return \OpenAPI\Client\Model\BankTransferDirection
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param \OpenAPI\Client\Model\BankTransferDirection $direction direction
     *
     * @return self
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

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


