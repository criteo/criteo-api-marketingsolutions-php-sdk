# criteo\api\petstore\preview\PetApi

All URIs are relative to http://localhost/api/v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPet()**](PetApi.md#addPet) | **POST** /pet | Add a new pet to the store
[**deletePet()**](PetApi.md#deletePet) | **DELETE** /pet/{petId} | Deletes a pet
[**findPetsByStatus()**](PetApi.md#findPetsByStatus) | **GET** /pet/findByStatus | Finds Pets by status
[**findPetsByTags()**](PetApi.md#findPetsByTags) | **GET** /pet/findByTags | Finds Pets by tags
[**getPetById()**](PetApi.md#getPetById) | **GET** /pet/{petId} | Find pet by ID
[**updatePet()**](PetApi.md#updatePet) | **PUT** /pet | Update an existing pet
[**updatePetWithForm()**](PetApi.md#updatePetWithForm) | **POST** /pet/{petId} | Updates a pet in the store with form data
[**uploadFile()**](PetApi.md#uploadFile) | **POST** /pet/{petId}/uploadImage | uploads an image


## `addPet()`

```php
addPet($pet): \criteo\api\petstore\preview\Model\Pet
```

Add a new pet to the store

Add a new pet to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: petstore_auth
$config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\petstore\preview\Api\PetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pet = new \criteo\api\petstore\preview\Model\Pet(); // \criteo\api\petstore\preview\Model\Pet | Create a new pet in the store

try {
    $result = $apiInstance->addPet($pet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->addPet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pet** | [**\criteo\api\petstore\preview\Model\Pet**](../Model/Pet.md)| Create a new pet in the store |

### Return type

[**\criteo\api\petstore\preview\Model\Pet**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePet()`

```php
deletePet($pet_id, $api_key)
```

Deletes a pet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: petstore_auth
$config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\petstore\preview\Api\PetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pet_id = 56; // int | Pet id to delete
$api_key = 'api_key_example'; // string

try {
    $apiInstance->deletePet($pet_id, $api_key);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->deletePet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pet_id** | **int**| Pet id to delete |
 **api_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findPetsByStatus()`

```php
findPetsByStatus($status): \criteo\api\petstore\preview\Model\Pet[]
```

Finds Pets by status

Multiple status values can be provided with comma separated strings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: petstore_auth
$config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\petstore\preview\Api\PetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'available'; // string | Status values that need to be considered for filter

try {
    $result = $apiInstance->findPetsByStatus($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->findPetsByStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status values that need to be considered for filter | [optional] [default to &#39;available&#39;]

### Return type

[**\criteo\api\petstore\preview\Model\Pet[]**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findPetsByTags()`

```php
findPetsByTags($tags): \criteo\api\petstore\preview\Model\Pet[]
```

Finds Pets by tags

Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: petstore_auth
$config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\petstore\preview\Api\PetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tags = array('tags_example'); // string[] | Tags to filter by

try {
    $result = $apiInstance->findPetsByTags($tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->findPetsByTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tags** | [**string[]**](../Model/string.md)| Tags to filter by | [optional]

### Return type

[**\criteo\api\petstore\preview\Model\Pet[]**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPetById()`

```php
getPetById($pet_id): \criteo\api\petstore\preview\Model\Pet
```

Find pet by ID

Returns a single pet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: petstore_auth
$config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\petstore\preview\Api\PetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pet_id = 56; // int | ID of pet to return

try {
    $result = $apiInstance->getPetById($pet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->getPetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pet_id** | **int**| ID of pet to return |

### Return type

[**\criteo\api\petstore\preview\Model\Pet**](../Model/Pet.md)

### Authorization

[api_key](../../README.md#api_key), [petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePet()`

```php
updatePet($pet): \criteo\api\petstore\preview\Model\Pet
```

Update an existing pet

Update an existing pet by Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: petstore_auth
$config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\petstore\preview\Api\PetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pet = new \criteo\api\petstore\preview\Model\Pet(); // \criteo\api\petstore\preview\Model\Pet | Update an existent pet in the store

try {
    $result = $apiInstance->updatePet($pet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->updatePet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pet** | [**\criteo\api\petstore\preview\Model\Pet**](../Model/Pet.md)| Update an existent pet in the store |

### Return type

[**\criteo\api\petstore\preview\Model\Pet**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePetWithForm()`

```php
updatePetWithForm($pet_id, $name, $status)
```

Updates a pet in the store with form data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: petstore_auth
$config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\petstore\preview\Api\PetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pet_id = 56; // int | ID of pet that needs to be updated
$name = 'name_example'; // string | Name of pet that needs to be updated
$status = 'status_example'; // string | Status of pet that needs to be updated

try {
    $apiInstance->updatePetWithForm($pet_id, $name, $status);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->updatePetWithForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pet_id** | **int**| ID of pet that needs to be updated |
 **name** | **string**| Name of pet that needs to be updated | [optional]
 **status** | **string**| Status of pet that needs to be updated | [optional]

### Return type

void (empty response body)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFile()`

```php
uploadFile($pet_id, $additional_metadata, $body): \criteo\api\petstore\preview\Model\ApiResponse
```

uploads an image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: petstore_auth
$config = criteo\api\petstore\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\petstore\preview\Api\PetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pet_id = 56; // int | ID of pet to update
$additional_metadata = 'additional_metadata_example'; // string | Additional Metadata
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadFile($pet_id, $additional_metadata, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pet_id** | **int**| ID of pet to update |
 **additional_metadata** | **string**| Additional Metadata | [optional]
 **body** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\criteo\api\petstore\preview\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
