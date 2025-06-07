# Divar\KenarApiClient\ChatAPIApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**chatAPIChatBotSendMessage()**](ChatAPIApi.md#chatAPIChatBotSendMessage) | **POST** /v1/open-platform/chat/bot/conversations/{conversation_id}/messages | ارسال پیام به مکالمه ChatBot |
| [**chatAPIChatBotSendMessage2()**](ChatAPIApi.md#chatAPIChatBotSendMessage2) | **POST** /v1/open-platform/chat/bot/users/{user_id}/messages | ارسال پیام به مکالمه ChatBot |
| [**chatAPIChatBotSendMessage3()**](ChatAPIApi.md#chatAPIChatBotSendMessage3) | **POST** /experimental/open-platform/chatbot-conversations/{conversation_id}/messages | ارسال پیام به مکالمه ChatBot |
| [**chatAPIChatBotSendMessage4()**](ChatAPIApi.md#chatAPIChatBotSendMessage4) | **POST** /experimental/open-platform/chat/bot/users/{user_id}/messages | ارسال پیام به مکالمه ChatBot |
| [**chatAPIChatBotSendMessage5()**](ChatAPIApi.md#chatAPIChatBotSendMessage5) | **POST** /experimental/open-platform/chat/bot/conversations/{conversation_id}/messages | ارسال پیام به مکالمه ChatBot |
| [**chatAPIConversationSendMessage()**](ChatAPIApi.md#chatAPIConversationSendMessage) | **POST** /v2/open-platform/conversations/{conversation_id}/messages | ارسال پیام به مکالمه |
| [**chatAPIGenerateUploadToken()**](ChatAPIApi.md#chatAPIGenerateUploadToken) | **POST** /experimental/open-platform/chat/upload | تولید توکن آپلود |
| [**chatAPIGetConversation()**](ChatAPIApi.md#chatAPIGetConversation) | **GET** /v1/open-platform/chat/conversations/{conversation_id} | دریافت مکالمه با شناسه آن |


## `chatAPIChatBotSendMessage()`

```php
chatAPIChatBotSendMessage($conversation_id, $chat_api_chat_bot_send_message_body): \Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse
```

ارسال پیام به مکالمه ChatBot

می‌توانید این API را با conversation_id یا user_id فراخوانی کنید. فراخوانی با user_id نیاز به access_token با دامنه CHAT_BOT_USER_MESSAGE_SEND دارد. این به شما امکان شروع مکالمه با کاربر از ChatBot را می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\ChatAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Unique identifier for the conversation
$chat_api_chat_bot_send_message_body = new \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody(); // \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody

try {
    $result = $apiInstance->chatAPIChatBotSendMessage($conversation_id, $chat_api_chat_bot_send_message_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatBotSendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| Unique identifier for the conversation | |
| **chat_api_chat_bot_send_message_body** | [**\Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody**](../Model/ChatAPIChatBotSendMessageBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse**](../Model/ChatapiChatBotSendMessageResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chatAPIChatBotSendMessage2()`

```php
chatAPIChatBotSendMessage2($user_id, $chat_api_chat_bot_send_message_body): \Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse
```

ارسال پیام به مکالمه ChatBot

می‌توانید این API را با conversation_id یا user_id فراخوانی کنید. فراخوانی با user_id نیاز به access_token با دامنه CHAT_BOT_USER_MESSAGE_SEND دارد. این به شما امکان شروع مکالمه با کاربر از ChatBot را می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\ChatAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Unique identifier for the user to start or continue a conversation with
$chat_api_chat_bot_send_message_body = new \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody(); // \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody

try {
    $result = $apiInstance->chatAPIChatBotSendMessage2($user_id, $chat_api_chat_bot_send_message_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatBotSendMessage2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Unique identifier for the user to start or continue a conversation with | |
| **chat_api_chat_bot_send_message_body** | [**\Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody**](../Model/ChatAPIChatBotSendMessageBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse**](../Model/ChatapiChatBotSendMessageResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chatAPIChatBotSendMessage3()`

```php
chatAPIChatBotSendMessage3($conversation_id, $chat_api_chat_bot_send_message_body): \Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse
```

ارسال پیام به مکالمه ChatBot

می‌توانید این API را با conversation_id یا user_id فراخوانی کنید. فراخوانی با user_id نیاز به access_token با دامنه CHAT_BOT_USER_MESSAGE_SEND دارد. این به شما امکان شروع مکالمه با کاربر از ChatBot را می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\ChatAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Unique identifier for the conversation
$chat_api_chat_bot_send_message_body = new \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody(); // \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody

try {
    $result = $apiInstance->chatAPIChatBotSendMessage3($conversation_id, $chat_api_chat_bot_send_message_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatBotSendMessage3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| Unique identifier for the conversation | |
| **chat_api_chat_bot_send_message_body** | [**\Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody**](../Model/ChatAPIChatBotSendMessageBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse**](../Model/ChatapiChatBotSendMessageResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chatAPIChatBotSendMessage4()`

```php
chatAPIChatBotSendMessage4($user_id, $chat_api_chat_bot_send_message_body): \Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse
```

ارسال پیام به مکالمه ChatBot

می‌توانید این API را با conversation_id یا user_id فراخوانی کنید. فراخوانی با user_id نیاز به access_token با دامنه CHAT_BOT_USER_MESSAGE_SEND دارد. این به شما امکان شروع مکالمه با کاربر از ChatBot را می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\ChatAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Unique identifier for the user to start or continue a conversation with
$chat_api_chat_bot_send_message_body = new \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody(); // \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody

try {
    $result = $apiInstance->chatAPIChatBotSendMessage4($user_id, $chat_api_chat_bot_send_message_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatBotSendMessage4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Unique identifier for the user to start or continue a conversation with | |
| **chat_api_chat_bot_send_message_body** | [**\Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody**](../Model/ChatAPIChatBotSendMessageBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse**](../Model/ChatapiChatBotSendMessageResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chatAPIChatBotSendMessage5()`

```php
chatAPIChatBotSendMessage5($conversation_id, $chat_api_chat_bot_send_message_body): \Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse
```

ارسال پیام به مکالمه ChatBot

می‌توانید این API را با conversation_id یا user_id فراخوانی کنید. فراخوانی با user_id نیاز به access_token با دامنه CHAT_BOT_USER_MESSAGE_SEND دارد. این به شما امکان شروع مکالمه با کاربر از ChatBot را می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\ChatAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Unique identifier for the conversation
$chat_api_chat_bot_send_message_body = new \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody(); // \Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody

try {
    $result = $apiInstance->chatAPIChatBotSendMessage5($conversation_id, $chat_api_chat_bot_send_message_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatBotSendMessage5: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| Unique identifier for the conversation | |
| **chat_api_chat_bot_send_message_body** | [**\Divar\KenarApiClient\Model\ChatAPIChatBotSendMessageBody**](../Model/ChatAPIChatBotSendMessageBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse**](../Model/ChatapiChatBotSendMessageResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chatAPIConversationSendMessage()`

```php
chatAPIConversationSendMessage($conversation_id, $chat_api_conversation_send_message_body): \Divar\KenarApiClient\Model\ChatapiConversationSendMessageResponse
```

ارسال پیام به مکالمه

این API برای ارسال پیام به مکالمه استفاده می‌شود. برای فراخوانی این API به یکی از دامنه‌های زیر نیاز دارید: - CONVERSATION_SEND_MESSAGE.{conversation_id} - CHAT_SUPPLIER_ALL_CONVERSATIONS_MESSAGE_SEND - CHAT_POST_CONVERSATIONS_MESSAGE_SEND.{post_token}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\ChatAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Unique identifier for the conversation
$chat_api_conversation_send_message_body = new \Divar\KenarApiClient\Model\ChatAPIConversationSendMessageBody(); // \Divar\KenarApiClient\Model\ChatAPIConversationSendMessageBody

try {
    $result = $apiInstance->chatAPIConversationSendMessage($conversation_id, $chat_api_conversation_send_message_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIConversationSendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| Unique identifier for the conversation | |
| **chat_api_conversation_send_message_body** | [**\Divar\KenarApiClient\Model\ChatAPIConversationSendMessageBody**](../Model/ChatAPIConversationSendMessageBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\ChatapiConversationSendMessageResponse**](../Model/ChatapiConversationSendMessageResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chatAPIGenerateUploadToken()`

```php
chatAPIGenerateUploadToken($body): \Divar\KenarApiClient\Model\ChatapiGenerateUploadTokenResponse
```

تولید توکن آپلود

این API برای تولید توکن آپلود برای آپلود فایل‌های رسانه‌ای استفاده می‌شود.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\ChatAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->chatAPIGenerateUploadToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIGenerateUploadToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |

### Return type

[**\Divar\KenarApiClient\Model\ChatapiGenerateUploadTokenResponse**](../Model/ChatapiGenerateUploadTokenResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chatAPIGetConversation()`

```php
chatAPIGetConversation($conversation_id): \Divar\KenarApiClient\Model\ChatapiGetConversationResponse
```

دریافت مکالمه با شناسه آن

این API برای دریافت مکالمه و پیام‌های یک مکالمه با شناسه آن استفاده می‌شود. این API توکن دسترسی با دامنه `CHAT_CONVERSATION_READ` را انتظار دارد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\ChatAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Unique identifier for the conversation

try {
    $result = $apiInstance->chatAPIGetConversation($conversation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIGetConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| Unique identifier for the conversation | |

### Return type

[**\Divar\KenarApiClient\Model\ChatapiGetConversationResponse**](../Model/ChatapiGetConversationResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
