<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class RecurringBillDto
 * Data Transfer Object for a Recurring Bill.
 */
class RecurringBillDto
{
    /** @var string Unique ID of the recurring bill */
    public string $recurring_bill_id;

    /** @var string ID of the vendor the bill has to be created */
    public string $vendor_id;

    /** @var string Name of the Vendor */
    public string $vendor_name;

    /** @var string Status of the Recurring Bill */
    public string $status;

    /** @var string Name of the Recurring Bill. Max-length [100] */
    public string $recurrence_name;

    /** @var string ID of the Currency */
    public string $currency_id;

    /** @var string Code of the Currency */
    public string $currency_code;

    /** @var string Symbol of the Currency */
    public string $currency_symbol;

    /** @var string Start date of the recurring bill. Format [yyyy-mm-dd] */
    public string $start_date;

    /** @var string|null End date on which recurring bill has to expire. Format [yyyy-mm-dd] */
    public ?string $end_date;

    /** @var string|null 🇮🇳 only: Place from where the goods/services are supplied */
    public ?string $source_of_supply;

    /** @var string|null GCC only: The place of supply for VAT purposes */
    public ?string $place_of_supply;

    /** @var string|null 🇮🇳 only: Place where the goods/services are supplied to */
    public ?string $destination_of_supply;

    /** @var string|null 🇮🇳 only: GST treatment of the contact */
    public ?string $gst_treatment;

    /** @var string|null 🇮🇳 only: 15 digit GST identification number of the vendor */
    public ?string $gst_no;

    /** @var string|null GCC, 🇲🇽, 🇰🇪, 🇿🇦 only: VAT treatment for the bill */
    public ?string $tax_treatment;

    /** @var string|null 🇬🇧 only: VAT treatment for the bill */
    public ?string $vat_treatment;

    /** @var string|null 🇬🇧, Avalara Integration only: VAT Registration number */
    public ?string $vat_reg_no;

    /** @var string|null 🇦🇺 only: Is ABN quoted */
    public ?string $is_abn_quoted;

    /** @var string|null 🇦🇺 only: ABN */
    public ?string $abn;

    /** @var bool|null 🇮🇳 only: Applicable for reverse charge */
    public ?bool $is_reverse_charge_applied;

    /** @var string|null ID of the price book */
    public ?string $pricebook_id;

    /** @var string|null Name of the price book */
    public ?string $pricebook_name;

    /** @var bool|null Not applicable 🇺🇸: Whether the line item rates are inclusive of tax */
    public ?bool $is_inclusive_tax;

    /** @var array Line items of a recurrence bill */
    public array $line_items;

    /** @var bool|null 🇮🇳, 🌎, 🇦🇺 only: Check if TDS is applied */
    public ?bool $is_tds_applied;

    /** @var string|null Notes for the Bill */
    public ?string $notes;

    /** @var string|null Terms and Conditions for the Bill */
    public ?string $terms;

    /** @var int|null Number referring to Payment Terms */
    public ?int $payment_terms;

    /** @var string|null Label of the Payment Terms */
    public ?string $payment_terms_label;

    /** @var array Custom fields */
    public array $custom_fields;

    /** @var array|null 🇬🇧, Europe only: Summary of the VAT Acquisition */
    public ?array $acquisition_vat_summary;

    /** @var array|null 🇬🇧, Europe only: Summary of the Reverse Charge */
    public ?array $reverse_charge_vat_summary;

    /** @var float|null 🇬🇧, Europe only: Total of the VAT Acquisition */
    public ?float $acquisition_vat_total;

    /** @var float|null 🇬🇧, Europe only: Total of the Reverse Charge */
    public ?float $reverse_charge_vat_total;

    /** @var string|null Created time of the bill */
    public ?string $created_time;

    /** @var string|null Name of User who created the Bill */
    public ?string $created_by_id;

    /** @var string|null Last Modified Time of the Bill */
    public ?string $last_modified_time;

    /** @var string|null Discount applied to the recurrence */
    public ?string $discount;

    /** @var string|null ID of the account associated with the discount account */
    public ?string $discount_account_id;

    /** @var bool|null To specify discount applied in before/after tax */
    public ?bool $is_discount_before_tax;

    public function __construct(array $data)
    {
        $this->recurring_bill_id = $data['recurring_bill_id'] ?? '';
        $this->vendor_id = $data['vendor_id'] ?? '';
        $this->vendor_name = $data['vendor_name'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->recurrence_name = $data['recurrence_name'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->start_date = $data['start_date'] ?? '';
        $this->end_date = $data['end_date'] ?? null;
        $this->source_of_supply = $data['source_of_supply'] ?? null;
        $this->place_of_supply = $data['place_of_supply'] ?? null;
        $this->destination_of_supply = $data['destination_of_supply'] ?? null;
        $this->gst_treatment = $data['gst_treatment'] ?? null;
        $this->gst_no = $data['gst_no'] ?? null;
        $this->tax_treatment = $data['tax_treatment'] ?? null;
        $this->vat_treatment = $data['vat_treatment'] ?? null;
        $this->vat_reg_no = $data['vat_reg_no'] ?? null;
        $this->is_abn_quoted = $data['is_abn_quoted'] ?? null;
        $this->abn = $data['abn'] ?? null;
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? null;
        $this->pricebook_id = $data['pricebook_id'] ?? null;
        $this->pricebook_name = $data['pricebook_name'] ?? null;
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? null;
        $this->line_items = $data['line_items'] ?? [];
        $this->is_tds_applied = $data['is_tds_applied'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->terms = $data['terms'] ?? null;
        $this->payment_terms = $data['payment_terms'] ?? null;
        $this->payment_terms_label = $data['payment_terms_label'] ?? null;
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->acquisition_vat_summary = $data['acquisition_vat_summary'] ?? null;
        $this->reverse_charge_vat_summary = $data['reverse_charge_vat_summary'] ?? null;
        $this->acquisition_vat_total = $data['acquisition_vat_total'] ?? null;
        $this->reverse_charge_vat_total = $data['reverse_charge_vat_total'] ?? null;
        $this->created_time = $data['created_time'] ?? null;
        $this->created_by_id = $data['created_by_id'] ?? null;
        $this->last_modified_time = $data['last_modified_time'] ?? null;
        $this->discount = $data['discount'] ?? null;
        $this->discount_account_id = $data['discount_account_id'] ?? null;
        $this->is_discount_before_tax = $data['is_discount_before_tax'] ?? null;
    }
}
