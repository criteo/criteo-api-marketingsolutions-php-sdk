# # ExamAdClickTracking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**binding_id** | **string** | Unique ID of the ad the rule belongs to. It always names the ad of the request path, so it can be left  out of a write; when it is sent it must match that ad, and a rule naming another one is refused. | [optional]
**click_zone** | **string** | The banner zone this rule applies to. Leave it out for a rule that is not specific to a zone.  Possible values are \&quot;AppInstall\&quot;, \&quot;Coupon\&quot;, \&quot;Logo\&quot;, \&quot;Main\&quot;, \&quot;Product\&quot;, \&quot;Store\&quot;, \&quot;Video\&quot; and  \&quot;BrandingImage\&quot;. | [optional]
**disable_for_coupons** | **bool** | Whether this rule is skipped for clicks on coupons. | [optional]
**disable_landing_url_encode** | **bool** | Whether the landing url is left unencoded when it is substituted into the tracking url. | [optional]
**disable_macro_url_encode** | **bool** | Whether url macros are left unencoded when they are substituted into the tracking url. | [optional]
**display_height** | **int** | The height in pixels of the display size this rule applies to. Set it together with displayWidth, and  leave both out for a rule that is not specific to a display size. | [optional]
**display_width** | **int** | The width in pixels of the display size this rule applies to. Set it together with displayHeight, and  leave both out for a rule that is not specific to a display size. | [optional]
**id** | **string** | Unique ID of the click tracking rule. Leave it out to create a rule; send back the ID of an existing  rule to update it. Rules of the ad that are absent from a write request are deleted. | [optional]
**url_prefix** | **string** | The url prepended to the landing url of the clicks this rule covers. | [optional]
**url_suffix** | **string** | The url appended to the landing url of the clicks this rule covers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
