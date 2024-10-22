<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class ExpenseDto
 * Data Transfer Object for an Expense.
 */
class ExpenseDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Unique ID of the expense */
     private string $expense_id;

    /** @var string Transaction ID */
     private string $transaction_id;

    /** @var string Transaction type */
     private string $transaction_type;

    /** @var string GST identification number (IN only) */
     private string $gst_no;

    /** @var string GST treatment (IN only) */
     private string $gst_treatment;

    /** @var string Tax treatment (GCC, KE, ZA only) */
     private string $tax_treatment;

    /** @var string Destination of supply (IN only) */
     private string $destination_of_supply;

    /** @var string Destination of supply state (IN only) */
     private string $destination_of_supply_state;

    /** @var string Place of supply (GCC only) */
     private string $place_of_supply;

    /** @var string HSN/SAC code (IN, KE only) */
     private string $hsn_or_sac;

    /** @var string Source of supply (IN only) */
     private string $source_of_supply;

    /** @var string Name of the paid through account */
     private string $paid_through_account_name;

    /** @var string VAT registration number */
     private string $vat_reg_no;

    /** @var string Reverse charge tax ID */
     private string $reverse_charge_tax_id;

    /** @var string Reverse charge tax name (IN only) */
     private string $reverse_charge_tax_name;

    /** @var float Reverse charge tax percentage (IN only) */
     private float $reverse_charge_tax_percentage;

    /** @var int Reverse charge tax amount (IN only) */
     private int $reverse_charge_tax_amount;

    /** @var float Tax amount */
     private float $tax_amount;

    /** @var bool Is itemized expense */
     private bool $is_itemized_expense;

    /** @var string Pre-GST applicability (IN only) */
     private string $is_pre_gst;

    /** @var string Trip ID */
     private string $trip_id;

    /** @var string Trip number */
     private string $trip_number;

    /** @var float Reverse charge VAT total (IN only) */
     private float $reverse_charge_vat_total;

    /** @var float Acquisition VAT total */
     private float $acquisition_vat_total;

    /** @var array Acquisition VAT summary */
     private array $acquisition_vat_summary;

    /** @var array Reverse charge VAT summary */
     private array $reverse_charge_vat_summary;

    /** @var array Taxes (MX only) */
     private array $taxes;

    /** @var string Expense item ID */
     private string $expense_item_id;

    /** @var string Expense account ID */
     private string $account_id;

    /** @var string Account name */
     private string $account_name;

    /** @var string Date of the expense */
     private string $date;

    /** @var string Tax ID */
     private string $tax_id;

    /** @var string Tax name */
     private string $tax_name;

    /** @var float Tax percentage */
     private float $tax_percentage;

    /** @var string Currency ID */
     private string $currency_id;

    /** @var string Currency code */
     private string $currency_code;

    /** @var float Exchange rate */
     private float $exchange_rate;

    /** @var float Subtotal */
     private float $sub_total;

    /** @var float Total */
     private float $total;

    /** @var float Base currency total */
     private float $bcy_total;

    /** @var float Amount of the expense */
     private float $amount;

    /** @var bool Is inclusive tax */
     private bool $is_inclusive_tax;

    /** @var string Reference number */
     private string $reference_number;

    /** @var string Description of the expense */
     private string $description;

    /** @var bool Is billable */
     private bool $is_billable;

    /** @var bool Is personal */
     private bool $is_personal;

    /** @var string Customer ID */
     private string $customer_id;

    /** @var string Customer name */
     private string $customer_name;

    /** @var string Expense receipt name */
     private string $expense_receipt_name;

    /** @var string Expense receipt type */
     private string $expense_receipt_type;

    /** @var string Last modified time */
     private string $last_modified_time;

    /** @var string Expense status */
     private string $status;

    /** @var string Invoice ID */
     private string $invoice_id;

    /** @var string Invoice number */
     private string $invoice_number;

    /** @var string Project ID */
     private string $project_id;

    /** @var string Project name */
     private string $project_name;

    /** @var float Mileage rate */
     private float $mileage_rate;

    /** @var string Mileage type */
     private string $mileage_type;

    /** @var string Expense type */
     private string $expense_type;

    /** @var float Start reading for odometer */
     private float $start_reading;

    /** @var float End reading for odometer */
     private float $end_reading;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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
