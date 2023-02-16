# # GenerateCreativesReportRequestAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | [**\DateTime**](\DateTime.md) | Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**end_date** | [**\DateTime**](\DateTime.md) | End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**advertiser_ids** | **string[]** | The list of client ids. |
**metrics** | **string[]** | The list of metrics to report. |
**dimensions** | **string[]** | The list of dimensions to report. |
**timezone** | **string** | The timezone used for the report. Timezone Database format (Tz). | [optional]
**ad_formats** | **string[]** | The list of adFormats. | [optional]
**display_sizes** | **string[]** | The list of displaySizes. | [optional]
**coupon_names** | **string[]** | The list of coupon names. | [optional]
**coupon_ids** | **string[]** | The list of coupon ids. | [optional]
**ad_names** | **string[]** | The list of ad names. | [optional]
**ad_ids** | **string[]** | The list of ad ids. | [optional]
**campaign_ids** | **string[]** | The list of campaign ids (marketing campaign ids). | [optional]
**ad_set_ids** | **string[]** | The list of adSet ids (campaign ids). | [optional]
**ad_set_status** | **string[]** | The list of adSet status (ex: &#39;Active&#39;,&#39;NotRunning&#39;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
