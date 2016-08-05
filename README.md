# InventoryClient
Orkiv Inventory API client

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build date: 2016-08-05T15:01:53.036-04:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Orkiv/InventoryClient-php.git"
    }
  ],
  "require": {
    "Orkiv/InventoryClient-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/InventoryClient/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://www.orkiv.com/i/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**allGet**](docs/Api/DefaultApi.md#allget) | **GET** /all/ | 
*DefaultApi* | [**categoriesDelete**](docs/Api/DefaultApi.md#categoriesdelete) | **DELETE** /categories/ | 
*DefaultApi* | [**categoriesPost**](docs/Api/DefaultApi.md#categoriespost) | **POST** /categories/ | 
*DefaultApi* | [**categoriesPut**](docs/Api/DefaultApi.md#categoriesput) | **PUT** /categories/ | 
*DefaultApi* | [**itemAddPost**](docs/Api/DefaultApi.md#itemaddpost) | **POST** /item/add/ | 
*DefaultApi* | [**itemAddbulkPost**](docs/Api/DefaultApi.md#itemaddbulkpost) | **POST** /item/addbulk/ | 
*DefaultApi* | [**itemDelete**](docs/Api/DefaultApi.md#itemdelete) | **DELETE** /item/ | 
*DefaultApi* | [**itemGet**](docs/Api/DefaultApi.md#itemget) | **GET** /item/ | 
*DefaultApi* | [**itemMediaDelete**](docs/Api/DefaultApi.md#itemmediadelete) | **DELETE** /item-media/ | 
*DefaultApi* | [**itemMediaPost**](docs/Api/DefaultApi.md#itemmediapost) | **POST** /item-media/ | 
*DefaultApi* | [**itemPut**](docs/Api/DefaultApi.md#itemput) | **PUT** /item/ | 
*DefaultApi* | [**itemsCountPost**](docs/Api/DefaultApi.md#itemscountpost) | **POST** /items/count/ | 
*DefaultApi* | [**itemsPost**](docs/Api/DefaultApi.md#itemspost) | **POST** /items/ | 
*DefaultApi* | [**ordersPost**](docs/Api/DefaultApi.md#orderspost) | **POST** /orders/ | 
*DefaultApi* | [**ordersServicesPost**](docs/Api/DefaultApi.md#ordersservicespost) | **POST** /orders/services/ | 
*DefaultApi* | [**queryPost**](docs/Api/DefaultApi.md#querypost) | **POST** /query/ | 
*DefaultApi* | [**servicesDelete**](docs/Api/DefaultApi.md#servicesdelete) | **DELETE** /services/ | 
*DefaultApi* | [**servicesGet**](docs/Api/DefaultApi.md#servicesget) | **GET** /services/ | 
*DefaultApi* | [**servicesOpenGet**](docs/Api/DefaultApi.md#servicesopenget) | **GET** /services/open/ | 
*DefaultApi* | [**servicesPost**](docs/Api/DefaultApi.md#servicespost) | **POST** /services/ | 
*DefaultApi* | [**servicesPut**](docs/Api/DefaultApi.md#servicesput) | **PUT** /services/ | 
*DefaultApi* | [**variationDelete**](docs/Api/DefaultApi.md#variationdelete) | **DELETE** /variation/ | 
*DefaultApi* | [**variationGet**](docs/Api/DefaultApi.md#variationget) | **GET** /variation/ | 
*DefaultApi* | [**variationPost**](docs/Api/DefaultApi.md#variationpost) | **POST** /variation/ | 
*DefaultApi* | [**variationPut**](docs/Api/DefaultApi.md#variationput) | **PUT** /variation/ | 
*DefaultApi* | [**writeDelete**](docs/Api/DefaultApi.md#writedelete) | **DELETE** /write/ | 
*DefaultApi* | [**writePost**](docs/Api/DefaultApi.md#writepost) | **POST** /write/ | 


## Documentation For Models

 - [Category](docs/Model/Category.md)
 - [Error](docs/Model/Error.md)
 - [EventRequest](docs/Model/EventRequest.md)
 - [InventoryGroup](docs/Model/InventoryGroup.md)
 - [Item](docs/Model/Item.md)
 - [ItemRequest](docs/Model/ItemRequest.md)
 - [Order](docs/Model/Order.md)
 - [OrderRequest](docs/Model/OrderRequest.md)
 - [Response](docs/Model/Response.md)
 - [Service](docs/Model/Service.md)
 - [ServiceRequest](docs/Model/ServiceRequest.md)
 - [Variation](docs/Model/Variation.md)


## Documentation For Authorization


## APIKey

- **Type**: API key
- **API key parameter name**: APIKey
- **Location**: HTTP header

## AccountID

- **Type**: API key
- **API key parameter name**: accountid
- **Location**: HTTP header


## Author




