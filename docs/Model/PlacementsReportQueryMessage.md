# # PlacementsReportQueryMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advertiser_ids** | **string** | The comma-separated list of advertiser ids. |
**campaign_ids** | **string** | The comma-separated list of campaign ids. | [optional]
**adset_ids** | **string** | The comma-separated list of adSet ids. | [optional]
**environment** | **string** | Type of environment: Web, Android or iOS. | [optional]
**placement** | **string** | Filter the value of the placement | [optional]
**dimensions** | **string[]** | The dimensions for the report. |
**metrics** | **string[]** | The list of metrics to report. |
**currency** | **string** | The currency used for the report. ISO 4217 code (three-letter capitals). |
**disclosed** | **bool** | Returns disclosed or undisclosed placements. | [optional] [default to true]
**format** | **string** | The file format of the generated report: csv, xml, excel or json. |
**timezone** | **string** | The timezone used for the report. Timezone Database format (Tz). | [optional] [default to 'UTC']
**start_date** | [**\DateTime**](\DateTime.md) | Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**end_date** | [**\DateTime**](\DateTime.md) | End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
