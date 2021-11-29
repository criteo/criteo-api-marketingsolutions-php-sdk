# # ExternalAuctionLineItemCreateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**start_date** | [**\DateTime**](\DateTime.md) | Represents the Date as a year, month, and day in the format YYYY-MM-DD |
**end_date** | [**\DateTime**](\DateTime.md) | Represents the Date as a year, month, and day in the format YYYY-MM-DD | [optional]
**status** | **string** |  | [optional]
**target_retailer_id** | **string** |  |
**budget** | **float** |  | [optional]
**target_bid** | **float** |  | [optional]
**max_bid** | **float** |  | [optional]
**monthly_pacing** | **float** |  | [optional]
**daily_pacing** | **float** |  | [optional]
**is_auto_daily_pacing** | **bool** |  | [optional] [default to false]
**bid_strategy** | **string** |  | [optional] [default to BID_STRATEGY_CONVERSION]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
