<?php
/**
 * RecaptchaRequiredError
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
 * RecaptchaRequiredError Class Doc Comment
 *
 * @category Class
 * @description The request was flagged by Plaid&#39;s fraud system, and requires additional verification to ensure they are not a bot.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RecaptchaRequiredError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Recaptcha_RequiredError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_type' => 'string',
        'error_code' => 'string',
        'display_message' => 'string',
        'http_code' => 'string',
        'link_user_experience' => 'string',
        'common_causes' => 'string',
        'troubleshooting_steps' => 'string'
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
        'display_message' => null,
        'http_code' => null,
        'link_user_experience' => null,
        'common_causes' => null,
        'troubleshooting_steps' => null
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
        'display_message' => 'display_message',
        'http_code' => 'http_code',
        'link_user_experience' => 'link_user_experience',
        'common_causes' => 'common_causes',
        'troubleshooting_steps' => 'troubleshooting_steps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_type' => 'setErrorType',
        'error_code' => 'setErrorCode',
        'display_message' => 'setDisplayMessage',
        'http_code' => 'setHttpCode',
        'link_user_experience' => 'setLinkUserExperience',
        'common_causes' => 'setCommonCauses',
        'troubleshooting_steps' => 'setTroubleshootingSteps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_type' => 'getErrorType',
        'error_code' => 'getErrorCode',
        'display_message' => 'getDisplayMessage',
        'http_code' => 'getHttpCode',
        'link_user_experience' => 'getLinkUserExperience',
        'common_causes' => 'getCommonCauses',
        'troubleshooting_steps' => 'getTroubleshootingSteps'
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
        $this->container['error_type'] = $data['error_type'] ?? null;
        $this->container['error_code'] = $data['error_code'] ?? null;
        $this->container['display_message'] = $data['display_message'] ?? null;
        $this->container['http_code'] = $data['http_code'] ?? null;
        $this->container['link_user_experience'] = $data['link_user_experience'] ?? null;
        $this->container['common_causes'] = $data['common_causes'] ?? null;
        $this->container['troubleshooting_steps'] = $data['troubleshooting_steps'] ?? null;
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
        if ($this->container['error_code'] === null) {
            $invalidProperties[] = "'error_code' can't be null";
        }
        if ($this->container['display_message'] === null) {
            $invalidProperties[] = "'display_message' can't be null";
        }
        if ($this->container['http_code'] === null) {
            $invalidProperties[] = "'http_code' can't be null";
        }
        if ($this->container['link_user_experience'] === null) {
            $invalidProperties[] = "'link_user_experience' can't be null";
        }
        if ($this->container['common_causes'] === null) {
            $invalidProperties[] = "'common_causes' can't be null";
        }
        if ($this->container['troubleshooting_steps'] === null) {
            $invalidProperties[] = "'troubleshooting_steps' can't be null";
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
     * @param string $error_type RECAPTCHA_ERROR
     *
     * @return self
     */
    public function setErrorType($error_type)
    {
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
     * @param string $error_code RECAPTCHA_REQUIRED
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

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
     * @param string $display_message display_message
     *
     * @return self
     */
    public function setDisplayMessage($display_message)
    {
        $this->container['display_message'] = $display_message;

        return $this;
    }

    /**
     * Gets http_code
     *
     * @return string
     */
    public function getHttpCode()
    {
        return $this->container['http_code'];
    }

    /**
     * Sets http_code
     *
     * @param string $http_code 400
     *
     * @return self
     */
    public function setHttpCode($http_code)
    {
        $this->container['http_code'] = $http_code;

        return $this;
    }

    /**
     * Gets link_user_experience
     *
     * @return string
     */
    public function getLinkUserExperience()
    {
        return $this->container['link_user_experience'];
    }

    /**
     * Sets link_user_experience
     *
     * @param string $link_user_experience Your user will be prompted to solve a Google reCAPTCHA challenge in the Link Recaptcha pane. If they solve the challenge successfully, the user's request is resubmitted and they are directed to the next Item creation step.
     *
     * @return self
     */
    public function setLinkUserExperience($link_user_experience)
    {
        $this->container['link_user_experience'] = $link_user_experience;

        return $this;
    }

    /**
     * Gets common_causes
     *
     * @return string
     */
    public function getCommonCauses()
    {
        return $this->container['common_causes'];
    }

    /**
     * Sets common_causes
     *
     * @param string $common_causes Plaid's fraud system detects abusive traffic and considers a variety of parameters throughout Item creation requests. When a request is considered risky or possibly fraudulent, Link presents a reCAPTCHA for the user to solve.
     *
     * @return self
     */
    public function setCommonCauses($common_causes)
    {
        $this->container['common_causes'] = $common_causes;

        return $this;
    }

    /**
     * Gets troubleshooting_steps
     *
     * @return string
     */
    public function getTroubleshootingSteps()
    {
        return $this->container['troubleshooting_steps'];
    }

    /**
     * Sets troubleshooting_steps
     *
     * @param string $troubleshooting_steps Link will automatically guide your user through reCAPTCHA verification. As a general rule, we recommend instrumenting basic fraud monitoring to detect and protect your website from spam and abuse.  If your user cannot verify their session, please submit a Support ticket with the following identifiers: `link_session_id` or `request_id`
     *
     * @return self
     */
    public function setTroubleshootingSteps($troubleshooting_steps)
    {
        $this->container['troubleshooting_steps'] = $troubleshooting_steps;

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


