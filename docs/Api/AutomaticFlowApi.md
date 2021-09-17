# Swagger\Client\AutomaticFlowApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workflowAutomaticDossierIdDelete**](AutomaticFlowApi.md#workflowautomaticdossieriddelete) | **DELETE** /workflow/automatic/dossier/{id} | Delete dossier by id
[**workflowAutomaticDossierIdGet**](AutomaticFlowApi.md#workflowautomaticdossieridget) | **GET** /workflow/automatic/dossier/{id} | Retrieve dossier by id
[**workflowAutomaticDossierPost**](AutomaticFlowApi.md#workflowautomaticdossierpost) | **POST** /workflow/automatic/dossier | Entry point for dossier submission

# **workflowAutomaticDossierIdDelete**
> workflowAutomaticDossierIdDelete($id)

Delete dossier by id

### Example
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowAutomaticDossierIdGet**
> workflowAutomaticDossierIdGet($id)

Retrieve dossier by id

### Example
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
    $apiInstance->workflowAutomaticDossierIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticFlowApi->workflowAutomaticDossierIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowAutomaticDossierPost**
> workflowAutomaticDossierPost($body)

Entry point for dossier submission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExtDossier**](../Model/ExtDossier.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

