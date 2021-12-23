# # ProductsCustomBatchRequestEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_id** | **int** | An entry ID, unique within the batch request. | [optional]
**merchant_id** | **int** | The ID of the managing account. Criteo: the partnerId. |
**method** | **string** | The method of the batch entry. |
**product_id** | **string** | The Product ID to delete. Only defined if the method is delete. | [optional]
**product** | [**\criteo\api\marketingsolutions\preview\Model\Product**](Product.md) |  | [optional]
**feed_id** | **string** | Not used by Criteo. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
