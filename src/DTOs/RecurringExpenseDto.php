<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class RecurringExpenseDTO
 * Data Transfer Object for a Recurring Expense.
 */
class RecurringExpenseDto
{
    /** @var string Account ID */
    public string $account_id;

    /** @var string Name of the Recurring Expense */
    public string $recurrence_name;

    /** @var string Start date of the recurring expense */
    public string $start_date;

    /** @var string End date of the recurring expense */
    public string $end_date;

    /** @var bool Pre-GST applicability (🇮🇳 only) */
    public bool $is_pre_gst;

    /** @var string Source of supply (🇮🇳 only) */
    public string $source_of_supply;

    /** @var string Destination of supply (🇮🇳 only) */
    public string $destination_of_supply;

    /** @var string Place of supply (GCC only) */
    public string $place_of_supply;

    /** @var string GST identification number (🇮🇳 only) */
    public string $gst_no;

    /** @var string GST treatment (🇮🇳 only) */
    public string $gst_treatment;

    /** @var string Tax treatment (GCC, 🇲🇽, 🇰🇪, 🇿🇦 only) */
    public string $tax_treatment;

    /** @var string Destination of supply state (🇮🇳 only) */
    public string $destination_of_supply_state;

    /** @var string HSN/SAC code (🇮🇳, 🇰🇪 only) */
    public string $hsn_or_sac;

    /** @var string VAT treatment (🇬🇧 only) */
    public string $vat_treatment;

    /** @var string Reverse charge tax ID (🇮🇳, GCC, 🇿🇦 only) */
    public string $reverse_charge_tax_id;

    /** @var string Reverse charge tax name (🇮🇳 only) */
    public string $reverse_charge_tax_name;

    /** @var float Reverse charge tax percentage (🇮🇳 only) */
    public float $reverse_charge_tax_percentage;

    /** @var float Reverse charge tax amount (🇮🇳 only) */
    public float $reverse_charge_tax_amount;

    /** @var bool Is reverse charge applied (🇮🇳 only) */
    public bool $is_reverse_charge_applied;

    /** @var float Acquisition VAT total */
    public float $acquisition_vat_total;

    /** @var float Reverse charge VAT total (🇮🇳 only) */
    public float $reverse_charge_vat_total;

    /** @var array Acquisition VAT summary */
    public array $acquisition_vat_summary;

    /** @var array Reverse charge VAT summary */
    public array $reverse_charge_vat_summary;

    /** @var string Recurrence frequency */
    public string $recurrence_frequency;

    /** @var string Repeat every */
    public string $repeat_every;

    /** @var float Recurring Expense amount */
    public float $amount;

    /** @var float Total */
    public float $total;

    /** @var float Subtotal */
    public float $sub_total;

    /** @var float Base currency total */
    public float $bcy_total;

    /** @var string Product type (🇬🇧, 🇿🇦 only) */
    public string $product_type;

    /** @var string Acquisition VAT ID (🇬🇧 only) */
    public string $acquisition_vat_id;

    /** @var string Reverse charge VAT ID (🇮🇳, 🇬🇧 only) */
    public string $reverse_charge_vat_id;

    /** @var string Tax ID */
    public string $tax_id;

    /** @var string Tax name */
    public string $tax_name;

    /** @var float Tax percentage */
    public float $tax_percentage;

    /** @var string Created time */
    public string $created_time;

    /** @var string Last modified time */
    public string $last_modified_time;

    /** @var bool Is inclusive tax */
    public bool $is_inclusive_tax;

    /** @var bool Is billable */
    public bool $is_billable;

    /** @var string Customer ID */
    public string $customer_id;

    /** @var string Currency ID */
    public string $currency_id;

    /** @var float Exchange rate */
    public float $exchange_rate;

    /** @var string Project ID */
    public string $project_id;

    /** @var string Project name */
    public string $project_name;

    /** @var array Custom fields */
    public array $custom_fields;

    /** @var object Line item */
    public object $line_item;

    public function __construct(array $data)
    {
        $this->account_id = $data['account_id'] ?? '';
        $this->recurrence_name = $data['recurrence_name'] ?? '';
        $this->start_date = $data['start_date'] ?? '';
        $this->end_date = $data['end_date'] ?? '';
        $this->is_pre_gst = $data['is_pre_gst'] ?? false;
        $this->source_of_supply = $data['source_of_supply'] ?? '';
        $this->destination_of_supply = $data['destination_of_supply'] ?? '';
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->destination_of_supply_state = $data['destination_of_supply_state'] ?? '';
        $this->hsn_or_sac = $data['hsn_or_sac'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->reverse_charge_tax_id = $data['reverse_charge_tax_id'] ?? '';
        $this->reverse_charge_tax_name = $data['reverse_charge_tax_name'] ?? '';
        $this->reverse_charge_tax_percentage = $data['reverse_charge_tax_percentage'] ?? 0.0;
        $this->reverse_charge_tax_amount = $data['reverse_charge_tax_amount'] ?? 0.0;
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->acquisition_vat_total = $data['acquisition_vat_total'] ?? 0.0;
        $this->reverse_charge_vat_total = $data['reverse_charge_vat_total'] ?? 0.0;
        $this->acquisition_vat_summary = $data['acquisition_vat_summary'] ?? [];
        $this->reverse_charge_vat_summary = $data['reverse_charge_vat_summary'] ?? [];
        $this->recurrence_frequency = $data['recurrence_frequency'] ?? '';
        $this->repeat_every = $data['repeat_every'] ?? '';
        $this->amount = $data['amount'] ?? 0.0;
        $this->total = $data['total'] ?? 0.0;
        $this->sub_total = $data['sub_total'] ?? 0.0;
        $this->bcy_total = $data['bcy_total'] ?? 0.0;
        $this->product_type = $data['product_type'] ?? '';
        $this->acquisition_vat_id = $data['acquisition_vat_id'] ?? '';
        $this->reverse_charge_vat_id = $data['reverse_charge_vat_id'] ?? '';
        $this->tax_id = $data['tax_id'] ?? '';
        $this->tax_name = $data['tax_name'] ?? '';
        $this->tax_percentage = $data['tax_percentage'] ?? 0.0;
        $this->created_time = $data['created_time'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->is_billable = $data['is_billable'] ?? false;
        $this->customer_id = $data['customer_id'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->project_id = $data['project_id'] ?? '';
        $this->project_name = $data['project_name'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->line_item = $data['line_item'] ?? (object)[];
    }
}
