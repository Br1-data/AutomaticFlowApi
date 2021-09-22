# Swagger\Client\AutomaticFlowApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workflowAutomaticCallbackWorkflowidOpEsitoProxydocumentidDocumentidGet**](AutomaticFlowApi.md#workflowautomaticcallbackworkflowidopesitoproxydocumentiddocumentidget) | **GET** /workflow/automatic/callback/{workflowid}/{op}/{esito}/{proxydocumentid}/{documentid} | 
[**workflowAutomaticDossierIdDelete**](AutomaticFlowApi.md#workflowautomaticdossieriddelete) | **DELETE** /workflow/automatic/dossier/{id} | Delete dossier by id
[**workflowAutomaticDossierIdGet**](AutomaticFlowApi.md#workflowautomaticdossieridget) | **GET** /workflow/automatic/dossier/{id} | Retrieve dossier by id
[**workflowAutomaticDossierPost**](AutomaticFlowApi.md#workflowautomaticdossierpost) | **POST** /workflow/automatic/dossier | Entry point for dossier submission

# **workflowAutomaticCallbackWorkflowidOpEsitoProxydocumentidDocumentidGet**
> workflowAutomaticCallbackWorkflowidOpEsitoProxydocumentidDocumentidGet($workflowid, $op, $esito, $proxydocumentid, $documentid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AutomaticFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workflowid = "workflowid_example"; // string | 
$op = "op_example"; // string | 
$esito = "esito_example"; // string | 
$proxydocumentid = "proxydocumentid_example"; // string | 
$documentid = "documentid_example"; // string | 

try {
    $apiInstance->workflowAutomaticCallbackWorkflowidOpEsitoProxydocumentidDocumentidGet($workflowid, $op, $esito, $proxydocumentid, $documentid);
} catch (Exception $e) {
    echo 'Exception when calling AutomaticFlowApi->workflowAutomaticCallbackWorkflowidOpEsitoProxydocumentidDocumentidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workflowid** | **string**|  |
 **op** | **string**|  |
 **esito** | **string**|  | [optional]
 **proxydocumentid** | **string**|  | [optional]
 **documentid** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

