# # AudienceSegmentEntityV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the segment | [optional]
**description** | **string** | Description of the segment | [optional]
**type** | **string** | Type of segment (read-only) | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | ISO-8601 timestamp in UTC of segment creation (read-only) | [optional]
**updated_at** | [**\DateTime**](\DateTime.md) | ISO-8601 timestamp in UTC of segment update (read-only) | [optional]
**advertiser_id** | **string** | Advertiser associated to the segment | [optional]
**commerce** | [**\criteo\api\marketingsolutions\preview\Model\CommerceV1**](CommerceV1.md) |  | [optional]
**similar** | **object** | Settings to target similar users to website visitors. | [optional]
**contact_list** | [**\criteo\api\marketingsolutions\preview\Model\ContactListV1**](ContactListV1.md) |  | [optional]
**location** | [**\criteo\api\marketingsolutions\preview\Model\LocationV1**](LocationV1.md) |  | [optional]
**prebuilt** | [**\criteo\api\marketingsolutions\preview\Model\PrebuiltV1**](PrebuiltV1.md) |  | [optional]
**retargeting** | [**\criteo\api\marketingsolutions\preview\Model\RetargetingV1**](RetargetingV1.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
