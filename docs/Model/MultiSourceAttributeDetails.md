# # MultiSourceAttributeDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**coverage** | [**\criteo\api\marketingsolutions\experimental\Model\MultiSourceAttributeCoverage**](MultiSourceAttributeCoverage.md) |  | [optional]
**resolution** | [**\criteo\api\marketingsolutions\experimental\Model\MultiSourceAttributeResolution**](MultiSourceAttributeResolution.md) |  | [optional]
**source_field** | **string** | Source field used for this attribute. | [optional]
**source_priority** | **int** | Priority of the additional source that wins for this attribute, which is the lowest priority configured for it. Zero when no additional source overrides the attribute, and also when the winning source is itself configured with priority zero; the two cases cannot be told apart. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
