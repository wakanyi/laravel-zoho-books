<?php

namespace Sumer5020\ZohoBooks\DTOs\QueryParameters;

/**
 * Class ContactQpDto
 * Data Transfer Object for a contact query parameters.
 */
class ContactQpDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Date format [yyyy-mm-dd] */
    public string $start_date;
    /** @var string Date format [yyyy-mm-dd] */
    public string $end_date;
    /** @var string Files to be attached along with the statement */
    public string $multipart_or_formdata;
    /** @var bool Send customer statement pdf with email */
    public bool $send_customer_statement;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->start_date = $data['start_date'] ?? '';
        $this->end_date = $data['end_date'] ?? '';
        $this->multipart_or_formdata = $data['multipart_or_formdata'] ?? '';
        $this->send_customer_statement = $data['send_customer_statement'] ?? true;
    }

    /**
     * @return string
     */
    public function toQueryString(): string
    {
        return array_reduce($this->_data, function ($result, $key) {
            if (property_exists($this, $key)) {
                $result .= "&".$key."=".$this->$key;
            }
            return $result;
        }, "");
    }
}
