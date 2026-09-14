# criteo\api\marketingsolutions\experimental\CatalogApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCatalogIngestionReportSummary()**](CatalogApi.md#getCatalogIngestionReportSummary) | **GET** /experimental/catalog/ingestion/{ingestion-id}/reports/summary | /experimental/catalog/ingestion/{ingestion-id}/reports/summary |
| [**getCatalogIngestionReports()**](CatalogApi.md#getCatalogIngestionReports) | **GET** /experimental/catalog/merchants/{merchant-id}/ingestion/reports | /experimental/catalog/merchants/{merchant-id}/ingestion/reports |
| [**getCatalogMerchantStats()**](CatalogApi.md#getCatalogMerchantStats) | **GET** /experimental/catalog/stats/merchants/{merchant-id} | /experimental/catalog/stats/merchants/{merchant-id} |
| [**getCatalogProductsBatchReport()**](CatalogApi.md#getCatalogProductsBatchReport) | **GET** /experimental/catalog/products/batch/report/{operation-token} | /experimental/catalog/products/batch/report/{operation-token} |
| [**submitCatalogProductsBatch()**](CatalogApi.md#submitCatalogProductsBatch) | **POST** /experimental/catalog/products/batch | /experimental/catalog/products/batch |


## `getCatalogIngestionReportSummary()`

```php
getCatalogIngestionReportSummary($ingestion_id): \criteo\api\marketingsolutions\experimental\Model\CatalogIngestionSummaryResponse
```

/experimental/catalog/ingestion/{ingestion-id}/reports/summary

Get the summary report of a catalog ingestion: what triggered it, how long it ran, how many offers it held, what it changed and how clean the data was.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\experimental\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ingestion_id = 'ingestion_id_example'; // string | Identifies the catalog ingestion to report on.

try {
    $result = $apiInstance->getCatalogIngestionReportSummary($ingestion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalogIngestionReportSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ingestion_id** | **string**| Identifies the catalog ingestion to report on. | |

### Return type

[**\criteo\api\marketingsolutions\experimental\Model\CatalogIngestionSummaryResponse**](../Model/CatalogIngestionSummaryResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCatalogIngestionReports()`

```php
getCatalogIngestionReports($merchant_id, $limit, $offset): \criteo\api\marketingsolutions\experimental\Model\CatalogIngestionReportListResponse
```

/experimental/catalog/merchants/{merchant-id}/ingestion/reports

List the catalog ingestions of a merchant, most recent first, with their type, status and timing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\experimental\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Identifies the merchant whose catalog ingestions are reported.
$limit = 25; // int | Maximum number of ingestion reports returned in the page.
$offset = 0; // int | Index of the first ingestion report of the page, used to page through the collection.

try {
    $result = $apiInstance->getCatalogIngestionReports($merchant_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalogIngestionReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Identifies the merchant whose catalog ingestions are reported. | |
| **limit** | **int**| Maximum number of ingestion reports returned in the page. | [optional] [default to 25] |
| **offset** | **int**| Index of the first ingestion report of the page, used to page through the collection. | [optional] [default to 0] |

### Return type

[**\criteo\api\marketingsolutions\experimental\Model\CatalogIngestionReportListResponse**](../Model/CatalogIngestionReportListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCatalogMerchantStats()`

```php
getCatalogMerchantStats($merchant_id, $last_num_hours): \criteo\api\marketingsolutions\experimental\Model\StatisticsOkResponse
```

/experimental/catalog/stats/merchants/{merchant-id}

get an stats request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\experimental\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | merchant-id to get
$last_num_hours = 56; // int | the last number of hours

try {
    $result = $apiInstance->getCatalogMerchantStats($merchant_id, $last_num_hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalogMerchantStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| merchant-id to get | |
| **last_num_hours** | **int**| the last number of hours | [optional] |

### Return type

[**\criteo\api\marketingsolutions\experimental\Model\StatisticsOkResponse**](../Model/StatisticsOkResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCatalogProductsBatchReport()`

```php
getCatalogProductsBatchReport($operation_token): \criteo\api\marketingsolutions\experimental\Model\ReportOkResponse
```

/experimental/catalog/products/batch/report/{operation-token}

Get the report of an asynchronous batch operation previously requested

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\experimental\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_token = 'operation_token_example'; // string | The token returned by the batch endpoint.

try {
    $result = $apiInstance->getCatalogProductsBatchReport($operation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalogProductsBatchReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_token** | **string**| The token returned by the batch endpoint. | |

### Return type

[**\criteo\api\marketingsolutions\experimental\Model\ReportOkResponse**](../Model/ReportOkResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitCatalogProductsBatch()`

```php
submitCatalogProductsBatch($products_custom_batch_request): \criteo\api\marketingsolutions\experimental\Model\BatchAcceptedResponse
```

/experimental/catalog/products/batch

Used to publish a batch of operations to insert, update and deletes products.  The batch is processed asynchronously.The response provides an operationToken which can be used to track  the status of the report of the operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\experimental\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\experimental\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$products_custom_batch_request = new \criteo\api\marketingsolutions\experimental\Model\ProductsCustomBatchRequest(); // \criteo\api\marketingsolutions\experimental\Model\ProductsCustomBatchRequest

try {
    $result = $apiInstance->submitCatalogProductsBatch($products_custom_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->submitCatalogProductsBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **products_custom_batch_request** | [**\criteo\api\marketingsolutions\experimental\Model\ProductsCustomBatchRequest**](../Model/ProductsCustomBatchRequest.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\experimental\Model\BatchAcceptedResponse**](../Model/BatchAcceptedResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
