# criteo\api\marketingsolutions\preview\AudienceApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAudience()**](AudienceApi.md#createAudience) | **POST** /2021-04/audiences | 
[**deleteIdentifiers()**](AudienceApi.md#deleteIdentifiers) | **DELETE** /2021-04/audiences/{audience-id}/contactlist | 
[**getAudiences()**](AudienceApi.md#getAudiences) | **GET** /2021-04/audiences | 
[**modifyAudience()**](AudienceApi.md#modifyAudience) | **PATCH** /2021-04/audiences/{audience-id} | 
[**modifyAudienceUsers()**](AudienceApi.md#modifyAudienceUsers) | **PATCH** /2021-04/audiences/{audience-id}/contactlist | 
[**removeAudience()**](AudienceApi.md#removeAudience) | **DELETE** /2021-04/audiences/{audience-id} | 


## `createAudience()`

```php
createAudience($new_audience_request): \criteo\api\marketingsolutions\preview\Model\NewAudienceResponse
```



Create an Audience for an Advertiser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
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

[Authorization](../../README.md#Authorization)

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


// Configure OAuth2 access token for authorization: Authorization
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

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


// Configure OAuth2 access token for authorization: Authorization
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

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


// Configure OAuth2 access token for authorization: Authorization
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

[Authorization](../../README.md#Authorization)

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


// Configure OAuth2 access token for authorization: Authorization
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

[Authorization](../../README.md#Authorization)

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


// Configure OAuth2 access token for authorization: Authorization
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

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)