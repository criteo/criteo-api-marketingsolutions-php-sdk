# # OnSiteRecoRequestConversational

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_id** | **int** | Id of the Ad. This field is optional, it allows to setup Reco controls at Ad level. | [optional]
**ad_set_id** | **int** | Id of the AdSet. This field is optional and is resolved automatically for adsets previously configured. |
**conversation** | [**\criteo\api\marketingsolutions\experimental\Model\OnSiteRecoChatMessage[]**](OnSiteRecoChatMessage.md) | Conversation between the user and the agent. |
**identity_type** | **string** | Type of the user identifier (CtoBundle, Idfa, Gaid, AgenticUserId...) Optional if its type is CtoBundle | [optional]
**nb_requested_products** | **int** | Amount of products to recommend. |
**partner_id** | **int** | Id of the partner. |
**product** | [**\criteo\api\marketingsolutions\experimental\Model\ProductContext**](ProductContext.md) |  | [optional]
**user_id** | **string** | One user identifier: a Criteo bundle, GAID, IDFA, internal user id, or an agentic partner user id. |
**user_id_origin** | **string** | When IdentityType is AgenticUserId, the issuer should recognize themselves with their organization name issued by Criteo. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
