# Bleumi\Payment\StatesApi

All URIs are relative to https://api.bleumi.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listStates()**](StatesApi.md#listStates) | **GET** /data/states | 


## `listStates()`

```php
listStates(): array<string,array<string,object>>
```



Map of valid states for each country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = Bleumi\Payment\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');


$apiInstance = new Bleumi\Payment\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listStates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->listStates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**array<string,array<string,object>>**](../Model/array.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
