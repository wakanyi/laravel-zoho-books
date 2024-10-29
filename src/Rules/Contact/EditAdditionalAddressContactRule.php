<?php

namespace Sumer5020\ZohoBooks\Rules\Contact;

class EditAdditionalAddressContactRule
{
    public static function rules(): array
    {
        return [
            'contact_id' => 'required|string',
            'address_id' => 'required|string',
            'attention' => 'sometimes|string',
            'address' => 'sometimes|string|max:500',
            'street2' => 'sometimes|string',
            'city' => 'sometimes|string',
            'state' => 'sometimes|string',
            'zip' => 'sometimes|string',
            'country' => 'sometimes|string',
            'fax' => 'sometimes|string',
            'phone' => 'sometimes|string',
        ];
    }
}