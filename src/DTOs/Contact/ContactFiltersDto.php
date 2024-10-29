<?php

namespace Sumer5020\ZohoBooks\DTOs\Contact;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Enums\ContactSortColumnEnum;
use Sumer5020\ZohoBooks\Enums\FilterStatusEnum;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

/**
 * Class ContactFiltersDto
 * Data Transfer Object for a contact search and filter arguments.
 */
class ContactFiltersDto extends Dto
{
    use WithToQueryString;

    /** @var string Search contacts by contact name */
    private string $contact_name_startswith;

    /** @var string Search contacts by contact name */
    private string $contact_name_contains;

    /** @var string Search contacts by company name */
    private string $company_name_startswith;

    /** @var string Search contacts by company name */
    private string $company_name_contains;

    /** @var string Search contacts by first name */
    private string $first_name_startswith;

    /** @var string Search contacts by first name */
    private string $first_name_contains;

    /** @var string Search contacts by last name */
    private string $last_name_startswith;

    /** @var string Search contacts by last name */
    private string $last_name_contains;

    /** @var string Search contacts by address name */
    private string $address_startswith;

    /** @var string Search contacts by address name */
    private string $address_contains;

    /** @var string Search contacts by email name */
    private string $email_startswith;

    /** @var string Search contacts by email name */
    private string $email_contains;

    /** @var string Search contacts by phone name */
    private string $phone_startswith;

    /** @var string Search contacts by phone name */
    private string $phone_contains;

    /** @var string Filter contacts by status */
    private string $filter_by;

    /** @var string Search contacts by contact name or notes */
    private string $search_text;

    /** @var string Sort contacts */
    private string $sort_column;

    /** @var string CRM Contact ID for the contact */
    private string $zcrm_contact_id;

    /** @var string CRM Account ID for the contact */
    private string $zcrm_account_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
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
}
