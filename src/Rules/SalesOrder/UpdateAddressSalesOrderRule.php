<?php

namespace Sumer5020\ZohoBooks\Rules\SalesOrder;

class UpdateAddressSalesOrderRule
{
    public static function rules(): array
    {
        return [
            'salesorder_id' => 'required|string',
            'address' => 'sometimes|string',
            'city' => 'sometimes|string',
            'zip' => 'sometimes|string',
            'country' => 'sometimes|string',
            'phone' => 'sometimes|string',
            'fax' => 'sometimes|string',
            'attention' => 'sometimes|string',
            'is_one_off_address' => 'sometimes|boolean|in:true,false',
            'is_update_customer' => 'sometimes|boolean|in:true,false',
            'is_verified' => 'sometimes|boolean|in:true,false',
        ];
    }
}