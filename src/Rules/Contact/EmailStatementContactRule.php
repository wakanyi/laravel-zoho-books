<?php

namespace Sumer5020\ZohoBooks\Rules\Contact;

class EmailStatementContactRule
{
    public static function rules(): array
    {
        return [
            'contact_id' => 'required|string',
            'send_from_org_email_id' => 'sometimes|boolean|in:true,false',
            'to_mail_ids' => 'required|array',
            'cc_mail_ids' => 'sometimes|array',
            'subject' => 'required|string|max:1000',
            'body' => 'required|string|max:5000',
        ];
    }
}