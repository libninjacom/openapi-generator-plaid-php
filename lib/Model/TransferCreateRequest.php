<?php
/**
 * TransferCreateRequest
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
 * TransferCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Defines the request schema for &#x60;/transfer/create&#x60;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransferCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransferCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_id' => 'string',
        'secret' => 'string',
        'idempotency_key' => 'string',
        'access_token' => 'string',
        'account_id' => 'string',
        'authorization_id' => 'string',
        'type' => '\OpenAPI\Client\Model\TransferType',
        'network' => '\OpenAPI\Client\Model\TransferNetwork',
        'amount' => 'string',
        'description' => 'string',
        'ach_class' => '\OpenAPI\Client\Model\ACHClass',
        'user' => '\OpenAPI\Client\Model\TransferUserInRequest',
        'metadata' => 'array<string,string>',
        'origination_account_id' => 'string',
        'iso_currency_code' => 'string'
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
        'idempotency_key' => null,
        'access_token' => null,
        'account_id' => null,
        'authorization_id' => null,
        'type' => null,
        'network' => null,
        'amount' => null,
        'description' => null,
        'ach_class' => null,
        'user' => null,
        'metadata' => null,
        'origination_account_id' => null,
        'iso_currency_code' => null
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
        'idempotency_key' => 'idempotency_key',
        'access_token' => 'access_token',
        'account_id' => 'account_id',
        'authorization_id' => 'authorization_id',
        'type' => 'type',
        'network' => 'network',
        'amount' => 'amount',
        'description' => 'description',
        'ach_class' => 'ach_class',
        'user' => 'user',
        'metadata' => 'metadata',
        'origination_account_id' => 'origination_account_id',
        'iso_currency_code' => 'iso_currency_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'secret' => 'setSecret',
        'idempotency_key' => 'setIdempotencyKey',
        'access_token' => 'setAccessToken',
        'account_id' => 'setAccountId',
        'authorization_id' => 'setAuthorizationId',
        'type' => 'setType',
        'network' => 'setNetwork',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'ach_class' => 'setAchClass',
        'user' => 'setUser',
        'metadata' => 'setMetadata',
        'origination_account_id' => 'setOriginationAccountId',
        'iso_currency_code' => 'setIsoCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'secret' => 'getSecret',
        'idempotency_key' => 'getIdempotencyKey',
        'access_token' => 'getAccessToken',
        'account_id' => 'getAccountId',
        'authorization_id' => 'getAuthorizationId',
        'type' => 'getType',
        'network' => 'getNetwork',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'ach_class' => 'getAchClass',
        'user' => 'getUser',
        'metadata' => 'getMetadata',
        'origination_account_id' => 'getOriginationAccountId',
        'iso_currency_code' => 'getIsoCurrencyCode'
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
        $this->container['idempotency_key'] = $data['idempotency_key'] ?? null;
        $this->container['access_token'] = $data['access_token'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['authorization_id'] = $data['authorization_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['network'] = $data['network'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['ach_class'] = $data['ach_class'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['origination_account_id'] = $data['origination_account_id'] ?? null;
        $this->container['iso_currency_code'] = $data['iso_currency_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['idempotency_key']) && (mb_strlen($this->container['idempotency_key']) > 50)) {
            $invalidProperties[] = "invalid value for 'idempotency_key', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['access_token'] === null) {
            $invalidProperties[] = "'access_token' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['authorization_id'] === null) {
            $invalidProperties[] = "'authorization_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 10)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['ach_class'] === null) {
            $invalidProperties[] = "'ach_class' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if (!is_null($this->container['metadata']) && (count($this->container['metadata']) > 50)) {
            $invalidProperties[] = "invalid value for 'metadata', number of items must be less than or equal to 50.";
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
     * Gets idempotency_key
     *
     * @return string|null
     * @deprecated
     */
    public function getIdempotencyKey()
    {
        return $this->container['idempotency_key'];
    }

    /**
     * Sets idempotency_key
     *
     * @param string|null $idempotency_key Deprecated. `authorization_id` is now for used idempotency instead.  A random key provided by the client, per unique transfer. Maximum of 50 characters.  The API supports idempotency for safely retrying requests without accidentally performing the same operation twice. For example, if a request to create a transfer fails due to a network connection error, you can retry the request with the same idempotency key to guarantee that only a single transfer is created.
     *
     * @return self
     * @deprecated
     */
    public function setIdempotencyKey($idempotency_key)
    {
        if (!is_null($idempotency_key) && (mb_strlen($idempotency_key) > 50)) {
            throw new \InvalidArgumentException('invalid length for $idempotency_key when calling TransferCreateRequest., must be smaller than or equal to 50.');
        }

        $this->container['idempotency_key'] = $idempotency_key;

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
     * @param string $access_token The Plaid `access_token` for the account that will be debited or credited.
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
     * @param string $account_id The Plaid `account_id` for the account that will be debited or credited.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets authorization_id
     *
     * @return string
     */
    public function getAuthorizationId()
    {
        return $this->container['authorization_id'];
    }

    /**
     * Sets authorization_id
     *
     * @param string $authorization_id Plaid’s unique identifier for a transfer authorization. This parameter also serves the purpose of acting as an idempotency identifier.
     *
     * @return self
     */
    public function setAuthorizationId($authorization_id)
    {
        $this->container['authorization_id'] = $authorization_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\TransferType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\TransferType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets network
     *
     * @return \OpenAPI\Client\Model\TransferNetwork
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param \OpenAPI\Client\Model\TransferNetwork $network network
     *
     * @return self
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount The amount of the transfer (decimal string with two digits of precision e.g. \"10.00\").
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The transfer description. Maximum of 10 characters.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 10)) {
            throw new \InvalidArgumentException('invalid length for $description when calling TransferCreateRequest., must be smaller than or equal to 10.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ach_class
     *
     * @return \OpenAPI\Client\Model\ACHClass
     */
    public function getAchClass()
    {
        return $this->container['ach_class'];
    }

    /**
     * Sets ach_class
     *
     * @param \OpenAPI\Client\Model\ACHClass $ach_class ach_class
     *
     * @return self
     */
    public function setAchClass($ach_class)
    {
        $this->container['ach_class'] = $ach_class;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\TransferUserInRequest
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\TransferUserInRequest $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata The Metadata object is a mapping of client-provided string fields to any string value. The following limitations apply: - The JSON values must be Strings (no nested JSON objects allowed) - Only ASCII characters may be used - Maximum of 50 key/value pairs - Maximum key length of 40 characters - Maximum value length of 500 characters
     *
     * @return self
     */
    public function setMetadata($metadata)
    {

        if (!is_null($metadata) && (count($metadata) > 50)) {
            throw new \InvalidArgumentException('invalid value for $metadata when calling TransferCreateRequest., number of items must be less than or equal to 50.');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets origination_account_id
     *
     * @return string|null
     */
    public function getOriginationAccountId()
    {
        return $this->container['origination_account_id'];
    }

    /**
     * Sets origination_account_id
     *
     * @param string|null $origination_account_id Plaid’s unique identifier for the origination account for this transfer. If you have more than one origination account, this value must be specified. Otherwise, this field should be left blank.
     *
     * @return self
     */
    public function setOriginationAccountId($origination_account_id)
    {
        $this->container['origination_account_id'] = $origination_account_id;

        return $this;
    }

    /**
     * Gets iso_currency_code
     *
     * @return string|null
     */
    public function getIsoCurrencyCode()
    {
        return $this->container['iso_currency_code'];
    }

    /**
     * Sets iso_currency_code
     *
     * @param string|null $iso_currency_code The currency of the transfer amount. The default value is \"USD\".
     *
     * @return self
     */
    public function setIsoCurrencyCode($iso_currency_code)
    {
        $this->container['iso_currency_code'] = $iso_currency_code;

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


