# # VastTagAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**has_vpaid** | **bool** | Whether the tag contains a VPAID unit (vpaid y/n). Derived from the tag. VPAID is a deprecated  interactivity standard; this flag is recorded for information but interactive playback is not guaranteed. | [optional]
**is_skippable** | **bool** | Whether the video is skippable. Derived from the tag. | [optional]
**mime_types** | **string[]** | The supported media-file mime types (e.g. \&quot;video/mp4\&quot;). Derived from the tag. | [optional]
**vast_tag_url** | **string** | The VAST tag URL (a hosted VAST XML endpoint). | [optional]
**vast_version** | **string** | The VAST version declared by the tag (e.g. \&quot;4.2\&quot;). Derived from the tag. | [optional]
**video_duration_ms** | **float** | The video duration in milliseconds. Derived from the tag. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
