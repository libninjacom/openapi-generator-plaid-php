<?php
/**
 * LiabilityOverride
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
 * LiabilityOverride Class Doc Comment
 *
 * @category Class
 * @description Used to configure Sandbox test data for the Liabilities product
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LiabilityOverride implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LiabilityOverride';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'purchase_apr' => 'float',
        'cash_apr' => 'float',
        'balance_transfer_apr' => 'float',
        'special_apr' => 'float',
        'last_payment_amount' => 'float',
        'minimum_payment_amount' => 'float',
        'is_overdue' => 'bool',
        'origination_date' => '\DateTime',
        'principal' => 'float',
        'nominal_apr' => 'float',
        'interest_capitalization_grace_period_months' => 'float',
        'repayment_model' => '\OpenAPI\Client\Model\StudentLoanRepaymentModel',
        'expected_payoff_date' => '\DateTime',
        'guarantor' => 'string',
        'is_federal' => 'bool',
        'loan_name' => 'string',
        'loan_status' => '\OpenAPI\Client\Model\StudentLoanStatus',
        'payment_reference_number' => 'string',
        'pslf_status' => '\OpenAPI\Client\Model\PSLFStatus',
        'repayment_plan_description' => 'string',
        'repayment_plan_type' => 'string',
        'sequence_number' => 'string',
        'servicer_address' => '\OpenAPI\Client\Model\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'purchase_apr' => null,
        'cash_apr' => null,
        'balance_transfer_apr' => null,
        'special_apr' => null,
        'last_payment_amount' => null,
        'minimum_payment_amount' => null,
        'is_overdue' => null,
        'origination_date' => 'date',
        'principal' => null,
        'nominal_apr' => null,
        'interest_capitalization_grace_period_months' => null,
        'repayment_model' => null,
        'expected_payoff_date' => 'date',
        'guarantor' => null,
        'is_federal' => null,
        'loan_name' => null,
        'loan_status' => null,
        'payment_reference_number' => null,
        'pslf_status' => null,
        'repayment_plan_description' => null,
        'repayment_plan_type' => null,
        'sequence_number' => null,
        'servicer_address' => null
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
        'type' => 'type',
        'purchase_apr' => 'purchase_apr',
        'cash_apr' => 'cash_apr',
        'balance_transfer_apr' => 'balance_transfer_apr',
        'special_apr' => 'special_apr',
        'last_payment_amount' => 'last_payment_amount',
        'minimum_payment_amount' => 'minimum_payment_amount',
        'is_overdue' => 'is_overdue',
        'origination_date' => 'origination_date',
        'principal' => 'principal',
        'nominal_apr' => 'nominal_apr',
        'interest_capitalization_grace_period_months' => 'interest_capitalization_grace_period_months',
        'repayment_model' => 'repayment_model',
        'expected_payoff_date' => 'expected_payoff_date',
        'guarantor' => 'guarantor',
        'is_federal' => 'is_federal',
        'loan_name' => 'loan_name',
        'loan_status' => 'loan_status',
        'payment_reference_number' => 'payment_reference_number',
        'pslf_status' => 'pslf_status',
        'repayment_plan_description' => 'repayment_plan_description',
        'repayment_plan_type' => 'repayment_plan_type',
        'sequence_number' => 'sequence_number',
        'servicer_address' => 'servicer_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'purchase_apr' => 'setPurchaseApr',
        'cash_apr' => 'setCashApr',
        'balance_transfer_apr' => 'setBalanceTransferApr',
        'special_apr' => 'setSpecialApr',
        'last_payment_amount' => 'setLastPaymentAmount',
        'minimum_payment_amount' => 'setMinimumPaymentAmount',
        'is_overdue' => 'setIsOverdue',
        'origination_date' => 'setOriginationDate',
        'principal' => 'setPrincipal',
        'nominal_apr' => 'setNominalApr',
        'interest_capitalization_grace_period_months' => 'setInterestCapitalizationGracePeriodMonths',
        'repayment_model' => 'setRepaymentModel',
        'expected_payoff_date' => 'setExpectedPayoffDate',
        'guarantor' => 'setGuarantor',
        'is_federal' => 'setIsFederal',
        'loan_name' => 'setLoanName',
        'loan_status' => 'setLoanStatus',
        'payment_reference_number' => 'setPaymentReferenceNumber',
        'pslf_status' => 'setPslfStatus',
        'repayment_plan_description' => 'setRepaymentPlanDescription',
        'repayment_plan_type' => 'setRepaymentPlanType',
        'sequence_number' => 'setSequenceNumber',
        'servicer_address' => 'setServicerAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'purchase_apr' => 'getPurchaseApr',
        'cash_apr' => 'getCashApr',
        'balance_transfer_apr' => 'getBalanceTransferApr',
        'special_apr' => 'getSpecialApr',
        'last_payment_amount' => 'getLastPaymentAmount',
        'minimum_payment_amount' => 'getMinimumPaymentAmount',
        'is_overdue' => 'getIsOverdue',
        'origination_date' => 'getOriginationDate',
        'principal' => 'getPrincipal',
        'nominal_apr' => 'getNominalApr',
        'interest_capitalization_grace_period_months' => 'getInterestCapitalizationGracePeriodMonths',
        'repayment_model' => 'getRepaymentModel',
        'expected_payoff_date' => 'getExpectedPayoffDate',
        'guarantor' => 'getGuarantor',
        'is_federal' => 'getIsFederal',
        'loan_name' => 'getLoanName',
        'loan_status' => 'getLoanStatus',
        'payment_reference_number' => 'getPaymentReferenceNumber',
        'pslf_status' => 'getPslfStatus',
        'repayment_plan_description' => 'getRepaymentPlanDescription',
        'repayment_plan_type' => 'getRepaymentPlanType',
        'sequence_number' => 'getSequenceNumber',
        'servicer_address' => 'getServicerAddress'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['purchase_apr'] = $data['purchase_apr'] ?? null;
        $this->container['cash_apr'] = $data['cash_apr'] ?? null;
        $this->container['balance_transfer_apr'] = $data['balance_transfer_apr'] ?? null;
        $this->container['special_apr'] = $data['special_apr'] ?? null;
        $this->container['last_payment_amount'] = $data['last_payment_amount'] ?? null;
        $this->container['minimum_payment_amount'] = $data['minimum_payment_amount'] ?? null;
        $this->container['is_overdue'] = $data['is_overdue'] ?? null;
        $this->container['origination_date'] = $data['origination_date'] ?? null;
        $this->container['principal'] = $data['principal'] ?? null;
        $this->container['nominal_apr'] = $data['nominal_apr'] ?? null;
        $this->container['interest_capitalization_grace_period_months'] = $data['interest_capitalization_grace_period_months'] ?? null;
        $this->container['repayment_model'] = $data['repayment_model'] ?? null;
        $this->container['expected_payoff_date'] = $data['expected_payoff_date'] ?? null;
        $this->container['guarantor'] = $data['guarantor'] ?? null;
        $this->container['is_federal'] = $data['is_federal'] ?? null;
        $this->container['loan_name'] = $data['loan_name'] ?? null;
        $this->container['loan_status'] = $data['loan_status'] ?? null;
        $this->container['payment_reference_number'] = $data['payment_reference_number'] ?? null;
        $this->container['pslf_status'] = $data['pslf_status'] ?? null;
        $this->container['repayment_plan_description'] = $data['repayment_plan_description'] ?? null;
        $this->container['repayment_plan_type'] = $data['repayment_plan_type'] ?? null;
        $this->container['sequence_number'] = $data['sequence_number'] ?? null;
        $this->container['servicer_address'] = $data['servicer_address'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['purchase_apr'] === null) {
            $invalidProperties[] = "'purchase_apr' can't be null";
        }
        if ($this->container['cash_apr'] === null) {
            $invalidProperties[] = "'cash_apr' can't be null";
        }
        if ($this->container['balance_transfer_apr'] === null) {
            $invalidProperties[] = "'balance_transfer_apr' can't be null";
        }
        if ($this->container['special_apr'] === null) {
            $invalidProperties[] = "'special_apr' can't be null";
        }
        if ($this->container['last_payment_amount'] === null) {
            $invalidProperties[] = "'last_payment_amount' can't be null";
        }
        if ($this->container['minimum_payment_amount'] === null) {
            $invalidProperties[] = "'minimum_payment_amount' can't be null";
        }
        if ($this->container['is_overdue'] === null) {
            $invalidProperties[] = "'is_overdue' can't be null";
        }
        if ($this->container['origination_date'] === null) {
            $invalidProperties[] = "'origination_date' can't be null";
        }
        if ($this->container['principal'] === null) {
            $invalidProperties[] = "'principal' can't be null";
        }
        if ($this->container['nominal_apr'] === null) {
            $invalidProperties[] = "'nominal_apr' can't be null";
        }
        if ($this->container['interest_capitalization_grace_period_months'] === null) {
            $invalidProperties[] = "'interest_capitalization_grace_period_months' can't be null";
        }
        if ($this->container['repayment_model'] === null) {
            $invalidProperties[] = "'repayment_model' can't be null";
        }
        if ($this->container['expected_payoff_date'] === null) {
            $invalidProperties[] = "'expected_payoff_date' can't be null";
        }
        if ($this->container['guarantor'] === null) {
            $invalidProperties[] = "'guarantor' can't be null";
        }
        if ($this->container['is_federal'] === null) {
            $invalidProperties[] = "'is_federal' can't be null";
        }
        if ($this->container['loan_name'] === null) {
            $invalidProperties[] = "'loan_name' can't be null";
        }
        if ($this->container['loan_status'] === null) {
            $invalidProperties[] = "'loan_status' can't be null";
        }
        if ($this->container['payment_reference_number'] === null) {
            $invalidProperties[] = "'payment_reference_number' can't be null";
        }
        if ($this->container['pslf_status'] === null) {
            $invalidProperties[] = "'pslf_status' can't be null";
        }
        if ($this->container['repayment_plan_description'] === null) {
            $invalidProperties[] = "'repayment_plan_description' can't be null";
        }
        if ($this->container['repayment_plan_type'] === null) {
            $invalidProperties[] = "'repayment_plan_type' can't be null";
        }
        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['servicer_address'] === null) {
            $invalidProperties[] = "'servicer_address' can't be null";
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
     * @param string $type The type of the liability object, either `credit` or `student`. Mortgages are not currently supported in the custom Sandbox.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets purchase_apr
     *
     * @return float
     */
    public function getPurchaseApr()
    {
        return $this->container['purchase_apr'];
    }

    /**
     * Sets purchase_apr
     *
     * @param float $purchase_apr The purchase APR percentage value. For simplicity, this is the only interest rate used to calculate interest charges. Can only be set if `type` is `credit`.
     *
     * @return self
     */
    public function setPurchaseApr($purchase_apr)
    {
        $this->container['purchase_apr'] = $purchase_apr;

        return $this;
    }

    /**
     * Gets cash_apr
     *
     * @return float
     */
    public function getCashApr()
    {
        return $this->container['cash_apr'];
    }

    /**
     * Sets cash_apr
     *
     * @param float $cash_apr The cash APR percentage value. Can only be set if `type` is `credit`.
     *
     * @return self
     */
    public function setCashApr($cash_apr)
    {
        $this->container['cash_apr'] = $cash_apr;

        return $this;
    }

    /**
     * Gets balance_transfer_apr
     *
     * @return float
     */
    public function getBalanceTransferApr()
    {
        return $this->container['balance_transfer_apr'];
    }

    /**
     * Sets balance_transfer_apr
     *
     * @param float $balance_transfer_apr The balance transfer APR percentage value. Can only be set if `type` is `credit`. Can only be set if `type` is `credit`.
     *
     * @return self
     */
    public function setBalanceTransferApr($balance_transfer_apr)
    {
        $this->container['balance_transfer_apr'] = $balance_transfer_apr;

        return $this;
    }

    /**
     * Gets special_apr
     *
     * @return float
     */
    public function getSpecialApr()
    {
        return $this->container['special_apr'];
    }

    /**
     * Sets special_apr
     *
     * @param float $special_apr The special APR percentage value. Can only be set if `type` is `credit`.
     *
     * @return self
     */
    public function setSpecialApr($special_apr)
    {
        $this->container['special_apr'] = $special_apr;

        return $this;
    }

    /**
     * Gets last_payment_amount
     *
     * @return float
     */
    public function getLastPaymentAmount()
    {
        return $this->container['last_payment_amount'];
    }

    /**
     * Sets last_payment_amount
     *
     * @param float $last_payment_amount Override the `last_payment_amount` field. Can only be set if `type` is `credit`.
     *
     * @return self
     */
    public function setLastPaymentAmount($last_payment_amount)
    {
        $this->container['last_payment_amount'] = $last_payment_amount;

        return $this;
    }

    /**
     * Gets minimum_payment_amount
     *
     * @return float
     */
    public function getMinimumPaymentAmount()
    {
        return $this->container['minimum_payment_amount'];
    }

    /**
     * Sets minimum_payment_amount
     *
     * @param float $minimum_payment_amount Override the `minimum_payment_amount` field. Can only be set if `type` is `credit` or `student`.
     *
     * @return self
     */
    public function setMinimumPaymentAmount($minimum_payment_amount)
    {
        $this->container['minimum_payment_amount'] = $minimum_payment_amount;

        return $this;
    }

    /**
     * Gets is_overdue
     *
     * @return bool
     */
    public function getIsOverdue()
    {
        return $this->container['is_overdue'];
    }

    /**
     * Sets is_overdue
     *
     * @param bool $is_overdue Override the `is_overdue` field
     *
     * @return self
     */
    public function setIsOverdue($is_overdue)
    {
        $this->container['is_overdue'] = $is_overdue;

        return $this;
    }

    /**
     * Gets origination_date
     *
     * @return \DateTime
     */
    public function getOriginationDate()
    {
        return $this->container['origination_date'];
    }

    /**
     * Sets origination_date
     *
     * @param \DateTime $origination_date The date on which the loan was initially lent, in [ISO 8601](https://wikipedia.org/wiki/ISO_8601) (YYYY-MM-DD) format. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setOriginationDate($origination_date)
    {
        $this->container['origination_date'] = $origination_date;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return float
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param float $principal The original loan principal. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets nominal_apr
     *
     * @return float
     */
    public function getNominalApr()
    {
        return $this->container['nominal_apr'];
    }

    /**
     * Sets nominal_apr
     *
     * @param float $nominal_apr The interest rate on the loan as a percentage. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setNominalApr($nominal_apr)
    {
        $this->container['nominal_apr'] = $nominal_apr;

        return $this;
    }

    /**
     * Gets interest_capitalization_grace_period_months
     *
     * @return float
     */
    public function getInterestCapitalizationGracePeriodMonths()
    {
        return $this->container['interest_capitalization_grace_period_months'];
    }

    /**
     * Sets interest_capitalization_grace_period_months
     *
     * @param float $interest_capitalization_grace_period_months If set, interest capitalization begins at the given number of months after loan origination. By default interest is never capitalized. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setInterestCapitalizationGracePeriodMonths($interest_capitalization_grace_period_months)
    {
        $this->container['interest_capitalization_grace_period_months'] = $interest_capitalization_grace_period_months;

        return $this;
    }

    /**
     * Gets repayment_model
     *
     * @return \OpenAPI\Client\Model\StudentLoanRepaymentModel
     */
    public function getRepaymentModel()
    {
        return $this->container['repayment_model'];
    }

    /**
     * Sets repayment_model
     *
     * @param \OpenAPI\Client\Model\StudentLoanRepaymentModel $repayment_model repayment_model
     *
     * @return self
     */
    public function setRepaymentModel($repayment_model)
    {
        $this->container['repayment_model'] = $repayment_model;

        return $this;
    }

    /**
     * Gets expected_payoff_date
     *
     * @return \DateTime
     */
    public function getExpectedPayoffDate()
    {
        return $this->container['expected_payoff_date'];
    }

    /**
     * Sets expected_payoff_date
     *
     * @param \DateTime $expected_payoff_date Override the `expected_payoff_date` field. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setExpectedPayoffDate($expected_payoff_date)
    {
        $this->container['expected_payoff_date'] = $expected_payoff_date;

        return $this;
    }

    /**
     * Gets guarantor
     *
     * @return string
     */
    public function getGuarantor()
    {
        return $this->container['guarantor'];
    }

    /**
     * Sets guarantor
     *
     * @param string $guarantor Override the `guarantor` field. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setGuarantor($guarantor)
    {
        $this->container['guarantor'] = $guarantor;

        return $this;
    }

    /**
     * Gets is_federal
     *
     * @return bool
     */
    public function getIsFederal()
    {
        return $this->container['is_federal'];
    }

    /**
     * Sets is_federal
     *
     * @param bool $is_federal Override the `is_federal` field. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setIsFederal($is_federal)
    {
        $this->container['is_federal'] = $is_federal;

        return $this;
    }

    /**
     * Gets loan_name
     *
     * @return string
     */
    public function getLoanName()
    {
        return $this->container['loan_name'];
    }

    /**
     * Sets loan_name
     *
     * @param string $loan_name Override the `loan_name` field. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setLoanName($loan_name)
    {
        $this->container['loan_name'] = $loan_name;

        return $this;
    }

    /**
     * Gets loan_status
     *
     * @return \OpenAPI\Client\Model\StudentLoanStatus
     */
    public function getLoanStatus()
    {
        return $this->container['loan_status'];
    }

    /**
     * Sets loan_status
     *
     * @param \OpenAPI\Client\Model\StudentLoanStatus $loan_status loan_status
     *
     * @return self
     */
    public function setLoanStatus($loan_status)
    {
        $this->container['loan_status'] = $loan_status;

        return $this;
    }

    /**
     * Gets payment_reference_number
     *
     * @return string
     */
    public function getPaymentReferenceNumber()
    {
        return $this->container['payment_reference_number'];
    }

    /**
     * Sets payment_reference_number
     *
     * @param string $payment_reference_number Override the `payment_reference_number` field. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setPaymentReferenceNumber($payment_reference_number)
    {
        $this->container['payment_reference_number'] = $payment_reference_number;

        return $this;
    }

    /**
     * Gets pslf_status
     *
     * @return \OpenAPI\Client\Model\PSLFStatus
     */
    public function getPslfStatus()
    {
        return $this->container['pslf_status'];
    }

    /**
     * Sets pslf_status
     *
     * @param \OpenAPI\Client\Model\PSLFStatus $pslf_status pslf_status
     *
     * @return self
     */
    public function setPslfStatus($pslf_status)
    {
        $this->container['pslf_status'] = $pslf_status;

        return $this;
    }

    /**
     * Gets repayment_plan_description
     *
     * @return string
     */
    public function getRepaymentPlanDescription()
    {
        return $this->container['repayment_plan_description'];
    }

    /**
     * Sets repayment_plan_description
     *
     * @param string $repayment_plan_description Override the `repayment_plan.description` field. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setRepaymentPlanDescription($repayment_plan_description)
    {
        $this->container['repayment_plan_description'] = $repayment_plan_description;

        return $this;
    }

    /**
     * Gets repayment_plan_type
     *
     * @return string
     */
    public function getRepaymentPlanType()
    {
        return $this->container['repayment_plan_type'];
    }

    /**
     * Sets repayment_plan_type
     *
     * @param string $repayment_plan_type Override the `repayment_plan.type` field. Can only be set if `type` is `student`. Possible values are: `\"extended graduated\"`, `\"extended standard\"`, `\"graduated\"`, `\"income-contingent repayment\"`, `\"income-based repayment\"`, `\"interest only\"`, `\"other\"`, `\"pay as you earn\"`, `\"revised pay as you earn\"`, or `\"standard\"`.
     *
     * @return self
     */
    public function setRepaymentPlanType($repayment_plan_type)
    {
        $this->container['repayment_plan_type'] = $repayment_plan_type;

        return $this;
    }

    /**
     * Gets sequence_number
     *
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param string $sequence_number Override the `sequence_number` field. Can only be set if `type` is `student`.
     *
     * @return self
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets servicer_address
     *
     * @return \OpenAPI\Client\Model\Address
     */
    public function getServicerAddress()
    {
        return $this->container['servicer_address'];
    }

    /**
     * Sets servicer_address
     *
     * @param \OpenAPI\Client\Model\Address $servicer_address servicer_address
     *
     * @return self
     */
    public function setServicerAddress($servicer_address)
    {
        $this->container['servicer_address'] = $servicer_address;

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


