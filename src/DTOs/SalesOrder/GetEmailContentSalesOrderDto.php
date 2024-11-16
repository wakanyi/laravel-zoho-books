<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class GetEmailContentSalesOrderDto extends Dto
{
    use WithToArray;

    /** @var string sales order id */
    private string $salesorder_id;

    /** @var string email template ID */
    private string $email_template_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->salesorder_id = $data['salesorder_id'] ?? '';
        $this->email_template_id = $data['email_template_id'] ?? '';
    }

    public function toQueryString(): string
    {
        $result = "";
        if (isset($this->data['email_template_id'])) {
            $result .= "&email_template_id=" . $this->email_template_id;
        }
        return $result;
    }

    public function getSalesorderId(): string
    {
        return $this->salesorder_id;
    }
}
