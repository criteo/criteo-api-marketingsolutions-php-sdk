# criteo\api\marketingsolutions\preview\OAuthApi

All URIs are relative to https://api.criteo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientCredentials()**](OAuthApi.md#clientCredentials) | **POST** /oauth2/token | Creates a token when the supplied client credentials are valid


## `clientCredentials()`

```php
clientCredentials(): \criteo\api\marketingsolutions\preview\Model\AccessTokenModel
```

Creates a token when the supplied client credentials are valid

Creates a token when the supplied client credentials are valid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clientCredentials();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->clientCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AccessTokenModel**](../Model/AccessTokenModel.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
