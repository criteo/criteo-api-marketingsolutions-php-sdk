# # AdWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_click_tracking** | [**\criteo\api\marketingsolutions\preview\Model\ExamAdClickTracking[]**](ExamAdClickTracking.md) | Optional ad-level click tracking configuration. | [optional]
**ad_impression_tracking** | [**\criteo\api\marketingsolutions\preview\Model\ExamAdImpressionTracking[]**](ExamAdImpressionTracking.md) | Optional ad-level impression tracking configuration. | [optional]
**ad_set_id** | **string** | The id of the Ad Set bound to this Ad |
**creative_id** | **string** | The id of the Creative bound to this Ad |
**description** | **string** | The description of the ad | [optional]
**end_date** | **string** | The date when we will stop showing this ad, which must come after the start date. If the end  date is not specified (i.e. null) then the ad will go on forever.  String must be in ISO8601 format, more precisely \&quot;yyyy-MM-ddTHH:mm:ss.fffZ\&quot;: a UTC timestamp whose  three millisecond digits and trailing \&quot;Z\&quot; are both required, for example \&quot;2026-10-01T09:30:00.000Z\&quot;.  No other ISO8601 layout is accepted, neither a UTC offset such as \&quot;2026-10-01T11:30:00+02:00\&quot; nor a  second-precision \&quot;2026-10-01T09:30:00Z\&quot;. | [optional]
**id** | **string** |  | [optional]
**inventory_type** | **string** | The inventory the Ad to be created or updated belongs to. Possible values are \&quot;Display\&quot;, \&quot;Native\&quot;,  \&quot;Video\&quot; and \&quot;Meta\&quot;. This is optional since it doesn&#39;t make sense for every creative type: it is inferred  from the creative for a video creative, and an error is returned if it is not set for a dynamic creative.  \&quot;Meta\&quot; additionally requires the target ad set to be linked to Meta. | [optional]
**name** | **string** | The name of the ad |
**start_date** | **string** | The date when the ad will be launched. It must be a date in the future.  String must be in ISO8601 format, more precisely \&quot;yyyy-MM-ddTHH:mm:ss.fffZ\&quot;: a UTC timestamp whose  three millisecond digits and trailing \&quot;Z\&quot; are both required, for example \&quot;2026-10-01T09:30:00.000Z\&quot;.  No other ISO8601 layout is accepted, neither a UTC offset such as \&quot;2026-10-01T11:30:00+02:00\&quot; nor a  second-precision \&quot;2026-10-01T09:30:00Z\&quot;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
