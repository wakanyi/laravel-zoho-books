<?php

namespace Sumer5020\ZohoBooks\Rules;

use Sumer5020\ZohoBooks\Rules\ContactPerson\CreateContactPersonRule;
use Sumer5020\ZohoBooks\Rules\ContactPerson\GetContactPersonRule;
use Sumer5020\ZohoBooks\Rules\ContactPerson\UpdateContactPersonRule;

class ContactPersonRule
{
    /**
     * @return array
     */
    public static function toCreate(): array
    {
        return CreateContactPersonRule::rules();
    }

    /**
     * @return array
     */
    public static function toUpdate(): array
    {
        return UpdateContactPersonRule::rules();
    }

    /**
     * @return array
     */
    public static function toGet(): array
    {
        return GetContactPersonRule::rules();
    }
}