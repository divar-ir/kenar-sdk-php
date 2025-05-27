# Divar\KenarApiClient\AssetsApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assetsGetBodyStatuses()**](AssetsApi.md#assetsGetBodyStatuses) | **GET** /v1/open-platform/assets/body-status | دریافت گزینه‌های وضعیت بدنه موجود در دسته‌بندی‌های خودرو دیوار |
| [**assetsGetBrandModels()**](AssetsApi.md#assetsGetBrandModels) | **GET** /v1/open-platform/assets/brand-model/{category} | دریافت مدل‌های برند در دسته‌بندی دیوار |
| [**assetsGetCategories()**](AssetsApi.md#assetsGetCategories) | **GET** /v1/open-platform/assets/category | دریافت دسته‌بندی‌های دیوار |
| [**assetsGetCities()**](AssetsApi.md#assetsGetCities) | **GET** /v1/open-platform/assets/city | دریافت شهرهای دیوار |
| [**assetsGetColors()**](AssetsApi.md#assetsGetColors) | **GET** /v1/open-platform/assets/color/{category} | دریافت رنگ‌ها در دسته‌بندی دیوار |
| [**assetsGetDistricts()**](AssetsApi.md#assetsGetDistricts) | **GET** /v1/open-platform/assets/district | دریافت مناطق دیوار |
| [**assetsGetDistricts2()**](AssetsApi.md#assetsGetDistricts2) | **GET** /v1/open-platform/assets/district/{city_slug} | دریافت مناطق دیوار |
| [**assetsGetInternalStorages()**](AssetsApi.md#assetsGetInternalStorages) | **GET** /v1/open-platform/assets/internal-storage | دریافت گزینه‌های حافظه داخلی موجود در دسته‌بندی‌های موبایل/تبلت/لپ‌تاپ دیوار |
| [**assetsGetOAuthScopes()**](AssetsApi.md#assetsGetOAuthScopes) | **GET** /v1/open-platform/assets/oauth-scope | دریافت دامنه‌های OAuth کنار دیوار |
| [**assetsGetPermissions()**](AssetsApi.md#assetsGetPermissions) | **GET** /v1/open-platform/assets/permission | دریافت مجوزهای کنار دیوار |
| [**assetsGetRamMemories()**](AssetsApi.md#assetsGetRamMemories) | **GET** /v1/open-platform/assets/ram-memory | دریافت گزینه‌های حافظه رم موجود در دسته‌بندی‌های موبایل/تبلت/لپ‌تاپ دیوار |
| [**assetsGetServiceTypes()**](AssetsApi.md#assetsGetServiceTypes) | **GET** /v1/open-platform/assets/service-type | دریافت انواع سرویس موجود در کنار دیوار |


## `assetsGetBodyStatuses()`

```php
assetsGetBodyStatuses(): \Divar\KenarApiClient\Model\AssetsGetBodyStatusesResponse
```

دریافت گزینه‌های وضعیت بدنه موجود در دسته‌بندی‌های خودرو دیوار

دریافت تمام گزینه‌های وضعیت بدنه موجود در دسته‌بندی‌های خودرو دیوار. این ترجمه فارسی برای هر گزینه وضعیت بدنه که در آگهی‌ها استفاده می‌شود، ارائه می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->assetsGetBodyStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetBodyStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetBodyStatusesResponse**](../Model/AssetsGetBodyStatusesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetBrandModels()`

```php
assetsGetBrandModels($category): \Divar\KenarApiClient\Model\AssetsGetBrandModelsResponse
```

دریافت مدل‌های برند در دسته‌بندی دیوار

دریافت تمام مدل‌های برند دیوار در دسته‌بندی مشخص شده. این ترجمه فارسی برای هر مدل برند که در آگهی‌ها استفاده می‌شود، ارائه می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = 'category_example'; // string

try {
    $result = $apiInstance->assetsGetBrandModels($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetBrandModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category** | **string**|  | |

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetBrandModelsResponse**](../Model/AssetsGetBrandModelsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetCategories()`

```php
assetsGetCategories(): \Divar\KenarApiClient\Model\AssetsGetCategoriesResponse
```

دریافت دسته‌بندی‌های دیوار

دریافت تمام دسته‌بندی‌های دیوار. این ترجمه فارسی برای هر دسته‌بندی که در آگهی‌ها استفاده می‌شود، ارائه می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->assetsGetCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetCategoriesResponse**](../Model/AssetsGetCategoriesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetCities()`

```php
assetsGetCities(): \Divar\KenarApiClient\Model\AssetsGetCitiesResponse
```

دریافت شهرهای دیوار

دریافت تمام شهرهای دیوار. این ترجمه فارسی برای هر شهر که در آگهی‌ها استفاده می‌شود، ارائه می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->assetsGetCities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetCities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetCitiesResponse**](../Model/AssetsGetCitiesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetColors()`

```php
assetsGetColors($category): \Divar\KenarApiClient\Model\AssetsGetColorsResponse
```

دریافت رنگ‌ها در دسته‌بندی دیوار

دریافت تمام رنگ‌های دیوار در دسته‌بندی مشخص شده. این ترجمه فارسی برای هر رنگ که در آگهی‌ها استفاده می‌شود، ارائه می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = 'category_example'; // string

try {
    $result = $apiInstance->assetsGetColors($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetColors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category** | **string**|  | |

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetColorsResponse**](../Model/AssetsGetColorsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetDistricts()`

```php
assetsGetDistricts($city_slug): \Divar\KenarApiClient\Model\AssetsGetDistrictsResponse
```

دریافت مناطق دیوار

دریافت تمام مناطق دیوار. این ترجمه فارسی برای هر منطقه که در آگهی‌ها استفاده می‌شود، ارائه می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$city_slug = 'city_slug_example'; // string

try {
    $result = $apiInstance->assetsGetDistricts($city_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetDistricts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **city_slug** | **string**|  | [optional] |

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetDistrictsResponse**](../Model/AssetsGetDistrictsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetDistricts2()`

```php
assetsGetDistricts2($city_slug): \Divar\KenarApiClient\Model\AssetsGetDistrictsResponse
```

دریافت مناطق دیوار

دریافت تمام مناطق دیوار. این ترجمه فارسی برای هر منطقه که در آگهی‌ها استفاده می‌شود، ارائه می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$city_slug = 'city_slug_example'; // string

try {
    $result = $apiInstance->assetsGetDistricts2($city_slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetDistricts2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **city_slug** | **string**|  | |

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetDistrictsResponse**](../Model/AssetsGetDistrictsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetInternalStorages()`

```php
assetsGetInternalStorages(): \Divar\KenarApiClient\Model\AssetsGetInternalStoragesResponse
```

دریافت گزینه‌های حافظه داخلی موجود در دسته‌بندی‌های موبایل/تبلت/لپ‌تاپ دیوار

دریافت تمام گزینه‌های حافظه داخلی موجود در دسته‌بندی‌های موبایل دیوار. این ترجمه فارسی برای هر گزینه حافظه داخلی که در آگهی‌ها استفاده می‌شود، ارائه می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->assetsGetInternalStorages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetInternalStorages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetInternalStoragesResponse**](../Model/AssetsGetInternalStoragesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetOAuthScopes()`

```php
assetsGetOAuthScopes(): \Divar\KenarApiClient\Model\AssetsGetOAuthScopesResponse
```

دریافت دامنه‌های OAuth کنار دیوار

اینها دامنه‌های موجود برای OAuth2.0 کنار دیوار هستند. از دامنه‌ها در جریان OAuth برای درخواست دسترسی به داده‌های کاربر یا انجام اقدامات از طرف آنها استفاده کنید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->assetsGetOAuthScopes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetOAuthScopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetOAuthScopesResponse**](../Model/AssetsGetOAuthScopesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetPermissions()`

```php
assetsGetPermissions(): \Divar\KenarApiClient\Model\AssetsGetPermissionsResponse
```

دریافت مجوزهای کنار دیوار

این مجوزها برای کنترل دسترسی در اپلیکیشن‌های کنار دیوار استفاده می‌شوند. آنها را با دامنه‌های OAuth اشتباه نگیرید. انتظار می‌رود اپلیکیشن‌ها نسبت به این مجوزها کور باشند. اینها فقط برای استفاده‌های داخلی ایجاد شده‌اند، اما در صورت نیاز آزادانه درخواست فعال‌سازی برای اپلیکیشن خود را ارائه دهید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->assetsGetPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetPermissionsResponse**](../Model/AssetsGetPermissionsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetRamMemories()`

```php
assetsGetRamMemories(): \Divar\KenarApiClient\Model\AssetsGetRamMemoriesResponse
```

دریافت گزینه‌های حافظه رم موجود در دسته‌بندی‌های موبایل/تبلت/لپ‌تاپ دیوار

دریافت تمام گزینه‌های حافظه رم موجود در دسته‌بندی‌های موبایل/تبلت/لپ‌تاپ دیوار. این ترجمه فارسی برای هر گزینه حافظه رم که در آگهی‌ها استفاده می‌شود، ارائه می‌دهد.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->assetsGetRamMemories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetRamMemories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetRamMemoriesResponse**](../Model/AssetsGetRamMemoriesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsGetServiceTypes()`

```php
assetsGetServiceTypes(): \Divar\KenarApiClient\Model\AssetsGetServiceTypesResponse
```

دریافت انواع سرویس موجود در کنار دیوار

این انواع سرویس برای گروه‌بندی سرویس‌های مشابه در کنار دیوار استفاده می‌شود. هر ایده جدید با انواع سرویس جدید خوشامد است. در صورت نیاز آزادانه درخواست دهید.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKey
$config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Divar\KenarApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->assetsGetServiceTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsGetServiceTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Divar\KenarApiClient\Model\AssetsGetServiceTypesResponse**](../Model/AssetsGetServiceTypesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
