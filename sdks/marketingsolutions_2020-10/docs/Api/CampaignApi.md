# criteo\api\marketingsolutions\v2020_10\CampaignApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdSet()**](CampaignApi.md#getAdSet) | **GET** /2021-04/marketing-solutions/ad-sets/{adSetId} | 
[**getBids()**](CampaignApi.md#getBids) | **GET** /legacy/marketing/v1/campaigns/bids | Gets a the bids for campaigns and their categories
[**getCategories()**](CampaignApi.md#getCategories) | **GET** /legacy/marketing/v1/campaigns/{campaignId}/categories | Gets categories
[**getCategory()**](CampaignApi.md#getCategory) | **GET** /legacy/marketing/v1/campaigns/{campaignId}/categories/{categoryHashCode} | Gets a specific category
[**patchAdSets()**](CampaignApi.md#patchAdSets) | **PATCH** /2021-04/marketing-solutions/ad-sets | 
[**searchAdSets()**](CampaignApi.md#searchAdSets) | **POST** /2021-04/marketing-solutions/ad-sets/search | 
[**startAdSets()**](CampaignApi.md#startAdSets) | **POST** /2021-04/marketing-solutions/ad-sets/start | 
[**stopAdSets()**](CampaignApi.md#stopAdSets) | **POST** /2021-04/marketing-solutions/ad-sets/stop | 
[**updateBids()**](CampaignApi.md#updateBids) | **PUT** /legacy/marketing/v1/campaigns/bids | Update bids for campaigns and their categories


## `getAdSet()`

```php
getAdSet($ad_set_id): \criteo\api\marketingsolutions\v2020_10\Model\ResponseReadAdSet
```



Get the data for the specified ad set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the ad set

try {
    $result = $apiInstance->getAdSet($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAdSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_set_id** | **string**| Id of the ad set |

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\ResponseReadAdSet**](../Model/ResponseReadAdSet.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBids()`

```php
getBids($campaign_ids, $advertiser_ids, $category_hash_codes, $bid_type, $campaign_status, $pending_changes): \criteo\api\marketingsolutions\v2020_10\Model\CampaignBidMessage[]
```

Gets a the bids for campaigns and their categories

Get the campaigns' bids, as well as the bids of their categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_ids = 'campaign_ids_example'; // string | Optional. The ids of the campaigns we want to get the bids on. If not specified, advertiserIds will be used.
$advertiser_ids = 'advertiser_ids_example'; // string | Optional. The ids of the advertisers' campaigns we want to get the bids on. If campaignIds not specified, and neither is advertiserIds, all the advertisers in the user's portfolio are used.
$category_hash_codes = 'category_hash_codes_example'; // string | Optional. Filters only specified categories. By default no filtering is applied.
$bid_type = 'bid_type_example'; // string | Optional. Filters by bid type. By default no filtering is applied.
$campaign_status = 'campaign_status_example'; // string | Optional. Filters by campaign status. By default no filtering is applied.
$pending_changes = True; // bool | Optional. Filters only pending changes or settled ones. By default no filtering is applied.

try {
    $result = $apiInstance->getBids($campaign_ids, $advertiser_ids, $category_hash_codes, $bid_type, $campaign_status, $pending_changes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_ids** | **string**| Optional. The ids of the campaigns we want to get the bids on. If not specified, advertiserIds will be used. | [optional]
 **advertiser_ids** | **string**| Optional. The ids of the advertisers&#39; campaigns we want to get the bids on. If campaignIds not specified, and neither is advertiserIds, all the advertisers in the user&#39;s portfolio are used. | [optional]
 **category_hash_codes** | **string**| Optional. Filters only specified categories. By default no filtering is applied. | [optional]
 **bid_type** | **string**| Optional. Filters by bid type. By default no filtering is applied. | [optional]
 **campaign_status** | **string**| Optional. Filters by campaign status. By default no filtering is applied. | [optional]
 **pending_changes** | **bool**| Optional. Filters only pending changes or settled ones. By default no filtering is applied. | [optional]

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\CampaignBidMessage[]**](../Model/CampaignBidMessage.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategories()`

```php
getCategories($campaign_id, $enabled_only): \criteo\api\marketingsolutions\v2020_10\Model\CategoryMessage
```

Gets categories

Get the list of categories linked to the requested campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Mandatory. The id of the campaign the categories are linked to.
$enabled_only = True; // bool | Optional. Returns only categories you can bid on. Defaults to false.

try {
    $result = $apiInstance->getCategories($campaign_id, $enabled_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Mandatory. The id of the campaign the categories are linked to. |
 **enabled_only** | **bool**| Optional. Returns only categories you can bid on. Defaults to false. | [optional]

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\CategoryMessage**](../Model/CategoryMessage.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategory()`

```php
getCategory($campaign_id, $category_hash_code): \criteo\api\marketingsolutions\v2020_10\Model\CategoryMessage
```

Gets a specific category

Get a specific category linked to the requested campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Mandatory. The id of the campaign the categories are linked to.
$category_hash_code = 56; // int | Mandatory. The id of the category to return.

try {
    $result = $apiInstance->getCategory($campaign_id, $category_hash_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Mandatory. The id of the campaign the categories are linked to. |
 **category_hash_code** | **int**| Mandatory. The id of the category to return. |

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\CategoryMessage**](../Model/CategoryMessage.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAdSets()`

```php
patchAdSets($requests_patch_ad_set): \criteo\api\marketingsolutions\v2020_10\Model\ResponseAdSetId
```



Patch a list of AdSets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requests_patch_ad_set = new \criteo\api\marketingsolutions\v2020_10\Model\RequestsPatchAdSet(); // \criteo\api\marketingsolutions\v2020_10\Model\RequestsPatchAdSet | List of adsets to patch.

try {
    $result = $apiInstance->patchAdSets($requests_patch_ad_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requests_patch_ad_set** | [**\criteo\api\marketingsolutions\v2020_10\Model\RequestsPatchAdSet**](../Model/RequestsPatchAdSet.md)| List of adsets to patch. | [optional]

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\ResponseAdSetId**](../Model/ResponseAdSetId.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAdSets()`

```php
searchAdSets($request_ad_set_search): \criteo\api\marketingsolutions\v2020_10\Model\ResponsesReadAdSet
```



Search for ad sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_ad_set_search = new \criteo\api\marketingsolutions\v2020_10\Model\RequestAdSetSearch(); // \criteo\api\marketingsolutions\v2020_10\Model\RequestAdSetSearch

try {
    $result = $apiInstance->searchAdSets($request_ad_set_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->searchAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_ad_set_search** | [**\criteo\api\marketingsolutions\v2020_10\Model\RequestAdSetSearch**](../Model/RequestAdSetSearch.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\ResponsesReadAdSet**](../Model/ResponsesReadAdSet.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startAdSets()`

```php
startAdSets($requests_ad_set_id): \criteo\api\marketingsolutions\v2020_10\Model\ResponsesAdSetId
```



Start the specified list of ad sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requests_ad_set_id = new \criteo\api\marketingsolutions\v2020_10\Model\RequestsAdSetId(); // \criteo\api\marketingsolutions\v2020_10\Model\RequestsAdSetId | All the ad sets to start

try {
    $result = $apiInstance->startAdSets($requests_ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->startAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requests_ad_set_id** | [**\criteo\api\marketingsolutions\v2020_10\Model\RequestsAdSetId**](../Model/RequestsAdSetId.md)| All the ad sets to start | [optional]

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\ResponsesAdSetId**](../Model/ResponsesAdSetId.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopAdSets()`

```php
stopAdSets($requests_ad_set_id): \criteo\api\marketingsolutions\v2020_10\Model\ResponsesAdSetId
```



Stop the specified list of ad sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requests_ad_set_id = new \criteo\api\marketingsolutions\v2020_10\Model\RequestsAdSetId(); // \criteo\api\marketingsolutions\v2020_10\Model\RequestsAdSetId | All the ad sets to stop

try {
    $result = $apiInstance->stopAdSets($requests_ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->stopAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requests_ad_set_id** | [**\criteo\api\marketingsolutions\v2020_10\Model\RequestsAdSetId**](../Model/RequestsAdSetId.md)| All the ad sets to stop | [optional]

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\ResponsesAdSetId**](../Model/ResponsesAdSetId.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBids()`

```php
updateBids($bid_changes): \criteo\api\marketingsolutions\v2020_10\Model\CampaignMessage[]
```

Update bids for campaigns and their categories

If a campaign bid is updated, all (if any) category bids for this campaign will be updated with the new value if they are initially equal to the campaign bid.  If the category bid is not wanted to be cascaded to the categories with the same bid value, new change bids must be added in the request for the categories where the value should be kept (with the initial value).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bid_changes = array(new \criteo\api\marketingsolutions\v2020_10\Model\CampaignBidChangeRequest()); // \criteo\api\marketingsolutions\v2020_10\Model\CampaignBidChangeRequest[] | Specifies the list of bid changes to be applied.

try {
    $result = $apiInstance->updateBids($bid_changes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bid_changes** | [**\criteo\api\marketingsolutions\v2020_10\Model\CampaignBidChangeRequest[]**](../Model/CampaignBidChangeRequest.md)| Specifies the list of bid changes to be applied. |

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\CampaignMessage[]**](../Model/CampaignMessage.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`, `text/html`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
