<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

class GetSalesOrderAttachmentQpDto extends Dto
{
    use WithToQueryString;

    /** @var bool Check if preview of the Sales Order is required */
    private bool $preview;

    /** @var bool Check if inline response is required */
    private bool $inline;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->preview = $data['preview'] ?? false;
        $this->inline = $data['inline'] ?? false;
    }
}
