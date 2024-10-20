<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class ContactPersonDTO
 * Data Transfer Object for a Contact Person.
 */
class ContactPersonDto
{
    /** @var string Contact ID of the related contact */
    public string $contact_id;

    /** @var string ID of the contact person */
    public string $contact_person_id;

    /** @var string Salutation for the contact person (max-length: 25) */
    public string $salutation;

    /** @var string First name of the contact person (max-length: 100) */
    public string $first_name;

    /** @var string Last name of the contact person (max-length: 100) */
    public string $last_name;

    /** @var string Email address of the contact person (max-length: 100) */
    public string $email;

    /** @var string Phone number of the contact person (max-length: 50) */
    public string $phone;

    /** @var string Mobile number of the contact person (max-length: 50) */
    public string $mobile;

    /** @var bool Whether the contact person is the primary contact for the related contact */
    public bool $is_primary_contact;

    /** @var string Skype address of the contact person (max-length: 50) */
    public string $skype;

    /** @var string Designation of the contact person (max-length: 50) */
    public string $designation;

    /** @var string Department of the contact person (max-length: 50) */
    public string $department;

    /** @var bool Whether the contact person has portal access */
    public bool $is_added_in_portal;

    /**
     * ContactPersonDTO constructor.
     *
     * @param array $data Data to initialize the Contact Person DTO.
     */
    public function __construct(array $data)
    {
        $this->contact_id = $data['contact_id'] ?? '';
        $this->contact_person_id = $data['contact_person_id'] ?? '';
        $this->salutation = $data['salutation'] ?? '';
        $this->first_name = $data['first_name'] ?? '';
        $this->last_name = $data['last_name'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->phone = $data['phone'] ?? '';
        $this->mobile = $data['mobile'] ?? '';
        $this->is_primary_contact = $data['is_primary_contact'] ?? false;
        $this->skype = $data['skype'] ?? '';
        $this->designation = $data['designation'] ?? '';
        $this->department = $data['department'] ?? '';
        $this->is_added_in_portal = $data['is_added_in_portal'] ?? false;
    }
}
