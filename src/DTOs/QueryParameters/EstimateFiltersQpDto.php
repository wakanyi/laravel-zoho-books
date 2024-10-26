<?php

namespace Sumer5020\ZohoBooks\DTOs\QueryParameters;

use Sumer5020\ZohoBooks\Enums\EstimateFilterStatusEnum;
use Sumer5020\ZohoBooks\Enums\EstimateSearchStatusEnum;

/**
 * Class EstimateFiltersQpDto
 * Data Transfer Object for an estimate search and filter arguments.
 */
class EstimateFiltersQpDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Search estimates by estimate number */
    public string $estimate_number_startswith;

    /** @var string Search estimates by estimate number */
    public string $estimate_number_contains;

    /** @var string Search estimates by reference number */
    public string $reference_number_startswith;

    /** @var string Search estimates by reference number */
    public string $reference_number_contains;

    /** @var string Search estimates by customer name */
    public string $customer_name_startswith;

    /** @var string Search estimates by customer name */
    public string $customer_name_contains;

    /** @var string Search estimates by estimate total */
    public string $total_less_than;

    /** @var string Search estimates by estimate total */
    public string $total_less_equals;

    /** @var string Search estimates by estimate total */
    public string $total_greater_than;

    /** @var string Search estimates by estimate total */
    public string $total_greater_equals;

    /** @var string Search estimates by customer id */
    public string $customer_id;

    /** @var string Search estimates by ID of the item */
    public string $item_id;

    /** @var string Search estimates by item name */
    public string $item_name_startswith;

    /** @var string Search estimates by item name */
    public string $item_name_contains;

    /** @var string Search estimates by item description */
    public string $item_description_startswith;

    /** @var string Search estimates by item description */
    public string $item_description_contains;

    /** @var string Search estimates by custom field */
    public string $custom_field_startswith;

    /** @var string Search estimates by custom field */
    public string $custom_field_contains;

    /** @var string The date of expiration of the estimates */
    public string $expiry_date;

    /** @var string Search estimates by estimate date */
    public string $date_start;

    /** @var string Search estimates by estimate date */
    public string $date_end;

    /** @var string Search estimates by estimate date */
    public string $date_before;

    /** @var string Search estimates by estimate date */
    public string $date_after;

    /** @var string Search estimates by status */
    public string $status;

    /** @var string Filter estimates by status */
    public string $filter_by;

    /** @var string Search estimates by estimate number or reference or customer name */
    public string $search_text;

    /** @var string Sort estimates */
    public string $sort_column;

    /** @var string Potential ID of a Deal in CRM */
    public string $zcrm_potential_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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
