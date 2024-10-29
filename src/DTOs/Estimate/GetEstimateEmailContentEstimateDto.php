<?php

namespace Sumer5020\ZohoBooks\DTOs\Estimate;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class GetEstimateEmailContentEstimateDto extends Dto
{
    use WithToArray;

    /** @var string Estimate ID */
    private string $estimate_id;

    /** @var string Get the email content based on a specific email template */
    private string $email_template_id;


    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->estimate_id = $data['estimate_id'] ?? '';
        $this->email_template_id = $data['email_template_id'] ?? '';
    }

    public function getEstimateId(): string
    {
        return $this->estimate_id;
    }

    public function getEmailTemplateId(): string
    {
        return $this->email_template_id;
    }
}
