# # GenerateRealtimeStatisticsReportRequestAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adset_ids** | **string[]** | List of adset ids to filter. | [optional]
**advertiser_ids** | **string[]** | List of advertiser ids to report on. |
**campaign_ids** | **string[]** | List of campaign ids to filter. | [optional]
**currency** | **string** | The currency used for the report. ISO 4217 code (three-letter capitals). | [optional] [default to 'EUR']
**dimensions** | **string[]** | List of dimensions for the report. | [optional]
**lookback_window** | **int** | The number of hours to consider in the past. | [optional] [default to 12]
**metrics** | **string[]** | List of metrics for the report. | [optional]
**timezone** | **string** | The timezone used for the report. | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
