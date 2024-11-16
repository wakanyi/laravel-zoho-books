<?php

namespace Sumer5020\ZohoBooks\Rules\SalesOrder;

class UpdateCustomFieldSalesOrderRule
{
    public static function rules(): array
    {
        return [
            'salesorder_id' => 'required|numeric',
            'index' => 'sometimes|numeric',
            'value' => 'sometimes|string',
            'label' => 'sometimes|string',
        ];
    }
}