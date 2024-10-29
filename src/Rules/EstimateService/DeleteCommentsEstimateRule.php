<?php

namespace Sumer5020\ZohoBooks\Rules\EstimateService;

class DeleteCommentsEstimateRule
{
    public static function rules(): array
    {
        return [
            'estimate_id' => 'required|string',
            'comment_id' => 'required|string',
        ];
    }
}