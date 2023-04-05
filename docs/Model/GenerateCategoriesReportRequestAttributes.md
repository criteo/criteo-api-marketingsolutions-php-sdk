# # GenerateCategoriesReportRequestAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advertiser_ids** | **string[]** | List of Advertiser ids. |
**campaign_id** | **string** | Report only on the specified Campaign id. | [optional]
**adset_id** | **string** | Report only on the specified AdSet id. | [optional]
**domain** | **string** | Report only on the specified domain. | [optional]
**category** | **string** | Report only on the specified category. | [optional]
**should_display_domain_dimension** | **bool** | Specify if the domain dimension is displayed in the report. | [optional] [default to true]
**format** | **string** | The file format of the generated report: csv, xml, excel or json. |
**timezone** | **string** | The timezone used for the report. Timezone Database format (Tz). | [optional] [default to 'UTC']
**start_date** | **\DateTime** | Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**end_date** | **\DateTime** | End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
