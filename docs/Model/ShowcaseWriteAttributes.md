# # ShowcaseWriteAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**android_deeplink_url** | **string** | Android deep-link URL. | [optional]
**app_link_url** | **string** | App link URL (Android fallback). | [optional]
**branding_image_base64_strings** | [**\criteo\api\marketingsolutions\experimental\Model\BrandingImageInput[]**](BrandingImageInput.md) | Branding images as base-64 encoded strings with their shape. | [optional]
**branding_image_click_url** | **string** | Click URL associated with the branding images. | [optional]
**calls_to_action** | **string[]** | A Call-to-Action (CTA) is an action-driven instruction to your audience intended to provoke an immediate  response, such as \&quot;Buy now\&quot; or \&quot;Go!\&quot;. |
**colors** | [**\criteo\api\marketingsolutions\experimental\Model\ShowcaseColors**](ShowcaseColors.md) |  |
**ios_deeplink_url** | **string** | iOS deep-link URL. | [optional]
**landing_page_url** | **string** | Web redirection of the landing page URL. | [optional]
**layouts** | **string[]** | The layouts to enable for this Showcase creative.  Possible values include \&quot;Showcase\&quot;. |
**logo_base64_strings** | [**\criteo\api\marketingsolutions\experimental\Model\LogoInput[]**](LogoInput.md) | Logo images as base-64 encoded strings with their shape.  At least one logo is required. |
**meta_setting** | [**\criteo\api\marketingsolutions\experimental\Model\ShowcaseMetaSetting**](ShowcaseMetaSetting.md) |  | [optional]
**price_settings** | [**\criteo\api\marketingsolutions\experimental\Model\ShowcasePriceSettings**](ShowcasePriceSettings.md) |  | [optional]
**primary_font** | **string** | Font of the primary font.  Valid supported font like \&quot;Arial\&quot; | [optional]
**product_image_display** | **string** | Value can be \&quot;ShowFullImage\&quot; or \&quot;ZoomOnImage\&quot;. Choose whether your product catalog images should fit inside the allocated  space (\&quot;ShowFullImage\&quot;) or whether they should fill that space (\&quot;ZoomOnImage\&quot;). If you choose ZoomOnImage, there may be some  image cropping. |
**secondary_font** | **string** | Font of the secondary font.  Valid supported font like \&quot;Arial\&quot; | [optional]
**universal_link_url** | **string** | Universal link URL (iOS fallback). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
