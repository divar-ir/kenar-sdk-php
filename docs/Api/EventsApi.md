# Divar\KenarApiClient\EventsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventsRegisterEventSubscription()**](EventsApi.md#eventsRegisterEventSubscription) | **POST** /v1/open-platform/events/subscriptions | Subscribe to an event |


## `eventsRegisterEventSubscription()`

```php
eventsRegisterEventSubscription($events_register_event_subscription_request): object
```

Subscribe to an event

This requests allows you to subscribe to an event. You need to send access-token in this API to check your access. For subscribing on `NEW_MESSAGE_ON_POST` you need one of these scopes: - CHAT_POST_CONVERSATIONS_READ.{post_token} - CHAT_SUPPLIER_ALL_CONVERSATIONS_READ For subscribing on `POST_UPDATE` you need `USER_POSTS_GET` scope. After calling this API, You'll be notified in your webhook when corresponding event occurs. Make sure webhook URL is set on providers panel for your app. Some events are enabled by default and no subscription is needed for them(e.g chatbot messages).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
