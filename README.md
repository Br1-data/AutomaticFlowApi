# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Br1-data/AutomaticFlowApi.git"
    }
  ],
  "require": {
    "Br1-data/AutomaticFlowApi": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AutomaticFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 

try {
    $apiInstance->workflowAutomaticDossierIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticFlowApi->workflowAutomaticDossierIdDelete: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\AutomaticFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 

try {
    $apiInstance->workflowAutomaticDossierIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticFlowApi->workflowAutomaticDossierIdGet: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\AutomaticFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ExtDossier(); // \Swagger\Client\Model\ExtDossier | 

try {
    $apiInstance->workflowAutomaticDossierPost($body);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticFlowApi->workflowAutomaticDossierPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AutomaticFlowApi* | [**workflowAutomaticDossierIdDelete**](docs/Api/AutomaticFlowApi.md#workflowautomaticdossieriddelete) | **DELETE** /workflow/automatic/dossier/{id} | Delete dossier by id
*AutomaticFlowApi* | [**workflowAutomaticDossierIdGet**](docs/Api/AutomaticFlowApi.md#workflowautomaticdossieridget) | **GET** /workflow/automatic/dossier/{id} | Retrieve dossier by id
*AutomaticFlowApi* | [**workflowAutomaticDossierPost**](docs/Api/AutomaticFlowApi.md#workflowautomaticdossierpost) | **POST** /workflow/automatic/dossier | Entry point for dossier submission

## Documentation For Models

 - [ExtDocument](docs/Model/ExtDocument.md)
 - [ExtDossier](docs/Model/ExtDossier.md)
 - [ExtReason](docs/Model/ExtReason.md)
 - [ExtSigner](docs/Model/ExtSigner.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author



