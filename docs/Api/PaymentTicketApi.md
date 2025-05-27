# Divar\KenarApiClient\PaymentTicketApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentTicketValidate()**](PaymentTicketApi.md#paymentTicketValidate) | **POST** /v1/open-platform/payment-ticket/validate | اعتبارسنجی بلیط پرداخت |


## `paymentTicketValidate()`

```php
paymentTicketValidate($payment_ticket_validate_request): \Divar\KenarApiClient\Model\PaymentTicketValidateResponse
```

اعتبارسنجی بلیط پرداخت

بلیط‌های پرداخت برای یکپارچه‌سازی اپلیکیشن‌های کنار با تیم‌های داخلی دیوار طراحی شده‌اند. با استفاده از این API می‌توانید بلیط پرداخت را اعتبارسنجی کرده و payload صادرکننده را دریافت کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\PaymentTicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_ticket_validate_request = new \Divar\KenarApiClient\Model\PaymentTicketValidateRequest(); // \Divar\KenarApiClient\Model\PaymentTicketValidateRequest

try {
    $result = $apiInstance->paymentTicketValidate($payment_ticket_validate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTicketApi->paymentTicketValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_ticket_validate_request** | [**\Divar\KenarApiClient\Model\PaymentTicketValidateRequest**](../Model/PaymentTicketValidateRequest.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\PaymentTicketValidateResponse**](../Model/PaymentTicketValidateResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
