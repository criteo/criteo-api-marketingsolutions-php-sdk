# criteo\api\marketingsolutions\v2021_10\OAuthApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getToken()**](OAuthApi.md#getToken) | **POST** /oauth2/token | Creates a token based either on supplied client credentials or on single use authorization code


## `getToken()`

```php
getToken($grant_type, $client_id, $client_secret, $redirect_uri, $code, $refresh_token): \criteo\api\marketingsolutions\v2021_10\Model\AccessTokenModel
```

Creates a token based either on supplied client credentials or on single use authorization code

Creates a token when the supplied client credentials are valid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2021_10\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2021_10\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = 'grant_type_example'; // string
$client_id = 'client_id_example'; // string
$client_secret = 'client_secret_example'; // string
$redirect_uri = 'redirect_uri_example'; // string
$code = 'code_example'; // string
$refresh_token = 'refresh_token_example'; // string

try {
    $result = $apiInstance->getToken($grant_type, $client_id, $client_secret, $redirect_uri, $code, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->getToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  |
 **client_id** | **string**|  |
 **client_secret** | **string**|  |
 **redirect_uri** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **refresh_token** | **string**|  | [optional]

### Return type

[**\criteo\api\marketingsolutions\v2021_10\Model\AccessTokenModel**](../Model/AccessTokenModel.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
