<?php
/**
 * CreatePaymentInput
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Bleumi\Payment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bleumi Payment API
 *
 * A simple and powerful REST API to integrate Traditional (Credit/Debit Card, Alternative Payment Methods) and Crypto Currency (Bitcoin, Ethereum, Stablecoins) payments into your business or application.  ### Getting Started 1. Create an account on [Bleumi](https://account.bleumi.com/signUp/?app=payment) 1. Fill up your [profile](https://account.bleumi.com/account/?app=payment&tab=profile) 1. Complete your KYC by contacting [support@bleumi.com](mailto:support@bleumi.com) 1. Add your preferred payment service providers in the [Bleumi Portal](https://account.bleumi.com/account/?app=payment&tab=gateway) 1. Create your API key on the [Bleumi Integration Settings](https://account.bleumi.com/account/?app=payment&tab=integration) screen  ### Authentication Bleumi uses API keys to authenticate requests. You can view and manage your API keys in the [Bleumi Integration Settings](https://account.bleumi.com/account/?app=payment&tab=integration) screen. Authenticated API requests should be made with a `X-Api-Key` header. Your API key should be passed as the value.  ### Payment Methods Use the [Bleumi Portal](https://account.bleumi.com/account/?app=payment&tab=gateway) to add your preferred payment service provider (e.g. Stripe, BitPay, Bleumi Pay) and configure the payment methods that buyers would be able to use to make payments.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@bleumi.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bleumi\Payment\Model;

use \ArrayAccess;
use \Bleumi\Payment\ObjectSerializer;

/**
 * CreatePaymentInput Class Doc Comment
 *
 * @category Class
 * @package  Bleumi\Payment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreatePaymentInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreatePaymentInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'currency' => 'string',
        'invoice_date' => 'int',
        'allow_partial_payments' => 'bool',
        'metadata' => '\Bleumi\Payment\Model\CreatePaymentInputMetadata',
        'success_url' => 'string',
        'cancel_url' => 'string',
        'notify_url' => 'string',
        'record' => '\Bleumi\Payment\Model\RecordInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'currency' => null,
        'invoice_date' => null,
        'allow_partial_payments' => null,
        'metadata' => null,
        'success_url' => null,
        'cancel_url' => null,
        'notify_url' => null,
        'record' => null
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
        'id' => 'id',
        'currency' => 'currency',
        'invoice_date' => 'invoice_date',
        'allow_partial_payments' => 'allow_partial_payments',
        'metadata' => 'metadata',
        'success_url' => 'success_url',
        'cancel_url' => 'cancel_url',
        'notify_url' => 'notify_url',
        'record' => 'record'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'currency' => 'setCurrency',
        'invoice_date' => 'setInvoiceDate',
        'allow_partial_payments' => 'setAllowPartialPayments',
        'metadata' => 'setMetadata',
        'success_url' => 'setSuccessUrl',
        'cancel_url' => 'setCancelUrl',
        'notify_url' => 'setNotifyUrl',
        'record' => 'setRecord'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'currency' => 'getCurrency',
        'invoice_date' => 'getInvoiceDate',
        'allow_partial_payments' => 'getAllowPartialPayments',
        'metadata' => 'getMetadata',
        'success_url' => 'getSuccessUrl',
        'cancel_url' => 'getCancelUrl',
        'notify_url' => 'getNotifyUrl',
        'record' => 'getRecord'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['invoice_date'] = $data['invoice_date'] ?? null;
        $this->container['allow_partial_payments'] = $data['allow_partial_payments'] ?? false;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['success_url'] = $data['success_url'] ?? null;
        $this->container['cancel_url'] = $data['cancel_url'] ?? null;
        $this->container['notify_url'] = $data['notify_url'] ?? null;
        $this->container['record'] = $data['record'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['invoice_date'] === null) {
            $invalidProperties[] = "'invoice_date' can't be null";
        }
        if ($this->container['record'] === null) {
            $invalidProperties[] = "'record' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier for the request
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $currency Must be a non-sanctioned country from /v1/data/countries
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return int
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param int $invoice_date Number like YYYMMDD
     *
     * @return self
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets allow_partial_payments
     *
     * @return bool|null
     */
    public function getAllowPartialPayments()
    {
        return $this->container['allow_partial_payments'];
    }

    /**
     * Sets allow_partial_payments
     *
     * @param bool|null $allow_partial_payments Allow the user to make payment in parts
     *
     * @return self
     */
    public function setAllowPartialPayments($allow_partial_payments)
    {
        $this->container['allow_partial_payments'] = $allow_partial_payments;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Bleumi\Payment\Model\CreatePaymentInputMetadata|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Bleumi\Payment\Model\CreatePaymentInputMetadata|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url User will be redirected to this URL after completing the payment
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string|null
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string|null $cancel_url User will be redirected to this URL if they want to abort the payment
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets notify_url
     *
     * @return string|null
     */
    public function getNotifyUrl()
    {
        return $this->container['notify_url'];
    }

    /**
     * Sets notify_url
     *
     * @param string|null $notify_url The URL will receive a JSON POST for each update to the payment request
     *
     * @return self
     */
    public function setNotifyUrl($notify_url)
    {
        $this->container['notify_url'] = $notify_url;

        return $this;
    }

    /**
     * Gets record
     *
     * @return \Bleumi\Payment\Model\RecordInput
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param \Bleumi\Payment\Model\RecordInput $record record
     *
     * @return self
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


