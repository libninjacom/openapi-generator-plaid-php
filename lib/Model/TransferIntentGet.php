<?php
/**
 * TransferIntentGet
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
 * TransferIntentGet Class Doc Comment
 *
 * @category Class
 * @description Represents a transfer intent within Transfer UI.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransferIntentGet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransferIntentGet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created' => '\DateTime',
        'status' => 'string',
        'transfer_id' => 'string',
        'failure_reason' => '\OpenAPI\Client\Model\TransferIntentGetFailureReason',
        'authorization_decision' => 'string',
        'authorization_decision_rationale' => '\OpenAPI\Client\Model\TransferAuthorizationDecisionRationale',
        'account_id' => 'string',
        'origination_account_id' => 'string',
        'amount' => 'string',
        'mode' => '\OpenAPI\Client\Model\TransferIntentCreateMode',
        'ach_class' => '\OpenAPI\Client\Model\ACHClass',
        'user' => '\OpenAPI\Client\Model\TransferUserInResponse',
        'description' => 'string',
        'metadata' => 'array<string,string>',
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
        'id' => null,
        'created' => 'date-time',
        'status' => null,
        'transfer_id' => null,
        'failure_reason' => null,
        'authorization_decision' => null,
        'authorization_decision_rationale' => null,
        'account_id' => null,
        'origination_account_id' => null,
        'amount' => null,
        'mode' => null,
        'ach_class' => null,
        'user' => null,
        'description' => null,
        'metadata' => null,
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
        'id' => 'id',
        'created' => 'created',
        'status' => 'status',
        'transfer_id' => 'transfer_id',
        'failure_reason' => 'failure_reason',
        'authorization_decision' => 'authorization_decision',
        'authorization_decision_rationale' => 'authorization_decision_rationale',
        'account_id' => 'account_id',
        'origination_account_id' => 'origination_account_id',
        'amount' => 'amount',
        'mode' => 'mode',
        'ach_class' => 'ach_class',
        'user' => 'user',
        'description' => 'description',
        'metadata' => 'metadata',
        'iso_currency_code' => 'iso_currency_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'status' => 'setStatus',
        'transfer_id' => 'setTransferId',
        'failure_reason' => 'setFailureReason',
        'authorization_decision' => 'setAuthorizationDecision',
        'authorization_decision_rationale' => 'setAuthorizationDecisionRationale',
        'account_id' => 'setAccountId',
        'origination_account_id' => 'setOriginationAccountId',
        'amount' => 'setAmount',
        'mode' => 'setMode',
        'ach_class' => 'setAchClass',
        'user' => 'setUser',
        'description' => 'setDescription',
        'metadata' => 'setMetadata',
        'iso_currency_code' => 'setIsoCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'status' => 'getStatus',
        'transfer_id' => 'getTransferId',
        'failure_reason' => 'getFailureReason',
        'authorization_decision' => 'getAuthorizationDecision',
        'authorization_decision_rationale' => 'getAuthorizationDecisionRationale',
        'account_id' => 'getAccountId',
        'origination_account_id' => 'getOriginationAccountId',
        'amount' => 'getAmount',
        'mode' => 'getMode',
        'ach_class' => 'getAchClass',
        'user' => 'getUser',
        'description' => 'getDescription',
        'metadata' => 'getMetadata',
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

    public const STATUS_PENDING = 'PENDING';
    public const STATUS_SUCCEEDED = 'SUCCEEDED';
    public const STATUS_FAILED = 'FAILED';
    public const AUTHORIZATION_DECISION_APPROVED = 'APPROVED';
    public const AUTHORIZATION_DECISION_PERMITTED = 'PERMITTED';
    public const AUTHORIZATION_DECISION_DECLINED = 'DECLINED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthorizationDecisionAllowableValues()
    {
        return [
            self::AUTHORIZATION_DECISION_APPROVED,
            self::AUTHORIZATION_DECISION_PERMITTED,
            self::AUTHORIZATION_DECISION_DECLINED,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['transfer_id'] = $data['transfer_id'] ?? null;
        $this->container['failure_reason'] = $data['failure_reason'] ?? null;
        $this->container['authorization_decision'] = $data['authorization_decision'] ?? null;
        $this->container['authorization_decision_rationale'] = $data['authorization_decision_rationale'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['origination_account_id'] = $data['origination_account_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['ach_class'] = $data['ach_class'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transfer_id'] === null) {
            $invalidProperties[] = "'transfer_id' can't be null";
        }
        if ($this->container['failure_reason'] === null) {
            $invalidProperties[] = "'failure_reason' can't be null";
        }
        if ($this->container['authorization_decision'] === null) {
            $invalidProperties[] = "'authorization_decision' can't be null";
        }
        $allowedValues = $this->getAuthorizationDecisionAllowableValues();
        if (!is_null($this->container['authorization_decision']) && !in_array($this->container['authorization_decision'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'authorization_decision', must be one of '%s'",
                $this->container['authorization_decision'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['authorization_decision_rationale'] === null) {
            $invalidProperties[] = "'authorization_decision_rationale' can't be null";
        }
        if ($this->container['origination_account_id'] === null) {
            $invalidProperties[] = "'origination_account_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['ach_class'] === null) {
            $invalidProperties[] = "'ach_class' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if (!is_null($this->container['metadata']) && (count($this->container['metadata']) > 50)) {
            $invalidProperties[] = "invalid value for 'metadata', number of items must be less than or equal to 50.";
        }

        if ($this->container['iso_currency_code'] === null) {
            $invalidProperties[] = "'iso_currency_code' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Plaid's unique identifier for a transfer intent object.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The datetime the transfer was created. This will be of the form `2006-01-02T15:04:05Z`.
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the transfer intent.  - `PENDING` – The transfer intent is pending. - `SUCCEEDED` – The transfer intent was successfully created. - `FAILED` – The transfer intent was unable to be created.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transfer_id
     *
     * @return string
     */
    public function getTransferId()
    {
        return $this->container['transfer_id'];
    }

    /**
     * Sets transfer_id
     *
     * @param string $transfer_id Plaid's unique identifier for the transfer created through the UI. Returned only if the transfer was successfully created. Null value otherwise.
     *
     * @return self
     */
    public function setTransferId($transfer_id)
    {
        $this->container['transfer_id'] = $transfer_id;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return \OpenAPI\Client\Model\TransferIntentGetFailureReason
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \OpenAPI\Client\Model\TransferIntentGetFailureReason $failure_reason failure_reason
     *
     * @return self
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets authorization_decision
     *
     * @return string
     */
    public function getAuthorizationDecision()
    {
        return $this->container['authorization_decision'];
    }

    /**
     * Sets authorization_decision
     *
     * @param string $authorization_decision A decision regarding the proposed transfer.  `APPROVED` – The proposed transfer has received the end user's consent and has been approved for processing. Plaid has also reviewed the proposed transfer and has approved it for processing.   `PERMITTED` – Plaid was unable to fetch the information required to approve or decline the proposed transfer. You may proceed with the transfer, but further review is recommended. Plaid is awaiting further instructions from the client.  `DECLINED` – Plaid reviewed the proposed transfer and declined processing. Refer to the `code` field in the `decision_rationale` object for details. Null value otherwise.
     *
     * @return self
     */
    public function setAuthorizationDecision($authorization_decision)
    {
        $allowedValues = $this->getAuthorizationDecisionAllowableValues();
        if (!in_array($authorization_decision, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'authorization_decision', must be one of '%s'",
                    $authorization_decision,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authorization_decision'] = $authorization_decision;

        return $this;
    }

    /**
     * Gets authorization_decision_rationale
     *
     * @return \OpenAPI\Client\Model\TransferAuthorizationDecisionRationale
     */
    public function getAuthorizationDecisionRationale()
    {
        return $this->container['authorization_decision_rationale'];
    }

    /**
     * Sets authorization_decision_rationale
     *
     * @param \OpenAPI\Client\Model\TransferAuthorizationDecisionRationale $authorization_decision_rationale authorization_decision_rationale
     *
     * @return self
     */
    public function setAuthorizationDecisionRationale($authorization_decision_rationale)
    {
        $this->container['authorization_decision_rationale'] = $authorization_decision_rationale;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id The Plaid `account_id` for the account that will be debited or credited. Returned only if `account_id` was set on intent creation.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param string $origination_account_id Plaid’s unique identifier for the origination account used for the transfer.
     *
     * @return self
     */
    public function setOriginationAccountId($origination_account_id)
    {
        $this->container['origination_account_id'] = $origination_account_id;

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
     * Gets mode
     *
     * @return \OpenAPI\Client\Model\TransferIntentCreateMode
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \OpenAPI\Client\Model\TransferIntentCreateMode $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

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
     * @return \OpenAPI\Client\Model\TransferUserInResponse
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\TransferUserInResponse $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
     * @param string $description A description for the underlying transfer. Maximum of 8 characters.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
            throw new \InvalidArgumentException('invalid value for $metadata when calling TransferIntentGet., number of items must be less than or equal to 50.');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets iso_currency_code
     *
     * @return string
     */
    public function getIsoCurrencyCode()
    {
        return $this->container['iso_currency_code'];
    }

    /**
     * Sets iso_currency_code
     *
     * @param string $iso_currency_code The currency of the transfer amount, e.g. \"USD\"
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


