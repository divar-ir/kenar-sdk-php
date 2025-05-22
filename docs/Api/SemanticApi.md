# Divar\KenarApiClient\SemanticApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**semanticCreatePostSemantic()**](SemanticApi.md#semanticCreatePostSemantic) | **POST** /experimental/open-platform/semantic/post/{token} | Create Post Semantic |
| [**semanticCreateUserSemantic()**](SemanticApi.md#semanticCreateUserSemantic) | **POST** /v1/open-platform/semantic/user/{phone} | Create User Semantic |
| [**semanticCreateUserSemantic2()**](SemanticApi.md#semanticCreateUserSemantic2) | **POST** /v1/open-platform/semantic/users/{divar_user_id} | Create User Semantic |
| [**semanticDeleteUserSemantic()**](SemanticApi.md#semanticDeleteUserSemantic) | **DELETE** /v1/open-platform/semantic/user/{phone} | Delete User Semantic |
| [**semanticDeleteUserSemantic2()**](SemanticApi.md#semanticDeleteUserSemantic2) | **DELETE** /v1/open-platform/semantic/users/{divar_user_id} | Delete User Semantic |


## `semanticCreatePostSemantic()`

```php
semanticCreatePostSemantic($token, $semantic_create_post_semantic_body): object
```

Create Post Semantic

In some cases, it is necessary to store information about the post in Divar without adding an addon. This API expects access token having `POST_SEMANTIC_CREATE` scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\SemanticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$semantic_create_post_semantic_body = new \Divar\KenarApiClient\Model\SemanticCreatePostSemanticBody(); // \Divar\KenarApiClient\Model\SemanticCreatePostSemanticBody

try {
    $result = $apiInstance->semanticCreatePostSemantic($token, $semantic_create_post_semantic_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemanticApi->semanticCreatePostSemantic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |
| **semantic_create_post_semantic_body** | [**\Divar\KenarApiClient\Model\SemanticCreatePostSemanticBody**](../Model/SemanticCreatePostSemanticBody.md)|  | |

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

## `semanticCreateUserSemantic()`

```php
semanticCreateUserSemantic($phone, $semantic_create_user_semantic_body): \Divar\KenarApiClient\Model\SemanticCreateUserSemanticResponse
```

Create User Semantic

In some cases, it is necessary to store information about the user in Divar without adding an addon. The username in Divar is the same as the mobile number. This API expects access token having `USER_VERIFICATION_CREATE` scope. Use the User Semantic APIs for this purpose.This service allows sending semantic information and an optional payment ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\SemanticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string
$semantic_create_user_semantic_body = new \Divar\KenarApiClient\Model\SemanticCreateUserSemanticBody(); // \Divar\KenarApiClient\Model\SemanticCreateUserSemanticBody

try {
    $result = $apiInstance->semanticCreateUserSemantic($phone, $semantic_create_user_semantic_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemanticApi->semanticCreateUserSemantic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**|  | |
| **semantic_create_user_semantic_body** | [**\Divar\KenarApiClient\Model\SemanticCreateUserSemanticBody**](../Model/SemanticCreateUserSemanticBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\SemanticCreateUserSemanticResponse**](../Model/SemanticCreateUserSemanticResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `semanticCreateUserSemantic2()`

```php
semanticCreateUserSemantic2($divar_user_id, $semantic_create_user_semantic_body): \Divar\KenarApiClient\Model\SemanticCreateUserSemanticResponse
```

Create User Semantic

In some cases, it is necessary to store information about the user in Divar without adding an addon. The username in Divar is the same as the mobile number. This API expects access token having `USER_VERIFICATION_CREATE` scope. Use the User Semantic APIs for this purpose.This service allows sending semantic information and an optional payment ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\SemanticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divar_user_id = 'divar_user_id_example'; // string
$semantic_create_user_semantic_body = new \Divar\KenarApiClient\Model\SemanticCreateUserSemanticBody(); // \Divar\KenarApiClient\Model\SemanticCreateUserSemanticBody

try {
    $result = $apiInstance->semanticCreateUserSemantic2($divar_user_id, $semantic_create_user_semantic_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemanticApi->semanticCreateUserSemantic2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **divar_user_id** | **string**|  | |
| **semantic_create_user_semantic_body** | [**\Divar\KenarApiClient\Model\SemanticCreateUserSemanticBody**](../Model/SemanticCreateUserSemanticBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\SemanticCreateUserSemanticResponse**](../Model/SemanticCreateUserSemanticResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `semanticDeleteUserSemantic()`

```php
semanticDeleteUserSemantic($phone, $divar_user_id): object
```

Delete User Semantic

You can delete the semantic information of a user by calling this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\SemanticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string
$divar_user_id = 'divar_user_id_example'; // string

try {
    $result = $apiInstance->semanticDeleteUserSemantic($phone, $divar_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemanticApi->semanticDeleteUserSemantic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**|  | |
| **divar_user_id** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `semanticDeleteUserSemantic2()`

```php
semanticDeleteUserSemantic2($divar_user_id, $phone): object
```

Delete User Semantic

You can delete the semantic information of a user by calling this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\SemanticApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divar_user_id = 'divar_user_id_example'; // string
$phone = 'phone_example'; // string

try {
    $result = $apiInstance->semanticDeleteUserSemantic2($divar_user_id, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemanticApi->semanticDeleteUserSemantic2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **divar_user_id** | **string**|  | |
| **phone** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
