# # OnSiteRecoRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nb_requested_products** | **int** | Amount of products to recommend. |
**user_id** | **string** | Used to retrieve user events from Criteo trackers. | [optional]
**identity_type** | **string** | Type of the user identifier (CtoBundle, Idfa, Gaid...)  Optional if its type is CtoBundle | [optional]
**ad_set_id** | **int** | Id of the AdSet. This field is optional and is resolved automatically for adsets previously configured. | [optional]
**ad_id** | **int** | Id of the Ad. This field is optional, it allows to setup Reco controls at Ad level. | [optional]
**partner_id** | **int** | Id of the partner. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
