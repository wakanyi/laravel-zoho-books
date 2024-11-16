<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

/**
 * Class EstimateQpDto
 * Data Transfer Object for a Estimate query parameters.
 */
class SalesOrderQpDto extends Dto
{
    use WithToQueryString;

    /** @var bool Ignore auto sales order number generation for this sales order */
    private bool $ignore_auto_number_generation;

    /** @var bool Can the file be sent in mail */
    private bool $can_send_in_mail;

    /** @var string Total number of files */
    private string $totalFiles;

    /** @var string Document that is to be attached */
    private string $doc;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->ignore_auto_number_generation = $data['ignore_auto_number_generation'] ?? false;
        $this->can_send_in_mail = $data['can_send_in_mail'] ?? false;
        $this->totalFiles = $data['totalFiles'] ?? '';
        $this->doc = $data['doc'] ?? '';
    }
}
