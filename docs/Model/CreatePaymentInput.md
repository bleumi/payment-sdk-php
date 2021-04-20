# # CreatePaymentInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the request |
**currency** | **string** | Must be a non-sanctioned country from /v1/data/countries |
**invoice_date** | **int** | Number like YYYMMDD |
**allow_partial_payments** | **bool** | Allow the user to make payment in parts | [optional] [default to false]
**metadata** | [**\Bleumi\Payment\Model\CreatePaymentInputMetadata**](CreatePaymentInputMetadata.md) |  | [optional]
**success_url** | **string** | User will be redirected to this URL after completing the payment | [optional]
**cancel_url** | **string** | User will be redirected to this URL if they want to abort the payment | [optional]
**notify_url** | **string** | The URL will receive a JSON POST for each update to the payment request | [optional]
**record** | [**\Bleumi\Payment\Model\RecordInput**](RecordInput.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
