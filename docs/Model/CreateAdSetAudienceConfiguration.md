# # CreateAdSetAudienceConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**min_days_since_last_visit** | **int** | The minimum days since last visit on the advertiser web site for being part of this audience, if not null | [optional]
**max_days_since_last_visit** | **int** | The maximum days since last visit on the advertiser web site for being part of this audience, if not null | [optional]
**excluded_audience_ids** | **string[]** | The list of audience ids that define who CANNOT be targeted by the ad set. So far, only contact list are supported here | [optional]
**audience_similar** | [**\criteo\api\marketingsolutions\preview\Model\AudienceSimilar**](AudienceSimilar.md) |  | [optional]
**audience_website_visitor** | [**\criteo\api\marketingsolutions\preview\Model\AudienceWebsiteVisitor**](AudienceWebsiteVisitor.md) |  | [optional]
**audience_contact_list** | [**\criteo\api\marketingsolutions\preview\Model\AudienceContactList**](AudienceContactList.md) |  | [optional]
**audience_custom** | [**\criteo\api\marketingsolutions\preview\Model\AudienceCustom**](AudienceCustom.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
