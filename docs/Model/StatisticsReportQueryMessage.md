# # StatisticsReportQueryMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advertiser_ids** | **string** | The comma-separated list of advertiser ids. If empty, all the advertisers in the portfolio will be used | [optional]
**ad_set_ids** | **string[]** | list of adSets ids. If empty, all the adSets will be fetched | [optional]
**ad_set_names** | **string[]** | list of adSets names. If empty, all the adSets will be fetched | [optional]
**ad_set_status** | **string[]** | list of adSets status. If empty, all the adSets will be fetched | [optional]
**dimensions** | **string[]** | The dimensions for the report. |
**metrics** | **string[]** | The list of metrics to report. |
**currency** | **string** | The currency used for the report. ISO 4217 code (three-letter capitals). |
**format** | **string** | The file format of the generated report: csv, xml, excel or json. |
**timezone** | **string** | The timezone used for the report. Timezone Database format (Tz). | [optional] [default to 'UTC']
**start_date** | **\DateTime** | Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**end_date** | **\DateTime** | End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
