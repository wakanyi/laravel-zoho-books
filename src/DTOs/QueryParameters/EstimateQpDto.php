<?php

namespace Sumer5020\ZohoBooks\DTOs\QueryParameters;

/**
 * Class EstimateQpDto
 * Data Transfer Object for a Estimate query parameters.
 */
class EstimateQpDto
{
    /** @var array Inputs data */
    private array $_data;
    /** @var bool Send the estimate to the contact person(s) associated with the estimate */
    public bool $send;
    /** @var bool Ignore auto estimate number generation for this estimate */
    public bool $ignore_auto_number_generation;
    /** @var bool Print the exported pdf */
    public bool $print;
    /** @var string Files to be attached to the email */
    public string $attachments;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->send = $data['send'] ?? false;
        $this->ignore_auto_number_generation = $data['ignore_auto_number_generation'] ?? false;
        $this->print = $data['print'] ?? false;
        $this->attachments = $data['attachments'] ?? '';
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
