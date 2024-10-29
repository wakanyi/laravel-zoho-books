<?php

namespace Sumer5020\ZohoBooks\Rules\Contact;

class DeleteAdditionalAddressContactRule
{
    public static function rules(): array
    {
        return [
            'contact_id' => 'required|string',
            'address_id' => 'required|string',
        ];
    }
}