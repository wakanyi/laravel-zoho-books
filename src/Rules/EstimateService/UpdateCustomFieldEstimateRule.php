<?php

namespace Sumer5020\ZohoBooks\Rules\EstimateService;

class UpdateCustomFieldEstimateRule
{
    public static function rules(): array
    {
        return [
            'estimate_id' => 'required|string',
            'customfield_id' => 'sometimes|numeric',
            'value' => 'sometimes|string',
        ];
    }
}