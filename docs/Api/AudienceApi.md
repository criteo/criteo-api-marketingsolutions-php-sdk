# criteo\api\marketingsolutions\preview\AudienceApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateAudienceSegments()**](AudienceApi.md#bulkCreateAudienceSegments) | **POST** /preview/marketing-solutions/audience-segments/create | 
[**bulkCreateAudiences()**](AudienceApi.md#bulkCreateAudiences) | **POST** /preview/marketing-solutions/audiences/create | 
[**bulkDeleteAudienceSegment()**](AudienceApi.md#bulkDeleteAudienceSegment) | **POST** /preview/marketing-solutions/audience-segments/delete | 
[**bulkDeleteAudiences()**](AudienceApi.md#bulkDeleteAudiences) | **POST** /preview/marketing-solutions/audiences/delete | 
[**bulkUpdateAudienceSegments()**](AudienceApi.md#bulkUpdateAudienceSegments) | **PATCH** /preview/marketing-solutions/audience-segments | 
[**bulkUpdateAudiences()**](AudienceApi.md#bulkUpdateAudiences) | **PATCH** /preview/marketing-solutions/audiences | 
[**computeAudienceSegmentsSizes()**](AudienceApi.md#computeAudienceSegmentsSizes) | **POST** /preview/marketing-solutions/audience-segments/compute-sizes | 
[**computeAudiencesSizes()**](AudienceApi.md#computeAudiencesSizes) | **POST** /preview/marketing-solutions/audiences/compute-sizes | 
[**createAudience()**](AudienceApi.md#createAudience) | **POST** /preview/audiences | 
[**deleteIdentifiers()**](AudienceApi.md#deleteIdentifiers) | **DELETE** /preview/audiences/{audience-id}/contactlist | 
[**estimateAudienceSegmentSize()**](AudienceApi.md#estimateAudienceSegmentSize) | **POST** /preview/marketing-solutions/audience-segments/estimate-size | 
[**estimateAudienceSize()**](AudienceApi.md#estimateAudienceSize) | **POST** /preview/marketing-solutions/audiences/estimate-size | 
[**getAudiences()**](AudienceApi.md#getAudiences) | **GET** /preview/audiences | 
[**getCommerceBrands()**](AudienceApi.md#getCommerceBrands) | **GET** /preview/marketing-solutions/audience-segments/commerce-brands | 
[**getCommerceInterests()**](AudienceApi.md#getCommerceInterests) | **GET** /preview/marketing-solutions/audience-segments/commerce-interests | 
[**getContactListStatistics()**](AudienceApi.md#getContactListStatistics) | **GET** /preview/marketing-solutions/audience-segments/{audience-segment-id}/contact-list | 
[**modifyAudience()**](AudienceApi.md#modifyAudience) | **PATCH** /preview/audiences/{audience-id} | 
[**modifyAudienceUsers()**](AudienceApi.md#modifyAudienceUsers) | **PATCH** /preview/audiences/{audience-id}/contactlist | 
[**modifyAudienceUsersWithAttributes()**](AudienceApi.md#modifyAudienceUsersWithAttributes) | **PATCH** /preview/audiences/{audience-id}/contactlist-attributes | 
[**removeAudience()**](AudienceApi.md#removeAudience) | **DELETE** /preview/audiences/{audience-id} | 
[**searchAudienceSegments()**](AudienceApi.md#searchAudienceSegments) | **POST** /preview/marketing-solutions/audience-segments/search | 
[**searchAudiences()**](AudienceApi.md#searchAudiences) | **POST** /preview/marketing-solutions/audiences/search | 


## `bulkCreateAudienceSegments()`

```php
bulkCreateAudienceSegments($audience_segment_bulk_create_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceSegmentEntityV1ListResponse
```



Creates all segments with a valid configuration, and returns their IDs. For those that cannot be created, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_bulk_create_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceSegmentBulkCreateInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceSegmentBulkCreateInputV1 | Segment creation parameter

try {
    $result = $apiInstance->bulkCreateAudienceSegments($audience_segment_bulk_create_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkCreateAudienceSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_segment_bulk_create_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentBulkCreateInputV1**](../Model/AudienceSegmentBulkCreateInputV1.md)| Segment creation parameter | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentEntityV1ListResponse**](../Model/AudienceSegmentEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkCreateAudiences()`

```php
bulkCreateAudiences($audience_bulk_create_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceEntityV1ListResponse
```



Creates all audiences with a valid configuration, and returns their IDs. For those that cannot be created, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_bulk_create_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceBulkCreateInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceBulkCreateInputV1

try {
    $result = $apiInstance->bulkCreateAudiences($audience_bulk_create_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkCreateAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_bulk_create_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceBulkCreateInputV1**](../Model/AudienceBulkCreateInputV1.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceEntityV1ListResponse**](../Model/AudienceEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteAudienceSegment()`

```php
bulkDeleteAudienceSegment($audience_segment_bulk_delete_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceSegmentIdEntityV1ListResponse
```



Delete the segments associated to the given audience IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_bulk_delete_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceSegmentBulkDeleteInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceSegmentBulkDeleteInputV1 | Segment delete request.

try {
    $result = $apiInstance->bulkDeleteAudienceSegment($audience_segment_bulk_delete_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkDeleteAudienceSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_segment_bulk_delete_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentBulkDeleteInputV1**](../Model/AudienceSegmentBulkDeleteInputV1.md)| Segment delete request. | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentIdEntityV1ListResponse**](../Model/AudienceSegmentIdEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteAudiences()`

```php
bulkDeleteAudiences($audience_bulk_delete_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceIdEntityV1ListResponse
```



Deletes the audiences associated to the given audience IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_bulk_delete_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceBulkDeleteInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceBulkDeleteInputV1

try {
    $result = $apiInstance->bulkDeleteAudiences($audience_bulk_delete_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkDeleteAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_bulk_delete_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceBulkDeleteInputV1**](../Model/AudienceBulkDeleteInputV1.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceIdEntityV1ListResponse**](../Model/AudienceIdEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAudienceSegments()`

```php
bulkUpdateAudienceSegments($audience_segment_bulk_update_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceSegmentEntityV1ListResponse
```



Updates the properties of all segments with a valid configuration, and returns their IDs. For those that cannot be updated, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_bulk_update_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceSegmentBulkUpdateInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceSegmentBulkUpdateInputV1 | Segment Update request

try {
    $result = $apiInstance->bulkUpdateAudienceSegments($audience_segment_bulk_update_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkUpdateAudienceSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_segment_bulk_update_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentBulkUpdateInputV1**](../Model/AudienceSegmentBulkUpdateInputV1.md)| Segment Update request | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentEntityV1ListResponse**](../Model/AudienceSegmentEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAudiences()`

```php
bulkUpdateAudiences($audience_bulk_update_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceEntityV1ListResponse
```



Updates the properties of all audiences with a valid configuration, and returns their IDs. For those that cannot be updated, one or multiple errors are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_bulk_update_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceBulkUpdateInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceBulkUpdateInputV1

try {
    $result = $apiInstance->bulkUpdateAudiences($audience_bulk_update_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->bulkUpdateAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_bulk_update_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceBulkUpdateInputV1**](../Model/AudienceBulkUpdateInputV1.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceEntityV1ListResponse**](../Model/AudienceEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `computeAudienceSegmentsSizes()`

```php
computeAudienceSegmentsSizes($audience_segment_compute_sizes_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceSegmentSizeEntityV1ListResponse
```



Gets the size of all segments. An error is returned for those whose size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_compute_sizes_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceSegmentComputeSizesInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceSegmentComputeSizesInputV1

try {
    $result = $apiInstance->computeAudienceSegmentsSizes($audience_segment_compute_sizes_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->computeAudienceSegmentsSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_segment_compute_sizes_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentComputeSizesInputV1**](../Model/AudienceSegmentComputeSizesInputV1.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentSizeEntityV1ListResponse**](../Model/AudienceSegmentSizeEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `computeAudiencesSizes()`

```php
computeAudiencesSizes($audience_compute_sizes_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceSizeEntityV1ListResponse
```



Gets the size of all audiences. An error is returned for those whose size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_compute_sizes_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceComputeSizesInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceComputeSizesInputV1

try {
    $result = $apiInstance->computeAudiencesSizes($audience_compute_sizes_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->computeAudiencesSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_compute_sizes_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceComputeSizesInputV1**](../Model/AudienceComputeSizesInputV1.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceSizeEntityV1ListResponse**](../Model/AudienceSizeEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAudience()`

```php
createAudience($new_audience_request): \criteo\api\marketingsolutions\preview\Model\NewAudienceResponse
```



Create an Audience for an Advertiser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_audience_request = new \criteo\api\marketingsolutions\preview\Model\NewAudienceRequest(); // \criteo\api\marketingsolutions\preview\Model\NewAudienceRequest

try {
    $result = $apiInstance->createAudience($new_audience_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->createAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_audience_request** | [**\criteo\api\marketingsolutions\preview\Model\NewAudienceRequest**](../Model/NewAudienceRequest.md)|  |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\NewAudienceResponse**](../Model/NewAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIdentifiers()`

```php
deleteIdentifiers($audience_id): \criteo\api\marketingsolutions\preview\Model\DeleteAudienceContactListResponse
```



delete all identifiers from an Audience

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_id** | **string**| The id of the audience to amend |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\DeleteAudienceContactListResponse**](../Model/DeleteAudienceContactListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateAudienceSegmentSize()`

```php
estimateAudienceSegmentSize($audience_segment_estimate_size_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceSegmentSizeEstimationV1Response
```



Gets the size estimation of a non existent segment . An error is returned when size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_estimate_size_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceSegmentEstimateSizeInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceSegmentEstimateSizeInputV1

try {
    $result = $apiInstance->estimateAudienceSegmentSize($audience_segment_estimate_size_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->estimateAudienceSegmentSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_segment_estimate_size_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentEstimateSizeInputV1**](../Model/AudienceSegmentEstimateSizeInputV1.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentSizeEstimationV1Response**](../Model/AudienceSegmentSizeEstimationV1Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateAudienceSize()`

```php
estimateAudienceSize($audience_estimate_size_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceSizeEstimationV1Response
```



Gets the size estimation of a non existent audience. An error is returned when size calculation is not supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_estimate_size_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceEstimateSizeInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceEstimateSizeInputV1

try {
    $result = $apiInstance->estimateAudienceSize($audience_estimate_size_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->estimateAudienceSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_estimate_size_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceEstimateSizeInputV1**](../Model/AudienceEstimateSizeInputV1.md)|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceSizeEstimationV1Response**](../Model/AudienceSizeEstimationV1Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudiences()`

```php
getAudiences($advertiser_id): \criteo\api\marketingsolutions\preview\Model\GetAudiencesResponse
```



Get a list of all the audiences for the user or for the given advertiser_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| The advertiser id to get all the audiences for. Mandatory for internal users. For external users,            if you don&#39;t provide it, we will take into account the advertisers from your portfolio | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\GetAudiencesResponse**](../Model/GetAudiencesResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerceBrands()`

```php
getCommerceBrands($advertiser_id, $country): \criteo\api\marketingsolutions\preview\Model\CommerceAudienceSegmentBrandEntityV1ListResponse
```



Returns a list with all available commerce brands that can be used to define a commerce segment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser ID.
$country = 'country_example'; // string | The ISO 3166-1 alpha-2 country code.

try {
    $result = $apiInstance->getCommerceBrands($advertiser_id, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getCommerceBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| The advertiser ID. |
 **country** | **string**| The ISO 3166-1 alpha-2 country code. |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CommerceAudienceSegmentBrandEntityV1ListResponse**](../Model/CommerceAudienceSegmentBrandEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommerceInterests()`

```php
getCommerceInterests($advertiser_id, $country): \criteo\api\marketingsolutions\preview\Model\CommerceAudienceSegmentInterestEntityV1ListResponse
```



Returns a list with all available commerce interests that can be used to define a commerce segment. These commerce interests correspond to the Google product taxonomy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The advertiser ID.
$country = 'country_example'; // string | The ISO 3166-1 alpha-2 country code.

try {
    $result = $apiInstance->getCommerceInterests($advertiser_id, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getCommerceInterests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| The advertiser ID. |
 **country** | **string**| The ISO 3166-1 alpha-2 country code. |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CommerceAudienceSegmentInterestEntityV1ListResponse**](../Model/CommerceAudienceSegmentInterestEntityV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactListStatistics()`

```php
getContactListStatistics($audience_segment_id): \criteo\api\marketingsolutions\preview\Model\ContactListStatisticsEntityV1Response
```



Returns the statistics of a contact list segment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_segment_id = 56; // int | The segment ID.

try {
    $result = $apiInstance->getContactListStatistics($audience_segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->getContactListStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_segment_id** | **int**| The segment ID. |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ContactListStatisticsEntityV1Response**](../Model/ContactListStatisticsEntityV1Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyAudience()`

```php
modifyAudience($audience_id, $replace_audience_request): \criteo\api\marketingsolutions\preview\Model\ReplaceAudienceResponse
```



Update user audience specified by the audience id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string | The id of the audience to amend
$replace_audience_request = new \criteo\api\marketingsolutions\preview\Model\ReplaceAudienceRequest(); // \criteo\api\marketingsolutions\preview\Model\ReplaceAudienceRequest

try {
    $result = $apiInstance->modifyAudience($audience_id, $replace_audience_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->modifyAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_id** | **string**| The id of the audience to amend |
 **replace_audience_request** | [**\criteo\api\marketingsolutions\preview\Model\ReplaceAudienceRequest**](../Model/ReplaceAudienceRequest.md)|  |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ReplaceAudienceResponse**](../Model/ReplaceAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyAudienceUsers()`

```php
modifyAudienceUsers($audience_id, $contactlist_amendment_request): \criteo\api\marketingsolutions\preview\Model\ModifyAudienceResponse
```



Add/remove users to or from an audience

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string | The id of the audience to amend
$contactlist_amendment_request = new \criteo\api\marketingsolutions\preview\Model\ContactlistAmendmentRequest(); // \criteo\api\marketingsolutions\preview\Model\ContactlistAmendmentRequest

try {
    $result = $apiInstance->modifyAudienceUsers($audience_id, $contactlist_amendment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->modifyAudienceUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_id** | **string**| The id of the audience to amend |
 **contactlist_amendment_request** | [**\criteo\api\marketingsolutions\preview\Model\ContactlistAmendmentRequest**](../Model/ContactlistAmendmentRequest.md)|  |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ModifyAudienceResponse**](../Model/ModifyAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyAudienceUsersWithAttributes()`

```php
modifyAudienceUsersWithAttributes($audience_id, $contactlist_with_attributes_amendment_request): \criteo\api\marketingsolutions\preview\Model\ModifyAudienceResponse
```



Add/remove users to or from an audience

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 56; // int | The id of the audience to amend
$contactlist_with_attributes_amendment_request = new \criteo\api\marketingsolutions\preview\Model\ContactlistWithAttributesAmendmentRequest(); // \criteo\api\marketingsolutions\preview\Model\ContactlistWithAttributesAmendmentRequest

try {
    $result = $apiInstance->modifyAudienceUsersWithAttributes($audience_id, $contactlist_with_attributes_amendment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->modifyAudienceUsersWithAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_id** | **int**| The id of the audience to amend |
 **contactlist_with_attributes_amendment_request** | [**\criteo\api\marketingsolutions\preview\Model\ContactlistWithAttributesAmendmentRequest**](../Model/ContactlistWithAttributesAmendmentRequest.md)|  |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ModifyAudienceResponse**](../Model/ModifyAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAudience()`

```php
removeAudience($audience_id): \criteo\api\marketingsolutions\preview\Model\DeleteAudienceResponse
```



Delete an audience by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audience_id** | **string**| The id of the audience to amend |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\DeleteAudienceResponse**](../Model/DeleteAudienceResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAudienceSegments()`

```php
searchAudienceSegments($limit, $offset, $audience_segment_search_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceSegmentEntityV1AudienceSegmentSearchMetadataV1ListResponse
```



Returns a list of segments that match the provided filters. If present, the filters are AND'ed together when applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of elements to be returned. The default is 50 and the maximum is 100.
$offset = 56; // int | The (zero-based) offset into the collection. The default is 0.
$audience_segment_search_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceSegmentSearchInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceSegmentSearchInputV1 | Segment search filters.

try {
    $result = $apiInstance->searchAudienceSegments($limit, $offset, $audience_segment_search_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->searchAudienceSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of elements to be returned. The default is 50 and the maximum is 100. | [optional]
 **offset** | **int**| The (zero-based) offset into the collection. The default is 0. | [optional]
 **audience_segment_search_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentSearchInputV1**](../Model/AudienceSegmentSearchInputV1.md)| Segment search filters. | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceSegmentEntityV1AudienceSegmentSearchMetadataV1ListResponse**](../Model/AudienceSegmentEntityV1AudienceSegmentSearchMetadataV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAudiences()`

```php
searchAudiences($limit, $offset, $audience_search_input_v1): \criteo\api\marketingsolutions\preview\Model\AudienceEntityV1AudienceSearchMetadataV1ListResponse
```



Returns a list of audiences that match the provided filters. If present, the filters are AND'ed together when applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AudienceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | The number of elements to be returned. The default is 50 and the maximum is 100.
$offset = 56; // int | The (zero-based) offset into the collection. The default is 0.
$audience_search_input_v1 = new \criteo\api\marketingsolutions\preview\Model\AudienceSearchInputV1(); // \criteo\api\marketingsolutions\preview\Model\AudienceSearchInputV1 | Audience search filters.

try {
    $result = $apiInstance->searchAudiences($limit, $offset, $audience_search_input_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudienceApi->searchAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of elements to be returned. The default is 50 and the maximum is 100. | [optional]
 **offset** | **int**| The (zero-based) offset into the collection. The default is 0. | [optional]
 **audience_search_input_v1** | [**\criteo\api\marketingsolutions\preview\Model\AudienceSearchInputV1**](../Model/AudienceSearchInputV1.md)| Audience search filters. | [optional]

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AudienceEntityV1AudienceSearchMetadataV1ListResponse**](../Model/AudienceEntityV1AudienceSearchMetadataV1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
