# ExtDocument

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_type_code** | **string** | Required, it identifies the template that will be used to retrieve the document configuration.  It can be omitted if Reasons are provided.  The list of possible values will be provided by Sixtema. | [optional] 
**file** | **string** | Required, document bytes array. | [optional] 
**name** | **string** | Required, name of the document. | [optional] 
**id** | **string** |  | [optional] 
**reasons** | [**\Swagger\Client\Model\ExtReason[]**](ExtReason.md) | List of sign reasons for each Signer | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

