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
[**itemGet**](DefaultApi.md#itemGet) | **GET** /item/ | 
[**itemMediaDelete**](DefaultApi.md#itemMediaDelete) | **DELETE** /item-media/ | 
[**itemMediaPost**](DefaultApi.md#itemMediaPost) | **POST** /item-media/ | 
[**itemPut**](DefaultApi.md#itemPut) | **PUT** /item/ | 
[**itemsCountPost**](DefaultApi.md#itemsCountPost) | **POST** /items/count/ | 
[**itemsPost**](DefaultApi.md#itemsPost) | **POST** /items/ | 
[**ordersPost**](DefaultApi.md#ordersPost) | **POST** /orders/ | 
[**ordersServicesPost**](DefaultApi.md#ordersServicesPost) | **POST** /orders/services/ | 
[**queryPost**](DefaultApi.md#queryPost) | **POST** /query/ | 
[**servicesDelete**](DefaultApi.md#servicesDelete) | **DELETE** /services/ | 
[**servicesGet**](DefaultApi.md#servicesGet) | **GET** /services/ | 
[**servicesOpenGet**](DefaultApi.md#servicesOpenGet) | **GET** /services/open/ | 
[**servicesPost**](DefaultApi.md#servicesPost) | **POST** /services/ | 
[**servicesPut**](DefaultApi.md#servicesPut) | **PUT** /services/ | 
[**variationDelete**](DefaultApi.md#variationDelete) | **DELETE** /variation/ | 
[**variationGet**](DefaultApi.md#variationGet) | **GET** /variation/ | 
[**variationPost**](DefaultApi.md#variationPost) | **POST** /variation/ | 
[**variationPut**](DefaultApi.md#variationPut) | **PUT** /variation/ | 
[**writeDelete**](DefaultApi.md#writeDelete) | **DELETE** /write/ | 
[**writePost**](DefaultApi.md#writePost) | **POST** /write/ | 


# **allGet**
> \InventoryClient\Model\InventoryGroup[] allGet()



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

[**\InventoryClient\Model\InventoryGroup[]**](../Model/InventoryGroup.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesDelete**
> \InventoryClient\Model\Response categoriesDelete($id)



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

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesPost**
> \InventoryClient\Model\Category[] categoriesPost($query)



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
$query = new \InventoryClient\Model\Category(); // \InventoryClient\Model\Category | Category to query against system

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
 **query** | [**\InventoryClient\Model\Category**](../Model/\InventoryClient\Model\Category.md)| Category to query against system | [optional]

### Return type

[**\InventoryClient\Model\Category[]**](../Model/Category.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesPut**
> \InventoryClient\Model\Category categoriesPut($id, $category)



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
$category = new \InventoryClient\Model\Category(); // \InventoryClient\Model\Category | New category information.

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
 **category** | [**\InventoryClient\Model\Category**](../Model/\InventoryClient\Model\Category.md)| New category information. |

### Return type

[**\InventoryClient\Model\Category**](../Model/Category.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemAddPost**
> \InventoryClient\Model\Item itemAddPost($item)



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
$item = new \InventoryClient\Model\ItemRequest(); // \InventoryClient\Model\ItemRequest | Item to create.

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
 **item** | [**\InventoryClient\Model\ItemRequest**](../Model/\InventoryClient\Model\ItemRequest.md)| Item to create. |

### Return type

[**\InventoryClient\Model\Item**](../Model/Item.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemAddbulkPost**
> \InventoryClient\Model\Response itemAddbulkPost($items)



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
$items = array(new ItemRequest()); // \InventoryClient\Model\ItemRequest[] | Items to create.

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
 **items** | [**\InventoryClient\Model\ItemRequest[]**](../Model/ItemRequest.md)| Items to create. |

### Return type

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemDelete**
> \InventoryClient\Model\Response itemDelete($id)



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

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemGet**
> \InventoryClient\Model\Item itemGet($id)



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
$id = "id_example"; // string | Item ID to open.

try {
    $result = $api_instance->itemGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Item ID to open. |

### Return type

[**\InventoryClient\Model\Item**](../Model/Item.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemMediaDelete**
> \InventoryClient\Model\Response itemMediaDelete($imageurl)



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
$imageurl = "imageurl_example"; // string | URL of image to remove

try {
    $result = $api_instance->itemMediaDelete($imageurl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemMediaDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imageurl** | **string**| URL of image to remove |

### Return type

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemMediaPost**
> string itemMediaPost($id, $image)



This endpoint is currently in testing.

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
$id = "id_example"; // string | Valid item id to bind image to.
$image = "/path/to/file.txt"; // \SplFileObject | Image.

try {
    $result = $api_instance->itemMediaPost($id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemMediaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Valid item id to bind image to. |
 **image** | **\SplFileObject**| Image. |

### Return type

**string**

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemPut**
> \InventoryClient\Model\Response itemPut($id, $item)



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
$item = new \InventoryClient\Model\ItemRequest(); // \InventoryClient\Model\ItemRequest | New item information.

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
 **item** | [**\InventoryClient\Model\ItemRequest**](../Model/\InventoryClient\Model\ItemRequest.md)| New item information. |

### Return type

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsCountPost**
> float itemsCountPost($minprice, $maxprice, $query)



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
$minprice = 3.4; // float | Min price of items to find
$maxprice = 3.4; // float | Max price of items to find
$query = new \InventoryClient\Model\ItemRequest(); // \InventoryClient\Model\ItemRequest | Item to query against system.

try {
    $result = $api_instance->itemsCountPost($minprice, $maxprice, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemsCountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **minprice** | **float**| Min price of items to find | [optional]
 **maxprice** | **float**| Max price of items to find | [optional]
 **query** | [**\InventoryClient\Model\ItemRequest**](../Model/\InventoryClient\Model\ItemRequest.md)| Item to query against system. | [optional]

### Return type

**float**

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsPost**
> \InventoryClient\Model\Item[] itemsPost($minprice, $maxprice, $query)



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
$minprice = 3.4; // float | Min price of items to find
$maxprice = 3.4; // float | Max price of items to find
$query = new \InventoryClient\Model\ItemRequest(); // \InventoryClient\Model\ItemRequest | Item to query against system.

try {
    $result = $api_instance->itemsPost($minprice, $maxprice, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->itemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **minprice** | **float**| Min price of items to find | [optional]
 **maxprice** | **float**| Max price of items to find | [optional]
 **query** | [**\InventoryClient\Model\ItemRequest**](../Model/\InventoryClient\Model\ItemRequest.md)| Item to query against system. | [optional]

### Return type

[**\InventoryClient\Model\Item[]**](../Model/Item.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPost**
> \InventoryClient\Model\Order[] ordersPost($query)



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
$query = new \InventoryClient\Model\OrderRequest(); // \InventoryClient\Model\OrderRequest | Order to query against item invoices.

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
 **query** | [**\InventoryClient\Model\OrderRequest**](../Model/\InventoryClient\Model\OrderRequest.md)| Order to query against item invoices. | [optional]

### Return type

[**\InventoryClient\Model\Order[]**](../Model/Order.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersServicesPost**
> \InventoryClient\Model\Order[] ordersServicesPost($query)



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
$query = new \InventoryClient\Model\OrderRequest(); // \InventoryClient\Model\OrderRequest | Order to query against service invoices.

try {
    $result = $api_instance->ordersServicesPost($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->ordersServicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | [**\InventoryClient\Model\OrderRequest**](../Model/\InventoryClient\Model\OrderRequest.md)| Order to query against service invoices. | [optional]

### Return type

[**\InventoryClient\Model\Order[]**](../Model/Order.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryPost**
> \InventoryClient\Model\Item[] queryPost($page, $categoryid, $sort, $search, $minprice, $maxprice, $query)



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
$minprice = 3.4; // float | Min price in hundreds (cents).
$maxprice = 3.4; // float | Max price in hundreds (cents).
$query = new \InventoryClient\Model\ItemRequest(); // \InventoryClient\Model\ItemRequest | Custom parameters to query against system.

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
 **minprice** | **float**| Min price in hundreds (cents). | [optional]
 **maxprice** | **float**| Max price in hundreds (cents). | [optional]
 **query** | [**\InventoryClient\Model\ItemRequest**](../Model/\InventoryClient\Model\ItemRequest.md)| Custom parameters to query against system. | [optional]

### Return type

[**\InventoryClient\Model\Item[]**](../Model/Item.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesDelete**
> \InventoryClient\Model\Response servicesDelete($id)



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

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesGet**
> \InventoryClient\Model\Service[] servicesGet()



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

[**\InventoryClient\Model\Service[]**](../Model/Service.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesOpenGet**
> \InventoryClient\Model\Service servicesOpenGet($id)



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
$id = "id_example"; // string | ID of service to open

try {
    $result = $api_instance->servicesOpenGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->servicesOpenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of service to open |

### Return type

[**\InventoryClient\Model\Service**](../Model/Service.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesPost**
> \InventoryClient\Model\Service servicesPost($service)



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
$service = new \InventoryClient\Model\ServiceRequest(); // \InventoryClient\Model\ServiceRequest | Service to create.

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
 **service** | [**\InventoryClient\Model\ServiceRequest**](../Model/\InventoryClient\Model\ServiceRequest.md)| Service to create. |

### Return type

[**\InventoryClient\Model\Service**](../Model/Service.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesPut**
> \InventoryClient\Model\Response servicesPut($id, $service)



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
$service = new \InventoryClient\Model\ServiceRequest(); // \InventoryClient\Model\ServiceRequest | New service data to set.

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
 **service** | [**\InventoryClient\Model\ServiceRequest**](../Model/\InventoryClient\Model\ServiceRequest.md)| New service data to set. |

### Return type

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **variationDelete**
> \InventoryClient\Model\Response variationDelete($id)



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
$id = "id_example"; // string | variation id to remove

try {
    $result = $api_instance->variationDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->variationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| variation id to remove |

### Return type

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **variationGet**
> \InventoryClient\Model\Variation variationGet($id)



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
$id = "id_example"; // string | Variation ID to open.

try {
    $result = $api_instance->variationGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->variationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Variation ID to open. |

### Return type

[**\InventoryClient\Model\Variation**](../Model/Variation.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **variationPost**
> \InventoryClient\Model\Response variationPost($id, $item)



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
$id = "id_example"; // string | Valid item id to bind variation to.
$item = new \InventoryClient\Model\Variation(); // \InventoryClient\Model\Variation | Variation information.

try {
    $result = $api_instance->variationPost($id, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->variationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Valid item id to bind variation to. |
 **item** | [**\InventoryClient\Model\Variation**](../Model/\InventoryClient\Model\Variation.md)| Variation information. |

### Return type

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **variationPut**
> \InventoryClient\Model\Response variationPut($id, $item)



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
$id = "id_example"; // string | variation id to update.
$item = new \InventoryClient\Model\Variation(); // \InventoryClient\Model\Variation | New variation information.

try {
    $result = $api_instance->variationPut($id, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->variationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| variation id to update. |
 **item** | [**\InventoryClient\Model\Variation**](../Model/\InventoryClient\Model\Variation.md)| New variation information. |

### Return type

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writeDelete**
> \InventoryClient\Model\Response writeDelete($id)



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

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **writePost**
> \InventoryClient\Model\Response writePost($event_request)



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
$event_request = new \InventoryClient\Model\EventRequest(); // \InventoryClient\Model\EventRequest | Event to upload

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
 **event_request** | [**\InventoryClient\Model\EventRequest**](../Model/\InventoryClient\Model\EventRequest.md)| Event to upload |

### Return type

[**\InventoryClient\Model\Response**](../Model/Response.md)

### Authorization

[APIKey](../../README.md#APIKey), [AccountID](../../README.md#AccountID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

