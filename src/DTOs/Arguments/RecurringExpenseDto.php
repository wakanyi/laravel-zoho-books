<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class RecurringExpenseDto
 * Data Transfer Object for a Recurring Expense.
 */
class RecurringExpenseDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Account ID */
     private string $account_id;

    /** @var string Name of the Recurring Expense */
     private string $recurrence_name;

    /** @var string Start date of the recurring expense */
     private string $start_date;

    /** @var string End date of the recurring expense */
     private string $end_date;

    /** @var bool Pre-GST applicability (IN only) */
     private bool $is_pre_gst;

    /** @var string Source of supply (IN only) */
     private string $source_of_supply;

    /** @var string Destination of supply (IN only) */
     private string $destination_of_supply;

    /** @var string Place of supply (GCC only) */
     private string $place_of_supply;

    /** @var string GST identification number (IN only) */
     private string $gst_no;

    /** @var string GST treatment (IN only) */
     private string $gst_treatment;

    /** @var string Tax treatment (GCC, MX, KE, ZA only) */
     private string $tax_treatment;

    /** @var string Destination of supply state (IN only) */
     private string $destination_of_supply_state;

    /** @var string HSN/SAC code (IN, KE only) */
     private string $hsn_or_sac;

    /** @var string VAT treatment (GB only) */
     private string $vat_treatment;

    /** @var string Reverse charge tax ID (IN, GCC, ZA only) */
     private string $reverse_charge_tax_id;

    /** @var string Reverse charge tax name (IN only) */
     private string $reverse_charge_tax_name;

    /** @var float Reverse charge tax percentage (IN only) */
     private float $reverse_charge_tax_percentage;

    /** @var float Reverse charge tax amount (IN only) */
     private float $reverse_charge_tax_amount;

    /** @var bool Is reverse charge applied (IN only) */
     private bool $is_reverse_charge_applied;

    /** @var float Acquisition VAT total */
     private float $acquisition_vat_total;

    /** @var float Reverse charge VAT total (IN only) */
     private float $reverse_charge_vat_total;

    /** @var array Acquisition VAT summary */
     private array $acquisition_vat_summary;

    /** @var array Reverse charge VAT summary */
     private array $reverse_charge_vat_summary;

    /** @var string Recurrence frequency */
     private string $recurrence_frequency;

    /** @var string Repeat every */
     private string $repeat_every;

    /** @var float Recurring Expense amount */
     private float $amount;

    /** @var float Total */
     private float $total;

    /** @var float Subtotal */
     private float $sub_total;

    /** @var float Base currency total */
     private float $bcy_total;

    /** @var string Product type (GB, ZA only) */
     private string $product_type;

    /** @var string Acquisition VAT ID (GB only) */
     private string $acquisition_vat_id;

    /** @var string Reverse charge VAT ID (IN, GB only) */
     private string $reverse_charge_vat_id;

    /** @var string Tax ID */
     private string $tax_id;

    /** @var string Tax name */
     private string $tax_name;

    /** @var float Tax percentage */
     private float $tax_percentage;

    /** @var string Created time */
     private string $created_time;

    /** @var string Last modified time */
     private string $last_modified_time;

    /** @var bool Is inclusive tax */
     private bool $is_inclusive_tax;

    /** @var bool Is billable */
     private bool $is_billable;

    /** @var string Customer ID */
     private string $customer_id;

    /** @var string Currency ID */
     private string $currency_id;

    /** @var float Exchange rate */
     private float $exchange_rate;

    /** @var string Project ID */
     private string $project_id;

    /** @var string Project name */
     private string $project_name;

    /** @var array Custom fields */
     private array $custom_fields;

    /** @var object Line item */
     private object $line_item;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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
