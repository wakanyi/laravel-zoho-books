<?php

namespace Sumer5020\ZohoBooks\Rules;

use Sumer5020\ZohoBooks\Rules\SalesOrder\AddCommentSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\CreateSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\DeleteCommentSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\GetEmailContentSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\MarkAsVoidSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\UpdateAddressSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\UpdateAttachmentPreferenceSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\UpdateCommentSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\UpdateCustomFieldSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\UpdateSalesOrderRule;
use Sumer5020\ZohoBooks\Rules\SalesOrder\UpdateTemplateSalesOrderRule;

class SalesOrderRule
{
    /**
     * @return array
     */
    public static function toCreate(): array
    {
        return CreateSalesOrderRule::rules();
    }

    public static function toUpdate(): array
    {
        return UpdateSalesOrderRule::rules();
    }

    public static function toUpdateCustomField(): array
    {
        return UpdateCustomFieldSalesOrderRule::rules();
    }

    public static function toMarkAsVoid(): array
    {
        return MarkAsVoidSalesOrderRule::rules();
    }

    public static function toEmailSalesOrder(): array
    {
        return MarkAsVoidSalesOrderRule::rules();
    }

    public static function toGetEmailContentSalesOrder(): array
    {
        return GetEmailContentSalesOrderRule::rules();
    }

    public static function toUpdateAddressSalesOrder(): array
    {
        return UpdateAddressSalesOrderRule::rules();
    }

    public static function toUpdateTemplateSalesOrder(): array
    {
        return UpdateTemplateSalesOrderRule::rules();
    }

    public static function toUpdateAttachmentPreference(): array
    {
        return UpdateAttachmentPreferenceSalesOrderRule::rules();
    }

    public static function toAddComment(): array
    {
        return AddCommentSalesOrderRule::rules();
    }

    public static function toUpdateComment(): array
    {
        return UpdateCommentSalesOrderRule::rules();
    }

    public static function toDeleteComment(): array
    {
        return DeleteCommentSalesOrderRule::rules();
    }
}