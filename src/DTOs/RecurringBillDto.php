<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class RecurringBillDto
 * Data Transfer Object for a Recurring Bill.
 */
class RecurringBillDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Unique ID of the recurring bill */
     private string $recurring_bill_id;

    /** @var string ID of the vendor the bill has to be created */
     private string $vendor_id;

    /** @var string Name of the Vendor */
     private string $vendor_name;

    /** @var string Status of the Recurring Bill */
     private string $status;

    /** @var string Name of the Recurring Bill. Max-length [100] */
     private string $recurrence_name;

    /** @var string ID of the Currency */
     private string $currency_id;

    /** @var string Code of the Currency */
     private string $currency_code;

    /** @var string Symbol of the Currency */
     private string $currency_symbol;

    /** @var string Start date of the recurring bill. Format [yyyy-mm-dd] */
     private string $start_date;

    /** @var string End date on which recurring bill has to expire. Format [yyyy-mm-dd] */
     private string $end_date;

    /** @var string IN only: Place from where the goods/services are supplied */
     private string $source_of_supply;

    /** @var string GCC only: The place of supply for VAT purposes */
     private string $place_of_supply;

    /** @var string IN only: Place where the goods/services are supplied to */
     private string $destination_of_supply;

    /** @var string IN only: GST treatment of the contact */
     private string $gst_treatment;

    /** @var string IN only: 15 digit GST identification number of the vendor */
     private string $gst_no;

    /** @var string GCC, MX, KE, ZA only: VAT treatment for the bill */
     private string $tax_treatment;

    /** @var string GB only: VAT treatment for the bill */
     private string $vat_treatment;

    /** @var string GB, Avalara Integration only: VAT Registration number */
     private string $vat_reg_no;

    /** @var string AU only: Is ABN quoted */
     private string $is_abn_quoted;

    /** @var string AU only: ABN */
     private string $abn;

    /** @var bool IN only: Applicable for reverse charge */
     private bool $is_reverse_charge_applied;

    /** @var string ID of the price book */
     private string $pricebook_id;

    /** @var string Name of the price book */
     private string $pricebook_name;

    /** @var bool Not applicable 🇺🇸: Whether the line item rates are inclusive of tax */
     private bool $is_inclusive_tax;

    /** @var array Line items of a recurrence bill */
     private array $line_items;

    /** @var bool IN, global, AU only: Check if TDS is applied */
     private bool $is_tds_applied;

    /** @var string Notes for the Bill */
     private string $notes;

    /** @var string Terms and Conditions for the Bill */
     private string $terms;

    /** @var int Number referring to Payment Terms */
     private int $payment_terms;

    /** @var string Label of the Payment Terms */
     private string $payment_terms_label;

    /** @var array Custom fields */
     private array $custom_fields;

    /** @var array GB, Europe only: Summary of the VAT Acquisition */
     private array $acquisition_vat_summary;

    /** @var array GB, Europe only: Summary of the Reverse Charge */
     private array $reverse_charge_vat_summary;

    /** @var float GB, Europe only: Total of the VAT Acquisition */
     private float $acquisition_vat_total;

    /** @var float GB, Europe only: Total of the Reverse Charge */
     private float $reverse_charge_vat_total;

    /** @var string Created time of the bill */
     private string $created_time;

    /** @var string Name of User who created the Bill */
     private string $created_by_id;

    /** @var string Last Modified Time of the Bill */
     private string $last_modified_time;

    /** @var string Discount applied to the recurrence */
     private string $discount;

    /** @var string ID of the account associated with the discount account */
     private string $discount_account_id;

    /** @var bool To specify discount applied in before/after tax */
     private bool $is_discount_before_tax;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->recurring_bill_id = $data['recurring_bill_id'] ?? '';
        $this->vendor_id = $data['vendor_id'] ?? '';
        $this->vendor_name = $data['vendor_name'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->recurrence_name = $data['recurrence_name'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->start_date = $data['start_date'] ?? '';
        $this->end_date = $data['end_date'] ?? '';
        $this->source_of_supply = $data['source_of_supply'] ?? '';
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->destination_of_supply = $data['destination_of_supply'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->vat_reg_no = $data['vat_reg_no'] ?? '';
        $this->is_abn_quoted = $data['is_abn_quoted'] ?? '';
        $this->abn = $data['abn'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->pricebook_id = $data['pricebook_id'] ?? '';
        $this->pricebook_name = $data['pricebook_name'] ?? '';
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->line_items = $data['line_items'] ?? [];
        $this->is_tds_applied = $data['is_tds_applied'] ?? false;
        $this->notes = $data['notes'] ?? '';
        $this->terms = $data['terms'] ?? '';
        $this->payment_terms = $data['payment_terms'] ?? 0;
        $this->payment_terms_label = $data['payment_terms_label'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->acquisition_vat_summary = $data['acquisition_vat_summary'] ?? [];
        $this->reverse_charge_vat_summary = $data['reverse_charge_vat_summary'] ?? [];
        $this->acquisition_vat_total = $data['acquisition_vat_total'] ?? 0.0;
        $this->reverse_charge_vat_total = $data['reverse_charge_vat_total'] ?? 0.0;
        $this->created_time = $data['created_time'] ?? '';
        $this->created_by_id = $data['created_by_id'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->discount = $data['discount'] ?? '';
        $this->discount_account_id = $data['discount_account_id'] ?? '';
        $this->is_discount_before_tax = $data['is_discount_before_tax'] ?? false;
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
