<?php
/**
 * ProcessorTokenCreateRequest
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
 * ProcessorTokenCreateRequest Class Doc Comment
 *
 * @category Class
 * @description ProcessorTokenCreateRequest defines the request schema for &#x60;/processor/token/create&#x60;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProcessorTokenCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProcessorTokenCreateRequest';

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
        'processor' => 'string'
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
        'processor' => null
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
        'processor' => 'processor'
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
        'processor' => 'setProcessor'
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
        'processor' => 'getProcessor'
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

    public const PROCESSOR_ACHQ = 'achq';
    public const PROCESSOR_ALPACA = 'alpaca';
    public const PROCESSOR_ASTRA = 'astra';
    public const PROCESSOR_CHECK = 'check';
    public const PROCESSOR_CHECKBOOK = 'checkbook';
    public const PROCESSOR_CIRCLE = 'circle';
    public const PROCESSOR_DRIVEWEALTH = 'drivewealth';
    public const PROCESSOR_DWOLLA = 'dwolla';
    public const PROCESSOR_GALILEO = 'galileo';
    public const PROCESSOR_LITHIC = 'lithic';
    public const PROCESSOR_MODERN_TREASURY = 'modern_treasury';
    public const PROCESSOR_MOOV = 'moov';
    public const PROCESSOR_OCROLUS = 'ocrolus';
    public const PROCESSOR_PRIME_TRUST = 'prime_trust';
    public const PROCESSOR_RIZE = 'rize';
    public const PROCESSOR_SILA_MONEY = 'sila_money';
    public const PROCESSOR_SVB_API = 'svb_api';
    public const PROCESSOR_TREASURY_PRIME = 'treasury_prime';
    public const PROCESSOR_UNIT = 'unit';
    public const PROCESSOR_VESTA = 'vesta';
    public const PROCESSOR_VOPAY = 'vopay';
    public const PROCESSOR_WYRE = 'wyre';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessorAllowableValues()
    {
        return [
            self::PROCESSOR_ACHQ,
            self::PROCESSOR_ALPACA,
            self::PROCESSOR_ASTRA,
            self::PROCESSOR_CHECK,
            self::PROCESSOR_CHECKBOOK,
            self::PROCESSOR_CIRCLE,
            self::PROCESSOR_DRIVEWEALTH,
            self::PROCESSOR_DWOLLA,
            self::PROCESSOR_GALILEO,
            self::PROCESSOR_LITHIC,
            self::PROCESSOR_MODERN_TREASURY,
            self::PROCESSOR_MOOV,
            self::PROCESSOR_OCROLUS,
            self::PROCESSOR_PRIME_TRUST,
            self::PROCESSOR_RIZE,
            self::PROCESSOR_SILA_MONEY,
            self::PROCESSOR_SVB_API,
            self::PROCESSOR_TREASURY_PRIME,
            self::PROCESSOR_UNIT,
            self::PROCESSOR_VESTA,
            self::PROCESSOR_VOPAY,
            self::PROCESSOR_WYRE,
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
        $this->container['client_id'] = $data['client_id'] ?? null;
        $this->container['secret'] = $data['secret'] ?? null;
        $this->container['access_token'] = $data['access_token'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['processor'] = $data['processor'] ?? null;
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
        if ($this->container['processor'] === null) {
            $invalidProperties[] = "'processor' can't be null";
        }
        $allowedValues = $this->getProcessorAllowableValues();
        if (!is_null($this->container['processor']) && !in_array($this->container['processor'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'processor', must be one of '%s'",
                $this->container['processor'],
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
     * @param string $account_id The `account_id` value obtained from the `onSuccess` callback in Link
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return string
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param string $processor The processor you are integrating with.
     *
     * @return self
     */
    public function setProcessor($processor)
    {
        $allowedValues = $this->getProcessorAllowableValues();
        if (!in_array($processor, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'processor', must be one of '%s'",
                    $processor,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processor'] = $processor;

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


