<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class UpdateTemplateSalesOrderDto extends Dto
{
    use WithToArray;

    /** @var string sales order id */
    private string $salesorder_id;

    /** @var string ID of the template */
    private string $template_id;

    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->salesorder_id = $data['salesorder_id'] ?? '';
        $this->template_id = $data['template_id'] ?? '';
    }

    public function getSalesorderId(): string
    {
        return $this->salesorder_id;
    }

    public function getTemplateId(): string
    {
        return $this->template_id;
    }
}
