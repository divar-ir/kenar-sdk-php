# Divar\KenarApiClient\FinderApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**finderGetPost()**](FinderApi.md#finderGetPost) | **GET** /v1/open-platform/finder/post/{token} | Get a Divar post |
| [**finderGetUser()**](FinderApi.md#finderGetUser) | **POST** /v1/open-platform/users | Get user information |
| [**finderGetUser2()**](FinderApi.md#finderGetUser2) | **GET** /v1/open-platform/users | Get user information |
| [**finderGetUserPosts()**](FinderApi.md#finderGetUserPosts) | **GET** /v1/open-platform/finder/user-posts | Get user posts |
| [**finderSearchPostV2()**](FinderApi.md#finderSearchPostV2) | **POST** /v2/open-platform/finder/post | Search Divar posts with some filters |


## `finderGetPost()`

```php
finderGetPost($token): \Divar\KenarApiClient\Model\FinderGetPostResponse
```

Get a Divar post

This API allows you to get details about Divar post by its token. You can use the token to get the post data and its state in order to implement your service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->finderGetPost($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinderApi->finderGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

### Return type

[**\Divar\KenarApiClient\Model\FinderGetPostResponse**](../Model/FinderGetPostResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finderGetUser()`

```php
finderGetUser($body): \Divar\KenarApiClient\Model\FinderUser
```

Get user information

After gaining an access token, you can use this API to get user information. With scope `USER_PHONE` you can get user phone number. With scope `USER_ID` you can get user id and you can rely on uniqueness of this id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->finderGetUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinderApi->finderGetUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |

### Return type

[**\Divar\KenarApiClient\Model\FinderUser**](../Model/FinderUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finderGetUser2()`

```php
finderGetUser2(): \Divar\KenarApiClient\Model\FinderUser
```

Get user information

After gaining an access token, you can use this API to get user information. With scope `USER_PHONE` you can get user phone number. With scope `USER_ID` you can get user id and you can rely on uniqueness of this id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->finderGetUser2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinderApi->finderGetUser2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\FinderUser**](../Model/FinderUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finderGetUserPosts()`

```php
finderGetUserPosts(): \Divar\KenarApiClient\Model\FinderGetUserPostsResponse
```

Get user posts

This API allows you to get all posts of a user. You can use this API to show user posts in your service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->finderGetUserPosts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinderApi->finderGetUserPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\FinderGetUserPostsResponse**](../Model/FinderGetUserPostsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finderSearchPostV2()`

```php
finderSearchPostV2($finder_search_posts_v2_request): \Divar\KenarApiClient\Model\FinderSearchPostV2Response
```

Search Divar posts with some filters

This API allows you to search Divar posts with some filters. You can search posts by category, city, district, and some other filters. Posts will be sorted by their timestamp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$finder_search_posts_v2_request = new \Divar\KenarApiClient\Model\FinderSearchPostsV2Request(); // \Divar\KenarApiClient\Model\FinderSearchPostsV2Request

try {
    $result = $apiInstance->finderSearchPostV2($finder_search_posts_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinderApi->finderSearchPostV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **finder_search_posts_v2_request** | [**\Divar\KenarApiClient\Model\FinderSearchPostsV2Request**](../Model/FinderSearchPostsV2Request.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\FinderSearchPostV2Response**](../Model/FinderSearchPostV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
