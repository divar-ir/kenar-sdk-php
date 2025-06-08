# Divar\KenarApiClient\AddonsApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addonsCreateBusinessAddon()**](AddonsApi.md#addonsCreateBusinessAddon) | **POST** /v1/open-platform/addons/business/{business_token} | Create a BusinessAddon |
| [**addonsCreatePostAddonV2()**](AddonsApi.md#addonsCreatePostAddonV2) | **POST** /v2/open-platform/addons/post/{token} | افزودن افزونه جدید به آگهی |
| [**addonsCreateUserAddonV2()**](AddonsApi.md#addonsCreateUserAddonV2) | **POST** /v2/open-platform/addons/user/{phone} | افزودن افزونه جدید به کاربر |
| [**addonsCreateUserAddonV22()**](AddonsApi.md#addonsCreateUserAddonV22) | **POST** /v2/open-platform/addons/users/{divar_user_id} | افزودن افزونه جدید به کاربر |
| [**addonsDeletePostAddon()**](AddonsApi.md#addonsDeletePostAddon) | **DELETE** /v1/open-platform/add-ons/post/{token} | حذف افزونه از آگهی |
| [**addonsDeletePostAddon2()**](AddonsApi.md#addonsDeletePostAddon2) | **DELETE** /v1/open-platform/addons/post/{token} | حذف افزونه از آگهی |
| [**addonsDeleteUserAddon()**](AddonsApi.md#addonsDeleteUserAddon) | **DELETE** /v1/open-platform/addons/user/{id} | حذف افزونه کاربر |
| [**addonsGetUserAddons()**](AddonsApi.md#addonsGetUserAddons) | **GET** /v1/open-platform/addons/user/{phone} | دریافت تمام افزونه‌های کاربر |
| [**addonsGetUserAddons2()**](AddonsApi.md#addonsGetUserAddons2) | **GET** /v2/open-platform/addons/users/{divar_user_id} | دریافت تمام افزونه‌های کاربر |


## `addonsCreateBusinessAddon()`

```php
addonsCreateBusinessAddon($business_token, $addons_create_business_addon_body): \Divar\KenarApiClient\Model\AddonsCreateBusinessAddonResponse
```

Create a BusinessAddon

This will create a BusinessAddon on published posts of a business. You can only create Addons which are created by your app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_token = 'business_token_example'; // string
$addons_create_business_addon_body = new \Divar\KenarApiClient\Model\AddonsCreateBusinessAddonBody(); // \Divar\KenarApiClient\Model\AddonsCreateBusinessAddonBody

try {
    $result = $apiInstance->addonsCreateBusinessAddon($business_token, $addons_create_business_addon_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsCreateBusinessAddon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_token** | **string**|  | |
| **addons_create_business_addon_body** | [**\Divar\KenarApiClient\Model\AddonsCreateBusinessAddonBody**](../Model/AddonsCreateBusinessAddonBody.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\AddonsCreateBusinessAddonResponse**](../Model/AddonsCreateBusinessAddonResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addonsCreatePostAddonV2()`

```php
addonsCreatePostAddonV2($token, $addons_create_post_addon_v2_body): object
```

افزودن افزونه جدید به آگهی

با استفاده از این API و با مجوز کاربر، می‌توانید افزونه جدیدی به آگهی متصل کنید. می‌توانید از ویجت‌های موجود برای طراحی افزونه خود استفاده کنید. این API به توکن دسترسی با یکی از دامنه‌های زیر نیاز دارد: - USER_POSTS_ADDON_CREATE - POST_ADDON_CREATE.{post_token}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$addons_create_post_addon_v2_body = new \Divar\KenarApiClient\Model\AddonsCreatePostAddonV2Body(); // \Divar\KenarApiClient\Model\AddonsCreatePostAddonV2Body

try {
    $result = $apiInstance->addonsCreatePostAddonV2($token, $addons_create_post_addon_v2_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsCreatePostAddonV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |
| **addons_create_post_addon_v2_body** | [**\Divar\KenarApiClient\Model\AddonsCreatePostAddonV2Body**](../Model/AddonsCreatePostAddonV2Body.md)|  | |

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

## `addonsCreateUserAddonV2()`

```php
addonsCreateUserAddonV2($phone, $addons_create_user_addon_v2_body): \Divar\KenarApiClient\Model\AddonsCreateUserAddonResponseV2
```

افزودن افزونه جدید به کاربر

با استفاده از این API و با مجوز کاربر، می‌توانید افزونه کاربر ایجاد کنید. افزونه کاربر به تمام آگهی‌های آینده کاربر متصل می‌شود و همچنین 30 آگهی آخر گذشته را پر می‌کند. می‌توانید از ویجت‌های موجود برای طراحی افزونه کاربر خود استفاده کنید. این API به توکن دسترسی با دامنه `USER_ADDON_CREATE` نیاز دارد

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string
$addons_create_user_addon_v2_body = new \Divar\KenarApiClient\Model\AddonsCreateUserAddonV2Body(); // \Divar\KenarApiClient\Model\AddonsCreateUserAddonV2Body

try {
    $result = $apiInstance->addonsCreateUserAddonV2($phone, $addons_create_user_addon_v2_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsCreateUserAddonV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**|  | |
| **addons_create_user_addon_v2_body** | [**\Divar\KenarApiClient\Model\AddonsCreateUserAddonV2Body**](../Model/AddonsCreateUserAddonV2Body.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\AddonsCreateUserAddonResponseV2**](../Model/AddonsCreateUserAddonResponseV2.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addonsCreateUserAddonV22()`

```php
addonsCreateUserAddonV22($divar_user_id, $addons_create_user_addon_v2_body): \Divar\KenarApiClient\Model\AddonsCreateUserAddonResponseV2
```

افزودن افزونه جدید به کاربر

با استفاده از این API و با مجوز کاربر، می‌توانید افزونه کاربر ایجاد کنید. افزونه کاربر به تمام آگهی‌های آینده کاربر متصل می‌شود و همچنین 30 آگهی آخر گذشته را پر می‌کند. می‌توانید از ویجت‌های موجود برای طراحی افزونه کاربر خود استفاده کنید. این API به توکن دسترسی با دامنه `USER_ADDON_CREATE` نیاز دارد

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divar_user_id = 'divar_user_id_example'; // string
$addons_create_user_addon_v2_body = new \Divar\KenarApiClient\Model\AddonsCreateUserAddonV2Body(); // \Divar\KenarApiClient\Model\AddonsCreateUserAddonV2Body

try {
    $result = $apiInstance->addonsCreateUserAddonV22($divar_user_id, $addons_create_user_addon_v2_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsCreateUserAddonV22: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **divar_user_id** | **string**|  | |
| **addons_create_user_addon_v2_body** | [**\Divar\KenarApiClient\Model\AddonsCreateUserAddonV2Body**](../Model/AddonsCreateUserAddonV2Body.md)|  | |

### Return type

[**\Divar\KenarApiClient\Model\AddonsCreateUserAddonResponseV2**](../Model/AddonsCreateUserAddonResponseV2.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addonsDeletePostAddon()`

```php
addonsDeletePostAddon($token): object
```

حذف افزونه از آگهی

فقط می‌توانید افزونه‌هایی را حذف کنید که توسط اپلیکیشن شما ایجاد شده‌اند.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->addonsDeletePostAddon($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsDeletePostAddon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

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

## `addonsDeletePostAddon2()`

```php
addonsDeletePostAddon2($token): object
```

حذف افزونه از آگهی

فقط می‌توانید افزونه‌هایی را حذف کنید که توسط اپلیکیشن شما ایجاد شده‌اند.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->addonsDeletePostAddon2($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsDeletePostAddon2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

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

## `addonsDeleteUserAddon()`

```php
addonsDeleteUserAddon($id): object
```

حذف افزونه کاربر

این تمام افزونه‌های مرتبط با تمام آگهی‌های کاربر را حذف می‌کند. فقط می‌توانید افزونه‌هایی را حذف کنید که توسط اپلیکیشن شما ایجاد شده‌اند.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->addonsDeleteUserAddon($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsDeleteUserAddon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `addonsGetUserAddons()`

```php
addonsGetUserAddons($phone, $divar_user_id): \Divar\KenarApiClient\Model\AddonsGetUserAddonsResponse
```

دریافت تمام افزونه‌های کاربر

دریافت تمام افزونه‌های کاربر یک کاربر.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string
$divar_user_id = 'divar_user_id_example'; // string

try {
    $result = $apiInstance->addonsGetUserAddons($phone, $divar_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsGetUserAddons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**|  | |
| **divar_user_id** | **string**|  | [optional] |

### Return type

[**\Divar\KenarApiClient\Model\AddonsGetUserAddonsResponse**](../Model/AddonsGetUserAddonsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addonsGetUserAddons2()`

```php
addonsGetUserAddons2($divar_user_id, $phone): \Divar\KenarApiClient\Model\AddonsGetUserAddonsResponse
```

دریافت تمام افزونه‌های کاربر

دریافت تمام افزونه‌های کاربر یک کاربر.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divar_user_id = 'divar_user_id_example'; // string
$phone = 'phone_example'; // string

try {
    $result = $apiInstance->addonsGetUserAddons2($divar_user_id, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddonsApi->addonsGetUserAddons2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **divar_user_id** | **string**|  | |
| **phone** | **string**|  | [optional] |

### Return type

[**\Divar\KenarApiClient\Model\AddonsGetUserAddonsResponse**](../Model/AddonsGetUserAddonsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
