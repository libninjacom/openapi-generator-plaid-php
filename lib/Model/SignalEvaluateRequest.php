<?php
/**
 * SignalEvaluateRequest
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
 * SignalEvaluateRequest Class Doc Comment
 *
 * @category Class
 * @description SignalEvaluateRequest defines the request schema for &#x60;/signal/evaluate&#x60;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SignalEvaluateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignalEvaluateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_id' => 'string',
        'secret' => 'string',
        'access_token' => 'string',
        'account_id' => 'string',
        'client_transaction_id' => 'string',
        'amount' => 'float',
        'user_present' => 'bool',
        'client_user_id' => 'string',
        'user' => '\OpenAPI\Client\Model\SignalUser',
        'device' => '\OpenAPI\Client\Model\SignalDevice'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'client_id' => null,
        'secret' => null,
        'access_token' => null,
        'account_id' => null,
        'client_transaction_id' => null,
        'amount' => null,
        'user_present' => null,
        'client_user_id' => null,
        'user' => null,
        'device' => null
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
        'client_id' => 'client_id',
        'secret' => 'secret',
        'access_token' => 'access_token',
        'account_id' => 'account_id',
        'client_transaction_id' => 'client_transaction_id',
        'amount' => 'amount',
        'user_present' => 'user_present',
        'client_user_id' => 'client_user_id',
        'user' => 'user',
        'device' => 'device'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'secret' => 'setSecret',
        'access_token' => 'setAccessToken',
        'account_id' => 'setAccountId',
        'client_transaction_id' => 'setClientTransactionId',
        'amount' => 'setAmount',
        'user_present' => 'setUserPresent',
        'client_user_id' => 'setClientUserId',
        'user' => 'setUser',
        'device' => 'setDevice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'secret' => 'getSecret',
        'access_token' => 'getAccessToken',
        'account_id' => 'getAccountId',
        'client_transaction_id' => 'getClientTransactionId',
        'amount' => 'getAmount',
        'user_present' => 'getUserPresent',
        'client_user_id' => 'getClientUserId',
        'user' => 'getUser',
        'device' => 'getDevice'
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
        $this->container['client_id'] = $data['client_id'] ?? null;
        $this->container['secret'] = $data['secret'] ?? null;
        $this->container['access_token'] = $data['access_token'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['client_transaction_id'] = $data['client_transaction_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['user_present'] = $data['user_present'] ?? null;
        $this->container['client_user_id'] = $data['client_user_id'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['access_token'] === null) {
            $invalidProperties[] = "'access_token' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['client_transaction_id'] === null) {
            $invalidProperties[] = "'client_transaction_id' can't be null";
        }
        if ((mb_strlen($this->container['client_transaction_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'client_transaction_id', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['client_transaction_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'client_transaction_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['client_user_id']) && (mb_strlen($this->container['client_user_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'client_user_id', the character length must be smaller than or equal to 36.";
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
     * Gets client_id
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id Your Plaid API `client_id`. The `client_id` is required and may be provided either in the `PLAID-CLIENT-ID` header or as part of a request body.
     *
     * @return self
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets secret
     *
     * @return string|null
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string|null $secret Your Plaid API `secret`. The `secret` is required and may be provided either in the `PLAID-SECRET` header or as part of a request body.
     *
     * @return self
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string $access_token The access token associated with the Item data is being requested for.
     *
     * @return self
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

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
     * @param string $account_id The `account_id` of the account whose verification status is to be modified
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets client_transaction_id
     *
     * @return string
     */
    public function getClientTransactionId()
    {
        return $this->container['client_transaction_id'];
    }

    /**
     * Sets client_transaction_id
     *
     * @param string $client_transaction_id The unique ID that you would like to use to refer to this transaction. For your convenience mapping your internal data, you could use your internal ID/identifier for this transaction. The max length for this field is 36 characters.
     *
     * @return self
     */
    public function setClientTransactionId($client_transaction_id)
    {
        if ((mb_strlen($client_transaction_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $client_transaction_id when calling SignalEvaluateRequest., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($client_transaction_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $client_transaction_id when calling SignalEvaluateRequest., must be bigger than or equal to 1.');
        }

        $this->container['client_transaction_id'] = $client_transaction_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The transaction amount, in USD (e.g. `102.05`)
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets user_present
     *
     * @return bool|null
     */
    public function getUserPresent()
    {
        return $this->container['user_present'];
    }

    /**
     * Sets user_present
     *
     * @param bool|null $user_present `true` if the end user is present while initiating the ACH transfer and the endpoint is being called; `false` otherwise (for example, when the ACH transfer is scheduled and the end user is not present, or you call this endpoint after the ACH transfer but before submitting the Nacha file for ACH processing).
     *
     * @return self
     */
    public function setUserPresent($user_present)
    {
        $this->container['user_present'] = $user_present;

        return $this;
    }

    /**
     * Gets client_user_id
     *
     * @return string|null
     */
    public function getClientUserId()
    {
        return $this->container['client_user_id'];
    }

    /**
     * Sets client_user_id
     *
     * @param string|null $client_user_id A unique ID that identifies the end user in your system. This ID is used to correlate requests by a user with multiple Items. The max length for this field is 36 characters.
     *
     * @return self
     */
    public function setClientUserId($client_user_id)
    {
        if (!is_null($client_user_id) && (mb_strlen($client_user_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $client_user_id when calling SignalEvaluateRequest., must be smaller than or equal to 36.');
        }

        $this->container['client_user_id'] = $client_user_id;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\SignalUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\SignalUser|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets device
     *
     * @return \OpenAPI\Client\Model\SignalDevice|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \OpenAPI\Client\Model\SignalDevice|null $device device
     *
     * @return self
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

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


