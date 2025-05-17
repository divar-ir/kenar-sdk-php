# Divar\KenarApiClient\LimitedApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentGetBalance()**](LimitedApi.md#paymentGetBalance) | **GET** /experimental/open-platform/balance |  |
| [**paymentGetPostPricing()**](LimitedApi.md#paymentGetPostPricing) | **GET** /v1/open-platform/post/{post_token}/pricing | Retrieve the cost of the service |
| [**paymentGetTransaction()**](LimitedApi.md#paymentGetTransaction) | **GET** /experimental/open-platform/transactions/{id} |  |
| [**paymentReorderPost()**](LimitedApi.md#paymentReorderPost) | **POST** /experimental/open-platform/post/{post_token}/reorder |  |


## `paymentGetBalance()`

```php
paymentGetBalance(): \Divar\KenarApiClient\Model\PaymentGetBalanceResponse
```



Using this API you can retrieve current balance of your app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\LimitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Retrieve the cost of the service

Using this API and with user permission, you can get the price of various services like Reorder.The price of this API is not necessarily the same as the price on Divar, and pricing may vary.Use this API to get the price before applying services (such as reordering a post).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\LimitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_token = 'post_token_example'; // string | An 8-9 character unique identifier for the post

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
| **post_token** | **string**| An 8-9 character unique identifier for the post | |

### Return type

[**\Divar\KenarApiClient\Model\PaymentGetPostPricingResponse**](../Model/PaymentGetPostPricingResponse.md)

### Authorization

No authorization required

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



Using this API you can retrieve transaction details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\LimitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The unique identifier for the transaction, same as the id in the request

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
| **id** | **string**| The unique identifier for the transaction, same as the id in the request | |

### Return type

[**\Divar\KenarApiClient\Model\PaymentGetTransactionResponse**](../Model/PaymentGetTransactionResponse.md)

### Authorization

No authorization required

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



Use GetPostPricing API to get the cost of the service before calling this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\LimitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
