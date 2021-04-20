# Bleumi - Payment SDK for PHP

A simple and powerful REST API to integrate Traditional (Credit/Debit Card, Alternative Payment Methods) and Crypto Currency (Bitcoin, Ethereum, Stablecoins)
payments into your business or application.

### Getting Started
1. Create an account on [Bleumi](https://account.bleumi.com/signUp/?app=payment)
1. Fill up your [profile](https://account.bleumi.com/account/?app=payment&tab=profile)
1. Complete your KYC by contacting [support@bleumi.com](mailto:support@bleumi.com)
1. Add your preferred payment service providers in the [Bleumi Portal](https://account.bleumi.com/account/?app=payment&tab=gateway)
1. Create your API key on the [Bleumi Integration Settings](https://account.bleumi.com/account/?app=payment&tab=integration) screen

### Authentication
Bleumi uses API keys to authenticate requests. You can view and manage your API keys in the [Bleumi Integration Settings](https://account.bleumi.com/account/?app=payment&tab=integration) screen.
Authenticated API requests should be made with a `X-Api-Key` header. Your API key should be passed as the value.

### Payment Methods
Use the [Bleumi Portal](https://account.bleumi.com/account/?app=payment&tab=gateway) to add your preferred payment service provider (e.g. Stripe, BitPay, Bleumi Pay) and configure
the payment methods that buyers would be able to use to make payments.


For more information, please visit [https://bleumi.com/contact.html](https://bleumi.com/contact.html).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "bleumi/payment-sdk-php": "1.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/payment-sdk-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Authorization
$config = Bleumi\Payment\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');


$apiInstance = new Bleumi\Payment\Api\CountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->listCountries: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.bleumi.io/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CountriesApi* | [**listCountries**](docs/Api/CountriesApi.md#listcountries) | **GET** /data/countries | 
*CurrenciesApi* | [**listCurrencies**](docs/Api/CurrenciesApi.md#listcurrencies) | **GET** /data/currencies | 
*PaymentRequestApi* | [**getPayment**](docs/Api/PaymentRequestApi.md#getpayment) | **GET** /payment/{id} | 
*PaymentRequestApi* | [**listPaymentReceipts**](docs/Api/PaymentRequestApi.md#listpaymentreceipts) | **GET** /payment/{id}/receipts | 
*PaymentRequestApi* | [**listPaymentRefunds**](docs/Api/PaymentRequestApi.md#listpaymentrefunds) | **GET** /payment/{id}/refunds | 
*PaymentRequestsApi* | [**createPaymentRequest**](docs/Api/PaymentRequestsApi.md#createpaymentrequest) | **POST** /payment | 
*PaymentRequestsApi* | [**listPaymentRequests**](docs/Api/PaymentRequestsApi.md#listpaymentrequests) | **GET** /payment | 
*PaymentRequestsApi* | [**updatePaymentRequest**](docs/Api/PaymentRequestsApi.md#updatepaymentrequest) | **PUT** /payment | 
*StatesApi* | [**listStates**](docs/Api/StatesApi.md#liststates) | **GET** /data/states | 

## Models

- [AddressInfo](docs/Model/AddressInfo.md)
- [BadRequest](docs/Model/BadRequest.md)
- [Country](docs/Model/Country.md)
- [CreatePaymentInput](docs/Model/CreatePaymentInput.md)
- [CreatePaymentInputMetadata](docs/Model/CreatePaymentInputMetadata.md)
- [Currency](docs/Model/Currency.md)
- [LineItem](docs/Model/LineItem.md)
- [PaginatedPaymentRequest](docs/Model/PaginatedPaymentRequest.md)
- [PaymentRequest](docs/Model/PaymentRequest.md)
- [PaymentUpsertResponse](docs/Model/PaymentUpsertResponse.md)
- [Receipt](docs/Model/Receipt.md)
- [ReceiptMetadata](docs/Model/ReceiptMetadata.md)
- [Record](docs/Model/Record.md)
- [RecordBasics](docs/Model/RecordBasics.md)
- [RecordInput](docs/Model/RecordInput.md)
- [Refund](docs/Model/Refund.md)
- [UpdatePaymentInput](docs/Model/UpdatePaymentInput.md)

## Authorization

### Authorization

- **Type**: API key
- **API key parameter name**: X-Api-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@bleumi.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
