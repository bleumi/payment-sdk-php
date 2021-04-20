<?php
/**
 * ModelInterface
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Bleumi\Payment\Model
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

/**
 * Interface abstracting model access.
 *
 * @package Bleumi\Payment\Model
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();
}
