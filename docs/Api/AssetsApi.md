# Divar\KenarApiClient\AssetsApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assetsGetBodyStatuses()**](AssetsApi.md#assetsGetBodyStatuses) | **GET** /v1/open-platform/assets/body-status | Get available body-status options in Divar vehicle categories |
| [**assetsGetBrandModels()**](AssetsApi.md#assetsGetBrandModels) | **GET** /v1/open-platform/assets/brand-model/{category} | Get brand models in a Divar category |
| [**assetsGetCategories()**](AssetsApi.md#assetsGetCategories) | **GET** /v1/open-platform/assets/category | Get Divar categories |
| [**assetsGetCities()**](AssetsApi.md#assetsGetCities) | **GET** /v1/open-platform/assets/city | Get Divar cities |
| [**assetsGetColors()**](AssetsApi.md#assetsGetColors) | **GET** /v1/open-platform/assets/color/{category} | Get colors in a Divar category |
| [**assetsGetDistricts()**](AssetsApi.md#assetsGetDistricts) | **GET** /v1/open-platform/assets/district | Get Divar districts |
| [**assetsGetDistricts2()**](AssetsApi.md#assetsGetDistricts2) | **GET** /v1/open-platform/assets/district/{city_slug} | Get Divar districts |
| [**assetsGetInternalStorages()**](AssetsApi.md#assetsGetInternalStorages) | **GET** /v1/open-platform/assets/internal-storage | Get available internal-storage options in Divar mobile/tablet/laptop categories |
| [**assetsGetOAuthScopes()**](AssetsApi.md#assetsGetOAuthScopes) | **GET** /v1/open-platform/assets/oauth-scope | Get KenarDivar OAuth scopes |
| [**assetsGetPermissions()**](AssetsApi.md#assetsGetPermissions) | **GET** /v1/open-platform/assets/permission | Get KenarDivar permissions |
| [**assetsGetRamMemories()**](AssetsApi.md#assetsGetRamMemories) | **GET** /v1/open-platform/assets/ram-memory | Get available ram-memory options in Divar mobile/tablet/laptop categories |
| [**assetsGetServiceTypes()**](AssetsApi.md#assetsGetServiceTypes) | **GET** /v1/open-platform/assets/service-type | Get available service types in KenarDivar |


## `assetsGetBodyStatuses()`

```php
assetsGetBodyStatuses(): \Divar\KenarApiClient\Model\AssetsGetBodyStatusesResponse
```

Get available body-status options in Divar vehicle categories

Get all available body-status options in Divar vehicle categories.This provides persian translations for each body-status options which used in posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get brand models in a Divar category

Get all Divar brand models in specified category.This provides persian translations for each brand models which used in posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get Divar categories

Get all Divar categories. This provides persian translations for each category which used in posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get Divar cities

Get all Divar cities. This provides persian translations for each city which used in posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get colors in a Divar category

Get all Divar colors in specified category.This provides persian translations for each color which used in posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get Divar districts

Get all Divar districts. This provides persian translations for each district which used in posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get Divar districts

Get all Divar districts. This provides persian translations for each district which used in posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get available internal-storage options in Divar mobile/tablet/laptop categories

Get all available internal-storage options in Divar mobile categories.This provides persian translations for each internal-storage options which used in posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get KenarDivar OAuth scopes

These are available scopes for KenarDivar OAuth2.0. Use scopes in OAuth flow to request access to user data or perform actions on their behalf.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get KenarDivar permissions

These permission are used to control access in KenarDivar Apps. Don't mistake them with OAuth scopes. It's expected that apps be blind about these permissions.These are created for internal usages only, but feel free to request to be enabled for you app as needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get available ram-memory options in Divar mobile/tablet/laptop categories

Get all available ram-memory options in Divar mobile/tablet/laptop categories.This provides persian translations for each ram-memory options which used in posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Get available service types in KenarDivar

These service types is used to group similar services in KenarDivar. Any new idea with new service types are welcome. Feel free to request them as needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
