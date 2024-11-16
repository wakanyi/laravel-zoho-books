<?php

namespace Sumer5020\ZohoBooks\Rules\Estimate;

class UpdateEstimateTemplateEstimateRule
{
    public static function rules(): array
    {
        return [
            'estimate_id' => 'required|string',
            'template_id' => 'required|string',
        ];
    }
}