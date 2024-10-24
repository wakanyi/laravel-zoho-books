<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class CurrencyDto
 * Data Transfer Object for a Currency.
 */
class CurrencyDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string A unique ID for the currency */
     private string $currency_id;

    /** @var string A unique standard code for the currency (Max-len [100]) */
     private string $currency_code;

    /** @var string The name for the currency */
     private string $currency_name;

    /** @var string A unique symbol for the currency (Max-len [4]) */
     private string $currency_symbol;

    /** @var int The precision for the price */
     private int $price_precision;

    /** @var string The format for the currency to be displayed (Max-len [100]) */
     private string $currency_format;

    /** @var bool Is it the base currency of the organization */
     private bool $is_base_currency;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_name = $data['currency_name'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->currency_format = $data['currency_format'] ?? '';
        $this->is_base_currency = $data['is_base_currency'] ?? false;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_reduce($this->_data, function ($result, $key) {
            if (property_exists($this, $key)) {
                $result[$key] = $this->$key;
            }
            return $result;
        }, []);
    }
}
