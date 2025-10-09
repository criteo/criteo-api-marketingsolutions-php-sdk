# # PlacementsReportQueryMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adset_ids** | **string** | The comma-separated list of adSet ids. | [optional]
**advertiser_ids** | **string** | The comma-separated list of advertiser ids. |
**campaign_ids** | **string** | The comma-separated list of campaign ids. | [optional]
**currency** | **string** | The currency used for the report. ISO 4217 code (three-letter capitals). |
**dimensions** | **string[]** | The dimensions for the report. |
**disclosed** | **bool** | Returns disclosed or undisclosed placements. | [optional] [default to true]
**end_date** | **\DateTime** | End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**environment** | **string** | Type of environment: Web, Android or iOS. | [optional]
**format** | **string** | The file format of the generated report | [optional] [default to 'json']
**metrics** | **string[]** | The list of metrics to report. |
**placement** | **string** | Filter the value of the placement | [optional]
**start_date** | **\DateTime** | Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**timezone** | **string** | The timezone used for the report. Timezone Database format (Tz). | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
