# # AdaptiveAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**layouts** | **string[]** | The Adaptive layouts that are enabled.  It can contain any of the following values: \&quot;Editorial\&quot;, “Montage“, \&quot;InBannerVideo\&quot;. |
**logos** | [**\criteo\api\marketingsolutions\v2023_07\Model\ImageShape[]**](ImageShape.md) | Logo images uploaded on demostatic.criteo.com when deploying and then static.criteo.net |
**headline_text** | **string** | The headline text of the banner |
**headline_font** | **string** | Font of the headline  Valid supported font like \&quot;Arial\&quot; |
**description_text** | **string** | The description text of the banner |
**description_font** | **string** | Font of the description  Valid supported font like \&quot;Arial\&quot; |
**calls_to_action** | **string[]** | A Call-to-Action (CTA) is an action-driven instruction to your audience intended to provoke an immediate  response, such as “Buy now” or “Go!”. |
**colors** | [**\criteo\api\marketingsolutions\v2023_07\Model\AdaptiveColors**](AdaptiveColors.md) |  |
**image_sets** | [**\criteo\api\marketingsolutions\v2023_07\Model\ImageSet[]**](ImageSet.md) | Multiple image sets, each image set consists of multiple images and a headline text. | [optional]
**image_display** | **string** | Value can be \&quot;ShowFullImage\&quot; or \&quot;ZoomOnImage\&quot;. Choose whether your image set should fit inside the allocated  space (\&quot;ShowFullImage\&quot;) or whether it should fill that space (\&quot;ZoomOnImage\&quot;). If you choose ZoomOnImage, there may be some  image cropping. | [optional]
**videos** | [**\criteo\api\marketingsolutions\v2023_07\Model\VideoDetail[]**](VideoDetail.md) | Multiple videos potentially in different shapes. | [optional]
**landing_page_url** | **string** | Web redirection of the landing page url |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
