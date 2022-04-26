# # GenerateTopProductsReportRequestAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timezone** | **string** | The timezone used for the report. Timezone Database format (Tz). | [optional] [default to 'UTC']
**start_date** | [**\DateTime**](\DateTime.md) | Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**end_date** | [**\DateTime**](\DateTime.md) | End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**advertiser_id** | **string** | The client id. |
**limit** | **int** | The maximum number of top products returned. | [optional]
**rank_products_by** | **string** | The metric used to filter the top products. |
**dimensions** | **string[]** | The dimensions for the report. | [optional]
**metrics** | **string[]** | The list of metrics to report. | [optional]
**currency** | **string** | The currency used for the report. ISO 4217 code (three-letter capitals). | [optional] [default to 'EUR']
**brands** | **string[]** | The list of brands names. | [optional]
**category_ids** | **string[]** | The list of category ids. | [optional]
**campaign_ids** | **string[]** | The list of campaign ids. | [optional]
**ad_set_ids** | **string[]** | The list of adSet ids. | [optional]
**ad_set_status** | **string[]** | The list of adSet status (ex: &#39;Active&#39;,&#39;NotRunning&#39;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
