<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class CurrencyDTO
 * Data Transfer Object for a Currency.
 */
class CurrencyDto
{
    /** @var string A unique ID for the currency */
    public string $currency_id;

    /** @var string A unique standard code for the currency (Max-len [100]) */
    public string $currency_code;

    /** @var string The name for the currency */
    public string $currency_name;

    /** @var string A unique symbol for the currency (Max-len [4]) */
    public string $currency_symbol;

    /** @var int The precision for the price */
    public int $price_precision;

    /** @var string The format for the currency to be displayed (Max-len [100]) */
    public string $currency_format;

    /** @var bool Is it the base currency of the organization */
    public bool $is_base_currency;

    /**
     * CurrencyDto constructor.
     *
     * @param array $data Data for the Currency.
     */
    public function __construct(array $data)
    {
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_name = $data['currency_name'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->currency_format = $data['currency_format'] ?? '';
        $this->is_base_currency = $data['is_base_currency'] ?? false;
    }
}
