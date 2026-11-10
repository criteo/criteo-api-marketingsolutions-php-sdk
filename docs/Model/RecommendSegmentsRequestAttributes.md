# # RecommendSegmentsRequestAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advertiser_id** | **string** | [Optional] AdvertiserId this requestor has access to. | [optional]
**brief** | **string** | A freeform audience description. |
**country** | **string** | [Optional] Country code. Must be a supported country. When &#x60;advertiserId&#x60; is set, it must also match the country of the advertiser. | [optional]
**nb_segments** | **int** | Number of segments to recommend, between 1 and 20 (default to 5). | [optional] [default to 5]
**segment_status_to_recommend** | **string** | [Optional] Recommend only existing segments or suggest the new ones. Default to new. | [optional] [default to 'new']
**segment_types_to_recommend** | **string[]** | [Optional] Restrict the recommended segment types. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
