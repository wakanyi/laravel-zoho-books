<?php

namespace Sumer5020\ZohoBooks\Rules\SalesOrder;

class UpdateSalesOrderRule
{
    public static function rules(): array
    {
        return [
            'customer_id' => 'required|string',
            'salesorder_id' => 'required|string',
            'currency_id' => 'sometimes|string',
            'contact_persons' => 'sometimes|array',
            'date' => 'sometimes|string',
            'shipment_date' => 'sometimes|string',
            'custom_fields' => 'sometimes|array',
            'place_of_supply' => 'sometimes|string',
            'salesperson_id' => 'sometimes|string',
            'merchant_id' => 'sometimes|string',
            'gst_treatment' => 'sometimes|string',
            'gst_no' => 'sometimes|string',
            'is_inclusive_tax' => 'sometimes|boolean|in:true,false',
            'line_items' => 'sometimes|array',
            'notes' => 'sometimes|string',
            'terms' => 'sometimes|string',
            'billing_address_id' => 'sometimes|string',
            'shipping_address_id' => 'sometimes|string',
            'crm_owner_id' => 'sometimes|string',
            'crm_custom_reference_id' => 'sometimes|string',
            'vat_treatment' => 'sometimes|string',
            'tax_treatment' => 'sometimes|string',
            'is_reverse_charge_applied' => 'sometimes|boolean|in:true,false',
            'salesorder_number' => 'sometimes|string',
            'reference_number' => 'sometimes|string',
            'is_update_customer' => 'sometimes|boolean|in:true,false',
            'discount' => 'sometimes|string',
            'exchange_rate' => 'sometimes|numeric',
            'salesperson_name' => 'sometimes|string',
            'notes_default' => 'sometimes|string',
            'terms_default' => 'sometimes|string',
            'tax_id' => 'sometimes|string',
            'tax_authority_id' => 'sometimes|string',
            'tax_exemption_id' => 'sometimes|string',
            'tax_authority_name' => 'sometimes|string',
            'tax_exemption_code' => 'sometimes|string',
            'avatax_exempt_no' => 'sometimes|string',
            'avatax_use_code' => 'sometimes|string',
            'shipping_charge' => 'sometimes|numeric',
            'adjustment' => 'sometimes|numeric',
            'delivery_method' => 'sometimes|string',
            'estimate_id' => 'sometimes|string',
            'is_discount_before_tax' => 'sometimes|boolean|in:true,false',
            'discount_type' => 'sometimes|string',
            'adjustment_description' => 'sometimes|string',
            'pricebook_id' => 'sometimes|string',
            'template_id' => 'sometimes|string',
            'documents' => 'sometimes|array',
            'zcrm_potential_id' => 'sometimes|string',
            'zcrm_potential_name' => 'sometimes|string',
        ];
    }
}