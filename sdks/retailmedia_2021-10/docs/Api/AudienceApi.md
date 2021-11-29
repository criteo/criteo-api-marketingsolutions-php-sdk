# criteo\api\retailmedia\v2021_10\AudienceApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAudience()**](AudienceApi.md#createAudience) | **POST** /2021-10/retail-media/accounts/{accountId}/audiences | 
[**getAudiencesByAccountId()**](AudienceApi.md#getAudiencesByAccountId) | **GET** /2021-10/retail-media/accounts/{accountId}/audiences | 


## `createAudience()`

```php
createAudience($account_id, $create_audience_request): \criteo\api\retailmedia\v2021_10\Model\CreateRetailMediaAudienceResponse
```



Create an audience for a given account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account to which this audience belongs.
$create_audience_request = new \criteo\api\retailmedia\v2021_10\Model\CreateAudienceRequest(); // \criteo\api\retailmedia\v2021_10\Model\CreateAudienceRequest

try {
    $result = $apiInstance->createAudience($account_id, $create_audience_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->createAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account to which this audience belongs. |
 **create_audience_request** | [**\criteo\api\retailmedia\v2021_10\Model\CreateAudienceRequest**](../Model/CreateAudienceRequest.md)|  |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\CreateRetailMediaAudienceResponse**](../Model/CreateRetailMediaAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudiencesByAccountId()`

```php
getAudiencesByAccountId($account_id, $limit_to_id, $page_size, $page_index): \criteo\api\retailmedia\v2021_10\Model\GetPageOfAudiencesByAccountIdResponse
```



Get a page of audiences for a given account ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | External account ID which owns audience.
$limit_to_id = array('limit_to_id_example'); // string[] | Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId=1&limitToId=2
$page_size = 56; // int | Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page
$page_index = 56; // int | Returns the specified page of results given a pageSize; pages are 0-indexed

try {
    $result = $apiInstance->getAudiencesByAccountId($account_id, $limit_to_id, $page_size, $page_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudiencesByAccountId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| External account ID which owns audience. |
 **limit_to_id** | [**string[]**](../Model/string.md)| Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 | [optional]
 **page_size** | **int**| Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page | [optional]
 **page_index** | **int**| Returns the specified page of results given a pageSize; pages are 0-indexed | [optional]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\GetPageOfAudiencesByAccountIdResponse**](../Model/GetPageOfAudiencesByAccountIdResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
