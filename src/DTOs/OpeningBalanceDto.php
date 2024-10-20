<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class OpeningBalanceDTO
 * Data Transfer Object for an Opening Balance.
 */
class OpeningBalanceDto
{
    /** @var string ID of the opening balance */
    public string $opening_balance_id;

    /** @var string Date on which the opening balance needs to be recorded (format: yyyy-MM-dd) */
    public string $date;

    /** @var int Price Precision of the Values */
    public int $price_precision;

    /** @var array Accounts associated with the opening balance */
    public array $accounts;

    /** @var int Total Amount from the Opening Balance */
    public int $total;

    /**
     * OpeningBalanceDto constructor.
     *
     * @param array $data Data for the Opening Balance.
     */
    public function __construct(array $data)
    {
        $this->opening_balance_id = $data['opening_balance_id'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->accounts = $data['accounts'] ?? [];
        $this->total = $data['total'] ?? 0;
    }
}
