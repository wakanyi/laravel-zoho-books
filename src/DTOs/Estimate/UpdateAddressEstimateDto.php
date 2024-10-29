<?php

namespace Sumer5020\ZohoBooks\DTOs\Estimate;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class UpdateAddressEstimateDto extends Dto
{
    use WithToArray;

    /** @var string Estimate ID */
    private string $estimate_id;

    /** @var string address */
    private string $address;

    /** @var string city */
    private string $city;

    /** @var string state */
    private string $state;

    /** @var string zip */
    private string $zip;

    /** @var string country */
    private string $country;

    /** @var string fax */
    private string $fax;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->estimate_id = $data['estimate_id'] ?? '';
        $this->address = $data['address'] ?? '';
        $this->city = $data['city'] ?? '';
        $this->state = $data['state'] ?? '';
        $this->zip = $data['zip'] ?? '';
        $this->country = $data['country'] ?? '';
        $this->fax = $data['fax'] ?? '';
    }

    public function getEstimateId(): string
    {
        return $this->estimate_id;
    }
}
