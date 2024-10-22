<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class ContactPersonDto
 * Data Transfer Object for a Contact Person.
 */
class ContactPersonDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Contact ID of the related contact */
     private string $contact_id;

    /** @var string ID of the contact person */
     private string $contact_person_id;

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

    /** @var bool Whether the contact person is the primary contact for the related contact */
     private bool $is_primary_contact;

    /** @var string Skype address of the contact person (max-length: 50) */
     private string $skype;

    /** @var string Designation of the contact person (max-length: 50) */
     private string $designation;

    /** @var string Department of the contact person (max-length: 50) */
     private string $department;

    /** @var bool Whether the contact person has portal access */
     private bool $is_added_in_portal;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_reduce($this->_data, function ($result, $key) {
            if (property_exists($this, $key)) {
                $result[$key] = $this->$key;
            }
            return $result;
        }, []);
    }
}
