# # ReportStatusAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | [**\DateTime**](\DateTime.md) | Timestamp when the report started to execute | [optional]
**expires_at** | [**\DateTime**](\DateTime.md) | Timestamp when the cached report will expire | [optional]
**file_size_bytes** | **int** | Total size of file, only populated on success | [optional]
**md5_checksum** | **string** | The MD5 checksum of the content, only populated on success | [optional]
**message** | **string** | Failure message, only populated on failure | [optional]
**row_count** | **int** | Rows of data in report, only populated on success | [optional]
**status** | **string** | One of \&quot;pending\&quot;, \&quot;success\&quot;, \&quot;failure\&quot;, or \&quot;expired\&quot; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
