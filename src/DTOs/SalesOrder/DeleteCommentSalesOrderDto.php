<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class DeleteCommentSalesOrderDto extends Dto
{
    use WithToArray;

    /** @var string sales order id */
    private string $salesorder_id;

    /** @var string comment id */
    private string $comment_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->salesorder_id = $data['salesorder_id'] ?? '';
        $this->comment_id = $data['comment_id'] ?? '';
    }

    public function getSalesorderId(): string
    {
        return $this->salesorder_id;
    }

    public function getCommentId(): string
    {
        return $this->comment_id;
    }

}
