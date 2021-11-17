# criteo\api\petstore\preview\UserApi

All URIs are relative to http://localhost/api/v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser()**](UserApi.md#createUser) | **POST** /user | Create user
[**createUsersWithListInput()**](UserApi.md#createUsersWithListInput) | **POST** /user/createWithList | Creates list of users with given input array
[**deleteUser()**](UserApi.md#deleteUser) | **DELETE** /user/{username} | Delete user
[**getUserByName()**](UserApi.md#getUserByName) | **GET** /user/{username} | Get user by user name
[**loginUser()**](UserApi.md#loginUser) | **GET** /user/login | Logs user into the system
[**logoutUser()**](UserApi.md#logoutUser) | **GET** /user/logout | Logs out current logged in user session
[**updateUser()**](UserApi.md#updateUser) | **PUT** /user/{username} | Update user


## `createUser()`

```php
createUser($user): \criteo\api\petstore\preview\Model\User
```

Create user

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new criteo\api\petstore\preview\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = new \criteo\api\petstore\preview\Model\User(); // \criteo\api\petstore\preview\Model\User | Created user object

try {
    $result = $apiInstance->createUser($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\criteo\api\petstore\preview\Model\User**](../Model/User.md)| Created user object | [optional]

### Return type

[**\criteo\api\petstore\preview\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUsersWithListInput()`

```php
createUsersWithListInput($user): \criteo\api\petstore\preview\Model\User
```

Creates list of users with given input array

Creates list of users with given input array

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new criteo\api\petstore\preview\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user = array(new \criteo\api\petstore\preview\Model\User()); // \criteo\api\petstore\preview\Model\User[]

try {
    $result = $apiInstance->createUsersWithListInput($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUsersWithListInput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\criteo\api\petstore\preview\Model\User[]**](../Model/User.md)|  | [optional]

### Return type

[**\criteo\api\petstore\preview\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($username)
```

Delete user

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new criteo\api\petstore\preview\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | The name that needs to be deleted

try {
    $apiInstance->deleteUser($username);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The name that needs to be deleted |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserByName()`

```php
getUserByName($username): \criteo\api\petstore\preview\Model\User
```

Get user by user name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new criteo\api\petstore\preview\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | The name that needs to be fetched. Use user1 for testing.

try {
    $result = $apiInstance->getUserByName($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The name that needs to be fetched. Use user1 for testing. |

### Return type

[**\criteo\api\petstore\preview\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginUser()`

```php
loginUser($username, $password): string
```

Logs user into the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new criteo\api\petstore\preview\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | The user name for login
$password = 'password_example'; // string | The password for login in clear text

try {
    $result = $apiInstance->loginUser($username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->loginUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The user name for login | [optional]
 **password** | **string**| The password for login in clear text | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logoutUser()`

```php
logoutUser()
```

Logs out current logged in user session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new criteo\api\petstore\preview\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->logoutUser();
} catch (Exception $e) {
    echo 'Exception when calling UserApi->logoutUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($username, $user)
```

Update user

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new criteo\api\petstore\preview\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | name that need to be deleted
$user = new \criteo\api\petstore\preview\Model\User(); // \criteo\api\petstore\preview\Model\User | Update an existent user in the store

try {
    $apiInstance->updateUser($username, $user);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| name that need to be deleted |
 **user** | [**\criteo\api\petstore\preview\Model\User**](../Model/User.md)| Update an existent user in the store | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`, `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
