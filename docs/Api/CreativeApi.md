# criteo\api\marketingsolutions\preview\CreativeApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAd()**](CreativeApi.md#createAd) | **POST** /preview/advertisers/{advertiser-id}/ads |  |
| [**createCoupon()**](CreativeApi.md#createCoupon) | **POST** /preview/advertisers/{advertiser-id}/coupons |  |
| [**createCreative()**](CreativeApi.md#createCreative) | **POST** /preview/advertisers/{advertiser-id}/creatives |  |
| [**deleteAd()**](CreativeApi.md#deleteAd) | **DELETE** /preview/ads/{id} |  |
| [**deleteCoupon()**](CreativeApi.md#deleteCoupon) | **DELETE** /preview/advertisers/{advertiser-id}/coupons/{id} |  |
| [**deleteCreative()**](CreativeApi.md#deleteCreative) | **DELETE** /preview/creatives/{id} |  |
| [**editCoupon()**](CreativeApi.md#editCoupon) | **PUT** /preview/advertisers/{advertiser-id}/coupons/{id} |  |
| [**editCreative()**](CreativeApi.md#editCreative) | **PUT** /preview/creatives/{id} |  |
| [**getAd()**](CreativeApi.md#getAd) | **GET** /preview/ads/{id} |  |
| [**getAds()**](CreativeApi.md#getAds) | **GET** /preview/advertisers/{advertiser-id}/ads |  |
| [**getCoupon()**](CreativeApi.md#getCoupon) | **GET** /preview/advertisers/{advertiser-id}/coupons/{id} |  |
| [**getCouponPreview()**](CreativeApi.md#getCouponPreview) | **GET** /preview/advertisers/{advertiser-id}/coupons/{id}/preview |  |
| [**getCouponSupportedSizes()**](CreativeApi.md#getCouponSupportedSizes) | **GET** /preview/advertisers/{advertiser-id}/coupons-supported-sizes |  |
| [**getCoupons()**](CreativeApi.md#getCoupons) | **GET** /preview/advertisers/{advertiser-id}/coupons |  |
| [**getCreative()**](CreativeApi.md#getCreative) | **GET** /preview/creatives/{id} |  |
| [**getCreativePreviewPost()**](CreativeApi.md#getCreativePreviewPost) | **POST** /preview/creatives/{id}/preview |  |
| [**getCreatives()**](CreativeApi.md#getCreatives) | **GET** /preview/advertisers/{advertiser-id}/creatives |  |


## `createAd()`

```php
createAd($advertiser_id, $ad_write_request): \criteo\api\marketingsolutions\preview\Model\AdResponse
```



Create an Ad

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$ad_write_request = new \criteo\api\marketingsolutions\preview\Model\AdWriteRequest(); // \criteo\api\marketingsolutions\preview\Model\AdWriteRequest

try {
    $result = $apiInstance->createAd($advertiser_id, $ad_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->createAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **ad_write_request** | [**\criteo\api\marketingsolutions\preview\Model\AdWriteRequest**](../Model/AdWriteRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdResponse**](../Model/AdResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCoupon()`

```php
createCoupon($advertiser_id, $create_coupon_request): \criteo\api\marketingsolutions\preview\Model\CouponResponse
```



Create a Coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$create_coupon_request = new \criteo\api\marketingsolutions\preview\Model\CreateCouponRequest(); // \criteo\api\marketingsolutions\preview\Model\CreateCouponRequest

try {
    $result = $apiInstance->createCoupon($advertiser_id, $create_coupon_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->createCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **create_coupon_request** | [**\criteo\api\marketingsolutions\preview\Model\CreateCouponRequest**](../Model/CreateCouponRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CouponResponse**](../Model/CouponResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCreative()`

```php
createCreative($advertiser_id, $creative_write_request): \criteo\api\marketingsolutions\preview\Model\CreativeResponse
```



Create a Creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$creative_write_request = new \criteo\api\marketingsolutions\preview\Model\CreativeWriteRequest(); // \criteo\api\marketingsolutions\preview\Model\CreativeWriteRequest

try {
    $result = $apiInstance->createCreative($advertiser_id, $creative_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->createCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **creative_write_request** | [**\criteo\api\marketingsolutions\preview\Model\CreativeWriteRequest**](../Model/CreativeWriteRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CreativeResponse**](../Model/CreativeResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAd()`

```php
deleteAd($id)
```



Delete an Ad

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ad identifier to delete.

try {
    $apiInstance->deleteAd($id);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->deleteAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ad identifier to delete. | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCoupon()`

```php
deleteCoupon($advertiser_id, $id)
```



Delete a Coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$id = 'id_example'; // string | The Coupon identifier to delete.

try {
    $apiInstance->deleteCoupon($advertiser_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->deleteCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **id** | **string**| The Coupon identifier to delete. | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCreative()`

```php
deleteCreative($id)
```



Delete a Creative if there are no ads binded to it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The creative identifier to delete.

try {
    $apiInstance->deleteCreative($id);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->deleteCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The creative identifier to delete. | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editCoupon()`

```php
editCoupon($advertiser_id, $id, $update_coupon_request): \criteo\api\marketingsolutions\preview\Model\CouponResponse
```



Edit a specific Coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$id = 'id_example'; // string | The Coupon identifier to edit.
$update_coupon_request = new \criteo\api\marketingsolutions\preview\Model\UpdateCouponRequest(); // \criteo\api\marketingsolutions\preview\Model\UpdateCouponRequest

try {
    $result = $apiInstance->editCoupon($advertiser_id, $id, $update_coupon_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->editCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **id** | **string**| The Coupon identifier to edit. | |
| **update_coupon_request** | [**\criteo\api\marketingsolutions\preview\Model\UpdateCouponRequest**](../Model/UpdateCouponRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CouponResponse**](../Model/CouponResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editCreative()`

```php
editCreative($id, $creative_write_request): \criteo\api\marketingsolutions\preview\Model\CreativeResponse
```



Edit a specific Creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The creative identifier to edit.
$creative_write_request = new \criteo\api\marketingsolutions\preview\Model\CreativeWriteRequest(); // \criteo\api\marketingsolutions\preview\Model\CreativeWriteRequest

try {
    $result = $apiInstance->editCreative($id, $creative_write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->editCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The creative identifier to edit. | |
| **creative_write_request** | [**\criteo\api\marketingsolutions\preview\Model\CreativeWriteRequest**](../Model/CreativeWriteRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CreativeResponse**](../Model/CreativeResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAd()`

```php
getAd($id): \criteo\api\marketingsolutions\preview\Model\AdResponse
```



Get an Ad with its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ad identifier to retrieve.

try {
    $result = $apiInstance->getAd($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ad identifier to retrieve. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdResponse**](../Model/AdResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAds()`

```php
getAds($advertiser_id, $limit, $offset): \criteo\api\marketingsolutions\preview\Model\AdListResponse
```



Get the list of self-services Ads for a given advertiser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$limit = 56; // int | The number of ads to be returned. The default is 50.
$offset = 56; // int | The (zero-based) offset into the collection of ads. The default is 0.

try {
    $result = $apiInstance->getAds($advertiser_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **limit** | **int**| The number of ads to be returned. The default is 50. | [optional] |
| **offset** | **int**| The (zero-based) offset into the collection of ads. The default is 0. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdListResponse**](../Model/AdListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoupon()`

```php
getCoupon($advertiser_id, $id): \criteo\api\marketingsolutions\preview\Model\CouponResponse
```



Get a Coupon with its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$id = 'id_example'; // string | The Coupon identifier to retrieve.

try {
    $result = $apiInstance->getCoupon($advertiser_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **id** | **string**| The Coupon identifier to retrieve. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CouponResponse**](../Model/CouponResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponPreview()`

```php
getCouponPreview($advertiser_id, $id, $width, $height): string
```



Get the preview of a specific Coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$id = 'id_example'; // string | The Coupon identifier to preview.
$width = 56; // int | The width of the coupon to preview.
$height = 56; // int | The height of the coupon to preview.

try {
    $result = $apiInstance->getCouponPreview($advertiser_id, $id, $width, $height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getCouponPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **id** | **string**| The Coupon identifier to preview. | |
| **width** | **int**| The width of the coupon to preview. | [optional] |
| **height** | **int**| The height of the coupon to preview. | [optional] |

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponSupportedSizes()`

```php
getCouponSupportedSizes($advertiser_id, $ad_set_id): \criteo\api\marketingsolutions\preview\Model\CouponSupportedSizesResponse
```



Get the list of Coupon supported sizes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$ad_set_id = 'ad_set_id_example'; // string | The ad set id on which you want to check the Coupon supported sizes.

try {
    $result = $apiInstance->getCouponSupportedSizes($advertiser_id, $ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getCouponSupportedSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **ad_set_id** | **string**| The ad set id on which you want to check the Coupon supported sizes. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CouponSupportedSizesResponse**](../Model/CouponSupportedSizesResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoupons()`

```php
getCoupons($advertiser_id, $limit, $offset): \criteo\api\marketingsolutions\preview\Model\CouponListResponse
```



Get the list of self-services Coupons for a given advertiser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$limit = 56; // int | The number of coupons to be returned. The default is 50.
$offset = 56; // int | The (zero-based) offset into the collection of coupons. The default is 0.

try {
    $result = $apiInstance->getCoupons($advertiser_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **limit** | **int**| The number of coupons to be returned. The default is 50. | [optional] |
| **offset** | **int**| The (zero-based) offset into the collection of coupons. The default is 0. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CouponListResponse**](../Model/CouponListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreative()`

```php
getCreative($id): \criteo\api\marketingsolutions\preview\Model\CreativeResponse
```



Get a Creative with its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The creative identifier to retrieve.

try {
    $result = $apiInstance->getCreative($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The creative identifier to retrieve. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CreativeResponse**](../Model/CreativeResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreativePreviewPost()`

```php
getCreativePreviewPost($id, $width, $height): string
```



Get the preview of a specific Creative

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Creative identifier to preview.
$width = 56; // int | The width of the Creative to preview.
$height = 56; // int | The height of the Creative to preview.

try {
    $result = $apiInstance->getCreativePreviewPost($id, $width, $height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getCreativePreviewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Creative identifier to preview. | |
| **width** | **int**| The width of the Creative to preview. | [optional] |
| **height** | **int**| The height of the Creative to preview. | [optional] |

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreatives()`

```php
getCreatives($advertiser_id, $limit, $offset): \criteo\api\marketingsolutions\preview\Model\CreativeListResponse
```



Get the list of self-services Creatives for a given advertiser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CreativeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser identifier.
$limit = 56; // int | The number of creatives to be returned. The default is 50.
$offset = 56; // int | The (zero-based) offset into the collection of creatives. The default is 0.

try {
    $result = $apiInstance->getCreatives($advertiser_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getCreatives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **limit** | **int**| The number of creatives to be returned. The default is 50. | [optional] |
| **offset** | **int**| The (zero-based) offset into the collection of creatives. The default is 0. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CreativeListResponse**](../Model/CreativeListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
