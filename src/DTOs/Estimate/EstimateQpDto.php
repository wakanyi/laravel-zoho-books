<?php

namespace Sumer5020\ZohoBooks\DTOs\Estimate;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

/**
 * Class EstimateQpDto
 * Data Transfer Object for a Estimate query parameters.
 */
class EstimateQpDto extends Dto
{
    use WithToQueryString;

    /** @var bool Send the estimate to the contact person(s) associated with the estimate */
    private bool $send;
    /** @var bool Ignore auto estimate number generation for this estimate */
    private bool $ignore_auto_number_generation;
    /** @var bool Print the exported pdf */
    private bool $print;
    /** @var string Files to be attached to the email */
    private string $attachments;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->send = $data['send'] ?? false;
        $this->ignore_auto_number_generation = $data['ignore_auto_number_generation'] ?? false;
        $this->print = $data['print'] ?? false;
        $this->attachments = $data['attachments'] ?? '';
    }
}
