<?php

namespace Sumer5020\ZohoBooks\Contracts;

use Sumer5020\ZohoBooks\DTOs\ContactDto;

interface ContactInterface
{

    public function create(string $accessToken, string $organization_id, ContactDto $contactDto): array;

    public function update(string $accessToken, string $organization_id, ContactDto $contactDto): array;
    //List Contacts
    //Update a Contact
    //Get Contact
    //Delete a Contact
    //Mark as Active [contact]
    //Mark as Inactive
    //Enable Portal Access
    //Enable Payment Reminders
    //Disable Payment Reminders
    //Email Statement
    //Get Statement Mail Content
    //Email Contact
    //List Comments
    //Add Additional Address
    //Get Contact Addresses
    //Edit Additional Address
    //Delete Additional Address
    //List Refunds
    //Track 1099
    //Untrack 1099
}
