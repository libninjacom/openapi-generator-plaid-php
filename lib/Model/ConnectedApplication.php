<?php
/**
 * ConnectedApplication
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
 * ConnectedApplication Class Doc Comment
 *
 * @category Class
 * @description Describes the connected application for a particular end user.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConnectedApplication implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConnectedApplication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application_id' => 'string',
        'name' => 'string',
        'logo' => 'string',
        'logo_url' => 'string',
        'application_url' => 'string',
        'reason_for_access' => 'string',
        'created_at' => '\DateTime',
        'join_date' => '\DateTime',
        'product_data_types' => 'string[]',
        'scopes' => '\OpenAPI\Client\Model\ScopesNullable',
        'requested_scopes' => '\OpenAPI\Client\Model\RequestedScopes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'application_id' => null,
        'name' => null,
        'logo' => null,
        'logo_url' => null,
        'application_url' => null,
        'reason_for_access' => null,
        'created_at' => 'date',
        'join_date' => 'date',
        'product_data_types' => null,
        'scopes' => null,
        'requested_scopes' => null
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
        'application_id' => 'application_id',
        'name' => 'name',
        'logo' => 'logo',
        'logo_url' => 'logo_url',
        'application_url' => 'application_url',
        'reason_for_access' => 'reason_for_access',
        'created_at' => 'created_at',
        'join_date' => 'join_date',
        'product_data_types' => 'product_data_types',
        'scopes' => 'scopes',
        'requested_scopes' => 'requested_scopes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_id' => 'setApplicationId',
        'name' => 'setName',
        'logo' => 'setLogo',
        'logo_url' => 'setLogoUrl',
        'application_url' => 'setApplicationUrl',
        'reason_for_access' => 'setReasonForAccess',
        'created_at' => 'setCreatedAt',
        'join_date' => 'setJoinDate',
        'product_data_types' => 'setProductDataTypes',
        'scopes' => 'setScopes',
        'requested_scopes' => 'setRequestedScopes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_id' => 'getApplicationId',
        'name' => 'getName',
        'logo' => 'getLogo',
        'logo_url' => 'getLogoUrl',
        'application_url' => 'getApplicationUrl',
        'reason_for_access' => 'getReasonForAccess',
        'created_at' => 'getCreatedAt',
        'join_date' => 'getJoinDate',
        'product_data_types' => 'getProductDataTypes',
        'scopes' => 'getScopes',
        'requested_scopes' => 'getRequestedScopes'
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

    public const PRODUCT_DATA_TYPES_BALANCE = 'ACCOUNT_BALANCE';
    public const PRODUCT_DATA_TYPES_USER_INFO = 'ACCOUNT_USER_INFO';
    public const PRODUCT_DATA_TYPES_TRANSACTIONS = 'ACCOUNT_TRANSACTIONS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductDataTypesAllowableValues()
    {
        return [
            self::PRODUCT_DATA_TYPES_BALANCE,
            self::PRODUCT_DATA_TYPES_USER_INFO,
            self::PRODUCT_DATA_TYPES_TRANSACTIONS,
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
        $this->container['application_id'] = $data['application_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['logo_url'] = $data['logo_url'] ?? null;
        $this->container['application_url'] = $data['application_url'] ?? null;
        $this->container['reason_for_access'] = $data['reason_for_access'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['join_date'] = $data['join_date'] ?? null;
        $this->container['product_data_types'] = $data['product_data_types'] ?? null;
        $this->container['scopes'] = $data['scopes'] ?? null;
        $this->container['requested_scopes'] = $data['requested_scopes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['application_id'] === null) {
            $invalidProperties[] = "'application_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['logo'] === null) {
            $invalidProperties[] = "'logo' can't be null";
        }
        if ($this->container['logo_url'] === null) {
            $invalidProperties[] = "'logo_url' can't be null";
        }
        if ($this->container['application_url'] === null) {
            $invalidProperties[] = "'application_url' can't be null";
        }
        if ($this->container['reason_for_access'] === null) {
            $invalidProperties[] = "'reason_for_access' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['join_date'] === null) {
            $invalidProperties[] = "'join_date' can't be null";
        }
        if ($this->container['product_data_types'] === null) {
            $invalidProperties[] = "'product_data_types' can't be null";
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
     * Gets application_id
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string $application_id This field will map to the application ID that is returned from /item/applications/list, or provided to the institution in an oauth redirect.
     *
     * @return self
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

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
     * @param string $name The name of the application
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     * @deprecated
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo A URL that links to the application logo image (will be deprecated in the future, please use logo_url).
     *
     * @return self
     * @deprecated
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string $logo_url A URL that links to the application logo image.
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets application_url
     *
     * @return string
     */
    public function getApplicationUrl()
    {
        return $this->container['application_url'];
    }

    /**
     * Sets application_url
     *
     * @param string $application_url The URL for the application's website
     *
     * @return self
     */
    public function setApplicationUrl($application_url)
    {
        $this->container['application_url'] = $application_url;

        return $this;
    }

    /**
     * Gets reason_for_access
     *
     * @return string
     */
    public function getReasonForAccess()
    {
        return $this->container['reason_for_access'];
    }

    /**
     * Sets reason_for_access
     *
     * @param string $reason_for_access A string provided by the connected app stating why they use their respective enabled products.
     *
     * @return self
     */
    public function setReasonForAccess($reason_for_access)
    {
        $this->container['reason_for_access'] = $reason_for_access;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The date this application was linked in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) (YYYY-MM-DD) format in UTC.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets join_date
     *
     * @return \DateTime
     */
    public function getJoinDate()
    {
        return $this->container['join_date'];
    }

    /**
     * Sets join_date
     *
     * @param \DateTime $join_date The date this application was granted production access at Plaid in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) (YYYY-MM-DD) format in UTC.
     *
     * @return self
     */
    public function setJoinDate($join_date)
    {
        $this->container['join_date'] = $join_date;

        return $this;
    }

    /**
     * Gets product_data_types
     *
     * @return string[]
     */
    public function getProductDataTypes()
    {
        return $this->container['product_data_types'];
    }

    /**
     * Sets product_data_types
     *
     * @param string[] $product_data_types (Deprecated) A list of enums representing the data collected and products enabled for this connected application.
     *
     * @return self
     */
    public function setProductDataTypes($product_data_types)
    {
        $allowedValues = $this->getProductDataTypesAllowableValues();
        if (array_diff($product_data_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'product_data_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_data_types'] = $product_data_types;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return \OpenAPI\Client\Model\ScopesNullable|null
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param \OpenAPI\Client\Model\ScopesNullable|null $scopes scopes
     *
     * @return self
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets requested_scopes
     *
     * @return \OpenAPI\Client\Model\RequestedScopes|null
     */
    public function getRequestedScopes()
    {
        return $this->container['requested_scopes'];
    }

    /**
     * Sets requested_scopes
     *
     * @param \OpenAPI\Client\Model\RequestedScopes|null $requested_scopes requested_scopes
     *
     * @return self
     */
    public function setRequestedScopes($requested_scopes)
    {
        $this->container['requested_scopes'] = $requested_scopes;

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


