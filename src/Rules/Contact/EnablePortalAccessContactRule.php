<?php

namespace Sumer5020\ZohoBooks\Rules\Contact;

class EnablePortalAccessContactRule
{
    public static function rules(): array
    {
        return [
            'contact_id' => 'required|string',
            'contact_persons' => 'required|array',
        ];
    }
}