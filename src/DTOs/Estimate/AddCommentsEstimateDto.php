<?php

namespace Sumer5020\ZohoBooks\DTOs\Estimate;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class AddCommentsEstimateDto extends Dto
{
    use WithToArray;

    /** @var string Estimate ID */
    private string $estimate_id;

    /** @var string description */
    private string $description;

    /** @var bool show_comment_to_clients */
    private bool $show_comment_to_clients;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->estimate_id = $data['estimate_id'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->show_comment_to_clients = $data['show_comment_to_clients'] ?? false;
    }

    public function getEstimateId(): string
    {
        return $this->estimate_id;
    }
}
