# criteo\api\retailmedia\v2021_10\AnalyticsApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReportOutput()**](AnalyticsApi.md#getReportOutput) | **GET** /2021-10/retail-media/reports/{reportId}/output | 
[**getReportStatus()**](AnalyticsApi.md#getReportStatus) | **GET** /2021-10/retail-media/reports/{reportId}/status | 
[**requestCampaignReport()**](AnalyticsApi.md#requestCampaignReport) | **POST** /2021-10/retail-media/reports/campaigns | 
[**requestLineItemReport()**](AnalyticsApi.md#requestLineItemReport) | **POST** /2021-10/retail-media/reports/line-items | 


## `getReportOutput()`

```php
getReportOutput($report_id): int
```



Request the report output

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = ee439121-13e3-4734-9f67-c504dd921a41; // string | report id

try {
    $result = $apiInstance->getReportOutput($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getReportOutput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| report id |

### Return type

**int**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportStatus()`

```php
getReportStatus($report_id): \criteo\api\retailmedia\v2021_10\Model\EnvelopeReportStatus
```



Get the status of the report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = ee439121-13e3-4734-9f67-c504dd921a41; // string | report id

try {
    $result = $apiInstance->getReportStatus($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getReportStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| report id |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\EnvelopeReportStatus**](../Model/EnvelopeReportStatus.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestCampaignReport()`

```php
requestCampaignReport($envelope_report_request): \criteo\api\retailmedia\v2021_10\Model\EnvelopeReportStatus
```



Request a campaign report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_report_request = new \criteo\api\retailmedia\v2021_10\Model\EnvelopeReportRequest(); // \criteo\api\retailmedia\v2021_10\Model\EnvelopeReportRequest | // Body of the request {   \"data\": {     \"type\": \"RetailMediaReportRequest\",     \"attributes\": {       \"reportType\": string, // the name of the report being requested       //only one of \"id\" or \"ids\" can be provided for a request       \"id\": string, // the campaign id to select       \"ids\": Array[string], //the campaign ids to select       \"startDate\": string, // YYYY-MM-DD format       \"endDate\": string, // YYYY-MM-DD format       \"timeZone\": string, // examples: 'Europe/London', 'Asia/Tokyo', 'America/New_York'       // both attribution windows must be specified when one is specified       \"clickAttributionWindow\": \"7D\", \"14D\", or \"30D\"  // optional. defaults to campaign's click attribution window       \"viewAttributionWindow\": \"none\", \"1D\", \"7D\", \"14D\", \"30D\" // optional. defaults to campaign's view attribution window       \"format\": One of \"json\" (default),\"json-compact\",\"json-newline\" or \"csv\" // output format, defaults to json-compact     }   } }

try {
    $result = $apiInstance->requestCampaignReport($envelope_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->requestCampaignReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_report_request** | [**\criteo\api\retailmedia\v2021_10\Model\EnvelopeReportRequest**](../Model/EnvelopeReportRequest.md)| // Body of the request {   \&quot;data\&quot;: {     \&quot;type\&quot;: \&quot;RetailMediaReportRequest\&quot;,     \&quot;attributes\&quot;: {       \&quot;reportType\&quot;: string, // the name of the report being requested       //only one of \&quot;id\&quot; or \&quot;ids\&quot; can be provided for a request       \&quot;id\&quot;: string, // the campaign id to select       \&quot;ids\&quot;: Array[string], //the campaign ids to select       \&quot;startDate\&quot;: string, // YYYY-MM-DD format       \&quot;endDate\&quot;: string, // YYYY-MM-DD format       \&quot;timeZone\&quot;: string, // examples: &#39;Europe/London&#39;, &#39;Asia/Tokyo&#39;, &#39;America/New_York&#39;       // both attribution windows must be specified when one is specified       \&quot;clickAttributionWindow\&quot;: \&quot;7D\&quot;, \&quot;14D\&quot;, or \&quot;30D\&quot;  // optional. defaults to campaign&#39;s click attribution window       \&quot;viewAttributionWindow\&quot;: \&quot;none\&quot;, \&quot;1D\&quot;, \&quot;7D\&quot;, \&quot;14D\&quot;, \&quot;30D\&quot; // optional. defaults to campaign&#39;s view attribution window       \&quot;format\&quot;: One of \&quot;json\&quot; (default),\&quot;json-compact\&quot;,\&quot;json-newline\&quot; or \&quot;csv\&quot; // output format, defaults to json-compact     }   } } |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\EnvelopeReportStatus**](../Model/EnvelopeReportStatus.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestLineItemReport()`

```php
requestLineItemReport($envelope_report_request): \criteo\api\retailmedia\v2021_10\Model\EnvelopeReportStatus
```



Request a line item report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_report_request = new \criteo\api\retailmedia\v2021_10\Model\EnvelopeReportRequest(); // \criteo\api\retailmedia\v2021_10\Model\EnvelopeReportRequest | // Body of the request {   \"data\": {     \"type\": \"RetailMediaReportRequest\",     \"attributes\": {       \"reportType\": string, // the name of the report being requested       //only one of \"id\" or \"ids\" can be provided for a request       \"id\": string, // the line item id to select       \"ids: Array[string] // the line item ids to select       \"startDate\": string, // YYYY-MM-DD format       \"endDate\": string, // YYYY-MM-DD format       \"timeZone\": string, // examples: 'Europe/London', 'Asia/Tokyo', 'America/New_York'       // both attribution windows must be specified when one is specified       \"clickAttributionWindow\": \"7D\", \"14D\", or \"30D\"  // optional. defaults to campaign's click attribution window       \"viewAttributionWindow\": \"none\", \"1D\", \"7D\", \"14D\", \"30D\" // optional. defaults to campaign's view attribution window       \"format\": One of \"json\" (default),\"json-compact\",\"json-newline\" or \"csv\" // output format, defaults to json-compact     }   } }

try {
    $result = $apiInstance->requestLineItemReport($envelope_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->requestLineItemReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_report_request** | [**\criteo\api\retailmedia\v2021_10\Model\EnvelopeReportRequest**](../Model/EnvelopeReportRequest.md)| // Body of the request {   \&quot;data\&quot;: {     \&quot;type\&quot;: \&quot;RetailMediaReportRequest\&quot;,     \&quot;attributes\&quot;: {       \&quot;reportType\&quot;: string, // the name of the report being requested       //only one of \&quot;id\&quot; or \&quot;ids\&quot; can be provided for a request       \&quot;id\&quot;: string, // the line item id to select       \&quot;ids: Array[string] // the line item ids to select       \&quot;startDate\&quot;: string, // YYYY-MM-DD format       \&quot;endDate\&quot;: string, // YYYY-MM-DD format       \&quot;timeZone\&quot;: string, // examples: &#39;Europe/London&#39;, &#39;Asia/Tokyo&#39;, &#39;America/New_York&#39;       // both attribution windows must be specified when one is specified       \&quot;clickAttributionWindow\&quot;: \&quot;7D\&quot;, \&quot;14D\&quot;, or \&quot;30D\&quot;  // optional. defaults to campaign&#39;s click attribution window       \&quot;viewAttributionWindow\&quot;: \&quot;none\&quot;, \&quot;1D\&quot;, \&quot;7D\&quot;, \&quot;14D\&quot;, \&quot;30D\&quot; // optional. defaults to campaign&#39;s view attribution window       \&quot;format\&quot;: One of \&quot;json\&quot; (default),\&quot;json-compact\&quot;,\&quot;json-newline\&quot; or \&quot;csv\&quot; // output format, defaults to json-compact     }   } } |

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\EnvelopeReportStatus**](../Model/EnvelopeReportStatus.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
