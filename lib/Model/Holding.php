<?php
/**
 * Holding
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
 * Holding Class Doc Comment
 *
 * @category Class
 * @description A securities holding at an institution.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Holding implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Holding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'security_id' => 'string',
        'institution_price' => 'float',
        'institution_price_as_of' => '\DateTime',
        'institution_value' => 'float',
        'cost_basis' => 'float',
        'quantity' => 'float',
        'iso_currency_code' => 'string',
        'unofficial_currency_code' => 'string'
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
        'security_id' => null,
        'institution_price' => null,
        'institution_price_as_of' => 'date',
        'institution_value' => null,
        'cost_basis' => null,
        'quantity' => null,
        'iso_currency_code' => null,
        'unofficial_currency_code' => null
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
        'security_id' => 'security_id',
        'institution_price' => 'institution_price',
        'institution_price_as_of' => 'institution_price_as_of',
        'institution_value' => 'institution_value',
        'cost_basis' => 'cost_basis',
        'quantity' => 'quantity',
        'iso_currency_code' => 'iso_currency_code',
        'unofficial_currency_code' => 'unofficial_currency_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'security_id' => 'setSecurityId',
        'institution_price' => 'setInstitutionPrice',
        'institution_price_as_of' => 'setInstitutionPriceAsOf',
        'institution_value' => 'setInstitutionValue',
        'cost_basis' => 'setCostBasis',
        'quantity' => 'setQuantity',
        'iso_currency_code' => 'setIsoCurrencyCode',
        'unofficial_currency_code' => 'setUnofficialCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'security_id' => 'getSecurityId',
        'institution_price' => 'getInstitutionPrice',
        'institution_price_as_of' => 'getInstitutionPriceAsOf',
        'institution_value' => 'getInstitutionValue',
        'cost_basis' => 'getCostBasis',
        'quantity' => 'getQuantity',
        'iso_currency_code' => 'getIsoCurrencyCode',
        'unofficial_currency_code' => 'getUnofficialCurrencyCode'
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
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['security_id'] = $data['security_id'] ?? null;
        $this->container['institution_price'] = $data['institution_price'] ?? null;
        $this->container['institution_price_as_of'] = $data['institution_price_as_of'] ?? null;
        $this->container['institution_value'] = $data['institution_value'] ?? null;
        $this->container['cost_basis'] = $data['cost_basis'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['iso_currency_code'] = $data['iso_currency_code'] ?? null;
        $this->container['unofficial_currency_code'] = $data['unofficial_currency_code'] ?? null;
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
        if ($this->container['security_id'] === null) {
            $invalidProperties[] = "'security_id' can't be null";
        }
        if ($this->container['institution_price'] === null) {
            $invalidProperties[] = "'institution_price' can't be null";
        }
        if ($this->container['institution_price_as_of'] === null) {
            $invalidProperties[] = "'institution_price_as_of' can't be null";
        }
        if ($this->container['institution_value'] === null) {
            $invalidProperties[] = "'institution_value' can't be null";
        }
        if ($this->container['cost_basis'] === null) {
            $invalidProperties[] = "'cost_basis' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['iso_currency_code'] === null) {
            $invalidProperties[] = "'iso_currency_code' can't be null";
        }
        if ($this->container['unofficial_currency_code'] === null) {
            $invalidProperties[] = "'unofficial_currency_code' can't be null";
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
     * @param string $account_id The Plaid `account_id` associated with the holding.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets security_id
     *
     * @return string
     */
    public function getSecurityId()
    {
        return $this->container['security_id'];
    }

    /**
     * Sets security_id
     *
     * @param string $security_id The Plaid `security_id` associated with the holding.
     *
     * @return self
     */
    public function setSecurityId($security_id)
    {
        $this->container['security_id'] = $security_id;

        return $this;
    }

    /**
     * Gets institution_price
     *
     * @return float
     */
    public function getInstitutionPrice()
    {
        return $this->container['institution_price'];
    }

    /**
     * Sets institution_price
     *
     * @param float $institution_price The last price given by the institution for this security.
     *
     * @return self
     */
    public function setInstitutionPrice($institution_price)
    {
        $this->container['institution_price'] = $institution_price;

        return $this;
    }

    /**
     * Gets institution_price_as_of
     *
     * @return \DateTime
     */
    public function getInstitutionPriceAsOf()
    {
        return $this->container['institution_price_as_of'];
    }

    /**
     * Sets institution_price_as_of
     *
     * @param \DateTime $institution_price_as_of The date at which `institution_price` was current.
     *
     * @return self
     */
    public function setInstitutionPriceAsOf($institution_price_as_of)
    {
        $this->container['institution_price_as_of'] = $institution_price_as_of;

        return $this;
    }

    /**
     * Gets institution_value
     *
     * @return float
     */
    public function getInstitutionValue()
    {
        return $this->container['institution_value'];
    }

    /**
     * Sets institution_value
     *
     * @param float $institution_value The value of the holding, as reported by the institution.
     *
     * @return self
     */
    public function setInstitutionValue($institution_value)
    {
        $this->container['institution_value'] = $institution_value;

        return $this;
    }

    /**
     * Gets cost_basis
     *
     * @return float
     */
    public function getCostBasis()
    {
        return $this->container['cost_basis'];
    }

    /**
     * Sets cost_basis
     *
     * @param float $cost_basis The cost basis of the holding.
     *
     * @return self
     */
    public function setCostBasis($cost_basis)
    {
        $this->container['cost_basis'] = $cost_basis;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity The total quantity of the asset held, as reported by the financial institution. If the security is an option, `quantity` will reflect the total number of options (typically the number of contracts multiplied by 100), not the number of contracts.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param string $iso_currency_code The ISO-4217 currency code of the holding. Always `null` if `unofficial_currency_code` is non-`null`.
     *
     * @return self
     */
    public function setIsoCurrencyCode($iso_currency_code)
    {
        $this->container['iso_currency_code'] = $iso_currency_code;

        return $this;
    }

    /**
     * Gets unofficial_currency_code
     *
     * @return string
     */
    public function getUnofficialCurrencyCode()
    {
        return $this->container['unofficial_currency_code'];
    }

    /**
     * Sets unofficial_currency_code
     *
     * @param string $unofficial_currency_code The unofficial currency code associated with the holding. Always `null` if `iso_currency_code` is non-`null`. Unofficial currency codes are used for currencies that do not have official ISO currency codes, such as cryptocurrencies and the currencies of certain countries.  See the [currency code schema](https://plaid.com/docs/api/accounts#currency-code-schema) for a full listing of supported `iso_currency_code`s.
     *
     * @return self
     */
    public function setUnofficialCurrencyCode($unofficial_currency_code)
    {
        $this->container['unofficial_currency_code'] = $unofficial_currency_code;

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


