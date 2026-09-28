# # ProductReportJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_set_ids** | **string[]** | The list of ad set ids. Maximum 10. | [optional]
**advertiser_ids** | **string[]** | The list of advertiser account IDs. Maximum 5, numeric. |
**campaign_ids** | **string[]** | The list of marketing campaign ids. Maximum 10. | [optional]
**dimensions** | **string[]** | The dimensions of the report. If not included, the default list of dimensions will be used. | [optional]
**end_date** | **\DateTime** | End of the reporting interval. ISO 8601 date-time (UTC). Defaults to the last complete day. | [optional]
**file_format** | **string** | The output file format. Supported: csv, json. | [optional] [default to 'csv']
**metrics** | **string[]** | The list of metrics to report. If not included, the default list of metrics will be used. | [optional]
**start_date** | **\DateTime** | Start of the reporting interval. ISO 8601 date-time (UTC). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
