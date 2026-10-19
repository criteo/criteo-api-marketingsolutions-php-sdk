# # RecommendSegmentsRequestAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advertiser_id** | **string** | Advertiser ID the caller has access to. | [optional]
**brief** | **string** | A freeform audience description. |
**nb_segments** | **int** | Number of segments to recommend, between 1 and 20 (defaults to 5). | [optional] [default to 5]
**segment_status_to_recommend** | **string** | Recommend existing segments or suggest new ones. | [optional] [default to 'new']
**segment_types_to_recommend** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
