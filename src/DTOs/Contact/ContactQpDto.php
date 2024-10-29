<?php

namespace Sumer5020\ZohoBooks\DTOs\Contact;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

/**
 * Class ContactQpDto
 * Data Transfer Object for a contact query parameters.
 */
class ContactQpDto extends Dto
{
    use WithToQueryString;

    /** @var string Date format [yyyy-mm-dd] */
    public string $start_date;
    /** @var string Date format [yyyy-mm-dd] */
    private string $end_date;
    /** @var string Files to be attached along with the statement */
    private string $multipart_or_formdata;
    /** @var bool Send customer statement pdf with email */
    private bool $send_customer_statement;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->start_date = $data['start_date'] ?? '';
        $this->end_date = $data['end_date'] ?? '';
        $this->multipart_or_formdata = $data['multipart_or_formdata'] ?? '';
        $this->send_customer_statement = $data['send_customer_statement'] ?? true;
    }
}
