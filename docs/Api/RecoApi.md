# criteo\api\marketingsolutions\preview\RecoApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductSet()**](RecoApi.md#createProductSet) | **POST** /preview/product-sets | 
[**fetchProductSet()**](RecoApi.md#fetchProductSet) | **GET** /preview/product-sets/{product-set-id} | 
[**fetchProductSets()**](RecoApi.md#fetchProductSets) | **GET** /preview/product-sets/dataset/{dataset-id} | 
[**previewProductSetsPreviewPost()**](RecoApi.md#previewProductSetsPreviewPost) | **POST** /preview/product-sets/preview | 
[**removeProductSet()**](RecoApi.md#removeProductSet) | **DELETE** /preview/product-sets/{product-set-id} | 


## `createProductSet()`

```php
createProductSet($value_resource_input_of_create_product_set_request): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfProductSet
```



Create a new product set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\RecoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_resource_input_of_create_product_set_request = new \criteo\api\marketingsolutions\preview\Model\ValueResourceInputOfCreateProductSetRequest(); // \criteo\api\marketingsolutions\preview\Model\ValueResourceInputOfCreateProductSetRequest

try {
    $result = $apiInstance->createProductSet($value_resource_input_of_create_product_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoApi->createProductSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value_resource_input_of_create_product_set_request** | [**\criteo\api\marketingsolutions\preview\Model\ValueResourceInputOfCreateProductSetRequest**](../Model/ValueResourceInputOfCreateProductSetRequest.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfProductSet**](../Model/ResourceOutcomeOfProductSet.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchProductSet()`

```php
fetchProductSet($product_set_id): \criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfProductSet
```



Fetch an existing product set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\RecoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_set_id = 'product_set_id_example'; // string | ID of the product set

try {
    $result = $apiInstance->fetchProductSet($product_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoApi->fetchProductSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_set_id** | **string**| ID of the product set |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceOutcomeOfProductSet**](../Model/ResourceOutcomeOfProductSet.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchProductSets()`

```php
fetchProductSets($dataset_id): \criteo\api\marketingsolutions\preview\Model\ResourceCollectionOutcomeOfProductSet
```



Fetch product sets of a given dataset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\RecoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataset_id = 'dataset_id_example'; // string | The ID of the dataset that should be used for product set retrieval

try {
    $result = $apiInstance->fetchProductSets($dataset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoApi->fetchProductSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dataset_id** | **string**| The ID of the dataset that should be used for product set retrieval |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResourceCollectionOutcomeOfProductSet**](../Model/ResourceCollectionOutcomeOfProductSet.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewProductSetsPreviewPost()`

```php
previewProductSetsPreviewPost($product_set_statistics_query): \criteo\api\marketingsolutions\preview\Model\OkResponse
```



Display a preview of product set rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\RecoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_set_statistics_query = new \criteo\api\marketingsolutions\preview\Model\ProductSetStatisticsQuery(); // \criteo\api\marketingsolutions\preview\Model\ProductSetStatisticsQuery

try {
    $result = $apiInstance->previewProductSetsPreviewPost($product_set_statistics_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoApi->previewProductSetsPreviewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_set_statistics_query** | [**\criteo\api\marketingsolutions\preview\Model\ProductSetStatisticsQuery**](../Model/ProductSetStatisticsQuery.md)|  |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\OkResponse**](../Model/OkResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeProductSet()`

```php
removeProductSet($product_set_id): \criteo\api\marketingsolutions\preview\Model\Outcome
```



Remove a product set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\RecoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_set_id = 'product_set_id_example'; // string | ID of the product set to remove

try {
    $result = $apiInstance->removeProductSet($product_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoApi->removeProductSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_set_id** | **string**| ID of the product set to remove |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\Outcome**](../Model/Outcome.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
