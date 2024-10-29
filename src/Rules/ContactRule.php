<?php

namespace Sumer5020\ZohoBooks\Rules;

use Sumer5020\ZohoBooks\Rules\Contact\AddAdditionalAddressContactRule;
use Sumer5020\ZohoBooks\Rules\Contact\CreateContactRule;
use Sumer5020\ZohoBooks\Rules\Contact\DeleteAdditionalAddressContactRule;
use Sumer5020\ZohoBooks\Rules\Contact\EditAdditionalAddressContactRule;
use Sumer5020\ZohoBooks\Rules\Contact\EmailContactRule;
use Sumer5020\ZohoBooks\Rules\Contact\EmailStatementContactRule;
use Sumer5020\ZohoBooks\Rules\Contact\EnablePortalAccessContactRule;
use Sumer5020\ZohoBooks\Rules\Contact\UpdateContactRule;

class ContactRule
{
    /**
     * @return array
     */
    public static function toAddAdditionalAddress(): array
    {
        return AddAdditionalAddressContactRule::rules();
    }

    /**
     * @return array
     */
    public static function toCreate(): array
    {
        return CreateContactRule::rules();
    }

    /**
     * @return array
     */
    public static function toDeleteAdditionalAddress(): array
    {
        return DeleteAdditionalAddressContactRule::rules();
    }

    /**
     * @return array
     */
    public static function toEditAdditionalAddress(): array
    {
        return EditAdditionalAddressContactRule::rules();
    }

    /**
     * @return array
     */
    public static function toEmail(): array
    {
        return EmailContactRule::rules();
    }

    /**
     * @return array
     */
    public static function toEmailStatement(): array
    {
        return EmailStatementContactRule::rules();
    }

    /**
     * @return array
     */
    public static function toEnablePortalAccess(): array
    {
        return EnablePortalAccessContactRule::rules();
    }

    /**
     * @return array
     */
    public static function toUpdate(): array
    {
        return UpdateContactRule::rules();
    }
}