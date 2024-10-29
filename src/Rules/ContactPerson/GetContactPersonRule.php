<?php

namespace Sumer5020\ZohoBooks\Rules\ContactPerson;

class GetContactPersonRule
{
    public static function rules(): array
    {
        return [
            'contact_id' => 'required|string',
            'contact_person_id' => 'required|string',
        ];
    }
}