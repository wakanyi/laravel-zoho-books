<?php

namespace Sumer5020\ZohoBooks\Rules\Estimate;

class AddCommentsEstimateRule
{
    public static function rules(): array
    {
        return [
            'estimate_id' => 'required|string',
            'description' => 'sometimes|string',
            'show_comment_to_clients' => 'sometimes|boolean|in:true,false',
        ];
    }
}