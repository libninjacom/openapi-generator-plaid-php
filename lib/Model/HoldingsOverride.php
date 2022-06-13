<?php
/**
 * HoldingsOverride
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
 * HoldingsOverride Class Doc Comment
 *
 * @category Class
 * @description Specify the holdings on the account.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class HoldingsOverride implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HoldingsOverride';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'institution_price' => 'float',
        'institution_price_as_of' => '\DateTime',
        'cost_basis' => 'float',
        'quantity' => 'float',
        'currency' => 'string',
        'security' => '\OpenAPI\Client\Model\SecurityOverride'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'institution_price' => null,
        'institution_price_as_of' => 'date',
        'cost_basis' => null,
        'quantity' => null,
        'currency' => null,
        'security' => null
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
        'institution_price' => 'institution_price',
        'institution_price_as_of' => 'institution_price_as_of',
        'cost_basis' => 'cost_basis',
        'quantity' => 'quantity',
        'currency' => 'currency',
        'security' => 'security'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'institution_price' => 'setInstitutionPrice',
        'institution_price_as_of' => 'setInstitutionPriceAsOf',
        'cost_basis' => 'setCostBasis',
        'quantity' => 'setQuantity',
        'currency' => 'setCurrency',
        'security' => 'setSecurity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'institution_price' => 'getInstitutionPrice',
        'institution_price_as_of' => 'getInstitutionPriceAsOf',
        'cost_basis' => 'getCostBasis',
        'quantity' => 'getQuantity',
        'currency' => 'getCurrency',
        'security' => 'getSecurity'
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
        $this->container['institution_price'] = $data['institution_price'] ?? null;
        $this->container['institution_price_as_of'] = $data['institution_price_as_of'] ?? null;
        $this->container['cost_basis'] = $data['cost_basis'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['security'] = $data['security'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['institution_price'] === null) {
            $invalidProperties[] = "'institution_price' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['security'] === null) {
            $invalidProperties[] = "'security' can't be null";
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
     * @param float $institution_price The last price given by the institution for this security
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
     * @return \DateTime|null
     */
    public function getInstitutionPriceAsOf()
    {
        return $this->container['institution_price_as_of'];
    }

    /**
     * Sets institution_price_as_of
     *
     * @param \DateTime|null $institution_price_as_of The date at which `institution_price` was current. Must be formatted as an [ISO 8601](https://wikipedia.org/wiki/ISO_8601) date.
     *
     * @return self
     */
    public function setInstitutionPriceAsOf($institution_price_as_of)
    {
        $this->container['institution_price_as_of'] = $institution_price_as_of;

        return $this;
    }

    /**
     * Gets cost_basis
     *
     * @return float|null
     */
    public function getCostBasis()
    {
        return $this->container['cost_basis'];
    }

    /**
     * Sets cost_basis
     *
     * @param float|null $cost_basis The average original value of the holding. Multiple cost basis values for the same security purchased at different prices are not supported.
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
     * @param float $quantity The total quantity of the asset held, as reported by the financial institution.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Either a valid `iso_currency_code` or `unofficial_currency_code`
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets security
     *
     * @return \OpenAPI\Client\Model\SecurityOverride
     */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
     * Sets security
     *
     * @param \OpenAPI\Client\Model\SecurityOverride $security security
     *
     * @return self
     */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;

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


