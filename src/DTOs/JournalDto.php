<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class JournalDTO
 * Data Transfer Object for a Journal.
 */
class JournalDto
{
    /** @var string ID of the Journal */
    public string $journal_id;

    /** @var string Entry Number of the Journal */
    public string $entry_number;

    /** @var string Reference number for the journal */
    public string $reference_number;

    /** @var string Notes for the journal */
    public string $notes;

    /** @var string ID of the Currency associated with the Journal */
    public string $currency_id;

    /** @var string Code of the Currency associated with the Journal */
    public string $currency_code;

    /** @var string Symbol of the Currency associated with the Journal */
    public string $currency_symbol;

    /** @var float Exchange Rate between the currencies */
    public float $exchange_rate;

    /** @var string Date on which the journal is to be recorded */
    public string $journal_date;

    /** @var string Type of the Journal. Allowed values: Cash and Both */
    public string $journal_type;

    /** @var string VAT treatment for the journals (optional) */
    public string $vat_treatment;

    /** @var string Type of the journal (🇬🇧 only) */
    public string $product_type;

    /** @var bool Check if the Journal should be included in VAT Return */
    public bool $include_in_vat_return;

    /** @var bool Check if the Journal is created for BAS Adjustment (🇦🇺 only) */
    public bool $is_bas_adjustment;

    /** @var array Line items associated with the journal */
    public array $line_items;

    /** @var float Total of the Line Item */
    public float $line_item_total;

    /** @var float Total of the Journal */
    public float $total;

    /** @var float Total in Base Currency */
    public float $bcy_total;

    /** @var int Price Precision for the values */
    public int $price_precision;

    /** @var array Taxes associated with the journal */
    public array $taxes;

    /** @var string Created time of the Journal */
    public string $created_time;

    /** @var string Last modified time of the Journal */
    public string $last_modified_time;

    /** @var string Journal status. Allowed values: draft and published */
    public string $status;

    /** @var array Custom fields associated with the journal */
    public array $custom_fields;

    public function __construct(array $data)
    {
        $this->journal_id = $data['journal_id'] ?? '';
        $this->entry_number = $data['entry_number'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->notes = $data['notes'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->journal_date = $data['journal_date'] ?? '';
        $this->journal_type = $data['journal_type'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->product_type = $data['product_type'] ?? '';
        $this->include_in_vat_return = $data['include_in_vat_return'] ?? false;
        $this->is_bas_adjustment = $data['is_bas_adjustment'] ?? false;
        $this->line_items = $data['line_items'] ?? [];
        $this->line_item_total = $data['line_item_total'] ?? 0.0;
        $this->total = $data['total'] ?? 0.0;
        $this->bcy_total = $data['bcy_total'] ?? 0.0;
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->taxes = $data['taxes'] ?? [];
        $this->created_time = $data['created_time'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
    }
}
