# criteo\api\marketingsolutions\preview\AdvertiserApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPortfolioGet()**](AdvertiserApi.md#apiPortfolioGet) | **GET** /preview/advertisers/me |  |
| [**createAdvertiser()**](AdvertiserApi.md#createAdvertiser) | **POST** /preview/advertisers |  |
| [**getDatasetList()**](AdvertiserApi.md#getDatasetList) | **GET** /preview/advertisers/{advertiser-id}/datasets |  |
| [**listIndustries()**](AdvertiserApi.md#listIndustries) | **GET** /preview/industries |  |


## `apiPortfolioGet()`

```php
apiPortfolioGet(): \criteo\api\marketingsolutions\preview\Model\GetPortfolioResponse
```



Fetch the portfolio of Advertisers for this account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiPortfolioGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->apiPortfolioGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\criteo\api\marketingsolutions\preview\Model\GetPortfolioResponse**](../Model/GetPortfolioResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdvertiser()`

```php
createAdvertiser($advertiser_creation_request): \criteo\api\marketingsolutions\preview\Model\AdvertiserCreationResponse
```



Create a new advertiser based on provided parameters. This could take up to 30 seconds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_creation_request = new \criteo\api\marketingsolutions\preview\Model\AdvertiserCreationRequest(); // \criteo\api\marketingsolutions\preview\Model\AdvertiserCreationRequest | 

try {
    $result = $apiInstance->createAdvertiser($advertiser_creation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->createAdvertiser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_creation_request** | [**\criteo\api\marketingsolutions\preview\Model\AdvertiserCreationRequest**](../Model/AdvertiserCreationRequest.md)|  | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdvertiserCreationResponse**](../Model/AdvertiserCreationResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `text/plain`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatasetList()`

```php
getDatasetList($advertiser_id): \criteo\api\marketingsolutions\preview\Model\AdvertiserDatasetListResponse
```



Retrieves corresponding Datasets for a given Advertiser. Only those Datasets are included for which the given Advertiser is marked a primary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 'advertiser_id_example'; // string | The id of the Advertiser for which Datasets are being retrieved.

try {
    $result = $apiInstance->getDatasetList($advertiser_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->getDatasetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **string**| The id of the Advertiser for which Datasets are being retrieved. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdvertiserDatasetListResponse**](../Model/AdvertiserDatasetListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIndustries()`

```php
listIndustries(): \criteo\api\marketingsolutions\preview\Model\ListAvailableIndustriesResponse
```



Returns the list of available industries for new advertisers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listIndustries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->listIndustries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ListAvailableIndustriesResponse**](../Model/ListAvailableIndustriesResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
