# OrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Order ID | [optional] 
**info_email** | **string** | Customer email | [optional] 
**info_first** | **string** | Customer first name | [optional] 
**info_last** | **string** | Customer last name | [optional] 
**phone** | **string** | Customer phone number | [optional] 
**shipset** | **bool** | Customer billing address matches shipping address | [optional] 
**info_adr1** | **string** | Customer billing address line &#39;1&#39; | [optional] 
**info_adr2** | **string** | Customer billing address line &#39;2&#39; | [optional] 
**info_cty** | **string** | Customer billing city | [optional] 
**info_zip** | **string** | Customer billing zip code | [optional] 
**state** | **string** | Customer billing state | [optional] 
**info_sadr1** | **string** | Customer shipping address line &#39;1&#39; | [optional] 
**info_sadr2** | **string** | Customer shipping address line &#39;2&#39; | [optional] 
**info_scty** | **string** | Customer shipping city | [optional] 
**info_szip** | **string** | Customer shipping zip code | [optional] 
**sstate** | **string** | Customer shipping state | [optional] 
**tax_amount** | **float** | Tax amount in hundreds. Must divide by &#39;100&#39; for USD value | [optional] 
**shipping_amount** | **float** | Shipping total in USD | [optional] 
**amount_total** | **float** | Checkout total in USD | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


