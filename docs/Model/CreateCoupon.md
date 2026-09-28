# # CreateCoupon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_set_id** | **string** | The id of the Ad Set on which the Coupon is applied to |
**description** | **string** | The description of the Coupon | [optional]
**end_date** | **string** | The date when we will stop showing this coupon, which must come after the start date. If the  end date is not specified (i.e. null) then the coupon will go on forever.  String must be in ISO8601 format, more precisely \&quot;yyyy-MM-ddTHH:mm:ss.fffZ\&quot;: a UTC timestamp whose  three millisecond digits and trailing \&quot;Z\&quot; are both required, for example \&quot;2026-10-01T09:00:00.000Z\&quot;.  No other ISO8601 layout is accepted, neither a UTC offset such as \&quot;2026-10-01T11:00:00+02:00\&quot; nor a  second-precision \&quot;2026-10-01T09:00:00Z\&quot;.  A date that does not fall on a whole hour is rounded up to the next one, so  \&quot;2026-10-01T09:30:00.000Z\&quot; is stored as \&quot;2026-10-01T10:00:00.000Z\&quot;. | [optional]
**format** | **string** | Format of the Coupon, it can have two values: \&quot;FullFrame\&quot; or \&quot;LogoZone\&quot; |
**id** | **string** |  | [optional]
**images** | [**\criteo\api\marketingsolutions\experimental\Model\CreateImageSlide[]**](CreateImageSlide.md) | List of slides containing the images as a base-64 encoded string |
**landing_page_url** | **string** | Web redirection of the landing page url |
**name** | **string** | The name of the Coupon |
**rotations_number** | **int** | Number of rotations for the Coupons (from 1 to 10 times) |
**show_duration** | **int** | Show Coupon for a duration of N seconds (between 1 and 5) |
**show_every** | **int** | Show the Coupon every N seconds (between 1 and 10) |
**start_date** | **string** | The date when the coupon will be launched. It must be a date in the future.  String must be in ISO8601 format, more precisely \&quot;yyyy-MM-ddTHH:mm:ss.fffZ\&quot;: a UTC timestamp whose  three millisecond digits and trailing \&quot;Z\&quot; are both required, for example \&quot;2026-10-01T09:00:00.000Z\&quot;.  No other ISO8601 layout is accepted, neither a UTC offset such as \&quot;2026-10-01T11:00:00+02:00\&quot; nor a  second-precision \&quot;2026-10-01T09:00:00Z\&quot;.  A date that does not fall on a whole hour is rounded up to the next one, so  \&quot;2026-10-01T09:30:00.000Z\&quot; is stored as \&quot;2026-10-01T10:00:00.000Z\&quot;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
