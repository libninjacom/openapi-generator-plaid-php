<?php
/**
 * Error
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
 * Error Class Doc Comment
 *
 * @category Class
 * @description We use standard HTTP response codes for success and failure notifications, and our errors are further classified by &#x60;error_type&#x60;. In general, 200 HTTP codes correspond to success, 40X codes are for developer- or user-related failures, and 50X codes are for Plaid-related issues.  Error fields will be &#x60;null&#x60; if no error has occurred.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Error implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_type' => 'string',
        'error_code' => 'string',
        'error_message' => 'string',
        'display_message' => 'string',
        'request_id' => 'string',
        'causes' => 'mixed[]',
        'status' => 'float',
        'documentation_url' => 'string',
        'suggested_action' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_type' => null,
        'error_code' => null,
        'error_message' => null,
        'display_message' => null,
        'request_id' => null,
        'causes' => null,
        'status' => null,
        'documentation_url' => null,
        'suggested_action' => null
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
        'error_type' => 'error_type',
        'error_code' => 'error_code',
        'error_message' => 'error_message',
        'display_message' => 'display_message',
        'request_id' => 'request_id',
        'causes' => 'causes',
        'status' => 'status',
        'documentation_url' => 'documentation_url',
        'suggested_action' => 'suggested_action'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_type' => 'setErrorType',
        'error_code' => 'setErrorCode',
        'error_message' => 'setErrorMessage',
        'display_message' => 'setDisplayMessage',
        'request_id' => 'setRequestId',
        'causes' => 'setCauses',
        'status' => 'setStatus',
        'documentation_url' => 'setDocumentationUrl',
        'suggested_action' => 'setSuggestedAction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_type' => 'getErrorType',
        'error_code' => 'getErrorCode',
        'error_message' => 'getErrorMessage',
        'display_message' => 'getDisplayMessage',
        'request_id' => 'getRequestId',
        'causes' => 'getCauses',
        'status' => 'getStatus',
        'documentation_url' => 'getDocumentationUrl',
        'suggested_action' => 'getSuggestedAction'
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

    public const ERROR_TYPE_INVALID_REQUEST = 'INVALID_REQUEST';
    public const ERROR_TYPE_INVALID_RESULT = 'INVALID_RESULT';
    public const ERROR_TYPE_INVALID_INPUT = 'INVALID_INPUT';
    public const ERROR_TYPE_INSTITUTION_ERROR = 'INSTITUTION_ERROR';
    public const ERROR_TYPE_RATE_LIMIT_EXCEEDED = 'RATE_LIMIT_EXCEEDED';
    public const ERROR_TYPE_API_ERROR = 'API_ERROR';
    public const ERROR_TYPE_ITEM_ERROR = 'ITEM_ERROR';
    public const ERROR_TYPE_ASSET_REPORT_ERROR = 'ASSET_REPORT_ERROR';
    public const ERROR_TYPE_RECAPTCHA_ERROR = 'RECAPTCHA_ERROR';
    public const ERROR_TYPE_OAUTH_ERROR = 'OAUTH_ERROR';
    public const ERROR_TYPE_PAYMENT_ERROR = 'PAYMENT_ERROR';
    public const ERROR_TYPE_BANK_TRANSFER_ERROR = 'BANK_TRANSFER_ERROR';
    public const ERROR_TYPE_INCOME_VERIFICATION_ERROR = 'INCOME_VERIFICATION_ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorTypeAllowableValues()
    {
        return [
            self::ERROR_TYPE_INVALID_REQUEST,
            self::ERROR_TYPE_INVALID_RESULT,
            self::ERROR_TYPE_INVALID_INPUT,
            self::ERROR_TYPE_INSTITUTION_ERROR,
            self::ERROR_TYPE_RATE_LIMIT_EXCEEDED,
            self::ERROR_TYPE_API_ERROR,
            self::ERROR_TYPE_ITEM_ERROR,
            self::ERROR_TYPE_ASSET_REPORT_ERROR,
            self::ERROR_TYPE_RECAPTCHA_ERROR,
            self::ERROR_TYPE_OAUTH_ERROR,
            self::ERROR_TYPE_PAYMENT_ERROR,
            self::ERROR_TYPE_BANK_TRANSFER_ERROR,
            self::ERROR_TYPE_INCOME_VERIFICATION_ERROR,
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
        $this->container['error_type'] = $data['error_type'] ?? null;
        $this->container['error_code'] = $data['error_code'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['display_message'] = $data['display_message'] ?? null;
        $this->container['request_id'] = $data['request_id'] ?? null;
        $this->container['causes'] = $data['causes'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['documentation_url'] = $data['documentation_url'] ?? null;
        $this->container['suggested_action'] = $data['suggested_action'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['error_type'] === null) {
            $invalidProperties[] = "'error_type' can't be null";
        }
        $allowedValues = $this->getErrorTypeAllowableValues();
        if (!is_null($this->container['error_type']) && !in_array($this->container['error_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'error_type', must be one of '%s'",
                $this->container['error_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['error_code'] === null) {
            $invalidProperties[] = "'error_code' can't be null";
        }
        if ($this->container['error_message'] === null) {
            $invalidProperties[] = "'error_message' can't be null";
        }
        if ($this->container['display_message'] === null) {
            $invalidProperties[] = "'display_message' can't be null";
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
     * Gets error_type
     *
     * @return string
     */
    public function getErrorType()
    {
        return $this->container['error_type'];
    }

    /**
     * Sets error_type
     *
     * @param string $error_type A broad categorization of the error. Safe for programmatic use.
     *
     * @return self
     */
    public function setErrorType($error_type)
    {
        $allowedValues = $this->getErrorTypeAllowableValues();
        if (!in_array($error_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'error_type', must be one of '%s'",
                    $error_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_type'] = $error_type;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string $error_code The particular error code. Safe for programmatic use.
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message A developer-friendly representation of the error code. This may change over time and is not safe for programmatic use.
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets display_message
     *
     * @return string
     */
    public function getDisplayMessage()
    {
        return $this->container['display_message'];
    }

    /**
     * Sets display_message
     *
     * @param string $display_message A user-friendly representation of the error code. `null` if the error is not related to user action.  This may change over time and is not safe for programmatic use.
     *
     * @return self
     */
    public function setDisplayMessage($display_message)
    {
        $this->container['display_message'] = $display_message;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string|null $request_id A unique ID identifying the request, to be used for troubleshooting purposes. This field will be omitted in errors provided by webhooks.
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets causes
     *
     * @return mixed[]|null
     */
    public function getCauses()
    {
        return $this->container['causes'];
    }

    /**
     * Sets causes
     *
     * @param mixed[]|null $causes In the Assets product, a request can pertain to more than one Item. If an error is returned for such a request, `causes` will return an array of errors containing a breakdown of these errors on the individual Item level, if any can be identified.  `causes` will only be provided for the `error_type` `ASSET_REPORT_ERROR`. `causes` will also not be populated inside an error nested within a `warning` object.
     *
     * @return self
     */
    public function setCauses($causes)
    {
        $this->container['causes'] = $causes;

        return $this;
    }

    /**
     * Gets status
     *
     * @return float|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param float|null $status The HTTP status code associated with the error. This will only be returned in the response body when the error information is provided via a webhook.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets documentation_url
     *
     * @return string|null
     */
    public function getDocumentationUrl()
    {
        return $this->container['documentation_url'];
    }

    /**
     * Sets documentation_url
     *
     * @param string|null $documentation_url The URL of a Plaid documentation page with more information about the error
     *
     * @return self
     */
    public function setDocumentationUrl($documentation_url)
    {
        $this->container['documentation_url'] = $documentation_url;

        return $this;
    }

    /**
     * Gets suggested_action
     *
     * @return string|null
     */
    public function getSuggestedAction()
    {
        return $this->container['suggested_action'];
    }

    /**
     * Sets suggested_action
     *
     * @param string|null $suggested_action Suggested steps for resolving the error
     *
     * @return self
     */
    public function setSuggestedAction($suggested_action)
    {
        $this->container['suggested_action'] = $suggested_action;

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


