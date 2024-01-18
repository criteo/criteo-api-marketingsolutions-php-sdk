# criteo\api\marketingsolutions\v2023_10\CampaignApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAdSet()**](CampaignApi.md#createAdSet) | **POST** /2023-10/marketing-solutions/ad-sets |  |
| [**createCampaign()**](CampaignApi.md#createCampaign) | **POST** /2023-10/marketing-solutions/campaigns |  |
| [**getAdSet()**](CampaignApi.md#getAdSet) | **GET** /2023-10/marketing-solutions/ad-sets/{adSetId} |  |
| [**getCampaign()**](CampaignApi.md#getCampaign) | **GET** /2023-10/marketing-solutions/campaigns/{campaign-id} |  |
| [**getCategoryBidList()**](CampaignApi.md#getCategoryBidList) | **GET** /2023-10/marketing-solutions/ad-sets/{ad-set-id}/category-bids |  |
| [**getDisplayMultipliers()**](CampaignApi.md#getDisplayMultipliers) | **GET** /2023-10/marketing-solutions/ad-sets/{ad-set-id}/display-multipliers |  |
| [**patchAdSets()**](CampaignApi.md#patchAdSets) | **PATCH** /2023-10/marketing-solutions/ad-sets |  |
| [**patchCampaigns()**](CampaignApi.md#patchCampaigns) | **PATCH** /2023-10/marketing-solutions/campaigns |  |
| [**patchCategoryBidList()**](CampaignApi.md#patchCategoryBidList) | **PATCH** /2023-10/marketing-solutions/ad-sets/{ad-set-id}/category-bids |  |
| [**patchDisplayMultipliers()**](CampaignApi.md#patchDisplayMultipliers) | **PATCH** /2023-10/marketing-solutions/ad-sets/{ad-set-id}/display-multipliers |  |
| [**searchAdSets()**](CampaignApi.md#searchAdSets) | **POST** /2023-10/marketing-solutions/ad-sets/search |  |
| [**searchCampaigns()**](CampaignApi.md#searchCampaigns) | **POST** /2023-10/marketing-solutions/campaigns/search |  |
| [**startAdSets()**](CampaignApi.md#startAdSets) | **POST** /2023-10/marketing-solutions/ad-sets/start |  |
| [**stopAdSets()**](CampaignApi.md#stopAdSets) | **POST** /2023-10/marketing-solutions/ad-sets/stop |  |
| [**updateAdSetAudience()**](CampaignApi.md#updateAdSetAudience) | **PUT** /2023-10/marketing-solutions/ad-sets/{ad-set-id}/audience |  |


## `createAdSet()`

```php
createAdSet($create_ad_set_request): \criteo\api\marketingsolutions\v2023_10\Model\ResponseReadAdSet
```



Create the specified ad set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_set_request = new \criteo\api\marketingsolutions\v2023_10\Model\CreateAdSetRequest(); // \criteo\api\marketingsolutions\v2023_10\Model\CreateAdSetRequest | the ad sets to create

try {
    $result = $apiInstance->createAdSet($create_ad_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createAdSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_set_request** | [**\criteo\api\marketingsolutions\v2023_10\Model\CreateAdSetRequest**](../Model/CreateAdSetRequest.md)| the ad sets to create | |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\ResponseReadAdSet**](../Model/ResponseReadAdSet.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaign()`

```php
createCampaign($create_campaign_request): \criteo\api\marketingsolutions\v2023_10\Model\CampaignV23Q1Response
```



Create the specified campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_campaign_request = new \criteo\api\marketingsolutions\v2023_10\Model\CreateCampaignRequest(); // \criteo\api\marketingsolutions\v2023_10\Model\CreateCampaignRequest | the campaigns to create

try {
    $result = $apiInstance->createCampaign($create_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_campaign_request** | [**\criteo\api\marketingsolutions\v2023_10\Model\CreateCampaignRequest**](../Model/CreateCampaignRequest.md)| the campaigns to create | |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\CampaignV23Q1Response**](../Model/CampaignV23Q1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdSet()`

```php
getAdSet($ad_set_id): \criteo\api\marketingsolutions\v2023_10\Model\ResponseReadAdSet
```



Get the data for the specified ad set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the ad set | |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\ResponseReadAdSet**](../Model/ResponseReadAdSet.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($campaign_id): \criteo\api\marketingsolutions\v2023_10\Model\CampaignResponse
```



Get the data for the specified campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Id of the campaign

try {
    $result = $apiInstance->getCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Id of the campaign | |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\CampaignResponse**](../Model/CampaignResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryBidList()`

```php
getCategoryBidList($ad_set_id): \criteo\api\marketingsolutions\v2023_10\Model\AdSetCategoryBidListResponse
```



Get the Category Bids for all valid Categories associated to an Ad Set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set

try {
    $result = $apiInstance->getCategoryBidList($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCategoryBidList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\AdSetCategoryBidListResponse**](../Model/AdSetCategoryBidListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDisplayMultipliers()`

```php
getDisplayMultipliers($ad_set_id): \criteo\api\marketingsolutions\v2023_10\Model\AdSetDisplayMultiplierListResponse
```



Get the Display Multipliers for all valid Categories associated to an Ad Set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set

try {
    $result = $apiInstance->getDisplayMultipliers($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getDisplayMultipliers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\AdSetDisplayMultiplierListResponse**](../Model/AdSetDisplayMultiplierListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAdSets()`

```php
patchAdSets($requests_patch_ad_set): \criteo\api\marketingsolutions\v2023_10\Model\ResponsesAdSetId
```



Patch a list of AdSets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requests_patch_ad_set = new \criteo\api\marketingsolutions\v2023_10\Model\RequestsPatchAdSet(); // \criteo\api\marketingsolutions\v2023_10\Model\RequestsPatchAdSet | List of adsets to patch.

try {
    $result = $apiInstance->patchAdSets($requests_patch_ad_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requests_patch_ad_set** | [**\criteo\api\marketingsolutions\v2023_10\Model\RequestsPatchAdSet**](../Model/RequestsPatchAdSet.md)| List of adsets to patch. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\ResponsesAdSetId**](../Model/ResponsesAdSetId.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCampaigns()`

```php
patchCampaigns($patch_campaign_list_request): \criteo\api\marketingsolutions\v2023_10\Model\PatchResultCampaignListResponse
```



Patch a list of Campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_campaign_list_request = new \criteo\api\marketingsolutions\v2023_10\Model\PatchCampaignListRequest(); // \criteo\api\marketingsolutions\v2023_10\Model\PatchCampaignListRequest | List of campaigns to patch.

try {
    $result = $apiInstance->patchCampaigns($patch_campaign_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patch_campaign_list_request** | [**\criteo\api\marketingsolutions\v2023_10\Model\PatchCampaignListRequest**](../Model/PatchCampaignListRequest.md)| List of campaigns to patch. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\PatchResultCampaignListResponse**](../Model/PatchResultCampaignListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCategoryBidList()`

```php
patchCategoryBidList($ad_set_id, $patch_ad_set_category_bid_list_request): \criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetCategoryBidResultListResponse
```



Patch Category Bids for one or more Categories in a single request. Partial success policy is followed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set
$patch_ad_set_category_bid_list_request = new \criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetCategoryBidListRequest(); // \criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetCategoryBidListRequest

try {
    $result = $apiInstance->patchCategoryBidList($ad_set_id, $patch_ad_set_category_bid_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchCategoryBidList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |
| **patch_ad_set_category_bid_list_request** | [**\criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetCategoryBidListRequest**](../Model/PatchAdSetCategoryBidListRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetCategoryBidResultListResponse**](../Model/PatchAdSetCategoryBidResultListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchDisplayMultipliers()`

```php
patchDisplayMultipliers($ad_set_id, $patch_ad_set_display_multiplier_list_request): \criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetDisplayMultiplierResultListResponse
```



Patch Display Multipliers for one or more Categories in a single request. Partial success policy is followed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set
$patch_ad_set_display_multiplier_list_request = new \criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetDisplayMultiplierListRequest(); // \criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetDisplayMultiplierListRequest

try {
    $result = $apiInstance->patchDisplayMultipliers($ad_set_id, $patch_ad_set_display_multiplier_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchDisplayMultipliers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |
| **patch_ad_set_display_multiplier_list_request** | [**\criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetDisplayMultiplierListRequest**](../Model/PatchAdSetDisplayMultiplierListRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\PatchAdSetDisplayMultiplierResultListResponse**](../Model/PatchAdSetDisplayMultiplierResultListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAdSets()`

```php
searchAdSets($request_ad_set_search): \criteo\api\marketingsolutions\v2023_10\Model\ResponsesReadAdSet
```



Search for ad sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_ad_set_search = new \criteo\api\marketingsolutions\v2023_10\Model\RequestAdSetSearch(); // \criteo\api\marketingsolutions\v2023_10\Model\RequestAdSetSearch

try {
    $result = $apiInstance->searchAdSets($request_ad_set_search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->searchAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_ad_set_search** | [**\criteo\api\marketingsolutions\v2023_10\Model\RequestAdSetSearch**](../Model/RequestAdSetSearch.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\ResponsesReadAdSet**](../Model/ResponsesReadAdSet.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCampaigns()`

```php
searchCampaigns($campaign_search_request): \criteo\api\marketingsolutions\v2023_10\Model\CampaignListResponse
```



Search for campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_search_request = new \criteo\api\marketingsolutions\v2023_10\Model\CampaignSearchRequest(); // \criteo\api\marketingsolutions\v2023_10\Model\CampaignSearchRequest | filters on campaigns

try {
    $result = $apiInstance->searchCampaigns($campaign_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->searchCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_search_request** | [**\criteo\api\marketingsolutions\v2023_10\Model\CampaignSearchRequest**](../Model/CampaignSearchRequest.md)| filters on campaigns | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\CampaignListResponse**](../Model/CampaignListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startAdSets()`

```php
startAdSets($requests_ad_set_id): \criteo\api\marketingsolutions\v2023_10\Model\ResponsesAdSetId
```



Start the specified list of ad sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requests_ad_set_id = new \criteo\api\marketingsolutions\v2023_10\Model\RequestsAdSetId(); // \criteo\api\marketingsolutions\v2023_10\Model\RequestsAdSetId | All the ad sets to start

try {
    $result = $apiInstance->startAdSets($requests_ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->startAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requests_ad_set_id** | [**\criteo\api\marketingsolutions\v2023_10\Model\RequestsAdSetId**](../Model/RequestsAdSetId.md)| All the ad sets to start | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\ResponsesAdSetId**](../Model/ResponsesAdSetId.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopAdSets()`

```php
stopAdSets($requests_ad_set_id): \criteo\api\marketingsolutions\v2023_10\Model\ResponsesAdSetId
```



Stop the specified list of ad sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requests_ad_set_id = new \criteo\api\marketingsolutions\v2023_10\Model\RequestsAdSetId(); // \criteo\api\marketingsolutions\v2023_10\Model\RequestsAdSetId | All the ad sets to stop

try {
    $result = $apiInstance->stopAdSets($requests_ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->stopAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requests_ad_set_id** | [**\criteo\api\marketingsolutions\v2023_10\Model\RequestsAdSetId**](../Model/RequestsAdSetId.md)| All the ad sets to stop | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\ResponsesAdSetId**](../Model/ResponsesAdSetId.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdSetAudience()`

```php
updateAdSetAudience($ad_set_id, $ad_set_audience_link_input_entity_v1): \criteo\api\marketingsolutions\v2023_10\Model\AdSetAudienceLinkEntityV1Response
```



Link or unlink an audience with an ad set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | The ad set ID.
$ad_set_audience_link_input_entity_v1 = new \criteo\api\marketingsolutions\v2023_10\Model\AdSetAudienceLinkInputEntityV1(); // \criteo\api\marketingsolutions\v2023_10\Model\AdSetAudienceLinkInputEntityV1 | Ad set-Audience update request.

try {
    $result = $apiInstance->updateAdSetAudience($ad_set_id, $ad_set_audience_link_input_entity_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateAdSetAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| The ad set ID. | |
| **ad_set_audience_link_input_entity_v1** | [**\criteo\api\marketingsolutions\v2023_10\Model\AdSetAudienceLinkInputEntityV1**](../Model/AdSetAudienceLinkInputEntityV1.md)| Ad set-Audience update request. | |

### Return type

[**\criteo\api\marketingsolutions\v2023_10\Model\AdSetAudienceLinkEntityV1Response**](../Model/AdSetAudienceLinkEntityV1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
