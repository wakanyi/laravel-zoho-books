<?php

namespace Sumer5020\ZohoBooks\Rules\Contact;

class EmailContactRule
{
    public static function rules(): array
    {
        return [
            'contact_id' => 'required|string',
            'to_mail_ids' => 'required|array',
            'subject' => 'required|string|max:1000',
            'body' => 'required|string|max:5000',
            'attachments' => 'sometimes|string',
        ];
    }
}