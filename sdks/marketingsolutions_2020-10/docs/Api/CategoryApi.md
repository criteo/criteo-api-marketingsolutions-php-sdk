# criteo\api\marketingsolutions\v2020_10\CategoryApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategories()**](CategoryApi.md#getCategories) | **GET** /legacy/marketing/v1/categories | Gets categories
[**updateCategories()**](CategoryApi.md#updateCategories) | **PUT** /legacy/marketing/v1/categories | Enables/disables categories


## `getCategories()`

```php
getCategories($campaign_ids, $advertiser_ids, $category_hash_codes, $enabled_only): \criteo\api\marketingsolutions\v2020_10\Model\CategoryMessage[]
```

Gets categories

Get the list of categories with the specified filters.  If a category is requested but is missing from current user's portfolio, it will not be included in the list.  If neither campaign ids nor advertisers ids are provided, then the user's portfolio will be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_ids = 'campaign_ids_example'; // string | Optional. One or more campaign ids, E.g., 78, 12932, 45236. If the campaign ids requested are not liked to advertisers in the user's portfolio, they will be skipped.
$advertiser_ids = 'advertiser_ids_example'; // string | Optional. One or more advertiser ids, E.g., 78, 12932, 45236. If the advertiser ids requested are not part of the user's portfolio, they will be skipped.
$category_hash_codes = 'category_hash_codes_example'; // string | Optional. One or more category hash codes.
$enabled_only = True; // bool | Optional. Returns only categories you can bid on. Defaults to false.

try {
    $result = $apiInstance->getCategories($campaign_ids, $advertiser_ids, $category_hash_codes, $enabled_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_ids** | **string**| Optional. One or more campaign ids, E.g., 78, 12932, 45236. If the campaign ids requested are not liked to advertisers in the user&#39;s portfolio, they will be skipped. | [optional]
 **advertiser_ids** | **string**| Optional. One or more advertiser ids, E.g., 78, 12932, 45236. If the advertiser ids requested are not part of the user&#39;s portfolio, they will be skipped. | [optional]
 **category_hash_codes** | **string**| Optional. One or more category hash codes. | [optional]
 **enabled_only** | **bool**| Optional. Returns only categories you can bid on. Defaults to false. | [optional]

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\CategoryMessage[]**](../Model/CategoryMessage.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCategories()`

```php
updateCategories($categories_per_catalog): \criteo\api\marketingsolutions\v2020_10\Model\CategoryUpdatesPerCatalog[]
```

Enables/disables categories

Update categories for multiple catalogs.<br />  Please note that all validations need to pass before applying the requested changes;  the subsequent validation error messages will be returned in the response.<br />  Please note that bidding will still happen for disabled categories, but using the Camapign's bid.  If the call is successful, full details about the changed categories will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = criteo\api\marketingsolutions\v2020_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2020_10\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categories_per_catalog = array(new \criteo\api\marketingsolutions\v2020_10\Model\CategoryUpdatesPerCatalog()); // \criteo\api\marketingsolutions\v2020_10\Model\CategoryUpdatesPerCatalog[] | The list of categories to be enabled/disabled, grouped by catalog.

try {
    $result = $apiInstance->updateCategories($categories_per_catalog);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->updateCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categories_per_catalog** | [**\criteo\api\marketingsolutions\v2020_10\Model\CategoryUpdatesPerCatalog[]**](../Model/CategoryUpdatesPerCatalog.md)| The list of categories to be enabled/disabled, grouped by catalog. |

### Return type

[**\criteo\api\marketingsolutions\v2020_10\Model\CategoryUpdatesPerCatalog[]**](../Model/CategoryUpdatesPerCatalog.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`, `text/html`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
