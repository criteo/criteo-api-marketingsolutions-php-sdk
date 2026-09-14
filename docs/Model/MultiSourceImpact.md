# # MultiSourceImpact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**products_enriched** | **int** | Products where at least one missing attribute was filled. Not exclusive with productsModified: a product can be both enriched and modified. | [optional]
**products_evaluated** | **int** | Total products considered for Multi-Source enrichment. | [optional]
**products_matched** | **int** | Products matched with at least one additional source using the matching keys. | [optional]
**products_modified** | **int** | Products where an existing value was overridden. | [optional]
**products_unmatched** | **int** | Products not matched with any additional source. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
