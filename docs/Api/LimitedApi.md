# Divar\KenarApiClient\LimitedApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentGetBalance()**](LimitedApi.md#paymentGetBalance) | **GET** /experimental/open-platform/balance |  |
| [**paymentGetPostPricing()**](LimitedApi.md#paymentGetPostPricing) | **GET** /v1/open-platform/post/{post_token}/pricing | دریافت هزینه سرویس |
| [**paymentGetTransaction()**](LimitedApi.md#paymentGetTransaction) | **GET** /experimental/open-platform/transactions/{id} |  |
| [**paymentListTransactions()**](LimitedApi.md#paymentListTransactions) | **GET** /experimental/open-platform/transactions |  |
| [**paymentReorderPost()**](LimitedApi.md#paymentReorderPost) | **POST** /experimental/open-platform/post/{post_token}/reorder |  |


## `paymentGetBalance()`

```php
paymentGetBalance(): \Divar\KenarApiClient\Model\PaymentGetBalanceResponse
```



با استفاده از این API می‌توانید موجودی فعلی اپلیکیشن خود را دریافت کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\LimitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->paymentGetBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimitedApi->paymentGetBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\PaymentGetBalanceResponse**](../Model/PaymentGetBalanceResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentGetPostPricing()`

```php
paymentGetPostPricing($post_token): \Divar\KenarApiClient\Model\PaymentGetPostPricingResponse
```

دریافت هزینه سرویس

با استفاده از این API و با مجوز کاربر، می‌توانید قیمت سرویس‌های مختلف مانند نردبان را دریافت کنید. قیمت این API لزوماً با قیمت روی دیوار یکسان نیست و قیمت‌گذاری ممکن است متفاوت باشد. از این API برای دریافت قیمت قبل از اعمال سرویس‌ها (مانند نردبان آگهی) استفاده کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\LimitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_token = 'post_token_example'; // string | شناسه منحصر به فرد 8-9 کاراکتری برای آگهی

try {
    $result = $apiInstance->paymentGetPostPricing($post_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimitedApi->paymentGetPostPricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_token** | **string**| شناسه منحصر به فرد 8-9 کاراکتری برای آگهی | |

### Return type

[**\Divar\KenarApiClient\Model\PaymentGetPostPricingResponse**](../Model/PaymentGetPostPricingResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentGetTransaction()`

```php
paymentGetTransaction($id): \Divar\KenarApiClient\Model\PaymentGetTransactionResponse
```



با استفاده از این API می‌توانید جزئیات تراکنش را دریافت کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\LimitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | شناسه منحصر به فرد برای تراکنش، همان id در درخواست

try {
    $result = $apiInstance->paymentGetTransaction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimitedApi->paymentGetTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| شناسه منحصر به فرد برای تراکنش، همان id در درخواست | |

### Return type

[**\Divar\KenarApiClient\Model\PaymentGetTransactionResponse**](../Model/PaymentGetTransactionResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentListTransactions()`

```php
paymentListTransactions($page_size, $page_token): \Divar\KenarApiClient\Model\PaymentListTransactionsResponse
```



Using this API you can retrieve a list of transactions. Follow pages till you get an empty list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\LimitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 56; // int | Number of transactions to return per page
$page_token = 'page_token_example'; // string | Token for the next page of results

try {
    $result = $apiInstance->paymentListTransactions($page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimitedApi->paymentListTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_size** | **int**| Number of transactions to return per page | [optional] |
| **page_token** | **string**| Token for the next page of results | [optional] |

### Return type

[**\Divar\KenarApiClient\Model\PaymentListTransactionsResponse**](../Model/PaymentListTransactionsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentReorderPost()`

```php
paymentReorderPost($post_token, $payment_reorder_post_body): \Divar\KenarApiClient\Model\PaymentReorderPostResponse
```



قبل از فراخوانی این API، از API GetPostPricing برای دریافت هزینه سرویس استفاده کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\LimitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_token = 'post_token_example'; // string
$payment_reorder_post_body = new \Divar\KenarApiClient\Model\PaymentReorderPostBody(); // \Divar\KenarApiClient\Model\PaymentReorderPostBody

try {
    $result = $apiInstance->paymentReorderPost($post_token, $payment_reorder_post_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimitedApi->paymentReorderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_token** | **string**|  | |
| **payment_reorder_post_body** | [**\Divar\KenarApiClient\Model\PaymentReorderPostBody**](../Model/PaymentReorderPostBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\PaymentReorderPostResponse**](../Model/PaymentReorderPostResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
