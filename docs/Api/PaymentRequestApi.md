# Bleumi\Payment\PaymentRequestApi

All URIs are relative to https://api.bleumi.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPayment()**](PaymentRequestApi.md#getPayment) | **GET** /payment/{id} | 
[**listPaymentReceipts()**](PaymentRequestApi.md#listPaymentReceipts) | **GET** /payment/{id}/receipts | 
[**listPaymentRefunds()**](PaymentRequestApi.md#listPaymentRefunds) | **GET** /payment/{id}/refunds | 


## `getPayment()`

```php
getPayment($id): \Bleumi\Payment\Model\PaymentRequest
```



Fetch a payment request by its unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = Bleumi\Payment\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');


$apiInstance = new Bleumi\Payment\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier for a payment request

try {
    $result = $apiInstance->getPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for a payment request |

### Return type

[**\Bleumi\Payment\Model\PaymentRequest**](../Model/PaymentRequest.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentReceipts()`

```php
listPaymentReceipts($id): \Bleumi\Payment\Model\Receipt[]
```



List receipts for a given payment request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = Bleumi\Payment\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');


$apiInstance = new Bleumi\Payment\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier for a payment request

try {
    $result = $apiInstance->listPaymentReceipts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->listPaymentReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for a payment request |

### Return type

[**\Bleumi\Payment\Model\Receipt[]**](../Model/Receipt.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentRefunds()`

```php
listPaymentRefunds($id): \Bleumi\Payment\Model\Refund[]
```



List refunds for a given payment request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = Bleumi\Payment\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');


$apiInstance = new Bleumi\Payment\Api\PaymentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier for a payment request

try {
    $result = $apiInstance->listPaymentRefunds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->listPaymentRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for a payment request |

### Return type

[**\Bleumi\Payment\Model\Refund[]**](../Model/Refund.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
