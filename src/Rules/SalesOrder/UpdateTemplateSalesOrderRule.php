<?php

namespace Sumer5020\ZohoBooks\Rules\SalesOrder;

class UpdateTemplateSalesOrderRule
{
    public static function rules(): array
    {
        return [
            'salesorder_id' => 'required|string',
            'template_id' => 'required|string',
        ];
    }
}