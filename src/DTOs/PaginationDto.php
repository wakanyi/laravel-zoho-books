<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class PaginationDto
 * Data Transfer Object to Paginate the list.
 */
class PaginationDto
{
    /** @var int Page number to be listed*/
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

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'page' => $this->page,
            'per_page' => $this->per_page
        ];
    }

    public function toQueryString(): string
    {
        return "&page=$this->page&per_page=$this->per_page";
    }
}
