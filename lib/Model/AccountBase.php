<?php
/**
 * AccountBase
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
 * AccountBase Class Doc Comment
 *
 * @category Class
 * @description A single account at a financial institution.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'balances' => '\OpenAPI\Client\Model\AccountBalance',
        'mask' => 'string',
        'name' => 'string',
        'official_name' => 'string',
        'type' => '\OpenAPI\Client\Model\AccountType',
        'subtype' => '\OpenAPI\Client\Model\AccountSubtype',
        'verification_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'balances' => null,
        'mask' => null,
        'name' => null,
        'official_name' => null,
        'type' => null,
        'subtype' => null,
        'verification_status' => null
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
        'account_id' => 'account_id',
        'balances' => 'balances',
        'mask' => 'mask',
        'name' => 'name',
        'official_name' => 'official_name',
        'type' => 'type',
        'subtype' => 'subtype',
        'verification_status' => 'verification_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'balances' => 'setBalances',
        'mask' => 'setMask',
        'name' => 'setName',
        'official_name' => 'setOfficialName',
        'type' => 'setType',
        'subtype' => 'setSubtype',
        'verification_status' => 'setVerificationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'balances' => 'getBalances',
        'mask' => 'getMask',
        'name' => 'getName',
        'official_name' => 'getOfficialName',
        'type' => 'getType',
        'subtype' => 'getSubtype',
        'verification_status' => 'getVerificationStatus'
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

    public const VERIFICATION_STATUS_AUTOMATICALLY_VERIFIED = 'automatically_verified';
    public const VERIFICATION_STATUS_PENDING_AUTOMATIC_VERIFICATION = 'pending_automatic_verification';
    public const VERIFICATION_STATUS_PENDING_MANUAL_VERIFICATION = 'pending_manual_verification';
    public const VERIFICATION_STATUS_MANUALLY_VERIFIED = 'manually_verified';
    public const VERIFICATION_STATUS_VERIFICATION_EXPIRED = 'verification_expired';
    public const VERIFICATION_STATUS_VERIFICATION_FAILED = 'verification_failed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerificationStatusAllowableValues()
    {
        return [
            self::VERIFICATION_STATUS_AUTOMATICALLY_VERIFIED,
            self::VERIFICATION_STATUS_PENDING_AUTOMATIC_VERIFICATION,
            self::VERIFICATION_STATUS_PENDING_MANUAL_VERIFICATION,
            self::VERIFICATION_STATUS_MANUALLY_VERIFIED,
            self::VERIFICATION_STATUS_VERIFICATION_EXPIRED,
            self::VERIFICATION_STATUS_VERIFICATION_FAILED,
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
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['balances'] = $data['balances'] ?? null;
        $this->container['mask'] = $data['mask'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['official_name'] = $data['official_name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['subtype'] = $data['subtype'] ?? null;
        $this->container['verification_status'] = $data['verification_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['balances'] === null) {
            $invalidProperties[] = "'balances' can't be null";
        }
        if ($this->container['mask'] === null) {
            $invalidProperties[] = "'mask' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['official_name'] === null) {
            $invalidProperties[] = "'official_name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['subtype'] === null) {
            $invalidProperties[] = "'subtype' can't be null";
        }
        $allowedValues = $this->getVerificationStatusAllowableValues();
        if (!is_null($this->container['verification_status']) && !in_array($this->container['verification_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'verification_status', must be one of '%s'",
                $this->container['verification_status'],
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
     * @param string $account_id Plaid’s unique identifier for the account. This value will not change unless Plaid can't reconcile the account with the data returned by the financial institution. This may occur, for example, when the name of the account changes. If this happens a new `account_id` will be assigned to the account.  The `account_id` can also change if the `access_token` is deleted and the same credentials that were used to generate that `access_token` are used to generate a new `access_token` on a later date. In that case, the new `account_id` will be different from the old `account_id`.  If an account with a specific `account_id` disappears instead of changing, the account is likely closed. Closed accounts are not returned by the Plaid API.  Like all Plaid identifiers, the `account_id` is case sensitive.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets balances
     *
     * @return \OpenAPI\Client\Model\AccountBalance
     */
    public function getBalances()
    {
        return $this->container['balances'];
    }

    /**
     * Sets balances
     *
     * @param \OpenAPI\Client\Model\AccountBalance $balances balances
     *
     * @return self
     */
    public function setBalances($balances)
    {
        $this->container['balances'] = $balances;

        return $this;
    }

    /**
     * Gets mask
     *
     * @return string
     */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
     * Sets mask
     *
     * @param string $mask The last 2-4 alphanumeric characters of an account's official account number. Note that the mask may be non-unique between an Item's accounts, and it may also not match the mask that the bank displays to the user.
     *
     * @return self
     */
    public function setMask($mask)
    {
        $this->container['mask'] = $mask;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the account, either assigned by the user or by the financial institution itself
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets official_name
     *
     * @return string
     */
    public function getOfficialName()
    {
        return $this->container['official_name'];
    }

    /**
     * Sets official_name
     *
     * @param string $official_name The official name of the account as given by the financial institution
     *
     * @return self
     */
    public function setOfficialName($official_name)
    {
        $this->container['official_name'] = $official_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\AccountType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\AccountType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets subtype
     *
     * @return \OpenAPI\Client\Model\AccountSubtype
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param \OpenAPI\Client\Model\AccountSubtype $subtype subtype
     *
     * @return self
     */
    public function setSubtype($subtype)
    {
        $this->container['subtype'] = $subtype;

        return $this;
    }

    /**
     * Gets verification_status
     *
     * @return string|null
     */
    public function getVerificationStatus()
    {
        return $this->container['verification_status'];
    }

    /**
     * Sets verification_status
     *
     * @param string|null $verification_status The current verification status of an Auth Item initiated through Automated or Manual micro-deposits.  Returned for Auth Items only.  `pending_automatic_verification`: The Item is pending automatic verification  `pending_manual_verification`: The Item is pending manual micro-deposit verification. Items remain in this state until the user successfully verifies the two amounts.  `automatically_verified`: The Item has successfully been automatically verified   `manually_verified`: The Item has successfully been manually verified  `verification_expired`: Plaid was unable to automatically verify the deposit within 7 calendar days and will no longer attempt to validate the Item. Users may retry by submitting their information again through Link.  `verification_failed`: The Item failed manual micro-deposit verification because the user exhausted all 3 verification attempts. Users may retry by submitting their information again through Link.
     *
     * @return self
     */
    public function setVerificationStatus($verification_status)
    {
        $allowedValues = $this->getVerificationStatusAllowableValues();
        if (!is_null($verification_status) && !in_array($verification_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'verification_status', must be one of '%s'",
                    $verification_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verification_status'] = $verification_status;

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


