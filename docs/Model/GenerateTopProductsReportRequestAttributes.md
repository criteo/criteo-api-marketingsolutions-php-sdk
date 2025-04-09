# # GenerateTopProductsReportRequestAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_set_ids** | **string[]** | The list of adSet ids. | [optional]
**ad_set_status** | **string[]** | The list of adSet status (ex: &#39;Active&#39;,&#39;NotRunning&#39;). | [optional]
**advertiser_id** | **string** | The client id. |
**brands** | **string[]** | The list of brands names. | [optional]
**campaign_ids** | **string[]** | The list of campaign ids. | [optional]
**category_ids** | **string[]** | The list of category ids. | [optional]
**currency** | **string** | The currency used for the report. ISO 4217 code (three-letter capitals). | [optional] [default to 'EUR']
**dimensions** | **string[]** | The dimensions for the report. | [optional]
**end_date** | **\DateTime** | End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**limit** | **int** | The maximum number of top products returned. | [optional]
**metrics** | **string[]** | The list of metrics to report. | [optional]
**rank_products_by** | **string** | The metric used to filter the top products. |
**start_date** | **\DateTime** | Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**timezone** | **string** | The timezone used for the report. Timezone Database format (Tz). | [optional] [default to 'UTC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
