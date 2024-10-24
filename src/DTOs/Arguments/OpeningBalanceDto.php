<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class OpeningBalanceDto
 * Data Transfer Object for an Opening Balance.
 */
class OpeningBalanceDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the opening balance */
     private string $opening_balance_id;

    /** @var string Date on which the opening balance needs to be recorded (format: yyyy-MM-dd) */
     private string $date;

    /** @var int Price Precision of the Values */
     private int $price_precision;

    /** @var array Accounts associated with the opening balance */
     private array $accounts;

    /** @var int Total Amount from the Opening Balance */
     private int $total;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->opening_balance_id = $data['opening_balance_id'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->accounts = $data['accounts'] ?? [];
        $this->total = $data['total'] ?? 0;
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
