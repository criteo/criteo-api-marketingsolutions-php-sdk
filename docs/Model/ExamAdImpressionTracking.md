# # ExamAdImpressionTracking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**binding_id** | **string** | Unique ID of the ad the rule belongs to. It always names the ad of the request path, so it can be left  out of a write; when it is sent it must match that ad, and a rule naming another one is refused. | [optional]
**display_height** | **int** | The height in pixels of the display size this rule applies to. Set it together with displayWidth, and  leave both out for a rule that is not specific to a display size. | [optional]
**display_width** | **int** | The width in pixels of the display size this rule applies to. Set it together with displayHeight, and  leave both out for a rule that is not specific to a display size. | [optional]
**id** | **string** | Unique ID of the impression tracking rule. Leave it out to create a rule; send back the ID of an  existing rule to update it. Rules of the ad that are absent from a write request are deleted. | [optional]
**url** | **string** | The url called when an impression covered by this rule is served. | [optional]
**vendor_id** | **string** | Unique ID of the third party vendor the tracking url belongs to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
