<?php

namespace Sumer5020\ZohoBooks\Rules\Estimate;

class UpdateEstimateRule
{
    public static function rules(): array
    {
        return [
            'customer_id' => 'required|string',
            'estimate_id' => 'required|string',
            'currency_id' => 'sometimes|string',
            'contact_persons' => 'sometimes|array',
            'template_id' => 'sometimes|string',
            'place_of_supply' => 'sometimes|string',
            'gst_treatment' => 'sometimes|string',
            'gst_no' => 'sometimes|string',
            'estimate_number' => 'sometimes|string',
            'reference_number' => 'sometimes|string',
            'date' => 'sometimes|string',
            'expiry_date' => 'sometimes|string',
            'exchange_rate' => 'sometimes|numeric',
            'discount' => 'sometimes|numeric',
            'is_discount_before_tax' => 'sometimes|boolean|in:true,false',
            'discount_type' => 'sometimes|string',
            'is_inclusive_tax' => 'sometimes|boolean|in:true,false',
            'custom_body' => 'sometimes|string',
            'custom_subject' => 'sometimes|string',
            'salesperson_name' => 'sometimes|string',
            'custom_fields' => 'sometimes|array',
            'line_items' => 'sometimes|array',
            'notes' => 'sometimes|string',
            'terms' => 'sometimes|string',
            'shipping_charge' => 'sometimes|string',
            'adjustment' => 'sometimes|numeric',
            'adjustment_description' => 'sometimes|string',
            'tax_id' => 'sometimes|string',
            'tax_exemption_id' => 'sometimes|string',
            'tax_authority_id' => 'sometimes|string',
            'avatax_use_code' => 'sometimes|string',
            'avatax_exempt_no' => 'sometimes|string',
            'vat_treatment' => 'sometimes|string',
            'tax_treatment' => 'sometimes|string',
            'is_reverse_charge_applied' => 'sometimes|boolean|in:true,false',
            'item_id' => 'sometimes|string',
            'line_item_id' => 'sometimes|string',
            'name' => 'sometimes|string',
            'description' => 'sometimes|string',
            'rate' => 'sometimes|numeric',
            'unit' => 'sometimes|string',
            'quantity' => 'sometimes|numeric',
            'project_id' => 'sometimes|string',
            'accept_retainer' => 'sometimes|boolean|in:true,false',
            'retainer_percentage' => 'sometimes|numeric',
        ];
    }
}
