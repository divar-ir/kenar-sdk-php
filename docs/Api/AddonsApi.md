# Divar\KenarApiClient\AddonsApi

All URIs are relative to https://open-api.divar.ir, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addonsCreatePostAddonV2()**](AddonsApi.md#addonsCreatePostAddonV2) | **POST** /v2/open-platform/addons/post/{token} | Attach a new Addon to a post |
| [**addonsCreateUserAddonV2()**](AddonsApi.md#addonsCreateUserAddonV2) | **POST** /v2/open-platform/addons/user/{phone} | Attach a new Addon to a user |
| [**addonsCreateUserAddonV22()**](AddonsApi.md#addonsCreateUserAddonV22) | **POST** /v2/open-platform/addons/users/{divar_user_id} | Attach a new Addon to a user |
| [**addonsDeletePostAddon()**](AddonsApi.md#addonsDeletePostAddon) | **DELETE** /v1/open-platform/add-ons/post/{token} | Delete an Addon from a post |
| [**addonsDeletePostAddon2()**](AddonsApi.md#addonsDeletePostAddon2) | **DELETE** /v1/open-platform/addons/post/{token} | Delete an Addon from a post |
| [**addonsDeleteUserAddon()**](AddonsApi.md#addonsDeleteUserAddon) | **DELETE** /v1/open-platform/addons/user/{id} | Delete an UserAddon |
| [**addonsGetUserAddons()**](AddonsApi.md#addonsGetUserAddons) | **GET** /v1/open-platform/addons/user/{phone} | Retrieve all UserAddons |
| [**addonsGetUserAddons2()**](AddonsApi.md#addonsGetUserAddons2) | **GET** /v2/open-platform/addons/users/{divar_user_id} | Retrieve all UserAddons |


## `addonsCreatePostAddonV2()`

```php
addonsCreatePostAddonV2($token, $addons_create_post_addon_v2_body): object
```

Attach a new Addon to a post

Using this API and with user permission, you can attach a new AD to a post. You can use available widgets to design your Addon. This API need access token having one of the following scopes: - USER_POSTS_ADDON_CREATE - POST_ADDON_CREATE.{post_token}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Attach a new Addon to a user

Using this API and with user permission, you can create a UserAddon. UserAddon will attach to all user posts in future and also back fills last 30 posts in the past. You can use available widgets to design your UserAddon. This API need access token having `USER_ADDON_CREATE` scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Attach a new Addon to a user

Using this API and with user permission, you can create a UserAddon. UserAddon will attach to all user posts in future and also back fills last 30 posts in the past. You can use available widgets to design your UserAddon. This API need access token having `USER_ADDON_CREATE` scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Delete an Addon from a post

You can only delete addons which are created by your app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Delete an Addon from a post

You can only delete addons which are created by your app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Delete an UserAddon

This will delete all correlated Addons to all user posts. You can only delete Addons which are created by your app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Retrieve all UserAddons

Retrieve all UserAddons of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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

Retrieve all UserAddons

Retrieve all UserAddons of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Divar\KenarApiClient\Api\AddonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
