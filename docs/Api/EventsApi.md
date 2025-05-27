# Divar\KenarApiClient\EventsApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventsRegisterEventSubscription()**](EventsApi.md#eventsRegisterEventSubscription) | **POST** /v1/open-platform/events/subscriptions | اشتراک در رویداد |


## `eventsRegisterEventSubscription()`

```php
eventsRegisterEventSubscription($events_register_event_subscription_request): object
```

اشتراک در رویداد

این درخواست به شما امکان اشتراک در رویداد را می‌دهد. باید access-token را در این API ارسال کنید تا دسترسی شما بررسی شود. برای اشتراک در `NEW_MESSAGE_ON_POST` به یکی از این دامنه‌ها نیاز دارید: - CHAT_POST_CONVERSATIONS_READ.{post_token} - CHAT_SUPPLIER_ALL_CONVERSATIONS_READ برای اشتراک در `POST_UPDATE` به دامنه `USER_POSTS_GET` نیاز دارید. پس از فراخوانی این API، هنگام وقوع رویداد مربوطه در webhook خود مطلع خواهید شد. مطمئن شوید URL webhook در پنل ارائه‌دهندگان برای اپلیکیشن شما تنظیم شده است. برخی رویدادها به طور پیش‌فرض فعال هستند و نیازی به اشتراک ندارند (مثل پیام‌های chatbot).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$events_register_event_subscription_request = new \Divar\KenarApiClient\Model\EventsRegisterEventSubscriptionRequest(); // \Divar\KenarApiClient\Model\EventsRegisterEventSubscriptionRequest

try {
    $result = $apiInstance->eventsRegisterEventSubscription($events_register_event_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsRegisterEventSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **events_register_event_subscription_request** | [**\Divar\KenarApiClient\Model\EventsRegisterEventSubscriptionRequest**](../Model/EventsRegisterEventSubscriptionRequest.md)|  | |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
