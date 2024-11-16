<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class UpdateAddressSalesOrderDto extends Dto
{
    use WithToArray;

    /** @var string sales order id */
    private string $salesorder_id;

    /** @var string Address */
    private string $address;

    /** @var string State of the Address */
    private string $city;

    /** @var string ZIP Code of the Address */
    private string $zip;

    /** @var string Country of the Address */
    private string $country;

    /** @var string Phone number */
    private string $phone;

    /** @var string Fax Number */
    private string $fax;

    /** @var string */
    private string $attention;

    /** @var bool */
    private bool $is_one_off_address;

    /** @var bool update billing address of customer */
    private bool $is_update_customer;

    /** @var bool Check if the Address is verified */
    private bool $is_verified;

    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->salesorder_id = $data['salesorder_id'] ?? '';
        $this->address = $data['address'] ?? '';
        $this->city = $data['city'] ?? '';
        $this->zip = $data['zip'] ?? '';
        $this->country = $data['country'] ?? '';
        $this->phone = $data['phone'] ?? '';
        $this->fax = $data['fax'] ?? '';
        $this->attention = $data['attention'] ?? '';
        $this->is_one_off_address = $data['is_one_off_address'] ?? false;
        $this->is_update_customer = $data['is_update_customer'] ?? false;
        $this->is_verified = $data['is_verified'] ?? false;
    }

    public function getSalesorderId(): string
    {
        return $this->salesorder_id;
    }
}
