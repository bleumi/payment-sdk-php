# # Record

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charges_type** | **string** |  | [optional]
**basics** | [**\Bleumi\Payment\Model\RecordBasics**](RecordBasics.md) |  | [optional]
**client_info** | [**\Bleumi\Payment\Model\AddressInfo**](AddressInfo.md) |  | [optional]
**my_info** | [**\Bleumi\Payment\Model\AddressInfo**](AddressInfo.md) |  | [optional]
**billing_info** | [**\Bleumi\Payment\Model\AddressInfo**](AddressInfo.md) |  | [optional]
**amt_due** | **string** | Amount remaining to be paid | [optional]
**amt_recv** | **string** | Total amount received, includes amt_recv_offline, amt_recv_online and amt_recv_online_pending | [optional]
**amt_recv_offline** | **string** | Amount received outside of Bleumi&#39;s hosted checkout | [optional]
**amt_recv_online** | **string** | Amount received | [optional]
**amt_recv_online_pending** | **string** | Amount received but not confirmed | [optional]
**amt_recv_online_map** | **object** | Amount received split by gateway | [optional]
**line_item** | [**\Bleumi\Payment\Model\LineItem[]**](LineItem.md) |  | [optional]
**subtotal** | **string** |  | [optional]
**round_off** | **string** |  | [optional]
**total** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
