# criteo\api\marketingsolutions\v2021_10\AnalyticsApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdsetReport()**](AnalyticsApi.md#getAdsetReport) | **POST** /2021-10/statistics/report | 
[**getTransactionsReport()**](AnalyticsApi.md#getTransactionsReport) | **POST** /2021-10/transactions/report | 
[**getTransparencyReport()**](AnalyticsApi.md#getTransparencyReport) | **POST** /2021-10/log-level/advertisers/{advertiser-id}/report | 


## `getAdsetReport()`

```php
getAdsetReport($statistics_report_query_message): string
```



This Statistics endpoint provides adset related data. It is an upgrade of our previous Statistics endpoint, and includes new metrics and customization capabilities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2021_10\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statistics_report_query_message = new \criteo\api\marketingsolutions\v2021_10\Model\StatisticsReportQueryMessage(); // \criteo\api\marketingsolutions\v2021_10\Model\StatisticsReportQueryMessage

try {
    $result = $apiInstance->getAdsetReport($statistics_report_query_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAdsetReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statistics_report_query_message** | [**\criteo\api\marketingsolutions\v2021_10\Model\StatisticsReportQueryMessage**](../Model/StatisticsReportQueryMessage.md)|  | [optional]

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsReport()`

```php
getTransactionsReport($transactions_report_query_data_message): string
```



This Transactions endpoint provides transactions id related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2021_10\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactions_report_query_data_message = new \criteo\api\marketingsolutions\v2021_10\Model\TransactionsReportQueryDataMessage(); // \criteo\api\marketingsolutions\v2021_10\Model\TransactionsReportQueryDataMessage

try {
    $result = $apiInstance->getTransactionsReport($transactions_report_query_data_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getTransactionsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactions_report_query_data_message** | [**\criteo\api\marketingsolutions\v2021_10\Model\TransactionsReportQueryDataMessage**](../Model/TransactionsReportQueryDataMessage.md)|  | [optional]

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransparencyReport()`

```php
getTransparencyReport($advertiser_id, $transparency_query_message): \criteo\api\marketingsolutions\v2021_10\Model\TransparencyReportDataMessage
```



This Statistics endpoint provides publisher data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2021_10\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id to fetch the transparency data.
$transparency_query_message = new \criteo\api\marketingsolutions\v2021_10\Model\TransparencyQueryMessage(); // \criteo\api\marketingsolutions\v2021_10\Model\TransparencyQueryMessage

try {
    $result = $apiInstance->getTransparencyReport($advertiser_id, $transparency_query_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getTransparencyReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**| The advertiser id to fetch the transparency data. |
 **transparency_query_message** | [**\criteo\api\marketingsolutions\v2021_10\Model\TransparencyQueryMessage**](../Model/TransparencyQueryMessage.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\v2021_10\Model\TransparencyReportDataMessage**](../Model/TransparencyReportDataMessage.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`, `text/plain`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
