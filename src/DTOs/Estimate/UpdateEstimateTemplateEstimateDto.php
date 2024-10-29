<?php

namespace Sumer5020\ZohoBooks\DTOs\Estimate;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class UpdateEstimateTemplateEstimateDto extends Dto
{
    use WithToArray;

    /** @var string Estimate ID */
    private string $estimate_id;

    /** @var string template id */
    private string $template_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->estimate_id = $data['estimate_id'] ?? '';
        $this->template_id = $data['template_id'] ?? '';
    }

    public function getEstimateId(): string
    {
        return $this->estimate_id;
    }

    public function getTemplateId(): string
    {
        return $this->template_id;
    }
}
