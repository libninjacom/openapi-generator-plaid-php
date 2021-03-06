<?php
/**
 * Numbers
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
 * Numbers Class Doc Comment
 *
 * @category Class
 * @description Account and bank identifier number data used to configure the test account. All values are optional.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Numbers implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Numbers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => 'string',
        'ach_routing' => 'string',
        'ach_wire_routing' => 'string',
        'eft_institution' => 'string',
        'eft_branch' => 'string',
        'international_bic' => 'string',
        'international_iban' => 'string',
        'bacs_sort_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account' => null,
        'ach_routing' => null,
        'ach_wire_routing' => null,
        'eft_institution' => null,
        'eft_branch' => null,
        'international_bic' => null,
        'international_iban' => null,
        'bacs_sort_code' => null
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
        'account' => 'account',
        'ach_routing' => 'ach_routing',
        'ach_wire_routing' => 'ach_wire_routing',
        'eft_institution' => 'eft_institution',
        'eft_branch' => 'eft_branch',
        'international_bic' => 'international_bic',
        'international_iban' => 'international_iban',
        'bacs_sort_code' => 'bacs_sort_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'ach_routing' => 'setAchRouting',
        'ach_wire_routing' => 'setAchWireRouting',
        'eft_institution' => 'setEftInstitution',
        'eft_branch' => 'setEftBranch',
        'international_bic' => 'setInternationalBic',
        'international_iban' => 'setInternationalIban',
        'bacs_sort_code' => 'setBacsSortCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'ach_routing' => 'getAchRouting',
        'ach_wire_routing' => 'getAchWireRouting',
        'eft_institution' => 'getEftInstitution',
        'eft_branch' => 'getEftBranch',
        'international_bic' => 'getInternationalBic',
        'international_iban' => 'getInternationalIban',
        'bacs_sort_code' => 'getBacsSortCode'
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
        $this->container['account'] = $data['account'] ?? null;
        $this->container['ach_routing'] = $data['ach_routing'] ?? null;
        $this->container['ach_wire_routing'] = $data['ach_wire_routing'] ?? null;
        $this->container['eft_institution'] = $data['eft_institution'] ?? null;
        $this->container['eft_branch'] = $data['eft_branch'] ?? null;
        $this->container['international_bic'] = $data['international_bic'] ?? null;
        $this->container['international_iban'] = $data['international_iban'] ?? null;
        $this->container['bacs_sort_code'] = $data['bacs_sort_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account Will be used for the account number.
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets ach_routing
     *
     * @return string|null
     */
    public function getAchRouting()
    {
        return $this->container['ach_routing'];
    }

    /**
     * Sets ach_routing
     *
     * @param string|null $ach_routing Must be a valid ACH routing number.
     *
     * @return self
     */
    public function setAchRouting($ach_routing)
    {
        $this->container['ach_routing'] = $ach_routing;

        return $this;
    }

    /**
     * Gets ach_wire_routing
     *
     * @return string|null
     */
    public function getAchWireRouting()
    {
        return $this->container['ach_wire_routing'];
    }

    /**
     * Sets ach_wire_routing
     *
     * @param string|null $ach_wire_routing Must be a valid wire transfer routing number.
     *
     * @return self
     */
    public function setAchWireRouting($ach_wire_routing)
    {
        $this->container['ach_wire_routing'] = $ach_wire_routing;

        return $this;
    }

    /**
     * Gets eft_institution
     *
     * @return string|null
     */
    public function getEftInstitution()
    {
        return $this->container['eft_institution'];
    }

    /**
     * Sets eft_institution
     *
     * @param string|null $eft_institution EFT institution number. Must be specified alongside `eft_branch`.
     *
     * @return self
     */
    public function setEftInstitution($eft_institution)
    {
        $this->container['eft_institution'] = $eft_institution;

        return $this;
    }

    /**
     * Gets eft_branch
     *
     * @return string|null
     */
    public function getEftBranch()
    {
        return $this->container['eft_branch'];
    }

    /**
     * Sets eft_branch
     *
     * @param string|null $eft_branch EFT branch number. Must be specified alongside `eft_institution`.
     *
     * @return self
     */
    public function setEftBranch($eft_branch)
    {
        $this->container['eft_branch'] = $eft_branch;

        return $this;
    }

    /**
     * Gets international_bic
     *
     * @return string|null
     */
    public function getInternationalBic()
    {
        return $this->container['international_bic'];
    }

    /**
     * Sets international_bic
     *
     * @param string|null $international_bic Bank identifier code (BIC). Must be specified alongside `international_iban`.
     *
     * @return self
     */
    public function setInternationalBic($international_bic)
    {
        $this->container['international_bic'] = $international_bic;

        return $this;
    }

    /**
     * Gets international_iban
     *
     * @return string|null
     */
    public function getInternationalIban()
    {
        return $this->container['international_iban'];
    }

    /**
     * Sets international_iban
     *
     * @param string|null $international_iban International bank account number (IBAN). If no account number is specified via `account`, will also be used as the account number by default. Must be specified alongside `international_bic`.
     *
     * @return self
     */
    public function setInternationalIban($international_iban)
    {
        $this->container['international_iban'] = $international_iban;

        return $this;
    }

    /**
     * Gets bacs_sort_code
     *
     * @return string|null
     */
    public function getBacsSortCode()
    {
        return $this->container['bacs_sort_code'];
    }

    /**
     * Sets bacs_sort_code
     *
     * @param string|null $bacs_sort_code BACS sort code
     *
     * @return self
     */
    public function setBacsSortCode($bacs_sort_code)
    {
        $this->container['bacs_sort_code'] = $bacs_sort_code;

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


