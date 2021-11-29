# criteo\api\retailmedia\v2021_10\OAuthApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createToken()**](OAuthApi.md#createToken) | **POST** /oauth2/token | 


## `createToken()`

```php
createToken($client_id, $client_secret, $grant_type): \criteo\api\retailmedia\v2021_10\Model\JwtModel
```



Creates a token when the supplied client credentials are valid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\retailmedia\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\retailmedia\v2021_10\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string | API Client-Id or Username
$client_secret = 'client_secret_example'; // string | API Client secret or password
$grant_type = 'client_credentials'; // string | Other grant types are not available

try {
    $result = $apiInstance->createToken($client_id, $client_secret, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->createToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| API Client-Id or Username | [optional]
 **client_secret** | **string**| API Client secret or password | [optional]
 **grant_type** | **string**| Other grant types are not available | [optional] [default to &#39;client_credentials&#39;]

### Return type

[**\criteo\api\retailmedia\v2021_10\Model\JwtModel**](../Model/JwtModel.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
