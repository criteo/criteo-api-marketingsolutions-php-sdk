# criteo\api\retailmedia\v2021_10\CampaignApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApi202110ExternalAccountBalancesByAccountId()**](CampaignApi.md#getApi202110ExternalAccountBalancesByAccountId) | **GET** /2021-10/retail-media/accounts/{account-id}/balances | 
[**getApi202110ExternalAccountCreativesByAccountId()**](CampaignApi.md#getApi202110ExternalAccountCreativesByAccountId) | **GET** /2021-10/retail-media/accounts/{account-id}/creatives | 
[**getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId()**](CampaignApi.md#getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId) | **GET** /2021-10/retail-media/auction-line-items/{line-item-id}/targeting/keywords | 
[**getApi202110ExternalBalanceCampaignsByBalanceId()**](CampaignApi.md#getApi202110ExternalBalanceCampaignsByBalanceId) | **GET** /2021-10/retail-media/balances/{balance-id}/campaigns | 
[**getApi202110ExternalCampaignPreferredLineItemsByCampaignId()**](CampaignApi.md#getApi202110ExternalCampaignPreferredLineItemsByCampaignId) | **GET** /2021-10/retail-media/campaigns/{campaign-id}/preferred-line-items | 
[**getApi202110ExternalLineItemProductsByLineItemId()**](CampaignApi.md#getApi202110ExternalLineItemProductsByLineItemId) | **GET** /2021-10/retail-media/line-items/{line-item-id}/products | 
[**getApi202110ExternalPreferredLineItemByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemByLineItemId) | **GET** /2021-10/retail-media/preferred-line-items/{line-item-id} | 
[**getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId) | **GET** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket | 
[**getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId) | **GET** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/audiences | 
[**getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()**](CampaignApi.md#getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId) | **GET** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/stores | 
[**getApi202110ExternalRetailerPagesByRetailerId()**](CampaignApi.md#getApi202110ExternalRetailerPagesByRetailerId) | **GET** /2021-10/retail-media/retailers/{retailerId}/pages | 
[**getApiV1ExternalAccountBrandsByAccountId()**](CampaignApi.md#getApiV1ExternalAccountBrandsByAccountId) | **GET** /2021-10/retail-media/accounts/{accountId}/brands | 
[**getApiV1ExternalAccountCampaignsByAccountId()**](CampaignApi.md#getApiV1ExternalAccountCampaignsByAccountId) | **GET** /2021-10/retail-media/accounts/{accountId}/campaigns | 
[**getApiV1ExternalAccountRetailersByAccountId()**](CampaignApi.md#getApiV1ExternalAccountRetailersByAccountId) | **GET** /2021-10/retail-media/accounts/{accountId}/retailers | 
[**getApiV1ExternalAccounts()**](CampaignApi.md#getApiV1ExternalAccounts) | **GET** /2021-10/retail-media/accounts | 
[**getApiV1ExternalCampaignByCampaignId()**](CampaignApi.md#getApiV1ExternalCampaignByCampaignId) | **GET** /2021-10/retail-media/campaigns/{campaignId} | 
[**getApiV1ExternalCatalogOutputByCatalogId()**](CampaignApi.md#getApiV1ExternalCatalogOutputByCatalogId) | **GET** /2021-10/retail-media/catalogs/{catalogId}/output | 
[**getApiV1ExternalCatalogStatusByCatalogId()**](CampaignApi.md#getApiV1ExternalCatalogStatusByCatalogId) | **GET** /2021-10/retail-media/catalogs/{catalogId}/status | 
[**getApiV2ExternalAccountLineItemsByAccountId()**](CampaignApi.md#getApiV2ExternalAccountLineItemsByAccountId) | **GET** /2021-10/retail-media/accounts/{account-id}/line-items | 
[**getApiV2ExternalAuctionLineItemByLineItemId()**](CampaignApi.md#getApiV2ExternalAuctionLineItemByLineItemId) | **GET** /2021-10/retail-media/auction-line-items/{line-item-id} | 
[**getApiV2ExternalCampaignAuctionLineItemsByCampaignId()**](CampaignApi.md#getApiV2ExternalCampaignAuctionLineItemsByCampaignId) | **GET** /2021-10/retail-media/campaigns/{campaign-id}/auction-line-items | 
[**getApiV2ExternalLineItemByLineItemId()**](CampaignApi.md#getApiV2ExternalLineItemByLineItemId) | **GET** /2021-10/retail-media/line-items/{line-item-id} | 
[**postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId) | **POST** /2021-10/retail-media/auction-line-items/{line-item-id}/targeting/keywords/append | 
[**postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId) | **POST** /2021-10/retail-media/auction-line-items/{line-item-id}/targeting/keywords/delete | 
[**postApi202110ExternalBalanceCampaignsAppendByBalanceId()**](CampaignApi.md#postApi202110ExternalBalanceCampaignsAppendByBalanceId) | **POST** /2021-10/retail-media/balances/{balance-id}/campaigns/append | 
[**postApi202110ExternalBalanceCampaignsDeleteByBalanceId()**](CampaignApi.md#postApi202110ExternalBalanceCampaignsDeleteByBalanceId) | **POST** /2021-10/retail-media/balances/{balance-id}/campaigns/delete | 
[**postApi202110ExternalCampaignPreferredLineItemsByCampaignId()**](CampaignApi.md#postApi202110ExternalCampaignPreferredLineItemsByCampaignId) | **POST** /2021-10/retail-media/campaigns/{campaign-id}/preferred-line-items | 
[**postApi202110ExternalLineItemProductsAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalLineItemProductsAppendByLineItemId) | **POST** /2021-10/retail-media/line-items/{line-item-id}/products/append | 
[**postApi202110ExternalLineItemProductsDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalLineItemProductsDeleteByLineItemId) | **POST** /2021-10/retail-media/line-items/{line-item-id}/products/delete | 
[**postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId) | **POST** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/append | 
[**postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId) | **POST** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket/delete | 
[**postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId) | **POST** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/append | 
[**postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId) | **POST** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/audiences/delete | 
[**postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId) | **POST** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/stores/append | 
[**postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId()**](CampaignApi.md#postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId) | **POST** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/stores/delete | 
[**postApiV1ExternalAccountCampaignsByAccountId()**](CampaignApi.md#postApiV1ExternalAccountCampaignsByAccountId) | **POST** /2021-10/retail-media/accounts/{accountId}/campaigns | 
[**postApiV1ExternalAccountCatalogsByAccountId()**](CampaignApi.md#postApiV1ExternalAccountCatalogsByAccountId) | **POST** /2021-10/retail-media/accounts/{accountId}/catalogs | 
[**postApiV2ExternalCampaignAuctionLineItemsByCampaignId()**](CampaignApi.md#postApiV2ExternalCampaignAuctionLineItemsByCampaignId) | **POST** /2021-10/retail-media/campaigns/{campaign-id}/auction-line-items | 
[**putApi202110ExternalPreferredLineItemByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemByLineItemId) | **PUT** /2021-10/retail-media/preferred-line-items/{line-item-id} | 
[**putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId) | **PUT** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/add-to-basket | 
[**putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId) | **PUT** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/audiences | 
[**putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()**](CampaignApi.md#putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId) | **PUT** /2021-10/retail-media/preferred-line-items/{line-item-id}/targeting/stores | 
[**putApiV1ExternalCampaignByCampaignId()**](CampaignApi.md#putApiV1ExternalCampaignByCampaignId) | **PUT** /2021-10/retail-media/campaigns/{campaignId} | 
[**putApiV2ExternalAuctionLineItemByLineItemId()**](CampaignApi.md#putApiV2ExternalAuctionLineItemByLineItemId) | **PUT** /2021-10/retail-media/auction-line-items/{line-item-id} | 


## `getApi202110ExternalAccountBalancesByAccountId()`

```php
getApi202110ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\Balance202110PagedListResponse
```



Gets page of balance objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to get balances for
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApi202110ExternalAccountBalancesByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalAccountBalancesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account to get balances for |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\Balance202110PagedListResponse**](../Model/Balance202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalAccountCreativesByAccountId()`

```php
getApi202110ExternalAccountCreativesByAccountId($account_id): \criteo\api\retailmedia\v2021_10\Model\Creative202110ListResponse
```



Get account creatives

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account id to retrieve creatives for

try {
    $result = $apiInstance->getApi202110ExternalAccountCreativesByAccountId($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalAccountCreativesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| External account id to retrieve creatives for |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\Creative202110ListResponse**](../Model/Creative202110ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId()`

```php
getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId($line_item_id): \criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Response
```



This endpoint gets the keyword target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with

try {
    $result = $apiInstance->getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalAuctionLineItemTargetingKeywordsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Response**](../Model/KeywordTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalBalanceCampaignsByBalanceId()`

```php
getApi202110ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110PagedListResponse
```



Gets page of campaigns for the given balanceId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to get campaigns from
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApi202110ExternalBalanceCampaignsByBalanceId($balance_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalBalanceCampaignsByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_id** | **string**| The balance to get campaigns from |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalCampaignPreferredLineItemsByCampaignId()`

```php
getApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\PreferredLineItem202110PagedListResponse
```



Gets page of preferred line item objects for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalCampaignPreferredLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\PreferredLineItem202110PagedListResponse**](../Model/PreferredLineItem202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalLineItemProductsByLineItemId()`

```php
getApi202110ExternalLineItemProductsByLineItemId($line_item_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110PagedListResponse
```



This endpoint gets the promoted products on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApi202110ExternalLineItemProductsByLineItemId($line_item_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalLineItemProductsByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110PagedListResponse**](../Model/PromotedProduct202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalPreferredLineItemByLineItemId()`

```php
getApi202110ExternalPreferredLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\v2021_10\Model\PreferredLineItem202110Response
```



Gets the preferred line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id

try {
    $result = $apiInstance->getApi202110ExternalPreferredLineItemByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalPreferredLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The given line item id |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\PreferredLineItem202110Response**](../Model/PreferredLineItem202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()`

```php
getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id): \criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Response
```



This endpoint gets the add to basket target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with

try {
    $result = $apiInstance->getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()`

```php
getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id): \criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Response
```



This endpoint gets the audience target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with

try {
    $result = $apiInstance->getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()`

```php
getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id): \criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Response
```



This endpoint gets the store target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with

try {
    $result = $apiInstance->getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalPreferredLineItemTargetingStoresByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApi202110ExternalRetailerPagesByRetailerId()`

```php
getApi202110ExternalRetailerPagesByRetailerId($retailer_id): \criteo\api\retailmedia\v2021_10\Model\ExternalRetailerPages202110
```



Get the page types available for the given retailer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailer_id = 56; // int | The retailers to fetch pages for

try {
    $result = $apiInstance->getApi202110ExternalRetailerPagesByRetailerId($retailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApi202110ExternalRetailerPagesByRetailerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retailer_id** | **int**| The retailers to fetch pages for |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\ExternalRetailerPages202110**](../Model/ExternalRetailerPages202110.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountBrandsByAccountId()`

```php
getApiV1ExternalAccountBrandsByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\JsonApiPageResponseOfBrand
```



Gets page of retailer objects that are associated with the given account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalAccountBrandsByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalAccountBrandsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The given account id |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JsonApiPageResponseOfBrand**](../Model/JsonApiPageResponseOfBrand.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountCampaignsByAccountId()`

```php
getApiV1ExternalAccountCampaignsByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\JsonApiPageResponseOfCampaign
```



Gets page of campaign objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalAccountCampaignsByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalAccountCampaignsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The given account id |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JsonApiPageResponseOfCampaign**](../Model/JsonApiPageResponseOfCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccountRetailersByAccountId()`

```php
getApiV1ExternalAccountRetailersByAccountId($account_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\JsonApiPageResponseOfRetailer
```



Gets page of retailer objects that are associated with the given account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalAccountRetailersByAccountId($account_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalAccountRetailersByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The given account id |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JsonApiPageResponseOfRetailer**](../Model/JsonApiPageResponseOfRetailer.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalAccounts()`

```php
getApiV1ExternalAccounts($limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\JsonApiPageResponseOfAccount
```



Gets page of account objects that the current user can access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV1ExternalAccounts($limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JsonApiPageResponseOfAccount**](../Model/JsonApiPageResponseOfAccount.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalCampaignByCampaignId()`

```php
getApiV1ExternalCampaignByCampaignId($campaign_id): \criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCampaign
```



Gets the campaign for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id

try {
    $result = $apiInstance->getApiV1ExternalCampaignByCampaignId($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalCampaignByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCampaign**](../Model/JsonApiSingleResponseOfCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalCatalogOutputByCatalogId()`

```php
getApiV1ExternalCatalogOutputByCatalogId($catalog_id)
```



Output the indicated catalog. Catalogs are only available for retrieval when their associated status request  is at a Success status.  Produces application/x-json-stream of v2021_07 CatalogProduct json objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | A catalog ID returned from an account catalog request.

try {
    $apiInstance->getApiV1ExternalCatalogOutputByCatalogId($catalog_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalCatalogOutputByCatalogId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| A catalog ID returned from an account catalog request. |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/x-json-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV1ExternalCatalogStatusByCatalogId()`

```php
getApiV1ExternalCatalogStatusByCatalogId($catalog_id): \criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCatalogStatus
```



Check the status of a catalog request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | A catalog ID returned from an account catalog request.

try {
    $result = $apiInstance->getApiV1ExternalCatalogStatusByCatalogId($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV1ExternalCatalogStatusByCatalogId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **string**| A catalog ID returned from an account catalog request. |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalAccountLineItemsByAccountId()`

```php
getApiV2ExternalAccountLineItemsByAccountId($account_id, $limit_to_campaign_id, $limit_to_type, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\CommonLineItemPagedListResponse
```



Gets page of line item objects for the given account id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$limit_to_campaign_id = array('limit_to_campaign_id_example'); // string[] | The campaign ids that you would like to limit your result set to
$limit_to_type = 'limit_to_type_example'; // string | The campaign types that you would like to limit your result set to
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV2ExternalAccountLineItemsByAccountId($account_id, $limit_to_campaign_id, $limit_to_type, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalAccountLineItemsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The given account id |
 **limit_to_campaign_id** | [**string[]**](../Model/string.md)| The campaign ids that you would like to limit your result set to | [optional]
 **limit_to_type** | **string**| The campaign types that you would like to limit your result set to | [optional]
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\CommonLineItemPagedListResponse**](../Model/CommonLineItemPagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalAuctionLineItemByLineItemId()`

```php
getApiV2ExternalAuctionLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\v2021_10\Model\AuctionLineItemResponse
```



Gets the auction line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id

try {
    $result = $apiInstance->getApiV2ExternalAuctionLineItemByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalAuctionLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The given line item id |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AuctionLineItemResponse**](../Model/AuctionLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalCampaignAuctionLineItemsByCampaignId()`

```php
getApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size): \criteo\api\retailmedia\v2021_10\Model\AuctionLineItemPagedListResponse
```



Gets page of auction line item objects for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$limit_to_id = array('limit_to_id_example'); // string[] | The ids that you would like to limit your result set to
$page_index = 56; // int | The 0 indexed page index you would like to receive given the page size
$page_size = 56; // int | The maximum number of items you would like to receive in this request

try {
    $result = $apiInstance->getApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $limit_to_id, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalCampaignAuctionLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |
 **limit_to_id** | [**string[]**](../Model/string.md)| The ids that you would like to limit your result set to | [optional]
 **page_index** | **int**| The 0 indexed page index you would like to receive given the page size | [optional]
 **page_size** | **int**| The maximum number of items you would like to receive in this request | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AuctionLineItemPagedListResponse**](../Model/AuctionLineItemPagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiV2ExternalLineItemByLineItemId()`

```php
getApiV2ExternalLineItemByLineItemId($line_item_id): \criteo\api\retailmedia\v2021_10\Model\CommonLineItemResponse
```



Gets the line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id

try {
    $result = $apiInstance->getApiV2ExternalLineItemByLineItemId($line_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getApiV2ExternalLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The given line item id |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\CommonLineItemResponse**](../Model/CommonLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId()`

```php
postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId($line_item_id, $keyword_target202110_request): \criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Response
```



This endpoint appends one or more keywords to targeting on the specified line item.  The resulting state of the keyword target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$keyword_target202110_request = new \criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Request(); // \criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Request

try {
    $result = $apiInstance->postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId($line_item_id, $keyword_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalAuctionLineItemTargetingKeywordsAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **keyword_target202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Request**](../Model/KeywordTarget202110Request.md)|  | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Response**](../Model/KeywordTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId()`

```php
postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId($line_item_id, $keyword_target202110_request): \criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Response
```



This endpoint removes one or more keywords from targeting on the specified line item.  The resulting state of the keyword target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$keyword_target202110_request = new \criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Request(); // \criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Request

try {
    $result = $apiInstance->postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId($line_item_id, $keyword_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalAuctionLineItemTargetingKeywordsDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **keyword_target202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Request**](../Model/KeywordTarget202110Request.md)|  | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\KeywordTarget202110Response**](../Model/KeywordTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalBalanceCampaignsAppendByBalanceId()`

```php
postApi202110ExternalBalanceCampaignsAppendByBalanceId($balance_id, $balance_campaign202110_list_request): \criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110PagedListResponse
```



appends one or more campaigns to the specified balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to add campaigns from
$balance_campaign202110_list_request = new \criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110ListRequest(); // \criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110ListRequest | The campaigns to append

try {
    $result = $apiInstance->postApi202110ExternalBalanceCampaignsAppendByBalanceId($balance_id, $balance_campaign202110_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalBalanceCampaignsAppendByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_id** | **string**| The balance to add campaigns from |
 **balance_campaign202110_list_request** | [**\criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110ListRequest**](../Model/BalanceCampaign202110ListRequest.md)| The campaigns to append | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalBalanceCampaignsDeleteByBalanceId()`

```php
postApi202110ExternalBalanceCampaignsDeleteByBalanceId($balance_id, $balance_campaign202110_list_request): \criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110PagedListResponse
```



Removes one or more campaigns on the specified balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_id = 'balance_id_example'; // string | The balance to remove campaigns from
$balance_campaign202110_list_request = new \criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110ListRequest(); // \criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110ListRequest | The campaigns to append

try {
    $result = $apiInstance->postApi202110ExternalBalanceCampaignsDeleteByBalanceId($balance_id, $balance_campaign202110_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalBalanceCampaignsDeleteByBalanceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_id** | **string**| The balance to remove campaigns from |
 **balance_campaign202110_list_request** | [**\criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110ListRequest**](../Model/BalanceCampaign202110ListRequest.md)| The campaigns to append | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\BalanceCampaign202110PagedListResponse**](../Model/BalanceCampaign202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalCampaignPreferredLineItemsByCampaignId()`

```php
postApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $preferred_line_item_create_model202110_request): \criteo\api\retailmedia\v2021_10\Model\PreferredLineItem202110Response
```



Creates a new preferred line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$preferred_line_item_create_model202110_request = new \criteo\api\retailmedia\v2021_10\Model\PreferredLineItemCreateModel202110Request(); // \criteo\api\retailmedia\v2021_10\Model\PreferredLineItemCreateModel202110Request | The line item settings to create a line item with

try {
    $result = $apiInstance->postApi202110ExternalCampaignPreferredLineItemsByCampaignId($campaign_id, $preferred_line_item_create_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalCampaignPreferredLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |
 **preferred_line_item_create_model202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\PreferredLineItemCreateModel202110Request**](../Model/PreferredLineItemCreateModel202110Request.md)| The line item settings to create a line item with | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\PreferredLineItem202110Response**](../Model/PreferredLineItem202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalLineItemProductsAppendByLineItemId()`

```php
postApi202110ExternalLineItemProductsAppendByLineItemId($line_item_id, $promoted_product202110_list_request): \criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110PagedListResponse
```



This endpoint appends one or more products to promote on the specified line item.  The resulting state of the line item is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$promoted_product202110_list_request = new \criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110ListRequest(); // \criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110ListRequest | the products to append to this line item

try {
    $result = $apiInstance->postApi202110ExternalLineItemProductsAppendByLineItemId($line_item_id, $promoted_product202110_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalLineItemProductsAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **promoted_product202110_list_request** | [**\criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110ListRequest**](../Model/PromotedProduct202110ListRequest.md)| the products to append to this line item | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110PagedListResponse**](../Model/PromotedProduct202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalLineItemProductsDeleteByLineItemId()`

```php
postApi202110ExternalLineItemProductsDeleteByLineItemId($line_item_id, $promoted_product202110_list_request): \criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110PagedListResponse
```



This endpoint removes one or more products from promotion on the specified line item.  The resulting state of the line item is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$promoted_product202110_list_request = new \criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110ListRequest(); // \criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110ListRequest

try {
    $result = $apiInstance->postApi202110ExternalLineItemProductsDeleteByLineItemId($line_item_id, $promoted_product202110_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalLineItemProductsDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **promoted_product202110_list_request** | [**\criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110ListRequest**](../Model/PromotedProduct202110ListRequest.md)|  | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\PromotedProduct202110PagedListResponse**](../Model/PromotedProduct202110PagedListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request): \criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Response
```



This endpoint appends one or more add to basket ids to targeting on the specified line item.  The resulting state of the add to basket target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$add_to_basket_ids_update_model202110_request = new \criteo\api\retailmedia\v2021_10\Model\AddToBasketIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2021_10\Model\AddToBasketIdsUpdateModel202110Request | Ids to append to the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingAddToBasketAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **add_to_basket_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\AddToBasketIdsUpdateModel202110Request**](../Model/AddToBasketIdsUpdateModel202110Request.md)| Ids to append to the target | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request): \criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Response
```



This endpoint removes one or more add to basket ids from targeting on the specified line item.  The resulting state of the add to basket target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$add_to_basket_ids_update_model202110_request = new \criteo\api\retailmedia\v2021_10\Model\AddToBasketIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2021_10\Model\AddToBasketIdsUpdateModel202110Request | Ids to remove from the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId($line_item_id, $add_to_basket_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingAddToBasketDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **add_to_basket_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\AddToBasketIdsUpdateModel202110Request**](../Model/AddToBasketIdsUpdateModel202110Request.md)| Ids to remove from the target | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId($line_item_id, $audience_ids_update_model202110_request): \criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Response
```



This endpoint appends one or more audiences ids to targeting on the specified line item.  The resulting state of the audience target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$audience_ids_update_model202110_request = new \criteo\api\retailmedia\v2021_10\Model\AudienceIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2021_10\Model\AudienceIdsUpdateModel202110Request | Audience ids to append to the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId($line_item_id, $audience_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingAudiencesAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **audience_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\AudienceIdsUpdateModel202110Request**](../Model/AudienceIdsUpdateModel202110Request.md)| Audience ids to append to the target | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId($line_item_id, $audience_ids_update_model202110_request): \criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Response
```



This endpoint removes one or more audiences ids from targeting on the specified line item.  The resulting state of the audience target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$audience_ids_update_model202110_request = new \criteo\api\retailmedia\v2021_10\Model\AudienceIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2021_10\Model\AudienceIdsUpdateModel202110Request | Audience ids to remove from the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId($line_item_id, $audience_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingAudiencesDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **audience_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\AudienceIdsUpdateModel202110Request**](../Model/AudienceIdsUpdateModel202110Request.md)| Audience ids to remove from the target | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId($line_item_id, $store_ids_update_model202110_request): \criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Response
```



This endpoint appends one or more store ids to targeting on the specified line item.  The resulting state of the store target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$store_ids_update_model202110_request = new \criteo\api\retailmedia\v2021_10\Model\StoreIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2021_10\Model\StoreIdsUpdateModel202110Request | Store ids to append to the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId($line_item_id, $store_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingStoresAppendByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **store_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\StoreIdsUpdateModel202110Request**](../Model/StoreIdsUpdateModel202110Request.md)| Store ids to append to the target | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId()`

```php
postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId($line_item_id, $store_ids_update_model202110_request): \criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Response
```



This endpoint removes one or more store ids from targeting on the specified line item.  The resulting state of the store target is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$store_ids_update_model202110_request = new \criteo\api\retailmedia\v2021_10\Model\StoreIdsUpdateModel202110Request(); // \criteo\api\retailmedia\v2021_10\Model\StoreIdsUpdateModel202110Request | Store ids to remove from the target

try {
    $result = $apiInstance->postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId($line_item_id, $store_ids_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApi202110ExternalPreferredLineItemTargetingStoresDeleteByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **store_ids_update_model202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\StoreIdsUpdateModel202110Request**](../Model/StoreIdsUpdateModel202110Request.md)| Store ids to remove from the target | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalAccountCampaignsByAccountId()`

```php
postApiV1ExternalAccountCampaignsByAccountId($account_id, $external_post_campaign): \criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCampaign
```



Creates a new campaign with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The given account id
$external_post_campaign = new \criteo\api\retailmedia\v2021_10\Model\ExternalPostCampaign(); // \criteo\api\retailmedia\v2021_10\Model\ExternalPostCampaign | The campaign settings to create a campaign with

try {
    $result = $apiInstance->postApiV1ExternalAccountCampaignsByAccountId($account_id, $external_post_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalAccountCampaignsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The given account id |
 **external_post_campaign** | [**\criteo\api\retailmedia\v2021_10\Model\ExternalPostCampaign**](../Model/ExternalPostCampaign.md)| The campaign settings to create a campaign with | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCampaign**](../Model/JsonApiSingleResponseOfCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV1ExternalAccountCatalogsByAccountId()`

```php
postApiV1ExternalAccountCatalogsByAccountId($account_id, $json_api_request_of_catalog_request): \criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCatalogStatus
```



Create a request for a Catalog available to the indicated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account to request the catalog for.
$json_api_request_of_catalog_request = new \criteo\api\retailmedia\v2021_10\Model\JsonApiRequestOfCatalogRequest(); // \criteo\api\retailmedia\v2021_10\Model\JsonApiRequestOfCatalogRequest

try {
    $result = $apiInstance->postApiV1ExternalAccountCatalogsByAccountId($account_id, $json_api_request_of_catalog_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV1ExternalAccountCatalogsByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account to request the catalog for. |
 **json_api_request_of_catalog_request** | [**\criteo\api\retailmedia\v2021_10\Model\JsonApiRequestOfCatalogRequest**](../Model/JsonApiRequestOfCatalogRequest.md)|  | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCatalogStatus**](../Model/JsonApiSingleResponseOfCatalogStatus.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiV2ExternalCampaignAuctionLineItemsByCampaignId()`

```php
postApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $auction_line_item_create_model_request): \criteo\api\retailmedia\v2021_10\Model\AuctionLineItemResponse
```



Creates new auction line item with the specified settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$auction_line_item_create_model_request = new \criteo\api\retailmedia\v2021_10\Model\AuctionLineItemCreateModelRequest(); // \criteo\api\retailmedia\v2021_10\Model\AuctionLineItemCreateModelRequest | The line item settings to create a line item with

try {
    $result = $apiInstance->postApiV2ExternalCampaignAuctionLineItemsByCampaignId($campaign_id, $auction_line_item_create_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postApiV2ExternalCampaignAuctionLineItemsByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |
 **auction_line_item_create_model_request** | [**\criteo\api\retailmedia\v2021_10\Model\AuctionLineItemCreateModelRequest**](../Model/AuctionLineItemCreateModelRequest.md)| The line item settings to create a line item with | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AuctionLineItemResponse**](../Model/AuctionLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202110ExternalPreferredLineItemByLineItemId()`

```php
putApi202110ExternalPreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model202110_request): \criteo\api\retailmedia\v2021_10\Model\PreferredLineItem202110Response
```



Updates the preferred line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id
$preferred_line_item_update_model202110_request = new \criteo\api\retailmedia\v2021_10\Model\PreferredLineItemUpdateModel202110Request(); // \criteo\api\retailmedia\v2021_10\Model\PreferredLineItemUpdateModel202110Request | The line item settings to create a line item with

try {
    $result = $apiInstance->putApi202110ExternalPreferredLineItemByLineItemId($line_item_id, $preferred_line_item_update_model202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202110ExternalPreferredLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The given line item id |
 **preferred_line_item_update_model202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\PreferredLineItemUpdateModel202110Request**](../Model/PreferredLineItemUpdateModel202110Request.md)| The line item settings to create a line item with | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\PreferredLineItem202110Response**](../Model/PreferredLineItem202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId()`

```php
putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id, $add_to_basket_target202110_request): \criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Response
```



This endpoint sets the scope of the add to basket target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$add_to_basket_target202110_request = new \criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Request(); // \criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Request | The add to basket target to set the scope for

try {
    $result = $apiInstance->putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId($line_item_id, $add_to_basket_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202110ExternalPreferredLineItemTargetingAddToBasketByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **add_to_basket_target202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Request**](../Model/AddToBasketTarget202110Request.md)| The add to basket target to set the scope for | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AddToBasketTarget202110Response**](../Model/AddToBasketTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId()`

```php
putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id, $audience_target202110_request): \criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Response
```



This endpoint sets the scope of the audience target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$audience_target202110_request = new \criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Request(); // \criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Request | The audience target to set the scope for

try {
    $result = $apiInstance->putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId($line_item_id, $audience_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202110ExternalPreferredLineItemTargetingAudiencesByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **audience_target202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Request**](../Model/AudienceTarget202110Request.md)| The audience target to set the scope for | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AudienceTarget202110Response**](../Model/AudienceTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId()`

```php
putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id, $store_target202110_request): \criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Response
```



This endpoint sets the scope of the store target on the specified line item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The line item to interact with
$store_target202110_request = new \criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Request(); // \criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Request | The store target to set the scope for

try {
    $result = $apiInstance->putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId($line_item_id, $store_target202110_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApi202110ExternalPreferredLineItemTargetingStoresByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The line item to interact with |
 **store_target202110_request** | [**\criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Request**](../Model/StoreTarget202110Request.md)| The store target to set the scope for | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\StoreTarget202110Response**](../Model/StoreTarget202110Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV1ExternalCampaignByCampaignId()`

```php
putApiV1ExternalCampaignByCampaignId($campaign_id, $external_put_campaign): \criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCampaign
```



Updates the campaign for the given campaign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The given campaign id
$external_put_campaign = new \criteo\api\retailmedia\v2021_10\Model\ExternalPutCampaign(); // \criteo\api\retailmedia\v2021_10\Model\ExternalPutCampaign | The campaign settings to update that campaign with

try {
    $result = $apiInstance->putApiV1ExternalCampaignByCampaignId($campaign_id, $external_put_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiV1ExternalCampaignByCampaignId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| The given campaign id |
 **external_put_campaign** | [**\criteo\api\retailmedia\v2021_10\Model\ExternalPutCampaign**](../Model/ExternalPutCampaign.md)| The campaign settings to update that campaign with | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JsonApiSingleResponseOfCampaign**](../Model/JsonApiSingleResponseOfCampaign.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiV2ExternalAuctionLineItemByLineItemId()`

```php
putApiV2ExternalAuctionLineItemByLineItemId($line_item_id, $auction_line_item_update_model_request): \criteo\api\retailmedia\v2021_10\Model\AuctionLineItemResponse
```



Updates the auction line item for the given line item id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_item_id = 'line_item_id_example'; // string | The given line item id
$auction_line_item_update_model_request = new \criteo\api\retailmedia\v2021_10\Model\AuctionLineItemUpdateModelRequest(); // \criteo\api\retailmedia\v2021_10\Model\AuctionLineItemUpdateModelRequest | The line item settings to create a line item with

try {
    $result = $apiInstance->putApiV2ExternalAuctionLineItemByLineItemId($line_item_id, $auction_line_item_update_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putApiV2ExternalAuctionLineItemByLineItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_item_id** | **string**| The given line item id |
 **auction_line_item_update_model_request** | [**\criteo\api\retailmedia\v2021_10\Model\AuctionLineItemUpdateModelRequest**](../Model/AuctionLineItemUpdateModelRequest.md)| The line item settings to create a line item with | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\AuctionLineItemResponse**](../Model/AuctionLineItemResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
