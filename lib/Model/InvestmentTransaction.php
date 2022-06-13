<?php
/**
 * InvestmentTransaction
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
 * InvestmentTransaction Class Doc Comment
 *
 * @category Class
 * @description A transaction within an investment account.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvestmentTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvestmentTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'investment_transaction_id' => 'string',
        'cancel_transaction_id' => 'string',
        'account_id' => 'string',
        'security_id' => 'string',
        'date' => '\DateTime',
        'name' => 'string',
        'quantity' => 'float',
        'amount' => 'float',
        'price' => 'float',
        'fees' => 'float',
        'type' => 'string',
        'subtype' => 'string',
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
        'investment_transaction_id' => null,
        'cancel_transaction_id' => null,
        'account_id' => null,
        'security_id' => null,
        'date' => 'date',
        'name' => null,
        'quantity' => null,
        'amount' => null,
        'price' => null,
        'fees' => null,
        'type' => null,
        'subtype' => null,
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
        'investment_transaction_id' => 'investment_transaction_id',
        'cancel_transaction_id' => 'cancel_transaction_id',
        'account_id' => 'account_id',
        'security_id' => 'security_id',
        'date' => 'date',
        'name' => 'name',
        'quantity' => 'quantity',
        'amount' => 'amount',
        'price' => 'price',
        'fees' => 'fees',
        'type' => 'type',
        'subtype' => 'subtype',
        'iso_currency_code' => 'iso_currency_code',
        'unofficial_currency_code' => 'unofficial_currency_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'investment_transaction_id' => 'setInvestmentTransactionId',
        'cancel_transaction_id' => 'setCancelTransactionId',
        'account_id' => 'setAccountId',
        'security_id' => 'setSecurityId',
        'date' => 'setDate',
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'amount' => 'setAmount',
        'price' => 'setPrice',
        'fees' => 'setFees',
        'type' => 'setType',
        'subtype' => 'setSubtype',
        'iso_currency_code' => 'setIsoCurrencyCode',
        'unofficial_currency_code' => 'setUnofficialCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'investment_transaction_id' => 'getInvestmentTransactionId',
        'cancel_transaction_id' => 'getCancelTransactionId',
        'account_id' => 'getAccountId',
        'security_id' => 'getSecurityId',
        'date' => 'getDate',
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'amount' => 'getAmount',
        'price' => 'getPrice',
        'fees' => 'getFees',
        'type' => 'getType',
        'subtype' => 'getSubtype',
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

    public const TYPE_BUY = 'buy';
    public const TYPE_SELL = 'sell';
    public const TYPE_CANCEL = 'cancel';
    public const TYPE_CASH = 'cash';
    public const TYPE_FEE = 'fee';
    public const TYPE_TRANSFER = 'transfer';
    public const SUBTYPE_ACCOUNT_FEE = 'account fee';
    public const SUBTYPE_ADJUSTMENT = 'adjustment';
    public const SUBTYPE_ASSIGNMENT = 'assignment';
    public const SUBTYPE_BUY = 'buy';
    public const SUBTYPE_BUY_TO_COVER = 'buy to cover';
    public const SUBTYPE_CONTRIBUTION = 'contribution';
    public const SUBTYPE_DEPOSIT = 'deposit';
    public const SUBTYPE_DISTRIBUTION = 'distribution';
    public const SUBTYPE_DIVIDEND = 'dividend';
    public const SUBTYPE_DIVIDEND_REINVESTMENT = 'dividend reinvestment';
    public const SUBTYPE_EXERCISE = 'exercise';
    public const SUBTYPE_EXPIRE = 'expire';
    public const SUBTYPE_FUND_FEE = 'fund fee';
    public const SUBTYPE_INTEREST = 'interest';
    public const SUBTYPE_INTEREST_RECEIVABLE = 'interest receivable';
    public const SUBTYPE_INTEREST_REINVESTMENT = 'interest reinvestment';
    public const SUBTYPE_LEGAL_FEE = 'legal fee';
    public const SUBTYPE_LOAN_PAYMENT = 'loan payment';
    public const SUBTYPE_LONG_TERM_CAPITAL_GAIN = 'long-term capital gain';
    public const SUBTYPE_LONG_TERM_CAPITAL_GAIN_REINVESTMENT = 'long-term capital gain reinvestment';
    public const SUBTYPE_MANAGEMENT_FEE = 'management fee';
    public const SUBTYPE_MARGIN_EXPENSE = 'margin expense';
    public const SUBTYPE_MERGER = 'merger';
    public const SUBTYPE_MISCELLANEOUS_FEE = 'miscellaneous fee';
    public const SUBTYPE_NON_QUALIFIED_DIVIDEND = 'non-qualified dividend';
    public const SUBTYPE_NON_RESIDENT_TAX = 'non-resident tax';
    public const SUBTYPE_PENDING_CREDIT = 'pending credit';
    public const SUBTYPE_PENDING_DEBIT = 'pending debit';
    public const SUBTYPE_QUALIFIED_DIVIDEND = 'qualified dividend';
    public const SUBTYPE_REBALANCE = 'rebalance';
    public const SUBTYPE_RETURN_OF_PRINCIPAL = 'return of principal';
    public const SUBTYPE_SELL = 'sell';
    public const SUBTYPE_SELL_SHORT = 'sell short';
    public const SUBTYPE_SHORT_TERM_CAPITAL_GAIN = 'short-term capital gain';
    public const SUBTYPE_SHORT_TERM_CAPITAL_GAIN_REINVESTMENT = 'short-term capital gain reinvestment';
    public const SUBTYPE_SPIN_OFF = 'spin off';
    public const SUBTYPE_SPLIT = 'split';
    public const SUBTYPE_STOCK_DISTRIBUTION = 'stock distribution';
    public const SUBTYPE_TAX = 'tax';
    public const SUBTYPE_TAX_WITHHELD = 'tax withheld';
    public const SUBTYPE_TRANSFER = 'transfer';
    public const SUBTYPE_TRANSFER_FEE = 'transfer fee';
    public const SUBTYPE_TRUST_FEE = 'trust fee';
    public const SUBTYPE_UNQUALIFIED_GAIN = 'unqualified gain';
    public const SUBTYPE_WITHDRAWAL = 'withdrawal';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BUY,
            self::TYPE_SELL,
            self::TYPE_CANCEL,
            self::TYPE_CASH,
            self::TYPE_FEE,
            self::TYPE_TRANSFER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubtypeAllowableValues()
    {
        return [
            self::SUBTYPE_ACCOUNT_FEE,
            self::SUBTYPE_ADJUSTMENT,
            self::SUBTYPE_ASSIGNMENT,
            self::SUBTYPE_BUY,
            self::SUBTYPE_BUY_TO_COVER,
            self::SUBTYPE_CONTRIBUTION,
            self::SUBTYPE_DEPOSIT,
            self::SUBTYPE_DISTRIBUTION,
            self::SUBTYPE_DIVIDEND,
            self::SUBTYPE_DIVIDEND_REINVESTMENT,
            self::SUBTYPE_EXERCISE,
            self::SUBTYPE_EXPIRE,
            self::SUBTYPE_FUND_FEE,
            self::SUBTYPE_INTEREST,
            self::SUBTYPE_INTEREST_RECEIVABLE,
            self::SUBTYPE_INTEREST_REINVESTMENT,
            self::SUBTYPE_LEGAL_FEE,
            self::SUBTYPE_LOAN_PAYMENT,
            self::SUBTYPE_LONG_TERM_CAPITAL_GAIN,
            self::SUBTYPE_LONG_TERM_CAPITAL_GAIN_REINVESTMENT,
            self::SUBTYPE_MANAGEMENT_FEE,
            self::SUBTYPE_MARGIN_EXPENSE,
            self::SUBTYPE_MERGER,
            self::SUBTYPE_MISCELLANEOUS_FEE,
            self::SUBTYPE_NON_QUALIFIED_DIVIDEND,
            self::SUBTYPE_NON_RESIDENT_TAX,
            self::SUBTYPE_PENDING_CREDIT,
            self::SUBTYPE_PENDING_DEBIT,
            self::SUBTYPE_QUALIFIED_DIVIDEND,
            self::SUBTYPE_REBALANCE,
            self::SUBTYPE_RETURN_OF_PRINCIPAL,
            self::SUBTYPE_SELL,
            self::SUBTYPE_SELL_SHORT,
            self::SUBTYPE_SHORT_TERM_CAPITAL_GAIN,
            self::SUBTYPE_SHORT_TERM_CAPITAL_GAIN_REINVESTMENT,
            self::SUBTYPE_SPIN_OFF,
            self::SUBTYPE_SPLIT,
            self::SUBTYPE_STOCK_DISTRIBUTION,
            self::SUBTYPE_TAX,
            self::SUBTYPE_TAX_WITHHELD,
            self::SUBTYPE_TRANSFER,
            self::SUBTYPE_TRANSFER_FEE,
            self::SUBTYPE_TRUST_FEE,
            self::SUBTYPE_UNQUALIFIED_GAIN,
            self::SUBTYPE_WITHDRAWAL,
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
        $this->container['investment_transaction_id'] = $data['investment_transaction_id'] ?? null;
        $this->container['cancel_transaction_id'] = $data['cancel_transaction_id'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['security_id'] = $data['security_id'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['subtype'] = $data['subtype'] ?? null;
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

        if ($this->container['investment_transaction_id'] === null) {
            $invalidProperties[] = "'investment_transaction_id' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['security_id'] === null) {
            $invalidProperties[] = "'security_id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['fees'] === null) {
            $invalidProperties[] = "'fees' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['subtype'] === null) {
            $invalidProperties[] = "'subtype' can't be null";
        }
        $allowedValues = $this->getSubtypeAllowableValues();
        if (!is_null($this->container['subtype']) && !in_array($this->container['subtype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subtype', must be one of '%s'",
                $this->container['subtype'],
                implode("', '", $allowedValues)
            );
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
     * Gets investment_transaction_id
     *
     * @return string
     */
    public function getInvestmentTransactionId()
    {
        return $this->container['investment_transaction_id'];
    }

    /**
     * Sets investment_transaction_id
     *
     * @param string $investment_transaction_id The ID of the Investment transaction, unique across all Plaid transactions. Like all Plaid identifiers, the `investment_transaction_id` is case sensitive.
     *
     * @return self
     */
    public function setInvestmentTransactionId($investment_transaction_id)
    {
        $this->container['investment_transaction_id'] = $investment_transaction_id;

        return $this;
    }

    /**
     * Gets cancel_transaction_id
     *
     * @return string|null
     * @deprecated
     */
    public function getCancelTransactionId()
    {
        return $this->container['cancel_transaction_id'];
    }

    /**
     * Sets cancel_transaction_id
     *
     * @param string|null $cancel_transaction_id A legacy field formerly used internally by Plaid to identify certain canceled transactions.
     *
     * @return self
     * @deprecated
     */
    public function setCancelTransactionId($cancel_transaction_id)
    {
        $this->container['cancel_transaction_id'] = $cancel_transaction_id;

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
     * @param string $account_id The `account_id` of the account against which this transaction posted.
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
     * @param string $security_id The `security_id` to which this transaction is related.
     *
     * @return self
     */
    public function setSecurityId($security_id)
    {
        $this->container['security_id'] = $security_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The [ISO 8601](https://wikipedia.org/wiki/ISO_8601) posting date for the transaction.
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * @param string $name The institution’s description of the transaction.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param float $quantity The number of units of the security involved in this transaction.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The complete value of the transaction. Positive values when cash is debited, e.g. purchases of stock; negative values when cash is credited, e.g. sales of stock. Treatment remains the same for cash-only movements unassociated with securities.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price The price of the security at which this transaction occurred.
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return float
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param float $fees The combined value of all fees applied to this transaction
     *
     * @return self
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Value is one of the following: `buy`: Buying an investment `sell`: Selling an investment `cancel`: A cancellation of a pending transaction `cash`: Activity that modifies a cash position `fee`: A fee on the account `transfer`: Activity which modifies a position, but not through buy/sell activity e.g. options exercise, portfolio transfer  For descriptions of possible transaction types and subtypes, see the [Investment transaction types schema](https://plaid.com/docs/api/accounts/#investment-transaction-types-schema).
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets subtype
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param string $subtype For descriptions of possible transaction types and subtypes, see the [Investment transaction types schema](https://plaid.com/docs/api/accounts/#investment-transaction-types-schema).
     *
     * @return self
     */
    public function setSubtype($subtype)
    {
        $allowedValues = $this->getSubtypeAllowableValues();
        if (!in_array($subtype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subtype', must be one of '%s'",
                    $subtype,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subtype'] = $subtype;

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
     * @param string $iso_currency_code The ISO-4217 currency code of the transaction. Always `null` if `unofficial_currency_code` is non-`null`.
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


