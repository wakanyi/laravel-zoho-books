<?php

namespace Sumer5020\ZohoBooks\Rules\Contact;

use Illuminate\Validation\Rule;
use Sumer5020\ZohoBooks\Enums\AllowedContactLanguageEnum;

class CreateContactRule
{
    public static function rules(): array
    {
        return [
            'contact_name' => 'required|string|max:200',
            'company_name' => 'sometimes|string|max:200',
            'website' => 'sometimes|string',
            'language_code' => ['sometimes', 'string', Rule::enum(AllowedContactLanguageEnum::class)],
            'contact_type' => 'sometimes|string',
            'customer_sub_type' => 'sometimes|string',
            'credit_limit' => 'sometimes|numeric',
            'tags' => 'sometimes|array',
            'is_portal_enabled' => 'sometimes|boolean|in:true,false',
            'currency_id' => 'sometimes|string',
            'payment_terms' => 'sometimes|numeric',
            'payment_terms_label' => 'sometimes|string',
            'notes' => 'sometimes|string',
            'billing_address' => 'sometimes',
            'shipping_address' => 'sometimes',
            'contact_persons' => 'sometimes|array',
            'default_templates' => 'sometimes',
            'custom_fields' => 'sometimes|array',
            'opening_balance_amount' => 'sometimes|numeric',
            'exchange_rate' => 'sometimes|numeric',
            'vat_reg_no' => 'sometimes|string',
            'owner_id' => 'sometimes|string',
            'tax_reg_no' => 'sometimes|string',
            'tax_exemption_certificate_number' => 'sometimes|string',
            'country_code' => 'sometimes|string',
            'vat_treatment' => 'sometimes|string',
            'tax_treatment' => 'sometimes|string',
            'tax_regime' => 'sometimes|string',
            'legal_name' => 'sometimes|string',
            'is_tds_registered' => 'sometimes|boolean|in:true,false',
            'place_of_contact' => 'sometimes|string',
            'gst_no' => 'sometimes|string',
            'gst_treatment' => 'sometimes|string',
            'tax_authority_name' => 'sometimes|string',
            'avatax_exempt_no' => 'sometimes|string',
            'avatax_use_code' => 'sometimes|string',
            'tax_exemption_id' => 'sometimes|string',
            'tax_exemption_code' => 'sometimes|string',
            'tax_authority_id' => 'sometimes|string',
            'tax_id' => 'sometimes|string',
            'tds_tax_id' => 'sometimes|string',
            'is_taxable' => 'sometimes|boolean|in:true,false',
            'facebook' => 'sometimes|string',
            'twitter' => 'sometimes|string',
            'track_1099' => 'sometimes|boolean|in:true,false',
            'tax_id_type' => 'sometimes|string',
            'tax_id_value' => 'sometimes|string',
        ];
    }
}