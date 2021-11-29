# # ReportRequestAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**click_attribution_window** | **string** | Defaults to value from campaign or one of \&quot;7D\&quot;, \&quot;14D\&quot;, or \&quot;30D\&quot;. If specified, viewAttributionWindow must also be specified | [optional]
**end_date** | [**\DateTime**](\DateTime.md) | YYYY-MM-DD, must not be before startDate and not more than 100 days later |
**format** | **string** | One of \&quot;json\&quot; (default),\&quot;json-compact\&quot;,\&quot;json-newline\&quot; or \&quot;csv\&quot; | [optional] [default to FORMAT_JSON]
**id** | **string** | The id of the campaign or line item.  Either &#39;id&#39; or &#39;ids&#39; must be specified, but not both | [optional]
**ids** | **string[]** | The ids of the campaigns or line items.  Either &#39;id&#39; or &#39;ids&#39; must be specified, but not both | [optional]
**report_type** | **string** | One of \&quot;summary\&quot;, \&quot;keyword\&quot;, \&quot;pageType\&quot;, \&quot;productCategory\&quot;, \&quot;product\&quot;, or \&quot;attributedTransactions\&quot; |
**start_date** | [**\DateTime**](\DateTime.md) | YYYY-MM-DD |
**time_zone** | **string** |  | [optional]
**view_attribution_window** | **string** | Defaults to value from campaign or one of \&quot;none\&quot;, \&quot;1D\&quot;, \&quot;7D\&quot;, \&quot;14D\&quot;, or \&quot;30D\&quot;. If specified, must be less than clickAttributionWindow, which must also be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
