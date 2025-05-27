# Divar\KenarApiClient\FinderApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**finderGetPost()**](FinderApi.md#finderGetPost) | **GET** /v1/open-platform/finder/post/{token} | دریافت آگهی دیوار |
| [**finderGetUser()**](FinderApi.md#finderGetUser) | **POST** /v1/open-platform/users | دریافت اطلاعات کاربر |
| [**finderGetUser2()**](FinderApi.md#finderGetUser2) | **GET** /v1/open-platform/users | دریافت اطلاعات کاربر |
| [**finderGetUserPosts()**](FinderApi.md#finderGetUserPosts) | **GET** /v1/open-platform/finder/user-posts | دریافت آگهی‌های کاربر |
| [**finderSearchPostV2()**](FinderApi.md#finderSearchPostV2) | **POST** /v2/open-platform/finder/post | جستجو آگهی‌های دیوار با فیلترهایی |


## `finderGetPost()`

```php
finderGetPost($token): \Divar\KenarApiClient\Model\FinderGetPostResponse
```

دریافت آگهی دیوار

This API allows you to get details about Divar post by its token. You can use the token to get the post data and its state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[APIKey](../../README.md#APIKey)

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

دریافت اطلاعات کاربر

پس از دریافت توکن دسترسی، می‌توانید از این API برای دریافت اطلاعات کاربر استفاده کنید. با scope `USER_PHONE` می‌توانید شماره تلفن کاربر را دریافت کنید. با scope `USER_ID` می‌توانید شناسه کاربر را دریافت کرده و می‌توانید روی منحصر به فرد بودن این شناسه تکیه کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[APIKey](../../README.md#APIKey)

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

دریافت اطلاعات کاربر

پس از دریافت توکن دسترسی، می‌توانید از این API برای دریافت اطلاعات کاربر استفاده کنید. با scope `USER_PHONE` می‌توانید شماره تلفن کاربر را دریافت کنید. با scope `USER_ID` می‌توانید شناسه کاربر را دریافت کرده و می‌توانید روی منحصر به فرد بودن این شناسه تکیه کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[APIKey](../../README.md#APIKey)

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

دریافت آگهی‌های کاربر

این API به شما امکان دریافت تمام آگهی‌های یک کاربر را می‌دهد. می‌توانید از این API برای نمایش آگهی‌های کاربر در سرویس خود استفاده کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[APIKey](../../README.md#APIKey)

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

جستجو آگهی‌های دیوار با فیلترهایی

این API به شما امکان جستجو آگهی‌های دیوار با برخی فیلترها را می‌دهد. می‌توانید آگهی‌ها را بر اساس دسته‌بندی، شهر، منطقه و برخی فیلترهای دیگر جستجو کنید. آگهی‌ها بر اساس زمان آنها مرتب می‌شوند.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\FinderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
