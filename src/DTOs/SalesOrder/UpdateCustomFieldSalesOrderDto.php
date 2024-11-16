<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class UpdateCustomFieldSalesOrderDto extends Dto
{
    use WithToArray;

    /** @var string sales order id */
    private string $salesorder_id;

    /** @var int ID of the Custom Field */
    private int $customfield_id;

    /** @var int */
    private int $index;

    /** @var string Value of the Custom Field */
    private string $value;

    /** @var string */
    private string $label;
    
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->salesorder_id = $data['salesorder_id'] ?? '';
        $this->customfield_id = $data['customfield_id'] ?? 0;
        $this->index = $data['index'] ?? 0;
        $this->value = $data['value'] ?? '';
        $this->label = $data['label'] ?? '';
    }

    public function getSalesorderId(): string
    {
        return $this->salesorder_id;
    }
}
