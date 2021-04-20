# Bleumi\Payment\CurrenciesApi

All URIs are relative to https://api.bleumi.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCurrencies()**](CurrenciesApi.md#listCurrencies) | **GET** /data/currencies | 


## `listCurrencies()`

```php
listCurrencies(): \Bleumi\Payment\Model\Currency[]
```



List of supported currency codes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = Bleumi\Payment\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');


$apiInstance = new Bleumi\Payment\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->listCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bleumi\Payment\Model\Currency[]**](../Model/Currency.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
