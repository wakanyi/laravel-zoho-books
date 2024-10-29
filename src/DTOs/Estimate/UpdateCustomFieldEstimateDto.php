<?php

namespace Sumer5020\ZohoBooks\DTOs\Estimate;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class UpdateCustomFieldEstimateDto extends Dto
{
    use WithToArray;

    /** @var string Estimate ID */
    private string $estimate_id;

    /** @var int Custom field ID */
    private int $customfield_id;

    /** @var string Value */
    private string $value;
    
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->estimate_id = $data['estimate_id'] ?? '';
        $this->customfield_id = $data['customfield_id'] ?? 0;
        $this->value = $data['value'] ?? '';
    }

    public function getEstimateId(): string
    {
        return $this->estimate_id;
    }
}
