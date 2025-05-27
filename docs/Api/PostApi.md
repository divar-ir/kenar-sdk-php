# Divar\KenarApiClient\PostApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postEditPost()**](PostApi.md#postEditPost) | **PUT** /v1/open-platform/post/{post_token} | ویرایش آگهی |
| [**postGetImageUploadURL()**](PostApi.md#postGetImageUploadURL) | **GET** /v1/open-platform/post/image-upload-url | دریافت URL آپلود تصویر |


## `postEditPost()`

```php
postEditPost($post_token, $post_edit_post_body): object
```

ویرایش آگهی

این API به شما امکان ویرایش آگهی را می‌دهد. این نیاز به دامنه OAuth `POST_EDIT.{post_token}` دارد. در حال حاضر فقط می‌توانید عنوان، توضیحات و تصاویر آگهی را ویرایش کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_token = 'post_token_example'; // string
$post_edit_post_body = new \Divar\KenarApiClient\Model\PostEditPostBody(); // \Divar\KenarApiClient\Model\PostEditPostBody

try {
    $result = $apiInstance->postEditPost($post_token, $post_edit_post_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->postEditPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_token** | **string**|  | |
| **post_edit_post_body** | [**\Divar\KenarApiClient\Model\PostEditPostBody**](../Model/PostEditPostBody.md)|  | |

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

## `postGetImageUploadURL()`

```php
postGetImageUploadURL(): \Divar\KenarApiClient\Model\PostGetImageUploadURLResponse
```

دریافت URL آپلود تصویر

این API به شما امکان دریافت URL آپلود برای آپلود تصاویر آگهی را می‌دهد. می‌توانید تصاویر را با استفاده از درخواست POST با کدگذاری باینری به URL برگشتی آپلود کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postGetImageUploadURL();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->postGetImageUploadURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\PostGetImageUploadURLResponse**](../Model/PostGetImageUploadURLResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
