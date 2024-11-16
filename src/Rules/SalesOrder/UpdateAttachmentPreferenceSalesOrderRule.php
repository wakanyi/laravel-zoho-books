<?php

namespace Sumer5020\ZohoBooks\Rules\SalesOrder;

class UpdateAttachmentPreferenceSalesOrderRule
{
    public static function rules(): array
    {
        return [
            'can_send_in_mail' => 'required|boolean|in:true,false',
        ];
    }
}