<?php

namespace Sumer5020\ZohoBooks\Rules\EstimateService;

class EmailEstimateRule
{
    public static function rules(): array
    {
        return [
            'estimate_id' => 'required|string',
            'send_from_org_email_id' => 'sometimes|boolean|in:true,false',
            'to_mail_ids' => 'required|array',
            'cc_mail_ids' => 'sometimes|array',
            'subject' => 'sometimes|string',
            'body' => 'sometimes|string',
        ];
    }
}