<?php

namespace Sumer5020\ZohoBooks\DTOs\Contact;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class EnablePortalAccessContactDto extends Dto
{
    use WithToArray;

    /** @var string Contact id */
    private string $contact_id;

    /** @var array Contact persons */
    private array $contact_persons;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->contact_id = $data['contact_id'] ?? '';
        $this->contact_persons = $data['contact_persons'] ?? [];
    }

    public function getContactPersons(): array
    {
        return $this->contact_persons;
    }

    public function getContactId(): string
    {
        return $this->contact_id;
    }
}
