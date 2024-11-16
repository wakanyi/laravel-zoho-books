<?php

namespace Sumer5020\ZohoBooks\Rules\SalesOrder;

class GetEmailContentSalesOrderRule
{
    public static function rules(): array
    {
        return [
            'salesorder_id' => 'required|numeric',
            'email_template_id' => 'sometimes|string',
        ];
    }
}