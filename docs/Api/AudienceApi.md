# criteo\api\marketingsolutions\v2023_07\AudienceApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateAudienceSegments()**](AudienceApi.md#bulkCreateAudienceSegments) | **POST** /2023-07/marketing-solutions/audience-segments/create |  |
| [**bulkCreateAudiences()**](AudienceApi.md#bulkCreateAudiences) | **POST** /2023-07/marketing-solutions/audiences/create |  |
| [**bulkDeleteAudienceSegments()**](AudienceApi.md#bulkDeleteAudienceSegments) | **POST** /2023-07/marketing-solutions/audience-segments/delete |  |
| [**bulkDeleteAudiences()**](AudienceApi.md#bulkDeleteAudiences) | **POST** /2023-07/marketing-solutions/audiences/delete |  |
| [**bulkUpdateAudienceSegments()**](AudienceApi.md#bulkUpdateAudienceSegments) | **PATCH** /2023-07/marketing-solutions/audience-segments |  |
| [**bulkUpdateAudiences()**](AudienceApi.md#bulkUpdateAudiences) | **PATCH** /2023-07/marketing-solutions/audiences |  |
| [**computeAudienceSegmentsSizes()**](AudienceApi.md#computeAudienceSegmentsSizes) | **POST** /2023-07/marketing-solutions/audience-segments/compute-sizes |  |
| [**computeAudiencesSizes()**](AudienceApi.md#computeAudiencesSizes) | **POST** /2023-07/marketing-solutions/audiences/compute-sizes |  |
| [**createAudience()**](AudienceApi.md#createAudience) | **POST** /2023-07/audiences |  |
| [**deleteIdentifiers()**](AudienceApi.md#deleteIdentifiers) | **DELETE** /2023-07/audiences/{audience-id}/contactlist |  |
| [**estimateAudienceSegmentSize()**](AudienceApi.md#estimateAudienceSegmentSize) | **POST** /2023-07/marketing-solutions/audience-segments/estimate-size |  |
| [**estimateAudienceSize()**](AudienceApi.md#estimateAudienceSize) | **POST** /2023-07/marketing-solutions/audiences/estimate-size |  |
| [**getAudienceSegmentContactListStatistics()**](AudienceApi.md#getAudienceSegmentContactListStatistics) | **GET** /2023-07/marketing-solutions/audience-segments/{audience-segment-id}/contact-list |  |
| [**getAudienceSegmentsInMarketBrands()**](AudienceApi.md#getAudienceSegmentsInMarketBrands) | **GET** /2023-07/marketing-solutions/audience-segments/in-market-brands |  |
| [**getAudienceSegmentsInMarketInterests()**](AudienceApi.md#getAudienceSegmentsInMarketInterests) | **GET** /2023-07/marketing-solutions/audience-segments/in-market-interests |  |
| [**getAudiences()**](AudienceApi.md#getAudiences) | **GET** /2023-07/audiences |  |
| [**modifyAudience()**](AudienceApi.md#modifyAudience) | **PATCH** /2023-07/audiences/{audience-id} |  |
| [**modifyAudienceUsers()**](AudienceApi.md#modifyAudienceUsers) | **PATCH** /2023-07/audiences/{audience-id}/contactlist |  |
| [**removeAudience()**](AudienceApi.md#removeAudience) | **DELETE** /2023-07/audiences/{audience-id} |  |
| [**searchAudienceSegments()**](AudienceApi.md#searchAudienceSegments) | **POST** /2023-07/marketing-solutions/audience-segments/search |  |
| [**searchAudiences()**](AudienceApi.md#searchAudiences) | **POST** /2023-07/marketing-solutions/audiences/search |  |


## `bulkCreateAudienceSegments()`

```php
bulkCreateAudienceSegments($audience_segment_bulk_create_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentEntityV1ListResponse
```



Creates all segments with a valid configuration, and returns their IDs. For those that cannot be created, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_bulk_create_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentBulkCreateInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentBulkCreateInputV1 | Segment creation parameter

try {
    $result = $apiInstance->bulkCreateAudienceSegments($audience_segment_bulk_create_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkCreateAudienceSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_bulk_create_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentBulkCreateInputV1**](../Model/AudienceSegmentBulkCreateInputV1.md)| Segment creation parameter | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentEntityV1ListResponse**](../Model/AudienceSegmentEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkCreateAudiences()`

```php
bulkCreateAudiences($audience_bulk_create_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceEntityV1ListResponse
```



Creates all audiences with a valid configuration, and returns their IDs. For those that cannot be created, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_bulk_create_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceBulkCreateInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceBulkCreateInputV1 | 

try {
    $result = $apiInstance->bulkCreateAudiences($audience_bulk_create_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkCreateAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_bulk_create_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceBulkCreateInputV1**](../Model/AudienceBulkCreateInputV1.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceEntityV1ListResponse**](../Model/AudienceEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteAudienceSegments()`

```php
bulkDeleteAudienceSegments($audience_segment_bulk_delete_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentIdEntityV1ListResponse
```



Delete the segments associated to the given audience IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_bulk_delete_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentBulkDeleteInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentBulkDeleteInputV1 | Segment delete request.

try {
    $result = $apiInstance->bulkDeleteAudienceSegments($audience_segment_bulk_delete_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkDeleteAudienceSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_bulk_delete_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentBulkDeleteInputV1**](../Model/AudienceSegmentBulkDeleteInputV1.md)| Segment delete request. | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentIdEntityV1ListResponse**](../Model/AudienceSegmentIdEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteAudiences()`

```php
bulkDeleteAudiences($audience_bulk_delete_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceIdEntityV1ListResponse
```



Deletes the audiences associated to the given audience IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_bulk_delete_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceBulkDeleteInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceBulkDeleteInputV1 | 

try {
    $result = $apiInstance->bulkDeleteAudiences($audience_bulk_delete_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkDeleteAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_bulk_delete_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceBulkDeleteInputV1**](../Model/AudienceBulkDeleteInputV1.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceIdEntityV1ListResponse**](../Model/AudienceIdEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAudienceSegments()`

```php
bulkUpdateAudienceSegments($audience_segment_bulk_update_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentEntityV1ListResponse
```



Updates the properties of all segments with a valid configuration, and returns their IDs. For those that cannot be updated, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_bulk_update_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentBulkUpdateInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentBulkUpdateInputV1 | Segment Update request

try {
    $result = $apiInstance->bulkUpdateAudienceSegments($audience_segment_bulk_update_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkUpdateAudienceSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_bulk_update_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentBulkUpdateInputV1**](../Model/AudienceSegmentBulkUpdateInputV1.md)| Segment Update request | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentEntityV1ListResponse**](../Model/AudienceSegmentEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAudiences()`

```php
bulkUpdateAudiences($audience_bulk_update_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceEntityV1ListResponse
```



Updates the properties of all audiences with a valid configuration, and returns their IDs. For those that cannot be updated, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_bulk_update_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceBulkUpdateInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceBulkUpdateInputV1 | 

try {
    $result = $apiInstance->bulkUpdateAudiences($audience_bulk_update_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkUpdateAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_bulk_update_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceBulkUpdateInputV1**](../Model/AudienceBulkUpdateInputV1.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceEntityV1ListResponse**](../Model/AudienceEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `computeAudienceSegmentsSizes()`

```php
computeAudienceSegmentsSizes($audience_segment_compute_sizes_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentSizeEntityV1ListResponse
```



Gets the size of all segments. An error is returned for those whose size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_compute_sizes_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentComputeSizesInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentComputeSizesInputV1 | 

try {
    $result = $apiInstance->computeAudienceSegmentsSizes($audience_segment_compute_sizes_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->computeAudienceSegmentsSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_compute_sizes_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentComputeSizesInputV1**](../Model/AudienceSegmentComputeSizesInputV1.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentSizeEntityV1ListResponse**](../Model/AudienceSegmentSizeEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `computeAudiencesSizes()`

```php
computeAudiencesSizes($audience_compute_sizes_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceSizeEntityV1ListResponse
```



Gets the size of all audiences. An error is returned for those whose size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_compute_sizes_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceComputeSizesInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceComputeSizesInputV1 | 

try {
    $result = $apiInstance->computeAudiencesSizes($audience_compute_sizes_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->computeAudiencesSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_compute_sizes_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceComputeSizesInputV1**](../Model/AudienceComputeSizesInputV1.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSizeEntityV1ListResponse**](../Model/AudienceSizeEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAudience()`

```php
createAudience($new_audience_request): \criteo\api\marketingsolutions\v2023_07\Model\NewAudienceResponse
```



Create an Audience for an Advertiser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_audience_request = new \criteo\api\marketingsolutions\v2023_07\Model\NewAudienceRequest(); // \criteo\api\marketingsolutions\v2023_07\Model\NewAudienceRequest

try {
    $result = $apiInstance->createAudience($new_audience_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->createAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_audience_request** | [**\criteo\api\marketingsolutions\v2023_07\Model\NewAudienceRequest**](../Model/NewAudienceRequest.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\NewAudienceResponse**](../Model/NewAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIdentifiers()`

```php
deleteIdentifiers($audience_id): \criteo\api\marketingsolutions\v2023_07\Model\DeleteAudienceContactListResponse
```



Delete all identifiers from a contact list audience-segment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string | The id of the audience to amend

try {
    $result = $apiInstance->deleteIdentifiers($audience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->deleteIdentifiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_id** | **string**| The id of the audience to amend | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\DeleteAudienceContactListResponse**](../Model/DeleteAudienceContactListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateAudienceSegmentSize()`

```php
estimateAudienceSegmentSize($audience_segment_estimate_size_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentSizeEstimationV1Response
```



Gets the size estimation of a non existent segment. An error is returned when size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_estimate_size_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentEstimateSizeInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentEstimateSizeInputV1 | 

try {
    $result = $apiInstance->estimateAudienceSegmentSize($audience_segment_estimate_size_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->estimateAudienceSegmentSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_estimate_size_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentEstimateSizeInputV1**](../Model/AudienceSegmentEstimateSizeInputV1.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentSizeEstimationV1Response**](../Model/AudienceSegmentSizeEstimationV1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateAudienceSize()`

```php
estimateAudienceSize($audience_estimate_size_input_v1): \criteo\api\marketingsolutions\v2023_07\Model\AudienceSizeEstimationV1Response
```



Gets the size estimation of a non existent audience. An error is returned when size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_estimate_size_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceEstimateSizeInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceEstimateSizeInputV1 | 

try {
    $result = $apiInstance->estimateAudienceSize($audience_estimate_size_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->estimateAudienceSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_estimate_size_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceEstimateSizeInputV1**](../Model/AudienceEstimateSizeInputV1.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSizeEstimationV1Response**](../Model/AudienceSizeEstimationV1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudienceSegmentContactListStatistics()`

```php
getAudienceSegmentContactListStatistics($audience_segment_id): \criteo\api\marketingsolutions\v2023_07\Model\ContactListStatisticsEntityV1Response
```



Returns the statistics of a contact list segment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_id = 56; // int | The segment ID.

try {
    $result = $apiInstance->getAudienceSegmentContactListStatistics($audience_segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudienceSegmentContactListStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_id** | **int**| The segment ID. | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\ContactListStatisticsEntityV1Response**](../Model/ContactListStatisticsEntityV1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudienceSegmentsInMarketBrands()`

```php
getAudienceSegmentsInMarketBrands($advertiser_id, $country): \criteo\api\marketingsolutions\v2023_07\Model\InMarketAudienceSegmentBrandEntityV1ListResponse
```



Returns a list with all available in-market brands that can be used to define an in-market segment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser ID.
$country = 'country_example'; // string | The ISO 3166-1 alpha-2 country code.

try {
    $result = $apiInstance->getAudienceSegmentsInMarketBrands($advertiser_id, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudienceSegmentsInMarketBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser ID. | |
| **country** | **string**| The ISO 3166-1 alpha-2 country code. | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\InMarketAudienceSegmentBrandEntityV1ListResponse**](../Model/InMarketAudienceSegmentBrandEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudienceSegmentsInMarketInterests()`

```php
getAudienceSegmentsInMarketInterests($advertiser_id, $country): \criteo\api\marketingsolutions\v2023_07\Model\InMarketAudienceSegmentInterestEntityV1ListResponse
```



Returns a list with all available in-market interests that can be used to define an in-market segment. These in-market interests correspond to the Google product taxonomy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser ID.
$country = 'country_example'; // string | The ISO 3166-1 alpha-2 country code.

try {
    $result = $apiInstance->getAudienceSegmentsInMarketInterests($advertiser_id, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudienceSegmentsInMarketInterests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser ID. | |
| **country** | **string**| The ISO 3166-1 alpha-2 country code. | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\InMarketAudienceSegmentInterestEntityV1ListResponse**](../Model/InMarketAudienceSegmentInterestEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudiences()`

```php
getAudiences($advertiser_id): \criteo\api\marketingsolutions\v2023_07\Model\GetAudiencesResponse
```



Get a list of all the audiences for the user or for the given advertiser_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser id to get all the audiences for. Mandatory for internal users. For external users,            if you don't provide it, we will take into account the advertisers from your portfolio

try {
    $result = $apiInstance->getAudiences($advertiser_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The advertiser id to get all the audiences for. Mandatory for internal users. For external users,            if you don&#39;t provide it, we will take into account the advertisers from your portfolio | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\GetAudiencesResponse**](../Model/GetAudiencesResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyAudience()`

```php
modifyAudience($audience_id, $replace_audience_request): \criteo\api\marketingsolutions\v2023_07\Model\ReplaceAudienceResponse
```



Update user audience specified by the audience id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string | The id of the audience to amend
$replace_audience_request = new \criteo\api\marketingsolutions\v2023_07\Model\ReplaceAudienceRequest(); // \criteo\api\marketingsolutions\v2023_07\Model\ReplaceAudienceRequest

try {
    $result = $apiInstance->modifyAudience($audience_id, $replace_audience_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->modifyAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_id** | **string**| The id of the audience to amend | |
| **replace_audience_request** | [**\criteo\api\marketingsolutions\v2023_07\Model\ReplaceAudienceRequest**](../Model/ReplaceAudienceRequest.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\ReplaceAudienceResponse**](../Model/ReplaceAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyAudienceUsers()`

```php
modifyAudienceUsers($audience_id, $contactlist_amendment_request): \criteo\api\marketingsolutions\v2023_07\Model\ModifyAudienceResponse
```



Add/remove users to or from a contact list audience-segment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string | The id of the audience to amend
$contactlist_amendment_request = new \criteo\api\marketingsolutions\v2023_07\Model\ContactlistAmendmentRequest(); // \criteo\api\marketingsolutions\v2023_07\Model\ContactlistAmendmentRequest

try {
    $result = $apiInstance->modifyAudienceUsers($audience_id, $contactlist_amendment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->modifyAudienceUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_id** | **string**| The id of the audience to amend | |
| **contactlist_amendment_request** | [**\criteo\api\marketingsolutions\v2023_07\Model\ContactlistAmendmentRequest**](../Model/ContactlistAmendmentRequest.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\ModifyAudienceResponse**](../Model/ModifyAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAudience()`

```php
removeAudience($audience_id): \criteo\api\marketingsolutions\v2023_07\Model\DeleteAudienceResponse
```



Delete an audience by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string | The id of the audience to amend

try {
    $result = $apiInstance->removeAudience($audience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->removeAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_id** | **string**| The id of the audience to amend | |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\DeleteAudienceResponse**](../Model/DeleteAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAudienceSegments()`

```php
searchAudienceSegments($audience_segment_search_input_v1, $limit, $offset): \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentEntityV1AudienceSegmentSearchMetadataV1ListResponse
```



Returns a list of segments that match the provided filters. If present, the filters are AND'ed together when applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_search_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentSearchInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentSearchInputV1 | Segment search filters.
$limit = 50; // int | The number of elements to be returned. The default is 50 and the maximum is 100.
$offset = 0; // int | The (zero-based) offset into the collection. The default is 0.

try {
    $result = $apiInstance->searchAudienceSegments($audience_segment_search_input_v1, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->searchAudienceSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_segment_search_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentSearchInputV1**](../Model/AudienceSegmentSearchInputV1.md)| Segment search filters. | |
| **limit** | **int**| The number of elements to be returned. The default is 50 and the maximum is 100. | [optional] [default to 50] |
| **offset** | **int**| The (zero-based) offset into the collection. The default is 0. | [optional] [default to 0] |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSegmentEntityV1AudienceSegmentSearchMetadataV1ListResponse**](../Model/AudienceSegmentEntityV1AudienceSegmentSearchMetadataV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAudiences()`

```php
searchAudiences($audience_search_input_v1, $limit, $offset): \criteo\api\marketingsolutions\v2023_07\Model\AudienceEntityV1AudienceSearchMetadataV1ListResponse
```



Returns a list of audiences that match the provided filters. If present, the filters are AND'ed together when applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_search_input_v1 = new \criteo\api\marketingsolutions\v2023_07\Model\AudienceSearchInputV1(); // \criteo\api\marketingsolutions\v2023_07\Model\AudienceSearchInputV1 | Audience search filters.
$limit = 50; // int | The number of elements to be returned. The default is 50 and the maximum is 100.
$offset = 0; // int | The (zero-based) offset into the collection. The default is 0.

try {
    $result = $apiInstance->searchAudiences($audience_search_input_v1, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->searchAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_search_input_v1** | [**\criteo\api\marketingsolutions\v2023_07\Model\AudienceSearchInputV1**](../Model/AudienceSearchInputV1.md)| Audience search filters. | |
| **limit** | **int**| The number of elements to be returned. The default is 50 and the maximum is 100. | [optional] [default to 50] |
| **offset** | **int**| The (zero-based) offset into the collection. The default is 0. | [optional] [default to 0] |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\AudienceEntityV1AudienceSearchMetadataV1ListResponse**](../Model/AudienceEntityV1AudienceSearchMetadataV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
