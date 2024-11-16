<?php

namespace Sumer5020\ZohoBooks\Rules;

use Sumer5020\ZohoBooks\Rules\Estimate\AddCommentsEstimateRule;
use Sumer5020\ZohoBooks\Rules\Estimate\CreateEstimateRule;
use Sumer5020\ZohoBooks\Rules\Estimate\DeleteCommentsEstimateRule;
use Sumer5020\ZohoBooks\Rules\Estimate\EmailEstimateRule;
use Sumer5020\ZohoBooks\Rules\Estimate\GetEstimateEmailContentEstimateRule;
use Sumer5020\ZohoBooks\Rules\Estimate\UpdateAddressEstimateRule;
use Sumer5020\ZohoBooks\Rules\Estimate\UpdateCommentsEstimateRule;
use Sumer5020\ZohoBooks\Rules\Estimate\UpdateCustomFieldEstimateRule;
use Sumer5020\ZohoBooks\Rules\Estimate\UpdateEstimateRule;
use Sumer5020\ZohoBooks\Rules\Estimate\UpdateEstimateTemplateEstimateRule;

class EstimateRule
{
    /**
     * @return array
     */
    public static function toCreate(): array
    {
        return CreateEstimateRule::rules();
    }

    /**
     * @return array
     */
    public static function toUpdate(): array
    {
        return UpdateEstimateRule::rules();
    }

    public static function toUpdateCustomField(): array
    {
        return UpdateCustomFieldEstimateRule::rules();
    }

    public static function toEmail(): array
    {
        return EmailEstimateRule::rules();
    }

    public static function toGetEstimateEmailContent(): array
    {
        return GetEstimateEmailContentEstimateRule::rules();
    }

    public static function toUpdateAddress(): array
    {
        return UpdateAddressEstimateRule::rules();
    }

    public static function toUpdateEstimateTemplate(): array
    {
        return UpdateEstimateTemplateEstimateRule::rules();
    }

    public static function toAddComments(): array
    {
        return AddCommentsEstimateRule::rules();
    }

    public static function toUpdateComment(): array
    {
        return UpdateCommentsEstimateRule::rules();
    }

    public static function toDeleteComment(): array
    {
        return DeleteCommentsEstimateRule::rules();
    }
}