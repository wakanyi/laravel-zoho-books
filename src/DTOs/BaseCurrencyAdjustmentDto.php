<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class BaseCurrencyAdjustmentDTO
 * Data Transfer Object for a Base Currency Adjustment.
 */
class BaseCurrencyAdjustmentDto
{
    /** @var string ID of the Base Currency Adjustment */
    public string $base_currency_adjustment_id;

    /** @var string Date of adjustment */
    public string $adjustment_date;

    /** @var float Exchange rate of the currency */
    public float $exchange_rate;

    /** @var string ID of currency for which we need to post adjustment */
    public string $currency_id;

    /** @var array Accounts associated with the adjustment */
    public array $accounts;

    /** @var string Notes for base currency adjustment */
    public string $notes;

    /** @var string Currency Code involved in the Adjustment */
    public string $currency_code;

    public function __construct(array $data)
    {
        $this->base_currency_adjustment_id = $data['base_currency_adjustment_id'] ?? '';
        $this->adjustment_date = $data['adjustment_date'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->currency_id = $data['currency_id'] ?? '';
        $this->accounts = $data['accounts'] ?? [];
        $this->notes = $data['notes'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
    }
}
