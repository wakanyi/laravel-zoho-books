<?php

namespace Sumer5020\ZohoBooks\DTOs;

use Sumer5020\ZohoBooks\Traits\WithToQueryString;

/**
 * Class PaginationDto
 * Data Transfer Object to Paginate the list.
 */
class PaginationDto extends Dto
{
    use WithToQueryString;

    /** @var int Page number to be listed */
    private int $page;

    /** @var int Items per page */
    private int $per_page;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->page = $data['page'] ?? 1;
        $this->per_page = $data['per_page'] ?? 200;
    }
}
