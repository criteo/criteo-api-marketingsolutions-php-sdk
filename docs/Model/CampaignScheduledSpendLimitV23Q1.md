# # CampaignScheduledSpendLimitV23Q1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier of the scheduled spend limit, for example \&quot;12345\&quot;. | [optional]
**spend_limit_amount** | [**\criteo\api\marketingsolutions\experimental\Model\NillableDecimal**](NillableDecimal.md) |  | [optional]
**spend_limit_renewal** | **string** | The period over which the campaign spend limit is applied.  - \&quot;daily\&quot;, \&quot;monthly\&quot;, and \&quot;lifetime\&quot; are valid when spendLimitType is \&quot;capped\&quot;.  - \&quot;undefined\&quot; is returned when spendLimitType is \&quot;uncapped\&quot;. | [optional]
**spend_limit_type** | **string** | Controls whether the campaign has a spend limit.  - \&quot;capped\&quot;: a spend limit applies, spendLimitAmount.value is non-null, and spendLimitRenewal is \&quot;daily\&quot;, \&quot;monthly\&quot;, or \&quot;lifetime\&quot;.  - \&quot;uncapped\&quot;: no spend limit applies, spendLimitAmount.value is null, and spendLimitRenewal is \&quot;undefined\&quot;. | [optional]
**start_date** | **\DateTime** | Advertiser-local calendar date when the scheduled spend limit becomes active, for example \&quot;2026-08-01\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
