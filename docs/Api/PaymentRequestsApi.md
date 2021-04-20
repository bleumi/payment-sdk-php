# Bleumi\Payment\PaymentRequestsApi

All URIs are relative to https://api.bleumi.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentRequest()**](PaymentRequestsApi.md#createPaymentRequest) | **POST** /payment | 
[**listPaymentRequests()**](PaymentRequestsApi.md#listPaymentRequests) | **GET** /payment | 
[**updatePaymentRequest()**](PaymentRequestsApi.md#updatePaymentRequest) | **PUT** /payment | 


## `createPaymentRequest()`

```php
createPaymentRequest($create_payment_input): \Bleumi\Payment\Model\PaymentUpsertResponse
```



Create a hosted checkout URL to accept payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = Bleumi\Payment\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');


$apiInstance = new Bleumi\Payment\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_payment_input = new \Bleumi\Payment\Model\CreatePaymentInput(); // \Bleumi\Payment\Model\CreatePaymentInput

try {
    $result = $apiInstance->createPaymentRequest($create_payment_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_payment_input** | [**\Bleumi\Payment\Model\CreatePaymentInput**](../Model/CreatePaymentInput.md)|  | [optional]

### Return type

[**\Bleumi\Payment\Model\PaymentUpsertResponse**](../Model/PaymentUpsertResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentRequests()`

```php
listPaymentRequests($next_token, $sort_by, $sort_order, $start_at, $end_at): \Bleumi\Payment\Model\PaginatedPaymentRequest
```



List all payment requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = Bleumi\Payment\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');


$apiInstance = new Bleumi\Payment\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$next_token = 'next_token_example'; // string | Cursor to start results from
$sort_by = 'sort_by_example'; // string | `createdAt` - results will be sorted by created time. `updatedAt` - results will be sorted by last updated time.
$sort_order = 'sort_order_example'; // string | `ascending` - `(Default)` results will be sorted in asceding order. `descending` - results will be sorted in descending order.
$start_at = 'start_at_example'; // string | Get payments from this timestamp `(unix)`
$end_at = 'end_at_example'; // string | Get payments till this timestamp `(unix)`

try {
    $result = $apiInstance->listPaymentRequests($next_token, $sort_by, $sort_order, $start_at, $end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->listPaymentRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_token** | **string**| Cursor to start results from | [optional]
 **sort_by** | **string**| &#x60;createdAt&#x60; - results will be sorted by created time. &#x60;updatedAt&#x60; - results will be sorted by last updated time. | [optional]
 **sort_order** | **string**| &#x60;ascending&#x60; - &#x60;(Default)&#x60; results will be sorted in asceding order. &#x60;descending&#x60; - results will be sorted in descending order. | [optional]
 **start_at** | **string**| Get payments from this timestamp &#x60;(unix)&#x60; | [optional]
 **end_at** | **string**| Get payments till this timestamp &#x60;(unix)&#x60; | [optional]

### Return type

[**\Bleumi\Payment\Model\PaginatedPaymentRequest**](../Model/PaginatedPaymentRequest.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentRequest()`

```php
updatePaymentRequest($update_payment_input): \Bleumi\Payment\Model\PaymentUpsertResponse
```



Update a payment request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = Bleumi\Payment\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');


$apiInstance = new Bleumi\Payment\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_payment_input = new \Bleumi\Payment\Model\UpdatePaymentInput(); // \Bleumi\Payment\Model\UpdatePaymentInput

try {
    $result = $apiInstance->updatePaymentRequest($update_payment_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->updatePaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_payment_input** | [**\Bleumi\Payment\Model\UpdatePaymentInput**](../Model/UpdatePaymentInput.md)|  | [optional]

### Return type

[**\Bleumi\Payment\Model\PaymentUpsertResponse**](../Model/PaymentUpsertResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
