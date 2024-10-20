<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class ExpenseDTO
 * Data Transfer Object for an Expense.
 */
class ExpenseDto
{
    /** @var string Unique ID of the expense */
    public string $expense_id;

    /** @var string Transaction ID */
    public string $transaction_id;

    /** @var string Transaction type */
    public string $transaction_type;

    /** @var string GST identification number (🇮🇳 only) */
    public string $gst_no;

    /** @var string GST treatment (🇮🇳 only) */
    public string $gst_treatment;

    /** @var string Tax treatment (GCC, 🇰🇪, 🇿🇦 only) */
    public string $tax_treatment;

    /** @var string Destination of supply (🇮🇳 only) */
    public string $destination_of_supply;

    /** @var string Destination of supply state (🇮🇳 only) */
    public string $destination_of_supply_state;

    /** @var string Place of supply (GCC only) */
    public string $place_of_supply;

    /** @var string HSN/SAC code (🇮🇳, 🇰🇪 only) */
    public string $hsn_or_sac;

    /** @var string Source of supply (🇮🇳 only) */
    public string $source_of_supply;

    /** @var string Name of the paid through account */
    public string $paid_through_account_name;

    /** @var string VAT registration number */
    public string $vat_reg_no;

    /** @var string Reverse charge tax ID */
    public string $reverse_charge_tax_id;

    /** @var string Reverse charge tax name (🇮🇳 only) */
    public string $reverse_charge_tax_name;

    /** @var float Reverse charge tax percentage (🇮🇳 only) */
    public float $reverse_charge_tax_percentage;

    /** @var int Reverse charge tax amount (🇮🇳 only) */
    public int $reverse_charge_tax_amount;

    /** @var float Tax amount */
    public float $tax_amount;

    /** @var bool Is itemized expense */
    public bool $is_itemized_expense;

    /** @var string Pre-GST applicability (🇮🇳 only) */
    public string $is_pre_gst;

    /** @var string Trip ID */
    public string $trip_id;

    /** @var string Trip number */
    public string $trip_number;

    /** @var float Reverse charge VAT total (🇮🇳 only) */
    public float $reverse_charge_vat_total;

    /** @var float Acquisition VAT total */
    public float $acquisition_vat_total;

    /** @var array Acquisition VAT summary */
    public array $acquisition_vat_summary;

    /** @var array Reverse charge VAT summary */
    public array $reverse_charge_vat_summary;

    /** @var array Taxes (🇲🇽 only) */
    public array $taxes;

    /** @var string Expense item ID */
    public string $expense_item_id;

    /** @var string Expense account ID */
    public string $account_id;

    /** @var string Account name */
    public string $account_name;

    /** @var string Date of the expense */
    public string $date;

    /** @var string Tax ID */
    public string $tax_id;

    /** @var string Tax name */
    public string $tax_name;

    /** @var float Tax percentage */
    public float $tax_percentage;

    /** @var string Currency ID */
    public string $currency_id;

    /** @var string Currency code */
    public string $currency_code;

    /** @var float Exchange rate */
    public float $exchange_rate;

    /** @var float Subtotal */
    public float $sub_total;

    /** @var float Total */
    public float $total;

    /** @var float Base currency total */
    public float $bcy_total;

    /** @var float Amount of the expense */
    public float $amount;

    /** @var bool Is inclusive tax */
    public bool $is_inclusive_tax;

    /** @var string Reference number */
    public string $reference_number;

    /** @var string Description of the expense */
    public string $description;

    /** @var bool Is billable */
    public bool $is_billable;

    /** @var bool Is personal */
    public bool $is_personal;

    /** @var string Customer ID */
    public string $customer_id;

    /** @var string Customer name */
    public string $customer_name;

    /** @var string Expense receipt name */
    public string $expense_receipt_name;

    /** @var string Expense receipt type */
    public string $expense_receipt_type;

    /** @var string Last modified time */
    public string $last_modified_time;

