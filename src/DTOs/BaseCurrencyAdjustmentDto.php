<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class BaseCurrencyAdjustmentDto
 * Data Transfer Object for a Base Currency Adjustment.
 */
class BaseCurrencyAdjustmentDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the Base Currency Adjustment */
     private string $base_currency_adjustment_id;

    /** @var string Date of adjustment */
     private string $adjustment_date;

    /** @var float Exchange rate of the currency */
     private float $exchange_rate;

    /** @var string ID of currency for which we need to post adjustment */
     private string $currency_id;

    /** @var array Accounts associated with the adjustment */
     private array $accounts;

    /** @var string Notes for base currency adjustment */
     private string $notes;

    /** @var string Currency Code involved in the Adjustment */
     private string $currency_code;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->base_currency_adjustment_id = $data['base_currency_adjustment_id'] ?? '';
        $this->adjustment_date = $data['adjustment_date'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->currency_id = $data['currency_id'] ?? '';
        $this->accounts = $data['accounts'] ?? [];
        $this->notes = $data['notes'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
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
