# criteo\api\marketingsolutions\preview\OnSiteRecommendationApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1RecoPost()**](OnSiteRecommendationApi.md#apiV1RecoPost) | **POST** /preview/recommendation/search |  |


## `apiV1RecoPost()`

```php
apiV1RecoPost($on_site_reco_request): \criteo\api\marketingsolutions\preview\Model\OnSiteRecoResponse
```



Retrieves a list of products recommended for the given user. This end point can either rely on a Criteo UserId, or a list of user events to perform the recommendation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\OnSiteRecommendationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$on_site_reco_request = new \criteo\api\marketingsolutions\preview\Model\OnSiteRecoRequest(); // \criteo\api\marketingsolutions\preview\Model\OnSiteRecoRequest

try {
    $result = $apiInstance->apiV1RecoPost($on_site_reco_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnSiteRecommendationApi->apiV1RecoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_site_reco_request** | [**\criteo\api\marketingsolutions\preview\Model\OnSiteRecoRequest**](../Model/OnSiteRecoRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\OnSiteRecoResponse**](../Model/OnSiteRecoResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
