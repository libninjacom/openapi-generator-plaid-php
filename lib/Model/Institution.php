<?php
/**
 * Institution
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
 * Institution Class Doc Comment
 *
 * @category Class
 * @description Details relating to a specific financial institution
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Institution implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Institution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'institution_id' => 'string',
        'name' => 'string',
        'products' => '\OpenAPI\Client\Model\Products[]',
        'country_codes' => '\OpenAPI\Client\Model\CountryCode[]',
        'url' => 'string',
        'primary_color' => 'string',
        'logo' => 'string',
        'routing_numbers' => 'string[]',
        'oauth' => 'bool',
        'status' => '\OpenAPI\Client\Model\InstitutionStatus',
        'payment_initiation_metadata' => '\OpenAPI\Client\Model\PaymentInitiationMetadata',
        'auth_metadata' => '\OpenAPI\Client\Model\AuthMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'institution_id' => null,
        'name' => null,
        'products' => null,
        'country_codes' => null,
        'url' => null,
        'primary_color' => null,
        'logo' => null,
        'routing_numbers' => null,
        'oauth' => null,
        'status' => null,
        'payment_initiation_metadata' => null,
        'auth_metadata' => null
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
        'institution_id' => 'institution_id',
        'name' => 'name',
        'products' => 'products',
        'country_codes' => 'country_codes',
        'url' => 'url',
        'primary_color' => 'primary_color',
        'logo' => 'logo',
        'routing_numbers' => 'routing_numbers',
        'oauth' => 'oauth',
        'status' => 'status',
        'payment_initiation_metadata' => 'payment_initiation_metadata',
        'auth_metadata' => 'auth_metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'institution_id' => 'setInstitutionId',
        'name' => 'setName',
        'products' => 'setProducts',
        'country_codes' => 'setCountryCodes',
        'url' => 'setUrl',
        'primary_color' => 'setPrimaryColor',
        'logo' => 'setLogo',
        'routing_numbers' => 'setRoutingNumbers',
        'oauth' => 'setOauth',
        'status' => 'setStatus',
        'payment_initiation_metadata' => 'setPaymentInitiationMetadata',
        'auth_metadata' => 'setAuthMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'institution_id' => 'getInstitutionId',
        'name' => 'getName',
        'products' => 'getProducts',
        'country_codes' => 'getCountryCodes',
        'url' => 'getUrl',
        'primary_color' => 'getPrimaryColor',
        'logo' => 'getLogo',
        'routing_numbers' => 'getRoutingNumbers',
        'oauth' => 'getOauth',
        'status' => 'getStatus',
        'payment_initiation_metadata' => 'getPaymentInitiationMetadata',
        'auth_metadata' => 'getAuthMetadata'
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
        $this->container['institution_id'] = $data['institution_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['products'] = $data['products'] ?? null;
        $this->container['country_codes'] = $data['country_codes'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['primary_color'] = $data['primary_color'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['routing_numbers'] = $data['routing_numbers'] ?? null;
        $this->container['oauth'] = $data['oauth'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['payment_initiation_metadata'] = $data['payment_initiation_metadata'] ?? null;
        $this->container['auth_metadata'] = $data['auth_metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['institution_id'] === null) {
            $invalidProperties[] = "'institution_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['products'] === null) {
            $invalidProperties[] = "'products' can't be null";
        }
        if ($this->container['country_codes'] === null) {
            $invalidProperties[] = "'country_codes' can't be null";
        }
        if ($this->container['routing_numbers'] === null) {
            $invalidProperties[] = "'routing_numbers' can't be null";
        }
        if ($this->container['oauth'] === null) {
            $invalidProperties[] = "'oauth' can't be null";
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
     * Gets institution_id
     *
     * @return string
     */
    public function getInstitutionId()
    {
        return $this->container['institution_id'];
    }

    /**
     * Sets institution_id
     *
     * @param string $institution_id Unique identifier for the institution
     *
     * @return self
     */
    public function setInstitutionId($institution_id)
    {
        $this->container['institution_id'] = $institution_id;

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
     * @param string $name The official name of the institution
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \OpenAPI\Client\Model\Products[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \OpenAPI\Client\Model\Products[] $products A list of the Plaid products supported by the institution. Note that only institutions that support Instant Auth will return `auth` in the product array; institutions that do not list `auth` may still support other Auth methods such as Instant Match or Automated Micro-deposit Verification. To identify institutions that support those methods, use the `auth_metadata` object. For more details, see [Full Auth coverage](https://plaid.com/docs/auth/coverage/).
     *
     * @return self
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets country_codes
     *
     * @return \OpenAPI\Client\Model\CountryCode[]
     */
    public function getCountryCodes()
    {
        return $this->container['country_codes'];
    }

    /**
     * Sets country_codes
     *
     * @param \OpenAPI\Client\Model\CountryCode[] $country_codes A list of the country codes supported by the institution.
     *
     * @return self
     */
    public function setCountryCodes($country_codes)
    {
        $this->container['country_codes'] = $country_codes;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The URL for the institution's website
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets primary_color
     *
     * @return string|null
     */
    public function getPrimaryColor()
    {
        return $this->container['primary_color'];
    }

    /**
     * Sets primary_color
     *
     * @param string|null $primary_color Hexadecimal representation of the primary color used by the institution
     *
     * @return self
     */
    public function setPrimaryColor($primary_color)
    {
        $this->container['primary_color'] = $primary_color;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo Base64 encoded representation of the institution's logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets routing_numbers
     *
     * @return string[]
     */
    public function getRoutingNumbers()
    {
        return $this->container['routing_numbers'];
    }

    /**
     * Sets routing_numbers
     *
     * @param string[] $routing_numbers A partial list of routing numbers associated with the institution. This list is provided for the purpose of looking up institutions by routing number. It is not comprehensive and should never be used as a complete list of routing numbers for an institution.
     *
     * @return self
     */
    public function setRoutingNumbers($routing_numbers)
    {
        $this->container['routing_numbers'] = $routing_numbers;

        return $this;
    }

    /**
     * Gets oauth
     *
     * @return bool
     */
    public function getOauth()
    {
        return $this->container['oauth'];
    }

    /**
     * Sets oauth
     *
     * @param bool $oauth Indicates that the institution has an OAuth login flow.
     *
     * @return self
     */
    public function setOauth($oauth)
    {
        $this->container['oauth'] = $oauth;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\InstitutionStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\InstitutionStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payment_initiation_metadata
     *
     * @return \OpenAPI\Client\Model\PaymentInitiationMetadata|null
     */
    public function getPaymentInitiationMetadata()
    {
        return $this->container['payment_initiation_metadata'];
    }

    /**
     * Sets payment_initiation_metadata
     *
     * @param \OpenAPI\Client\Model\PaymentInitiationMetadata|null $payment_initiation_metadata payment_initiation_metadata
     *
     * @return self
     */
    public function setPaymentInitiationMetadata($payment_initiation_metadata)
    {
        $this->container['payment_initiation_metadata'] = $payment_initiation_metadata;

        return $this;
    }

    /**
     * Gets auth_metadata
     *
     * @return \OpenAPI\Client\Model\AuthMetadata|null
     */
    public function getAuthMetadata()
    {
        return $this->container['auth_metadata'];
    }

    /**
     * Sets auth_metadata
     *
     * @param \OpenAPI\Client\Model\AuthMetadata|null $auth_metadata auth_metadata
     *
     * @return self
     */
    public function setAuthMetadata($auth_metadata)
    {
        $this->container['auth_metadata'] = $auth_metadata;

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