    /** @var string Expense status */
    public string $status;

    /** @var string Invoice ID */
    public string $invoice_id;

    /** @var string Invoice number */
    public string $invoice_number;

    /** @var string Project ID */
    public string $project_id;

    /** @var string Project name */
    public string $project_name;

    /** @var float Mileage rate */
    public float $mileage_rate;

    /** @var string Mileage type */
    public string $mileage_type;

    /** @var string Expense type */
    public string $expense_type;

    /** @var float Start reading for odometer */
    public float $start_reading;

    /** @var float End reading for odometer */
    public float $end_reading;

    public function __construct(array $data)
    {
        $this->expense_id = $data['expense_id'] ?? '';
        $this->transaction_id = $data['transaction_id'] ?? '';
        $this->transaction_type = $data['transaction_type'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->destination_of_supply = $data['destination_of_supply'] ?? '';
        $this->destination_of_supply_state = $data['destination_of_supply_state'] ?? '';
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->hsn_or_sac = $data['hsn_or_sac'] ?? '';
        $this->source_of_supply = $data['source_of_supply'] ?? '';
        $this->paid_through_account_name = $data['paid_through_account_name'] ?? '';
        $this->vat_reg_no = $data['vat_reg_no'] ?? '';
        $this->reverse_charge_tax_id = $data['reverse_charge_tax_id'] ?? '';
        $this->reverse_charge_tax_name = $data['reverse_charge_tax_name'] ?? '';
        $this->reverse_charge_tax_percentage = $data['reverse_charge_tax_percentage'] ?? 0.0;
        $this->reverse_charge_tax_amount = $data['reverse_charge_tax_amount'] ?? 0;
        $this->tax_amount = $data['tax_amount'] ?? 0.0;
        $this->is_itemized_expense = $data['is_itemized_expense'] ?? false;
        $this->is_pre_gst = $data['is_pre_gst'] ?? '';
        $this->trip_id = $data['trip_id'] ?? '';
        $this->trip_number = $data['trip_number'] ?? '';
        $this->reverse_charge_vat_total = $data['reverse_charge_vat_total'] ?? 0.0;
        $this->acquisition_vat_total = $data['acquisition_vat_total'] ?? 0.0;
        $this->acquisition_vat_summary = $data['acquisition_vat_summary'] ?? [];
        $this->reverse_charge_vat_summary = $data['reverse_charge_vat_summary'] ?? [];
        $this->taxes = $data['taxes'] ?? [];
        $this->expense_item_id = $data['expense_item_id'] ?? '';
        $this->account_id = $data['account_id'] ?? '';
        $this->account_name = $data['account_name'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->tax_id = $data['tax_id'] ?? '';
        $this->tax_name = $data['tax_name'] ?? '';
        $this->tax_percentage = $data['tax_percentage'] ?? 0.0;
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->sub_total = $data['sub_total'] ?? 0.0;
        $this->total = $data['total'] ?? 0.0;
        $this->bcy_total = $data['bcy_total'] ?? 0.0;
        $this->amount = $data['amount'] ?? 0.0;
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->reference_number = $data['reference_number'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->is_billable = $data['is_billable'] ?? false;
        $this->is_personal = $data['is_personal'] ?? false;
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->expense_receipt_name = $data['expense_receipt_name'] ?? '';
        $this->expense_receipt_type = $data['expense_receipt_type'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->invoice_id = $data['invoice_id'] ?? '';
        $this->invoice_number = $data['invoice_number'] ?? '';
        $this->project_id = $data['project_id'] ?? '';
        $this->project_name = $data['project_name'] ?? '';
        $this->mileage_rate = $data['mileage_rate'] ?? 0.0;
        $this->mileage_type = $data['mileage_type'] ?? '';
        $this->expense_type = $data['expense_type'] ?? '';
        $this->start_reading = $data['start_reading'] ?? 0.0;
        $this->end_reading = $data['end_reading'] ?? 0.0;
    }
}
