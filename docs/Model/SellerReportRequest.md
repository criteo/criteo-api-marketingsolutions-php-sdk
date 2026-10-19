# # SellerReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_set_ids** | **string[]** | Restricts the report to the specified ad sets. If omitted, all ad sets in scope are included.  Up to 10 ad set identifiers can be supplied. | [optional]
**advertiser_id** | **string** | Identifier of the advertiser for which the report is generated. |
**campaign_ids** | **string[]** | Restricts the report to the specified marketing campaigns. If omitted, all campaigns in scope are included.  Up to 10 campaign identifiers can be supplied. | [optional]
**dimensions** | **string[]** | Dimensions used to group the report. At least one dimension is required. |
**end_date** | **\DateTime** | Inclusive end date of the reporting period, formatted as yyyy-MM-dd. |
**format** | **string** | Output format. Defaults to JSON. | [optional] [default to 'json']
**metrics** | **string[]** | Metrics returned for each dimension combination. At least one metric is required. |
**seller_ids** | **string[]** | Restricts the report to the specified sellers. If omitted, all sellers in scope are included.  Up to 10 seller identifiers can be supplied. | [optional]
**start_date** | **\DateTime** | Inclusive start date of the reporting period, formatted as yyyy-MM-dd. |
**timezone** | **string** | IANA time zone used for time-based aggregation. Defaults to UTC. | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
