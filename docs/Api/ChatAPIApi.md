# Divar\KenarApiClient\ChatAPIApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**chatAPIChatBotSendMessage()**](ChatAPIApi.md#chatAPIChatBotSendMessage) | **POST** /experimental/open-platform/chatbot-conversations/{conversation_id}/messages | Send a message to a ChatBot conversation |
| [**chatAPIChatBotSendMessage2()**](ChatAPIApi.md#chatAPIChatBotSendMessage2) | **POST** /experimental/open-platform/chat/bot/users/{user_id}/messages | Send a message to a ChatBot conversation |
| [**chatAPIChatBotSendMessage3()**](ChatAPIApi.md#chatAPIChatBotSendMessage3) | **POST** /experimental/open-platform/chat/bot/conversations/{conversation_id}/messages | Send a message to a ChatBot conversation |
| [**chatAPIConversationSendMessage()**](ChatAPIApi.md#chatAPIConversationSendMessage) | **POST** /v2/open-platform/conversations/{conversation_id}/messages | Send a message to a conversation |
| [**chatAPIGenerateUploadToken()**](ChatAPIApi.md#chatAPIGenerateUploadToken) | **POST** /experimental/open-platform/chat/upload | Generate an upload token |
| [**chatAPIGetConversation()**](ChatAPIApi.md#chatAPIGetConversation) | **GET** /v1/open-platform/chat/conversations/{conversation_id} | Get Conversation by it&#39;s ID |


## `chatAPIChatBotSendMessage()`

```php
chatAPIChatBotSendMessage($conversation_id, $chat_api_chat_bot_send_message_body): \Divar\KenarApiClient\Model\ChatapiChatBotSendMessageResponse
```

Send a message to a ChatBot conversation

You can call this API with either conversation_id or user_id. Calling with user_id needs a access_token having CHAT_BOT_USER_MESSAGE_SEND scope.This enables you to start conversation with user from ChatBot.

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

Send a message to a ChatBot conversation

You can call this API with either conversation_id or user_id. Calling with user_id needs a access_token having CHAT_BOT_USER_MESSAGE_SEND scope.This enables you to start conversation with user from ChatBot.

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

Send a message to a ChatBot conversation

You can call this API with either conversation_id or user_id. Calling with user_id needs a access_token having CHAT_BOT_USER_MESSAGE_SEND scope.This enables you to start conversation with user from ChatBot.

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

## `chatAPIConversationSendMessage()`

```php
chatAPIConversationSendMessage($conversation_id, $chat_api_conversation_send_message_body): \Divar\KenarApiClient\Model\ChatapiConversationSendMessageResponse
```

Send a message to a conversation

This API is used to send a message to a conversation. You need one of the following scopes to call this API: - CONVERSATION_SEND_MESSAGE.{conversation_id} - CHAT_SUPPLIER_ALL_CONVERSATIONS_MESSAGE_SEND - CHAT_POST_CONVERSATIONS_MESSAGE_SEND.{post_token}

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

Generate an upload token

This API is used to generate an upload token for uploading media files.

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

Get Conversation by it's ID

This API is used to get the conversation and messages of a conversation by it's ID.This API expects access token with `CHAT_CONVERSATION_READ` scope.

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
