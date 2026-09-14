# # MultiSourceConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attribute_mappings** | [**\criteo\api\marketingsolutions\experimental\Model\MultiSourceAttributeMapping[]**](MultiSourceAttributeMapping.md) | Attribute-level mapping rules applied during enrichment. | [optional]
**enabled** | **bool** | Whether Multi-Source Catalog was enabled for this ingestion. | [optional]
**main_component_id** | **int** | Identifier of the primary catalog component. | [optional]
**matching_keys** | **string[]** | Keys used to match products between the primary catalog and the additional sources. | [optional]
**sources_count** | **int** | Number of additional sources configured, excluding the primary catalog. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
