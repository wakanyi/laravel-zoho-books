<?php

namespace Sumer5020\ZohoBooks\DTOs\Estimate;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Enums\EstimateFilterStatusEnum;
use Sumer5020\ZohoBooks\Enums\EstimateSearchStatusEnum;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

/**
 * Class EstimateFiltersDto
 * Data Transfer Object for an estimate search and filter arguments.
 */
class EstimateFiltersDto extends Dto
{
    use WithToQueryString;

    /** @var string Search estimates by estimate number */
    private string $estimate_number_startswith;

    /** @var string Search estimates by estimate number */
    private string $estimate_number_contains;

    /** @var string Search estimates by reference number */
    private string $reference_number_startswith;

    /** @var string Search estimates by reference number */
    private string $reference_number_contains;

    /** @var string Search estimates by customer name */
    private string $customer_name_startswith;

    /** @var string Search estimates by customer name */
    private string $customer_name_contains;

    /** @var string Search estimates by estimate total */
    private string $total_less_than;

    /** @var string Search estimates by estimate total */
    private string $total_less_equals;

    /** @var string Search estimates by estimate total */
    private string $total_greater_than;

    /** @var string Search estimates by estimate total */
    private string $total_greater_equals;

    /** @var string Search estimates by customer id */
    private string $customer_id;

    /** @var string Search estimates by ID of the item */
    private string $item_id;

    /** @var string Search estimates by item name */
    private string $item_name_startswith;

    /** @var string Search estimates by item name */
    private string $item_name_contains;

    /** @var string Search estimates by item description */
    private string $item_description_startswith;

    /** @var string Search estimates by item description */
    private string $item_description_contains;

    /** @var string Search estimates by custom field */
    private string $custom_field_startswith;

    /** @var string Search estimates by custom field */
    private string $custom_field_contains;

    /** @var string The date of expiration of the estimates */
    private string $expiry_date;

    /** @var string Search estimates by estimate date */
    private string $date_start;

    /** @var string Search estimates by estimate date */
    private string $date_end;

    /** @var string Search estimates by estimate date */
    private string $date_before;

    /** @var string Search estimates by estimate date */
    private string $date_after;

    /** @var string Search estimates by status */
    private string $status;

    /** @var string Filter estimates by status */
    private string $filter_by;

    /** @var string Search estimates by estimate number or reference or customer name */
    private string $search_text;

    /** @var string Sort estimates */
    private string $sort_column;

    /** @var string Potential ID of a Deal in CRM */
    private string $zcrm_potential_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->estimate_number_startswith = $data['estimate_number_startswith'] ?? '';
        $this->estimate_number_contains = $data['estimate_number_contains'] ?? '';
        $this->reference_number_startswith = $data['reference_number_startswith'] ?? '';
        $this->reference_number_contains = $data['reference_number_contains'] ?? '';
        $this->customer_name_startswith = $data['customer_name_startswith'] ?? '';
        $this->customer_name_contains = $data['customer_name_contains'] ?? '';
        $this->total_less_than = $data['total_less_than'] ?? '';
        $this->total_less_equals = $data['total_less_equals'] ?? '';
        $this->total_greater_than = $data['total_greater_than'] ?? '';
        $this->total_greater_equals = $data['total_greater_equals'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->item_id = $data['item_id'] ?? '';
        $this->item_name_startswith = $data['item_name_startswith'] ?? '';
        $this->item_name_contains = $data['item_name_contains'] ?? '';
        $this->item_description_startswith = $data['item_description_startswith'] ?? '';
        $this->item_description_contains = $data['item_description_contains'] ?? '';
        $this->custom_field_startswith = $data['custom_field_startswith'] ?? '';
        $this->custom_field_contains = $data['custom_field_contains'] ?? '';
        $this->expiry_date = $data['expiry_date'] ?? '';
        $this->date_start = $data['date_start'] ?? '';
        $this->date_end = $data['date_end'] ?? '';
        $this->date_before = $data['date_before'] ?? '';
        $this->date_after = $data['date_after'] ?? '';
        $this->status = $data['status'] ?? EstimateSearchStatusEnum::SENT;
        $this->filter_by = $data['filter_by'] ?? EstimateFilterStatusEnum::ALL;
        $this->search_text = $data['search_text'] ?? '';
        $this->sort_column = $data['sort_column'] ?? '';
        $this->zcrm_potential_id = $data['zcrm_potential_id'] ?? '';
    }
}
