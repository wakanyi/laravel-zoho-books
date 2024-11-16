<?php

namespace Sumer5020\ZohoBooks\Rules\SalesOrder;

class MarkAsVoidSalesOrderRule
{
    public static function rules(): array
    {
        return [
            'salesorder_id' => 'required|numeric',
            'from_address_id' => 'sometimes|string',
            'send_from_org_email_id' => 'sometimes|boolean|in:true,false',
            'to_mail_ids' => 'required|array',
            'cc_mail_ids' => 'sometimes|array',
            'bcc_mail_ids' => 'sometimes|array',
            'subject' => 'required|string',
            'documents' => 'sometimes|string',
            'invoice_id' => 'sometimes|string',
            'body' => 'required|string',
        ];
    }
}