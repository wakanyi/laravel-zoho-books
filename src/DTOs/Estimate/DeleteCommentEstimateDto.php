<?php

namespace Sumer5020\ZohoBooks\DTOs\Estimate;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class DeleteCommentEstimateDto extends Dto
{
    use WithToArray;

    /** @var string Estimate ID */
    private string $estimate_id;

    /** @var string Comment */
    private string $comment_id;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->estimate_id = $data['estimate_id'] ?? '';
        $this->comment_id = $data['comment_id'] ?? '';
    }

    public function getEstimateId(): string
    {
        return $this->estimate_id;
    }

    public function getCommentId(): string
    {
        return $this->comment_id;
    }
}
