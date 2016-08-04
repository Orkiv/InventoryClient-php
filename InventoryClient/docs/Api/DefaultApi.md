# InventoryClient\DefaultApi

All URIs are relative to *https://www.orkiv.com/i/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allGet**](DefaultApi.md#allGet) | **GET** /all/ | 
[**categoriesDelete**](DefaultApi.md#categoriesDelete) | **DELETE** /categories/ | 
[**categoriesPost**](DefaultApi.md#categoriesPost) | **POST** /categories/ | 
[**categoriesPut**](DefaultApi.md#categoriesPut) | **PUT** /categories/ | 
[**itemAddPost**](DefaultApi.md#itemAddPost) | **POST** /item/add/ | 
[**itemAddbulkPost**](DefaultApi.md#itemAddbulkPost) | **POST** /item/addbulk/ | 
[**itemDelete**](DefaultApi.md#itemDelete) | **DELETE** /item/ | 
[**itemPut**](DefaultApi.md#itemPut) | **PUT** /item/ | 
[**itemsCountPost**](DefaultApi.md#itemsCountPost) | **POST** /items/count/ | 
[**itemsPost**](DefaultApi.md#itemsPost) | **POST** /items/ | 
[**itemsallfieldsPost**](DefaultApi.md#itemsallfieldsPost) | **POST** /items/?allfields | 
[**ordersPost**](DefaultApi.md#ordersPost) | **POST** /orders/ | 
[**queryPost**](DefaultApi.md#queryPost) | **POST** /query/ | 
[**queryallfieldsPost**](DefaultApi.md#queryallfieldsPost) | **POST** /query/?allfields | 
[**servicesDelete**](DefaultApi.md#servicesDelete) | **DELETE** /services/ | 
[**servicesGet**](DefaultApi.md#servicesGet) | **GET** /services/ | 
[**servicesPost**](DefaultApi.md#servicesPost) | **POST** /services/ | 
[**servicesPut**](DefaultApi.md#servicesPut) | **PUT** /services/ | 
[**writeDelete**](DefaultApi.md#writeDelete) | **DELETE** /write/ | 
[**writePost**](DefaultApi.md#writePost) | **POST** /write/ | 


# **allGet**
> \Swagger\Client\Model\InventoryGroup[] allGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();

try {
    $result = $api_instance->allGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->allGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InventoryGroup[]**](../Model/InventoryGroup.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesDelete**
> \Swagger\Client\Model\Response categoriesDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$id = "id_example"; // string | Id of category to remove

try {
    $result = $api_instance->categoriesDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->categoriesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of category to remove |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesPost**
> \Swagger\Client\Model\Category[] categoriesPost($query)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$query = new \Swagger\Client\Model\Dictionary(); // \Swagger\Client\Model\Dictionary | Category to query against system

try {
    $result = $api_instance->categoriesPost($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->categoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | [**\Swagger\Client\Model\Dictionary**](../Model/\Swagger\Client\Model\Dictionary.md)| Category to query against system | [optional]

### Return type

[**\Swagger\Client\Model\Category[]**](../Model/Category.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesPut**
> \Swagger\Client\Model\Category categoriesPut($id, $category)



If no ID is specified a new category will be created!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$id = "id_example"; // string | category id to update.
$category = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | New category information.

try {
    $result = $api_instance->categoriesPut($id, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->categoriesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| category id to update. |
 **category** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| New category information. |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemAddPost**
> \Swagger\Client\Model\Item itemAddPost($item)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$item = new \Swagger\Client\Model\Item(); // \Swagger\Client\Model\Item | Item to create.

try {
    $result = $api_instance->itemAddPost($item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\Swagger\Client\Model\Item**](../Model/\Swagger\Client\Model\Item.md)| Item to create. |

### Return type

[**\Swagger\Client\Model\Item**](../Model/Item.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemAddbulkPost**
> \Swagger\Client\Model\Response itemAddbulkPost($items)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$items = array(new Item()); // \Swagger\Client\Model\Item[] | Items to create.

try {
    $result = $api_instance->itemAddbulkPost($items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemAddbulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items** | [**\Swagger\Client\Model\Item[]**](../Model/Item.md)| Items to create. |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemDelete**
> \Swagger\Client\Model\Response itemDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$id = "id_example"; // string | item id to remove

try {
    $result = $api_instance->itemDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| item id to remove |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemPut**
> \Swagger\Client\Model\Response itemPut($id, $item)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$id = "id_example"; // string | item id to update.
$item = new \Swagger\Client\Model\Dictionary(); // \Swagger\Client\Model\Dictionary | New item information.

try {
    $result = $api_instance->itemPut($id, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| item id to update. |
 **item** | [**\Swagger\Client\Model\Dictionary**](../Model/\Swagger\Client\Model\Dictionary.md)| New item information. |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsCountPost**
> float itemsCountPost($query)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$query = new \Swagger\Client\Model\Dictionary(); // \Swagger\Client\Model\Dictionary | Item to query against system.

try {
    $result = $api_instance->itemsCountPost($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemsCountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | [**\Swagger\Client\Model\Dictionary**](../Model/\Swagger\Client\Model\Dictionary.md)| Item to query against system. | [optional]

### Return type

**float**

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsPost**
> \Swagger\Client\Model\Item[] itemsPost($query)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$query = new \Swagger\Client\Model\Dictionary(); // \Swagger\Client\Model\Dictionary | Item to query against system.

try {
    $result = $api_instance->itemsPost($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | [**\Swagger\Client\Model\Dictionary**](../Model/\Swagger\Client\Model\Dictionary.md)| Item to query against system. | [optional]

### Return type

[**\Swagger\Client\Model\Item[]**](../Model/Item.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsallfieldsPost**
> \Swagger\Client\Model\Dictionary[] itemsallfieldsPost($query)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$query = new \Swagger\Client\Model\Dictionary(); // \Swagger\Client\Model\Dictionary | Item to query against system.

try {
    $result = $api_instance->itemsallfieldsPost($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemsallfieldsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | [**\Swagger\Client\Model\Dictionary**](../Model/\Swagger\Client\Model\Dictionary.md)| Item to query against system. | [optional]

### Return type

[**\Swagger\Client\Model\Dictionary[]**](../Model/Dictionary.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPost**
> \Swagger\Client\Model\Order[] ordersPost($query)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$query = new \Swagger\Client\Model\Dictionary(); // \Swagger\Client\Model\Dictionary | Order to query against system.

try {
    $result = $api_instance->ordersPost($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->ordersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | [**\Swagger\Client\Model\Dictionary**](../Model/\Swagger\Client\Model\Dictionary.md)| Order to query against system. | [optional]

### Return type

[**\Swagger\Client\Model\Order[]**](../Model/Order.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryPost**
> \Swagger\Client\Model\Item[] queryPost($page, $categoryid, $sort, $search, $minprice, $maxprice, $query)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$page = 3.4; // float | Current page index.
$categoryid = "categoryid_example"; // string | Get items under specified category id.
$sort = "sort_example"; // string | Comma delimited Sort string. ie ; +ordprice. Please use number based fields only
$search = "search_example"; // string | Performs a regex pattern match against the items within your account
$minprice = 3.4; // float | Min price in hundreds.
$maxprice = 3.4; // float | Max price in hudreds.
$query = new \Swagger\Client\Model\Dictionary(); // \Swagger\Client\Model\Dictionary | Custom parameters to query against system.

try {
    $result = $api_instance->queryPost($page, $categoryid, $sort, $search, $minprice, $maxprice, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->queryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**| Current page index. | [optional]
 **categoryid** | **string**| Get items under specified category id. | [optional]
 **sort** | **string**| Comma delimited Sort string. ie ; +ordprice. Please use number based fields only | [optional]
 **search** | **string**| Performs a regex pattern match against the items within your account | [optional]
 **minprice** | **float**| Min price in hundreds. | [optional]
 **maxprice** | **float**| Max price in hudreds. | [optional]
 **query** | [**\Swagger\Client\Model\Dictionary**](../Model/\Swagger\Client\Model\Dictionary.md)| Custom parameters to query against system. | [optional]

### Return type

[**\Swagger\Client\Model\Item[]**](../Model/Item.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryallfieldsPost**
> \Swagger\Client\Model\Dictionary[] queryallfieldsPost($page, $categoryid, $sort, $search, $minprice, $maxprice, $query)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$page = 3.4; // float | Current page index.
$categoryid = "categoryid_example"; // string | Get items under specified category id.
$sort = "sort_example"; // string | Comma delimited Sort string. ie ; +ordprice. Please use number based fields only
$search = "search_example"; // string | Performs a regex pattern match against the items within your account
$minprice = 3.4; // float | Min price in hundreds.
$maxprice = 3.4; // float | Max price in hudreds.
$query = new \Swagger\Client\Model\Dictionary(); // \Swagger\Client\Model\Dictionary | Custom parameters to query against system.

try {
    $result = $api_instance->queryallfieldsPost($page, $categoryid, $sort, $search, $minprice, $maxprice, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->queryallfieldsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**| Current page index. | [optional]
 **categoryid** | **string**| Get items under specified category id. | [optional]
 **sort** | **string**| Comma delimited Sort string. ie ; +ordprice. Please use number based fields only | [optional]
 **search** | **string**| Performs a regex pattern match against the items within your account | [optional]
 **minprice** | **float**| Min price in hundreds. | [optional]
 **maxprice** | **float**| Max price in hudreds. | [optional]
 **query** | [**\Swagger\Client\Model\Dictionary**](../Model/\Swagger\Client\Model\Dictionary.md)| Custom parameters to query against system. | [optional]

### Return type

[**\Swagger\Client\Model\Dictionary[]**](../Model/Dictionary.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesDelete**
> \Swagger\Client\Model\Response servicesDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$id = "id_example"; // string | ID of the service to update

try {
    $result = $api_instance->servicesDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->servicesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the service to update |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesGet**
> \Swagger\Client\Model\Service[] servicesGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();

try {
    $result = $api_instance->servicesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->servicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Service[]**](../Model/Service.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesPost**
> \Swagger\Client\Model\Service servicesPost($service)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$service = new \Swagger\Client\Model\Service(); // \Swagger\Client\Model\Service | Service to create.

try {
    $result = $api_instance->servicesPost($service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->servicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | [**\Swagger\Client\Model\Service**](../Model/\Swagger\Client\Model\Service.md)| Service to create. |

### Return type

[**\Swagger\Client\Model\Service**](../Model/Service.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesPut**
> \Swagger\Client\Model\Response servicesPut($id, $service)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$id = "id_example"; // string | ID of the service to update
$service = new \Swagger\Client\Model\Service(); // \Swagger\Client\Model\Service | New service data to set.

try {
    $result = $api_instance->servicesPut($id, $service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->servicesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the service to update |
 **service** | [**\Swagger\Client\Model\Service**](../Model/\Swagger\Client\Model\Service.md)| New service data to set. |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writeDelete**
> \Swagger\Client\Model\Response writeDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$id = "id_example"; // string | Will delete event attached to this serviceid

try {
    $result = $api_instance->writeDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->writeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Will delete event attached to this serviceid | [optional]

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writePost**
> \Swagger\Client\Model\Response writePost($event_request)



Will ovveride the current event of the specified service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKey
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('APIKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKey', 'Bearer');
// Configure API key authorization: AccountID
InventoryClient\Configuration::getDefaultConfiguration()->setApiKey('accountid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// InventoryClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('accountid', 'Bearer');

$api_instance = new InventoryClient\Api\DefaultApi();
$event_request = new \Swagger\Client\Model\EventRequest(); // \Swagger\Client\Model\EventRequest | Event to upload

try {
    $result = $api_instance->writePost($event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->writePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_request** | [**\Swagger\Client\Model\EventRequest**](../Model/\Swagger\Client\Model\EventRequest.md)| Event to upload |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

