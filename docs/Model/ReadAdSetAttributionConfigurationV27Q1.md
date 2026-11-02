# # ReadAdSetAttributionConfigurationV27Q1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attribution_method** | **string** | Ad set attribution method.  This defines how certain events (visits, clicks, sales...) are attributed to the ad set.                Note: Old Google Analytics attribution methods (lastClickGoogleAnalytics &#x3D; 2 and googleAnalyticsDataDriven &#x3D; 3) are not supported anymore. Use the new Google Analytics attribution method instead (googleAnalytics).                Possible values:  - unknown  - criteoAttribution (default attribution method)  - lastClick  - postClick  - sftp  - googleAnalytics (requires Google Analytics integration) | [optional]
**lookback_window** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
