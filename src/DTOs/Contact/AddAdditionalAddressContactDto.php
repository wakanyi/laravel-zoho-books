<?php

namespace Sumer5020\ZohoBooks\DTOs\Contact;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class AddAdditionalAddressContactDto extends Dto
{
    use WithToArray;

    /** @var string ID of the contact */
    private string $contact_id;

    /** @var string Attention */
    private string $attention;

    /** @var string Address */
    private string $address;

    /** @var string Street2 */
    private string $street2;

    /** @var string City */
    private string $city;

    /** @var string State */
    private string $state;

    /** @var string Zip */
    private string $zip;

    /** @var string Country */
    private string $country;

    /** @var string Fax */
    private string $fax;

    /** @var string Phone */
    private string $phone;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->contact_id = $data['contact_id'] ?? '';
        $this->attention = $data['attention'] ?? '';
        $this->address = $data['address'] ?? '';
        $this->street2 = $data['street2'] ?? '';
        $this->city = $data['city'] ?? '';
        $this->state = $data['state'] ?? '';
        $this->zip = $data['zip'] ?? '';
        $this->country = $data['country'] ?? '';
        $this->fax = $data['fax'] ?? '';
        $this->phone = $data['phone'] ?? '';
    }

    public function getContactId(): string
    {
        return $this->contact_id;
    }
}
