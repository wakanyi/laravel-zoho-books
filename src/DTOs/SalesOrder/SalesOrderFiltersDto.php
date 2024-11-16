<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Enums\SalesOrderFilterStatusEnum;
use Sumer5020\ZohoBooks\Enums\SalesOrderSortColumnEnum;
use Sumer5020\ZohoBooks\Enums\SalesOrderStatusEnum;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

/**
 * Class SalesOrderFiltersDto
 * Data Transfer Object for an sales order search and filter arguments.
 */
class SalesOrderFiltersDto extends Dto
{
    use WithToQueryString;

    /** @var string Sort sales orders */
    private string $sort_column;

    /** @var string Search sales order by sales order number or reference number or customer name */
    private string $search_text;

    /** @var string Filter sales order by status */
    private string $filter_by;

    /** @var string Search Sales Order by Sales Order Number */
    private string $salesorder_number_startswith;

    /** @var string Search Sales Order by Sales Order Number */
    private string $salesorder_number_not_in;

    /** @var string Search Sales Order by Sales Order Number */
    private string $salesorder_number_in;

    /** @var string Search Sales Order by Sales Order Number */
    private string $salesorder_number_contains;

    /** @var string Search sales order by item name */
    private string $item_name_startswith;

    /** @var string Search sales order by item name */
    private string $item_name_not_in;

    /** @var string Search sales order by item name */
    private string $item_name_in;

    /** @var string Search sales order by item name */
    private string $item_name_contains;

    /** @var string Search Sales Order Based on Item ID */
    private string $item_id;

    /** @var string Search sales order by item description */
    private string $item_description_startswith;

    /** @var string Search sales order by item description */
    private string $item_description_not_in;

    /** @var string Search sales order by item description */
    private string $item_description_in;

    /** @var string Search sales order by item description */
    private string $item_description_contains;

    /** @var string Search sales order by reference number */
    private string $reference_number_startswith;

    /** @var string Search sales order by reference number */
    private string $reference_number_not_in;

    /** @var string Search sales order by reference number */
    private string $reference_number_in;

    /** @var string Search sales order by reference number */
    private string $reference_number_contains;

    /** @var string Search sales order by customer name */
    private string $customer_name_startswith;

    /** @var string Search sales order by customer name */
    private string $customer_name_not_in;

    /** @var string Search sales order by customer name */
    private string $customer_name_in;

    /** @var string Search sales order by customer name */
    private string $customer_name_contains;

    /** @var string Search sales order by sales order total */
    private string $total_start;

    /** @var string Search sales order by sales order total */
    private string $total_end;

    /** @var string Search sales order by sales order total */
    private string $total_less_than;

    /** @var string Search sales order by sales order total */
    private string $total_less_equals;

    /** @var string Search sales order by sales order total */
    private string $total_greater_than;

    /** @var string Search sales order by sales order total */
    private string $total_greater_equals;

    /** @var string Search sales order by sales order date */
    private string $date_start;

    /** @var string Search sales order by sales order date */
    private string $date_end;

    /** @var string Search sales order by sales order date */
    private string $date_before;

    /** @var string Search sales order by sales order date */
    private string $date_after;

    /** @var string Search sales order by sales order shipment date */
    private string $shipment_date_start;

    /** @var string Search sales order by sales order shipment date */
    private string $shipment_date_end;

    /** @var string Search sales order by sales order shipment date */
    private string $shipment_date_before;

    /** @var string Search sales order by sales order shipment date */
    private string $shipment_date_after;

    /** @var string Search sales order by sales order status */
    private string $status;

    /** @var string Search Sales Order based on customer_id */
    private string $customer_id;

    /** @var string ID of the salesperson */
    private string $salesperson_id;

    /** @var string ID's of the salesorder [Comma seperated values] */
    private string $salesorder_ids;

    /** @var string Last Modified time of the Sales Order */
    private string $last_modified_time;

    /** @var bool Print the exported pdf */
    private bool $print;

    /** @var string ID of the customview */
    private string $customview_id;

    /** @var string Potential ID of a Deal in CRM */
    private string $zcrm_potential_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->sort_column = $data['sort_column'] ?? SalesOrderSortColumnEnum::SALESORDER_NUMBER->value;
        $this->search_text = $data['search_text'] ?? '';
        $this->filter_by = $data['filter_by'] ?? SalesOrderFilterStatusEnum::ALL->value;
        $this->salesorder_number_startswith = $data['$salesorder_number_startswith'] ?? '';
        $this->salesorder_number_not_in = $data['salesorder_number_not_in'] ?? '';
        $this->salesorder_number_in = $data['salesorder_number_in'] ?? '';
        $this->salesorder_number_contains = $data['salesorder_number_contains'] ?? '';
        $this->item_name_startswith = $data['item_name_startswith'] ?? '';
        $this->item_name_not_in = $data['item_name_not_in'] ?? '';
        $this->item_name_in = $data['item_name_in'] ?? '';
        $this->item_name_contains = $data['item_name_contains'] ?? '';
        $this->item_id = $data['item_id'] ?? '';
        $this->item_description_startswith = $data['item_description_startswith'] ?? '';
        $this->item_description_not_in = $data['item_description_not_in'] ?? '';
        $this->item_description_in = $data['item_description_in'] ?? '';
        $this->item_description_contains = $data['item_description_contains'] ?? '';
        $this->reference_number_startswith = $data['reference_number_startswith'] ?? '';
        $this->reference_number_not_in = $data['reference_number_not_in'] ?? '';
        $this->reference_number_in = $data['reference_number_in'] ?? '';
        $this->reference_number_contains = $data['reference_number_contains'] ?? '';
        $this->customer_name_startswith = $data['customer_name_startswith'] ?? '';
        $this->customer_name_not_in = $data['customer_name_not_in'] ?? '';
        $this->customer_name_in = $data['customer_name_in'] ?? '';
        $this->customer_name_contains = $data['customer_name_contains'] ?? '';
        $this->total_start = $data['total_start'] ?? '';
        $this->total_end = $data['total_end'] ?? '';
        $this->total_less_than = $data['total_less_than'] ?? '';
        $this->total_less_equals = $data['total_less_equals'] ?? '';
        $this->total_greater_than = $data['total_greater_than'] ?? '';
        $this->total_greater_equals = $data['total_greater_equals'] ?? '';
        $this->date_start = $data['date_start'] ?? '';
        $this->date_end = $data['date_end'] ?? '';
        $this->date_before = $data['date_before'] ?? '';
        $this->date_after = $data['date_after'] ?? '';
        $this->shipment_date_start = $data['shipment_date_start'] ?? '';
        $this->shipment_date_end = $data['shipment_date_end'] ?? '';
        $this->shipment_date_before = $data['shipment_date_before'] ?? '';
        $this->shipment_date_after = $data['shipment_date_after'] ?? '';
        $this->status = $data['status'] ?? SalesOrderStatusEnum::OPEN->value;
        $this->customer_id = $data['customer_id'] ?? '';
        $this->salesperson_id = $data['salesperson_id'] ?? '';
        $this->salesorder_ids = $data['salesorder_ids'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->print = $data['print'] ?? '';
        $this->customview_id = $data['customview_id'] ?? '';
        $this->zcrm_potential_id = $data['zcrm_potential_id'] ?? '';
    }
}