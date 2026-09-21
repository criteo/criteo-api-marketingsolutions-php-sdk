# criteo\api\marketingsolutions\preview\CreativeApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAdvertiserAd()**](CreativeApi.md#createAdvertiserAd) | **POST** /preview/advertisers/{advertiser-id}/ads | /preview/advertisers/{advertiser-id}/ads |
| [**createAdvertiserCoupon()**](CreativeApi.md#createAdvertiserCoupon) | **POST** /preview/advertisers/{advertiser-id}/coupons | /preview/advertisers/{advertiser-id}/coupons |
| [**createAdvertiserCreative()**](CreativeApi.md#createAdvertiserCreative) | **POST** /preview/advertisers/{advertiser-id}/creatives | /preview/advertisers/{advertiser-id}/creatives |
| [**deleteAd()**](CreativeApi.md#deleteAd) | **DELETE** /preview/ads/{id} | /preview/ads/{id} |
| [**deleteAdSegmentLink()**](CreativeApi.md#deleteAdSegmentLink) | **DELETE** /preview/marketing-solutions/ads/{ad-id}/audience-segment | /preview/marketing-solutions/ads/{ad-id}/audience-segment |
| [**deleteAdvertiserCoupon()**](CreativeApi.md#deleteAdvertiserCoupon) | **DELETE** /preview/advertisers/{advertiser-id}/coupons/{id} | /preview/advertisers/{advertiser-id}/coupons/{id} |
| [**deleteCreative()**](CreativeApi.md#deleteCreative) | **DELETE** /preview/creatives/{id} | /preview/creatives/{id} |
| [**editAdvertiserCoupon()**](CreativeApi.md#editAdvertiserCoupon) | **PUT** /preview/advertisers/{advertiser-id}/coupons/{id} | /preview/advertisers/{advertiser-id}/coupons/{id} |
| [**editCreative()**](CreativeApi.md#editCreative) | **PUT** /preview/creatives/{id} | /preview/creatives/{id} |
| [**generateCreativePreview()**](CreativeApi.md#generateCreativePreview) | **POST** /preview/creatives/{id}/preview | /preview/creatives/{id}/preview |
| [**getAd()**](CreativeApi.md#getAd) | **GET** /preview/ads/{id} | /preview/ads/{id} |
| [**getAdSegmentLink()**](CreativeApi.md#getAdSegmentLink) | **GET** /preview/marketing-solutions/ads/{ad-id}/audience-segment | /preview/marketing-solutions/ads/{ad-id}/audience-segment |
| [**getAdvertiserAds()**](CreativeApi.md#getAdvertiserAds) | **GET** /preview/advertisers/{advertiser-id}/ads | /preview/advertisers/{advertiser-id}/ads |
| [**getAdvertiserCoupon()**](CreativeApi.md#getAdvertiserCoupon) | **GET** /preview/advertisers/{advertiser-id}/coupons/{id} | /preview/advertisers/{advertiser-id}/coupons/{id} |
| [**getAdvertiserCouponPreview()**](CreativeApi.md#getAdvertiserCouponPreview) | **GET** /preview/advertisers/{advertiser-id}/coupons/{id}/preview | /preview/advertisers/{advertiser-id}/coupons/{id}/preview |
| [**getAdvertiserCouponSupportedSizes()**](CreativeApi.md#getAdvertiserCouponSupportedSizes) | **GET** /preview/advertisers/{advertiser-id}/coupons-supported-sizes | /preview/advertisers/{advertiser-id}/coupons-supported-sizes |
| [**getAdvertiserCoupons()**](CreativeApi.md#getAdvertiserCoupons) | **GET** /preview/advertisers/{advertiser-id}/coupons | /preview/advertisers/{advertiser-id}/coupons |
| [**getAdvertiserCreatives()**](CreativeApi.md#getAdvertiserCreatives) | **GET** /preview/advertisers/{advertiser-id}/creatives | /preview/advertisers/{advertiser-id}/creatives |
| [**getCreative()**](CreativeApi.md#getCreative) | **GET** /preview/creatives/{id} | /preview/creatives/{id} |
| [**linkAdSegment()**](CreativeApi.md#linkAdSegment) | **PUT** /preview/marketing-solutions/ads/{ad-id}/audience-segment | /preview/marketing-solutions/ads/{ad-id}/audience-segment |


## `createAdvertiserAd()`

```php
createAdvertiserAd($advertiser_id, $resource_input_of_ad_write): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfAd
```

/preview/advertisers/{advertiser-id}/ads

Creates an ad by binding an existing creative to an existing ad set of the advertiser, delivering  from the start date given. The creative and the ad set must both belong to that advertiser. Returns  the new ad and its id.

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
$resource_input_of_ad_write = new \criteo\api\marketingsolutions\preview\Model\ResourceInputOfAdWrite(); // \criteo\api\marketingsolutions\preview\Model\ResourceInputOfAdWrite | The ad information.

try {
    $result = $apiInstance->createAdvertiserAd($advertiser_id, $resource_input_of_ad_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->createAdvertiserAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **resource_input_of_ad_write** | [**\criteo\api\marketingsolutions\preview\Model\ResourceInputOfAdWrite**](../Model/ResourceInputOfAdWrite.md)| The ad information. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfAd**](../Model/ResourceOutcomeOfAd.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdvertiserCoupon()`

```php
createAdvertiserCoupon($advertiser_id, $resource_input_of_create_coupon): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCoupon
```

/preview/advertisers/{advertiser-id}/coupons

Creates a coupon on one ad set of the advertiser. The ad set must already carry dynamic display or  HTML ads, and each slide image must match a size that ad set supports, which the supported-sizes  operation lists. Returns the new coupon and its id.

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
$resource_input_of_create_coupon = new \criteo\api\marketingsolutions\preview\Model\ResourceInputOfCreateCoupon(); // \criteo\api\marketingsolutions\preview\Model\ResourceInputOfCreateCoupon | The coupon to create.

try {
    $result = $apiInstance->createAdvertiserCoupon($advertiser_id, $resource_input_of_create_coupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->createAdvertiserCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **resource_input_of_create_coupon** | [**\criteo\api\marketingsolutions\preview\Model\ResourceInputOfCreateCoupon**](../Model/ResourceInputOfCreateCoupon.md)| The coupon to create. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCoupon**](../Model/ResourceOutcomeOfCoupon.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdvertiserCreative()`

```php
createAdvertiserCreative($advertiser_id, $resource_input_of_creative_write): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCreative
```

/preview/advertisers/{advertiser-id}/creatives

Creates a creative in the library of one advertiser. The format decides which attributes block must  be filled in, and the dataset must be one of that advertiser's. Returns the new creative, whose id is  what an ad binds to.

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
$resource_input_of_creative_write = new \criteo\api\marketingsolutions\preview\Model\ResourceInputOfCreativeWrite(); // \criteo\api\marketingsolutions\preview\Model\ResourceInputOfCreativeWrite | The creative information.

try {
    $result = $apiInstance->createAdvertiserCreative($advertiser_id, $resource_input_of_creative_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->createAdvertiserCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **resource_input_of_creative_write** | [**\criteo\api\marketingsolutions\preview\Model\ResourceInputOfCreativeWrite**](../Model/ResourceInputOfCreativeWrite.md)| The creative information. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCreative**](../Model/ResourceOutcomeOfCreative.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAd()`

```php
deleteAd($id)
```

/preview/ads/{id}

Deletes one ad, which stops it delivering for good. The creative it was bound to is kept and can be  reused; to stop delivery without losing the ad, pause it instead.

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
$id = 'id_example'; // string | The ad identifier to delete.

try {
    $apiInstance->deleteAd($id);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->deleteAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ad identifier to delete. | |

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

## `deleteAdSegmentLink()`

```php
deleteAdSegmentLink($ad_id)
```

/preview/marketing-solutions/ads/{ad-id}/audience-segment

Delete the link between an Ad and an Audience Segment.

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
$ad_id = 'ad_id_example'; // string | The ad identifier.

try {
    $apiInstance->deleteAdSegmentLink($ad_id);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->deleteAdSegmentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| The ad identifier. | |

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

## `deleteAdvertiserCoupon()`

```php
deleteAdvertiserCoupon($advertiser_id, $id)
```

/preview/advertisers/{advertiser-id}/coupons/{id}

Deletes one coupon of an advertiser. A coupon that is already deleted or under review cannot be  deleted.

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
    $apiInstance->deleteAdvertiserCoupon($advertiser_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->deleteAdvertiserCoupon: ', $e->getMessage(), PHP_EOL;
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

/preview/creatives/{id}

Deletes one creative. Every ad bound to it must be deleted or rebound first, and a creative that is  already deleted or under review cannot be deleted.

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

## `editAdvertiserCoupon()`

```php
editAdvertiserCoupon($advertiser_id, $id, $resource_input_of_update_coupon): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCoupon
```

/preview/advertisers/{advertiser-id}/coupons/{id}

Changes when a coupon runs; only the start and end dates can be edited, and the start date must come  before the end date. The coupon must still be a draft or live coupon that is not yet delivering.

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
$resource_input_of_update_coupon = new \criteo\api\marketingsolutions\preview\Model\ResourceInputOfUpdateCoupon(); // \criteo\api\marketingsolutions\preview\Model\ResourceInputOfUpdateCoupon | The new start and end dates of the coupon.

try {
    $result = $apiInstance->editAdvertiserCoupon($advertiser_id, $id, $resource_input_of_update_coupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->editAdvertiserCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **id** | **string**| The Coupon identifier to edit. | |
| **resource_input_of_update_coupon** | [**\criteo\api\marketingsolutions\preview\Model\ResourceInputOfUpdateCoupon**](../Model/ResourceInputOfUpdateCoupon.md)| The new start and end dates of the coupon. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCoupon**](../Model/ResourceOutcomeOfCoupon.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editCreative()`

```php
editCreative($id, $resource_input_of_creative_write): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCreative
```

/preview/creatives/{id}

Replaces the attributes of one creative: any attribute left out is cleared, so read the creative  first and send it back with your changes applied. The format must be the creative's existing format  and the dataset must stay the one it already belongs to; neither can be changed here. A creative  that is being deployed, archived or deleted cannot be edited.

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
$resource_input_of_creative_write = new \criteo\api\marketingsolutions\preview\Model\ResourceInputOfCreativeWrite(); // \criteo\api\marketingsolutions\preview\Model\ResourceInputOfCreativeWrite | The complete new attributes of the creative.

try {
    $result = $apiInstance->editCreative($id, $resource_input_of_creative_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->editCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The creative identifier to edit. | |
| **resource_input_of_creative_write** | [**\criteo\api\marketingsolutions\preview\Model\ResourceInputOfCreativeWrite**](../Model/ResourceInputOfCreativeWrite.md)| The complete new attributes of the creative. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCreative**](../Model/ResourceOutcomeOfCreative.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCreativePreview()`

```php
generateCreativePreview($id, $height, $width): string
```

/preview/creatives/{id}/preview

Renders one creative as preview HTML at the size asked for. Only the sizes the creative was built for  can be previewed; when the size does not match, the error lists the ones that can.

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
$height = 56; // int | The height of the Creative to preview.
$width = 56; // int | The width of the Creative to preview.

try {
    $result = $apiInstance->generateCreativePreview($id, $height, $width);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->generateCreativePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Creative identifier to preview. | |
| **height** | **int**| The height of the Creative to preview. | [optional] |
| **width** | **int**| The width of the Creative to preview. | [optional] |

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAd()`

```php
getAd($id): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfAd
```

/preview/ads/{id}

Reads one ad by its id: the creative and ad set it binds, its schedule and its delivery status. The  id comes from the ad list of the advertiser.

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
$id = 'id_example'; // string | The ad identifier to retrieve.

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
| **id** | **string**| The ad identifier to retrieve. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfAd**](../Model/ResourceOutcomeOfAd.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdSegmentLink()`

```php
getAdSegmentLink($ad_id): \criteo\api\marketingsolutions\preview\Model\ValueResourceOutcomeOfExamAdAudienceSegmentLink
```

/preview/marketing-solutions/ads/{ad-id}/audience-segment

Retrieve the Ad audience segment link.

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
$ad_id = 'ad_id_example'; // string | The ad identifier.

try {
    $result = $apiInstance->getAdSegmentLink($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getAdSegmentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| The ad identifier. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ValueResourceOutcomeOfExamAdAudienceSegmentLink**](../Model/ValueResourceOutcomeOfExamAdAudienceSegmentLink.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvertiserAds()`

```php
getAdvertiserAds($advertiser_id, $limit, $offset): \criteo\api\marketingsolutions\preview\Model\ResourceCollectionOutcomeOfAd
```

/preview/advertisers/{advertiser-id}/ads

Lists the ads of one advertiser, each one binding a creative to an ad set. Use it to find an ad id  before reading, pausing, unpausing or deleting a single ad. Page through the ads with limit and  offset.

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
    $result = $apiInstance->getAdvertiserAds($advertiser_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getAdvertiserAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **limit** | **int**| The number of ads to be returned. The default is 50. | [optional] |
| **offset** | **int**| The (zero-based) offset into the collection of ads. The default is 0. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceCollectionOutcomeOfAd**](../Model/ResourceCollectionOutcomeOfAd.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvertiserCoupon()`

```php
getAdvertiserCoupon($advertiser_id, $id): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCoupon
```

/preview/advertisers/{advertiser-id}/coupons/{id}

Reads one coupon of an advertiser by its id: its schedule, its slides and the ad set it runs on. The  id comes from the coupon list of the advertiser.

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
    $result = $apiInstance->getAdvertiserCoupon($advertiser_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getAdvertiserCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **id** | **string**| The Coupon identifier to retrieve. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCoupon**](../Model/ResourceOutcomeOfCoupon.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvertiserCouponPreview()`

```php
getAdvertiserCouponPreview($advertiser_id, $id, $height, $width): string
```

/preview/advertisers/{advertiser-id}/coupons/{id}/preview

Renders one coupon as preview HTML at the size asked for. The size must be one the coupon's ad set  supports, as listed by the supported-sizes operation.

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
$height = 56; // int | The height of the coupon to preview.
$width = 56; // int | The width of the coupon to preview.

try {
    $result = $apiInstance->getAdvertiserCouponPreview($advertiser_id, $id, $height, $width);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getAdvertiserCouponPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **id** | **string**| The Coupon identifier to preview. | |
| **height** | **int**| The height of the coupon to preview. | [optional] |
| **width** | **int**| The width of the coupon to preview. | [optional] |

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvertiserCouponSupportedSizes()`

```php
getAdvertiserCouponSupportedSizes($advertiser_id, $ad_set_id): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCouponSupportedSizes
```

/preview/advertisers/{advertiser-id}/coupons-supported-sizes

Lists, per coupon format, the sizes an ad set supports. Call it before creating a coupon to pick a  valid slide size; the ad set must already carry dynamic ads.

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
    $result = $apiInstance->getAdvertiserCouponSupportedSizes($advertiser_id, $ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getAdvertiserCouponSupportedSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **ad_set_id** | **string**| The ad set id on which you want to check the Coupon supported sizes. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCouponSupportedSizes**](../Model/ResourceOutcomeOfCouponSupportedSizes.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvertiserCoupons()`

```php
getAdvertiserCoupons($advertiser_id, $limit, $offset): \criteo\api\marketingsolutions\preview\Model\ResourceCollectionOutcomeOfCoupon
```

/preview/advertisers/{advertiser-id}/coupons

Lists the coupons of one advertiser. Use it to find a coupon id before reading, editing, previewing  or deleting a single coupon. Page through the coupons with limit and offset.

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
    $result = $apiInstance->getAdvertiserCoupons($advertiser_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getAdvertiserCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **limit** | **int**| The number of coupons to be returned. The default is 50. | [optional] |
| **offset** | **int**| The (zero-based) offset into the collection of coupons. The default is 0. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceCollectionOutcomeOfCoupon**](../Model/ResourceCollectionOutcomeOfCoupon.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvertiserCreatives()`

```php
getAdvertiserCreatives($advertiser_id, $limit, $offset): \criteo\api\marketingsolutions\preview\Model\ResourceCollectionOutcomeOfCreativeRead
```

/preview/advertisers/{advertiser-id}/creatives

Lists the creatives in the library of one advertiser. Use it to find a creative id before reading,  editing or previewing a creative, or before binding one to an ad. Page through the library with  limit and offset.

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
    $result = $apiInstance->getAdvertiserCreatives($advertiser_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->getAdvertiserCreatives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser identifier. | |
| **limit** | **int**| The number of creatives to be returned. The default is 50. | [optional] |
| **offset** | **int**| The (zero-based) offset into the collection of creatives. The default is 0. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceCollectionOutcomeOfCreativeRead**](../Model/ResourceCollectionOutcomeOfCreativeRead.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreative()`

```php
getCreative($id): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCreative
```

/preview/creatives/{id}

Reads one creative by its id, with the attributes of its format. Use it to check a creative before  editing it or binding it to an ad.

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

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfCreative**](../Model/ResourceOutcomeOfCreative.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkAdSegment()`

```php
linkAdSegment($ad_id, $exam_ad_audience_segment_link_input): \criteo\api\marketingsolutions\preview\Model\ValueResourceOutcomeOfExamAdAudienceSegmentLink
```

/preview/marketing-solutions/ads/{ad-id}/audience-segment

Link an Ad with an Audience Segment. If a link already exists, its segment ID will be updated.

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
$ad_id = 'ad_id_example'; // string | The ad identifier.
$exam_ad_audience_segment_link_input = new \criteo\api\marketingsolutions\preview\Model\ExamAdAudienceSegmentLinkInput(); // \criteo\api\marketingsolutions\preview\Model\ExamAdAudienceSegmentLinkInput | The audience segment link information.

try {
    $result = $apiInstance->linkAdSegment($ad_id, $exam_ad_audience_segment_link_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreativeApi->linkAdSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| The ad identifier. | |
| **exam_ad_audience_segment_link_input** | [**\criteo\api\marketingsolutions\preview\Model\ExamAdAudienceSegmentLinkInput**](../Model/ExamAdAudienceSegmentLinkInput.md)| The audience segment link information. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ValueResourceOutcomeOfExamAdAudienceSegmentLink**](../Model/ValueResourceOutcomeOfExamAdAudienceSegmentLink.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
