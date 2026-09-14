# # MultiSourceAttributeMapping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attribute_name** | **string** | Target attribute in the catalog schema. | [optional]
**source_component_id** | **int** | Identifies the additional source component this attribute is overridden from. Several mappings share it when one component overrides more than one attribute, which is why sourcesCount counts only the distinct ones. | [optional]
**source_field** | **string** | Field name from the additional source mapped to this attribute. | [optional]
**source_priority** | **int** | Priority of this source for this attribute: lower wins (1 overrides 2). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
