# # OnSiteRecoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nb_requested_products** | **int** | Amount of products to recommend. |
**user_id** | **string** | Used to retrieve user events from Criteo trackers. Optional if UserEvents are passed. | [optional]
**user_events** | [**\criteo\api\marketingsolutions\preview\Model\UserEvent[]**](UserEvent.md) | Used to perform a recommendation without relying on events stored for a UserId. Optional if UserId is passed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
