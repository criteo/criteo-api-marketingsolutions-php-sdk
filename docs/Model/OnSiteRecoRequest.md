# # OnSiteRecoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nb_requested_products** | **int** | Amount of products to recommend. |
**user_id** | **string** | Used to retrieve user events from Criteo trackers. Optional if UserEvents are passed. | [optional]
**user_events** | [**\criteo\api\marketingsolutions\preview\Model\UserEvent[]**](UserEvent.md) | Used to perform a recommendation without relying on events stored for a UserId. Optional if UserId is passed. | [optional]
**ad_set_id** | **int** | Id of the AdSet. This field is optional and is resolved automatically for adsets previously configured. | [optional]
**partner_id** | **int** | Id of the partner. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
