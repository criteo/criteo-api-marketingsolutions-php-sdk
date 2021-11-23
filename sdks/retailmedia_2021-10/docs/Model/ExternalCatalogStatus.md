# # ExternalCatalogStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | An enumeration of the status of the catalog. |
**currency** | **string** | An ISO4217 representation of the currency products are listed under in this catalog. |
**row_count** | **int** | An indication of the number of products contained in this catalog. Available when  this catalog reaches a success status. |
**file_size_bytes** | **int** | The size of this catalog in bytes. Available when this catalog reaches a success status. |
**md5_checksum** | **string** | An MD5 checksum of the catalog for use in confirming complete and uncorrupted retrieval.  Available when this catalog reaches a success status. |
**created_at** | [**\DateTime**](\DateTime.md) | The time this catalog was created. Represented as a UTC ISO8601 string. |
**message** | **string** | An optional information message intended for developer consumption. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
