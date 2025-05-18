# Divar\KenarApiClient\PostApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postEditPost()**](PostApi.md#postEditPost) | **PUT** /v1/open-platform/post/{post_token} | Edit a post |
| [**postGetImageUploadURL()**](PostApi.md#postGetImageUploadURL) | **GET** /v1/open-platform/post/image-upload-url | Get image upload URL |


## `postEditPost()`

```php
postEditPost($post_token, $post_edit_post_body): object
```

Edit a post

This API allows you to edit a post. This needs `POST_EDIT.{post_token}` OAuth scope. By now you can only edit title, description, and images of a post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get image upload URL

This API allows you to get an upload URL for uploading images of a post. You can upload images to the returned URL using a POST request with binary encoding.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
