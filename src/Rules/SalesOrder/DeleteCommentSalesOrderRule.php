<?php

namespace Sumer5020\ZohoBooks\Rules\SalesOrder;

class DeleteCommentSalesOrderRule
{
    public static function rules(): array
    {
        return [
            'salesorder_id' => 'required|string',
            'comment_id' => 'required|string',
        ];
    }
}