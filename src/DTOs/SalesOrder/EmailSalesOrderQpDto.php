<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

/**
 * Class EmailSalesOrderQpDto
 * Data Transfer Object for an Email Sales Order query parameters.
 */
class EmailSalesOrderQpDto extends Dto
{
    use WithToQueryString;

    /** @var string Attachments of the Sales Order */
    private string $attachments;

    /** @var bool Send the sales order attachment a with the email */
    private bool $send_attachment;

    /** @var string Name of the file */
    private string $file_name;


    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->attachments = $data['attachments'] ?? '';
        $this->send_attachment = $data['send_attachment'] ?? false;
        $this->file_name = $data['file_name'] ?? '';
    }
}
