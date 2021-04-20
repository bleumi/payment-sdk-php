# # PaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the request | [optional]
**currency** | **string** | Must be a non-sanctioned country from /v1/data/countries | [optional]
**payment_url** | **string** | Hosted checkout URL, redirect buyers to this URL to initiate payment | [optional]
**created_at** | **float** | Unix timestamp when payment request was created | [optional]
**updated_at** | **float** | Unix timestamp when payment request was updated | [optional]
**record** | [**\Bleumi\Payment\Model\Record**](Record.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
