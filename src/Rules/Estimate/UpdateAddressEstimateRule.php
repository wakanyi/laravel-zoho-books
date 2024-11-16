<?php

namespace Sumer5020\ZohoBooks\Rules\Estimate;

class UpdateAddressEstimateRule
{
    public static function rules(): array
    {
        return [
            'estimate_id' => 'required|string',
            'address' => 'sometimes|string',
            'city' => 'sometimes|string',
            'state' => 'sometimes|string',
            'zip' => 'sometimes|string',
            'country' => 'sometimes|string',
            'fax' => 'sometimes|string',
        ];
    }
}