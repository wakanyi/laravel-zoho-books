<?php

namespace Sumer5020\ZohoBooks\DTOs\QueryParameters;

use Sumer5020\ZohoBooks\Enums\ContactSortColumnEnum;
use Sumer5020\ZohoBooks\Enums\FilterStatusEnum;

/**
 * Class ContactFiltersQpDto
 * Data Transfer Object for a contact search and filter arguments.
 */
class ContactFiltersQpDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Search contacts by contact name */
    public string $contact_name_startswith;

    /** @var string Search contacts by contact name */
    public string $contact_name_contains;

    /** @var string Search contacts by company name */
    public string $company_name_startswith;

    /** @var string Search contacts by company name */
    public string $company_name_contains;

    /** @var string Search contacts by first name */
    public string $first_name_startswith;

    /** @var string Search contacts by first name */
    public string $first_name_contains;

    /** @var string Search contacts by last name */
    public string $last_name_startswith;

    /** @var string Search contacts by last name */
    public string $last_name_contains;

    /** @var string Search contacts by address name */
    public string $address_startswith;

    /** @var string Search contacts by address name */
    public string $address_contains;

    /** @var string Search contacts by email name */
    public string $email_startswith;

    /** @var string Search contacts by email name */
    public string $email_contains;

    /** @var string Search contacts by phone name */
    public string $phone_startswith;

    /** @var string Search contacts by phone name */
    public string $phone_contains;

    /** @var string Filter contacts by status */
    public string $filter_by;

    /** @var string Search contacts by contact name or notes */
    public string $search_text;

    /** @var string Sort contacts */
    public string $sort_column;

    /** @var string CRM Contact ID for the contact */
    public string $zcrm_contact_id;

    /** @var string CRM Account ID for the contact */
    public string $zcrm_account_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->contact_name_startswith = $data['contact_name_startswith'] ?? '';
        $this->contact_name_contains = $data['contact_name_contains'] ?? '';
        $this->company_name_startswith = $data['company_name_startswith'] ?? '';
        $this->company_name_contains = $data['company_name_contains'] ?? '';
        $this->first_name_startswith = $data['first_name_startswith'] ?? '';
        $this->first_name_contains = $data['first_name_contains'] ?? '';
        $this->last_name_startswith = $data['last_name_startswith'] ?? '';
        $this->last_name_contains = $data['last_name_contains'] ?? '';
        $this->address_startswith = $data['address_startswith'] ?? '';
        $this->address_contains = $data['address_contains'] ?? '';
        $this->email_startswith = $data['email_startswith'] ?? '';
        $this->email_contains = $data['email_contains'] ?? '';
        $this->phone_startswith = $data['phone_startswith'] ?? '';
        $this->phone_contains = $data['phone_contains'] ?? '';
        $this->filter_by = $data['filter_by'] ?? FilterStatusEnum::ALL->value;
        $this->search_text = $data['search_text'] ?? '';
        $this->sort_column = $data['sort_column'] ?? ContactSortColumnEnum::CREATED_TIME->value;
        $this->zcrm_contact_id = $data['zcrm_contact_id'] ?? '';
        $this->zcrm_account_id = $data['zcrm_account_id'] ?? '';
    }

    /**
     * @return string
     */
    public function toQueryString(): string
    {
        return array_reduce($this->_data, function ($result, $key) {
            if (property_exists($this, $key)) {
                $result .= "&".$key."=".$this->$key;
            }
            return $result;
        }, "");
    }
}
