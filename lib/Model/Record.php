<?php
/**
 * Record
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
 * Record Class Doc Comment
 *
 * @category Class
 * @package  Bleumi\Payment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Record implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Record';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'charges_type' => 'string',
        'basics' => '\Bleumi\Payment\Model\RecordBasics',
        'client_info' => '\Bleumi\Payment\Model\AddressInfo',
        'my_info' => '\Bleumi\Payment\Model\AddressInfo',
        'billing_info' => '\Bleumi\Payment\Model\AddressInfo',
        'amt_due' => 'string',
        'amt_recv' => 'string',
        'amt_recv_offline' => 'string',
        'amt_recv_online' => 'string',
        'amt_recv_online_pending' => 'string',
        'amt_recv_online_map' => 'object',
        'line_item' => '\Bleumi\Payment\Model\LineItem[]',
        'subtotal' => 'string',
        'round_off' => 'string',
        'total' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'charges_type' => null,
        'basics' => null,
        'client_info' => null,
        'my_info' => null,
        'billing_info' => null,
        'amt_due' => null,
        'amt_recv' => null,
        'amt_recv_offline' => null,
        'amt_recv_online' => null,
        'amt_recv_online_pending' => null,
        'amt_recv_online_map' => null,
        'line_item' => null,
        'subtotal' => null,
        'round_off' => null,
        'total' => null
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
        'charges_type' => 'charges_type',
        'basics' => 'basics',
        'client_info' => 'client_info',
        'my_info' => 'my_info',
        'billing_info' => 'billing_info',
        'amt_due' => 'amt_due',
        'amt_recv' => 'amt_recv',
        'amt_recv_offline' => 'amt_recv_offline',
        'amt_recv_online' => 'amt_recv_online',
        'amt_recv_online_pending' => 'amt_recv_online_pending',
        'amt_recv_online_map' => 'amt_recv_online_map',
        'line_item' => 'line_item',
        'subtotal' => 'subtotal',
        'round_off' => 'round_off',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charges_type' => 'setChargesType',
        'basics' => 'setBasics',
        'client_info' => 'setClientInfo',
        'my_info' => 'setMyInfo',
        'billing_info' => 'setBillingInfo',
        'amt_due' => 'setAmtDue',
        'amt_recv' => 'setAmtRecv',
        'amt_recv_offline' => 'setAmtRecvOffline',
        'amt_recv_online' => 'setAmtRecvOnline',
        'amt_recv_online_pending' => 'setAmtRecvOnlinePending',
        'amt_recv_online_map' => 'setAmtRecvOnlineMap',
        'line_item' => 'setLineItem',
        'subtotal' => 'setSubtotal',
        'round_off' => 'setRoundOff',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charges_type' => 'getChargesType',
        'basics' => 'getBasics',
        'client_info' => 'getClientInfo',
        'my_info' => 'getMyInfo',
        'billing_info' => 'getBillingInfo',
        'amt_due' => 'getAmtDue',
        'amt_recv' => 'getAmtRecv',
        'amt_recv_offline' => 'getAmtRecvOffline',
        'amt_recv_online' => 'getAmtRecvOnline',
        'amt_recv_online_pending' => 'getAmtRecvOnlinePending',
        'amt_recv_online_map' => 'getAmtRecvOnlineMap',
        'line_item' => 'getLineItem',
        'subtotal' => 'getSubtotal',
        'round_off' => 'getRoundOff',
        'total' => 'getTotal'
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

    const CHARGES_TYPE__GLOBAL = 'global';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChargesTypeAllowableValues()
    {
        return [
            self::CHARGES_TYPE__GLOBAL,
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
        $this->container['charges_type'] = $data['charges_type'] ?? null;
        $this->container['basics'] = $data['basics'] ?? null;
        $this->container['client_info'] = $data['client_info'] ?? null;
        $this->container['my_info'] = $data['my_info'] ?? null;
        $this->container['billing_info'] = $data['billing_info'] ?? null;
        $this->container['amt_due'] = $data['amt_due'] ?? null;
        $this->container['amt_recv'] = $data['amt_recv'] ?? null;
        $this->container['amt_recv_offline'] = $data['amt_recv_offline'] ?? null;
        $this->container['amt_recv_online'] = $data['amt_recv_online'] ?? null;
        $this->container['amt_recv_online_pending'] = $data['amt_recv_online_pending'] ?? null;
        $this->container['amt_recv_online_map'] = $data['amt_recv_online_map'] ?? null;
        $this->container['line_item'] = $data['line_item'] ?? null;
        $this->container['subtotal'] = $data['subtotal'] ?? null;
        $this->container['round_off'] = $data['round_off'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getChargesTypeAllowableValues();
        if (!is_null($this->container['charges_type']) && !in_array($this->container['charges_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'charges_type', must be one of '%s'",
                $this->container['charges_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets charges_type
     *
     * @return string|null
     */
    public function getChargesType()
    {
        return $this->container['charges_type'];
    }

    /**
     * Sets charges_type
     *
     * @param string|null $charges_type charges_type
     *
     * @return self
     */
    public function setChargesType($charges_type)
    {
        $allowedValues = $this->getChargesTypeAllowableValues();
        if (!is_null($charges_type) && !in_array($charges_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'charges_type', must be one of '%s'",
                    $charges_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['charges_type'] = $charges_type;

        return $this;
    }

    /**
     * Gets basics
     *
     * @return \Bleumi\Payment\Model\RecordBasics|null
     */
    public function getBasics()
    {
        return $this->container['basics'];
    }

    /**
     * Sets basics
     *
     * @param \Bleumi\Payment\Model\RecordBasics|null $basics basics
     *
     * @return self
     */
    public function setBasics($basics)
    {
        $this->container['basics'] = $basics;

        return $this;
    }

    /**
     * Gets client_info
     *
     * @return \Bleumi\Payment\Model\AddressInfo|null
     */
    public function getClientInfo()
    {
        return $this->container['client_info'];
    }

    /**
     * Sets client_info
     *
     * @param \Bleumi\Payment\Model\AddressInfo|null $client_info client_info
     *
     * @return self
     */
    public function setClientInfo($client_info)
    {
        $this->container['client_info'] = $client_info;

        return $this;
    }

    /**
     * Gets my_info
     *
     * @return \Bleumi\Payment\Model\AddressInfo|null
     */
    public function getMyInfo()
    {
        return $this->container['my_info'];
    }

    /**
     * Sets my_info
     *
     * @param \Bleumi\Payment\Model\AddressInfo|null $my_info my_info
     *
     * @return self
     */
    public function setMyInfo($my_info)
    {
        $this->container['my_info'] = $my_info;

        return $this;
    }

    /**
     * Gets billing_info
     *
     * @return \Bleumi\Payment\Model\AddressInfo|null
     */
    public function getBillingInfo()
    {
        return $this->container['billing_info'];
    }

    /**
     * Sets billing_info
     *
     * @param \Bleumi\Payment\Model\AddressInfo|null $billing_info billing_info
     *
     * @return self
     */
    public function setBillingInfo($billing_info)
    {
        $this->container['billing_info'] = $billing_info;

        return $this;
    }

    /**
     * Gets amt_due
     *
     * @return string|null
     */
    public function getAmtDue()
    {
        return $this->container['amt_due'];
    }

    /**
     * Sets amt_due
     *
     * @param string|null $amt_due Amount remaining to be paid
     *
     * @return self
     */
    public function setAmtDue($amt_due)
    {
        $this->container['amt_due'] = $amt_due;

        return $this;
    }

    /**
     * Gets amt_recv
     *
     * @return string|null
     */
    public function getAmtRecv()
    {
        return $this->container['amt_recv'];
    }

    /**
     * Sets amt_recv
     *
     * @param string|null $amt_recv Total amount received, includes amt_recv_offline, amt_recv_online and amt_recv_online_pending
     *
     * @return self
     */
    public function setAmtRecv($amt_recv)
    {
        $this->container['amt_recv'] = $amt_recv;

        return $this;
    }

    /**
     * Gets amt_recv_offline
     *
     * @return string|null
     */
    public function getAmtRecvOffline()
    {
        return $this->container['amt_recv_offline'];
    }

    /**
     * Sets amt_recv_offline
     *
     * @param string|null $amt_recv_offline Amount received outside of Bleumi's hosted checkout
     *
     * @return self
     */
    public function setAmtRecvOffline($amt_recv_offline)
    {
        $this->container['amt_recv_offline'] = $amt_recv_offline;

        return $this;
    }

    /**
     * Gets amt_recv_online
     *
     * @return string|null
     */
    public function getAmtRecvOnline()
    {
        return $this->container['amt_recv_online'];
    }

    /**
     * Sets amt_recv_online
     *
     * @param string|null $amt_recv_online Amount received
     *
     * @return self
     */
    public function setAmtRecvOnline($amt_recv_online)
    {
        $this->container['amt_recv_online'] = $amt_recv_online;

        return $this;
    }

    /**
     * Gets amt_recv_online_pending
     *
     * @return string|null
     */
    public function getAmtRecvOnlinePending()
    {
        return $this->container['amt_recv_online_pending'];
    }

    /**
     * Sets amt_recv_online_pending
     *
     * @param string|null $amt_recv_online_pending Amount received but not confirmed
     *
     * @return self
     */
    public function setAmtRecvOnlinePending($amt_recv_online_pending)
    {
        $this->container['amt_recv_online_pending'] = $amt_recv_online_pending;

        return $this;
    }

    /**
     * Gets amt_recv_online_map
     *
     * @return object|null
     */
    public function getAmtRecvOnlineMap()
    {
        return $this->container['amt_recv_online_map'];
    }

    /**
     * Sets amt_recv_online_map
     *
     * @param object|null $amt_recv_online_map Amount received split by gateway
     *
     * @return self
     */
    public function setAmtRecvOnlineMap($amt_recv_online_map)
    {
        $this->container['amt_recv_online_map'] = $amt_recv_online_map;

        return $this;
    }

    /**
     * Gets line_item
     *
     * @return \Bleumi\Payment\Model\LineItem[]|null
     */
    public function getLineItem()
    {
        return $this->container['line_item'];
    }

    /**
     * Sets line_item
     *
     * @param \Bleumi\Payment\Model\LineItem[]|null $line_item line_item
     *
     * @return self
     */
    public function setLineItem($line_item)
    {
        $this->container['line_item'] = $line_item;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return string|null
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param string|null $subtotal subtotal
     *
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets round_off
     *
     * @return string|null
     */
    public function getRoundOff()
    {
        return $this->container['round_off'];
    }

    /**
     * Sets round_off
     *
     * @param string|null $round_off round_off
     *
     * @return self
     */
    public function setRoundOff($round_off)
    {
        $this->container['round_off'] = $round_off;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


