<?php

namespace Sumer5020\ZohoBooks\DTOs\Contact;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class DeleteAdditionalAddressContactDto extends Dto
{
    use WithToArray;

    /** @var string ID of the contact */
    private string $contact_id;

    /** @var string ID of the contact address */
    private string $address_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->contact_id = $data['contact_id'] ?? '';
        $this->address_id = $data['address_id'] ?? '';
    }

    public function getContactId(): string
    {
        return $this->contact_id;
    }

    public function getAddressId(): string
    {
        return $this->address_id;
    }
}
