<?php

namespace Sumer5020\ZohoBooks\DTOs\ContactPerson;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class GetContactPersonDto extends Dto
{
    use WithToArray;

    /** @var string Contact ID of the related contact */
    private string $contact_id;

    /** @var string Contact person ID */
    private string $contact_person_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->contact_id = $data['contact_id'] ?? '';
        $this->contact_person_id = $data['contact_person_id'] ?? '';
    }

    /**
     * @return string
     */
    public function getContactId(): string
    {
        return $this->contact_id;
    }

    /**
     * @return string
     */
    public function getContactPersonId(): string
    {
        return $this->contact_person_id;
    }

}
