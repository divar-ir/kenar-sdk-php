# Divar\KenarApiClient\PaymentTicketApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentTicketValidate()**](PaymentTicketApi.md#paymentTicketValidate) | **POST** /v1/open-platform/payment-ticket/validate | Validate a payment ticket |


## `paymentTicketValidate()`

```php
paymentTicketValidate($payment_ticket_validate_request): \Divar\KenarApiClient\Model\PaymentTicketValidateResponse
```

Validate a payment ticket

Payment tickets are designed to integrate Kenar apps with Divar internal teams. Using this API you can validate a payment ticket and get the issuer payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\PaymentTicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
