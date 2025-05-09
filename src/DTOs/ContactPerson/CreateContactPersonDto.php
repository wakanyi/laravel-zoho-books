<?php

namespace Sumer5020\ZohoBooks\DTOs\ContactPerson;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class CreateContactPersonDto extends Dto
{
    use WithToArray;

    /** @var string Contact ID of the related contact */
    private string $contact_id;

    /** @var string Salutation for the contact person (max-length: 25) */
    private string $salutation;

    /** @var string First name of the contact person (max-length: 100) */
    private string $first_name;

    /** @var string Last name of the contact person (max-length: 100) */
    private string $last_name;

    /** @var string Email address of the contact person (max-length: 100) */
    private string $email;

    /** @var string Phone number of the contact person (max-length: 50) */
    private string $phone;

    /** @var string Mobile number of the contact person (max-length: 50) */
    private string $mobile;

    /** @var string Skype address of the contact person (max-length: 50) */
    private string $skype;

    /** @var string Designation of the contact person (max-length: 50) */
    private string $designation;

    /** @var string Department of the contact person (max-length: 50) */
    private string $department;

    /** @var bool Option to enable the portal access */
    private bool $enable_portal;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->contact_id = $data['contact_id'] ?? '';
        $this->salutation = $data['salutation'] ?? '';
        $this->first_name = $data['first_name'] ?? '';
        $this->last_name = $data['last_name'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->phone = $data['phone'] ?? '';
        $this->mobile = $data['mobile'] ?? '';
        $this->enable_portal = $data['enable_portal'] ?? false;
        $this->skype = $data['skype'] ?? '';
        $this->designation = $data['designation'] ?? '';
        $this->department = $data['department'] ?? '';
    }
}
