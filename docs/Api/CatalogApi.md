# criteo\api\marketingsolutions\preview\CatalogApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**previewCatalogProductsBatchPost()**](CatalogApi.md#previewCatalogProductsBatchPost) | **POST** /preview/catalog/products/batch |  |
| [**previewCatalogProductsBatchReportOperationTokenGet()**](CatalogApi.md#previewCatalogProductsBatchReportOperationTokenGet) | **GET** /preview/catalog/products/batch/report/{operation-token} |  |
| [**previewCatalogStatsMerchantsMerchantIdGet()**](CatalogApi.md#previewCatalogStatsMerchantsMerchantIdGet) | **GET** /preview/catalog/stats/merchants/{merchant-id} |  |


## `previewCatalogProductsBatchPost()`

```php
previewCatalogProductsBatchPost($products_custom_batch_request): \criteo\api\marketingsolutions\preview\Model\BatchAcceptedResponse
```



Used to publish a batch of operations to insert, update and deletes products.  The batch is processed asynchronously.The response provides an operationToken which can be used to track  the status of the report of the operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$products_custom_batch_request = new \criteo\api\marketingsolutions\preview\Model\ProductsCustomBatchRequest(); // \criteo\api\marketingsolutions\preview\Model\ProductsCustomBatchRequest

try {
    $result = $apiInstance->previewCatalogProductsBatchPost($products_custom_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->previewCatalogProductsBatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **products_custom_batch_request** | [**\criteo\api\marketingsolutions\preview\Model\ProductsCustomBatchRequest**](../Model/ProductsCustomBatchRequest.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\BatchAcceptedResponse**](../Model/BatchAcceptedResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewCatalogProductsBatchReportOperationTokenGet()`

```php
previewCatalogProductsBatchReportOperationTokenGet($operation_token): \criteo\api\marketingsolutions\preview\Model\ReportOkResponse
```



Get the report of an asynchronous batch operation previously requested

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_token = 'operation_token_example'; // string | The token returned by the batch endpoint.

try {
    $result = $apiInstance->previewCatalogProductsBatchReportOperationTokenGet($operation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->previewCatalogProductsBatchReportOperationTokenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_token** | **string**| The token returned by the batch endpoint. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ReportOkResponse**](../Model/ReportOkResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewCatalogStatsMerchantsMerchantIdGet()`

```php
previewCatalogStatsMerchantsMerchantIdGet($merchant_id, $last_num_hours): \criteo\api\marketingsolutions\preview\Model\StatisticsOkResponse
```



get an stats request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 56; // int | merchant-id to get
$last_num_hours = 56; // int | the last number of hours

try {
    $result = $apiInstance->previewCatalogStatsMerchantsMerchantIdGet($merchant_id, $last_num_hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->previewCatalogStatsMerchantsMerchantIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **int**| merchant-id to get | |
| **last_num_hours** | **int**| the last number of hours | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\StatisticsOkResponse**](../Model/StatisticsOkResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
