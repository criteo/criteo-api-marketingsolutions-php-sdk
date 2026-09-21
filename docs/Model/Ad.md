# # Ad

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_click_tracking** | [**\criteo\api\marketingsolutions\preview\Model\ExamAdClickTracking[]**](ExamAdClickTracking.md) | Optional ad-level click tracking configuration. | [optional]
**ad_delivery_status** | **string** | The delivery status of the ad. Possible values are \&quot;Live\&quot; and \&quot;Paused\&quot;. This is read-only: use the  dedicated pause and unpause operations to change it. | [optional]
**ad_impression_tracking** | [**\criteo\api\marketingsolutions\preview\Model\ExamAdImpressionTracking[]**](ExamAdImpressionTracking.md) | Optional ad-level impression tracking configuration. | [optional]
**ad_set_id** | **string** | The id of the Ad Set binded to this Ad | [optional]
**creative_id** | **string** | The id of the Creative binded to this Ad | [optional]
**description** | **string** | The description of the ad | [optional]
**end_date** | **string** | The date when when we will stop to show this ad. If the end date is not specified (i.e. null) then the ad will go on forever  String must be in ISO8601 format | [optional]
**id** | **string** |  | [optional]
**inventory_type** | **string** | The inventory the Ad belongs to. Possible values are \&quot;Display\&quot;, \&quot;Native\&quot;, \&quot;Video\&quot; and \&quot;Meta\&quot;. This is  optional since it doesn&#39;t make sense for every creative type: it is inferred from the creative for a  video creative, and an error is returned if it is not set for a dynamic creative. | [optional]
**name** | **string** | The name of the ad | [optional]
**start_date** | **string** | The date when the ad will be launched  String must be in ISO8601 format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
