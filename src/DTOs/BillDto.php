<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class BillDTO
 * Data Transfer Object for a Bill.
 */
class BillDto
{
    /** @var string ID of the Bill */
    public string $bill_id;

    /** @var array Purchase order IDs */
    public array $purchaseorder_ids;

    /** @var string Vendor ID */
    public string $vendor_id;

    /** @var string Vendor name */
    public string $vendor_name;

    /** @var string VAT treatment (🇬🇧 only) */
    public string $vat_treatment;

    /** @var string VAT registration number (🇬🇧, Avalara Integration only) */
    public string $vat_reg_no;

    /** @var string Source of supply (🇮🇳 only) */
    public string $source_of_supply;

    /** @var string Destination of supply (🇮🇳 only) */
    public string $destination_of_supply;

    /** @var string Place of supply (GCC only) */
    public string $place_of_supply;

    /** @var string Permit number (🇦🇪 only) */
    public string $permit_number;

    /** @var string GST number (🇮🇳 only) */
    public string $gst_no;

    /** @var string GST treatment (🇮🇳 only) */
    public string $gst_treatment;

    /** @var string Tax treatment (GCC, 🇲🇽, 🇰🇪, 🇿🇦 only) */
    public string $tax_treatment;

    /** @var bool Is pre-GST applicable (🇮🇳 only) */
    public bool $is_pre_gst;

    /** @var string Pricebook ID */
    public string $pricebook_id;

    /** @var string Pricebook name */
    public string $pricebook_name;

    /** @var bool Is reverse charge applied (🇮🇳 only) */
    public bool $is_reverse_charge_applied;

    /** @var int Unused credits payable amount */
    public int $unused_credits_payable_amount;

    /** @var string Status of the Bill */
    public string $status;

    /** @var string Bill number */
    public string $bill_number;

    /** @var string Date of bill creation */
    public string $date;

    /** @var string Due date */
    public string $due_date;

    /** @var int Payment terms */
    public int $payment_terms;

    /** @var string Payment terms label */
    public string $payment_terms_label;

    /** @var string Payment expected date */
    public string $payment_expected_date;

    /** @var string Reference number */
    public string $reference_number;

    /** @var string Recurring bill ID */
    public string $recurring_bill_id;

    /** @var string Days by which Bill is Due */
    public string $due_by_days;

    /** @var int Days in which Bill will be Due */
    public int $due_in_days;

    /** @var string Currency ID */
    public string $currency_id;

    /** @var string Currency code */
    public string $currency_code;

    /** @var string Currency symbol */
    public string $currency_symbol;

    /** @var array Documents */
    public array $documents;

    /** @var int Price precision */
    public int $price_precision;

    /** @var float Exchange rate */
    public float $exchange_rate;

    /** @var float Adjustment */
    public float $adjustment;

    /** @var string Adjustment description */
    public string $adjustment_description;

    /** @var array Custom fields */
    public array $custom_fields;

    /** @var bool Is TDS applied (🇮🇳, 🌎, 🇦🇺 only) */
    public bool $is_tds_applied;

    /** @var bool Is item level tax calculation */
    public bool $is_item_level_tax_calc;

    /** @var bool Is inclusive tax */
    public bool $is_inclusive_tax;

    /** @var string Filed in VAT return ID (🇬🇧 only) */
    public string $filed_in_vat_return_id;

    /** @var string Filed in VAT return name (🇬🇧 only) */
    public string $filed_in_vat_return_name;

    /** @var string Filed in VAT return type (🇬🇧 only) */
    public string $filed_in_vat_return_type;

    /** @var string Is ABN quoted (🇦🇺 only) */
    public string $is_abn_quoted;

    /** @var array Line items */
    public array $line_items;

    /** @var int Subtotal of the Bill */
    public int $sub_total;

    /** @var int Tax total of the Bill */
    public int $tax_total;

    /** @var int Total of the Bill */
    public int $total;

    /** @var int Payment made */
    public int $payment_made;

    /** @var int Vendor credits applied */
    public int $vendor_credits_applied;

    /** @var bool Is line item invoiced */
    public bool $is_line_item_invoiced;

    /** @var array Purchase orders */
    public array $purchaseorders;

    /** @var array Taxes */
    public array $taxes;

    /** @var array Acquisition VAT summary (🇬🇧, Europe only) */
    public array $acquisition_vat_summary;

    /** @var float Acquisition VAT total (🇬🇧, Europe only) */
    public float $acquisition_vat_total;

    /** @var array Reverse charge VAT summary (🇬🇧, Europe only) */
    public array $reverse_charge_vat_summary;

    /** @var float Reverse charge VAT total (🇬🇧, Europe only) */
    public float $reverse_charge_vat_total;

    /** @var int Balance in the Bill */
    public int $balance;

    /** @var object Billing address */
    public object $billing_address;

    /** @var array Payments */
    public array $payments;

    /** @var array Vendor credits */
    public array $vendor_credits;

    /** @var string Created time of the Bill */
    public string $created_time;

    /** @var string Created by ID */
    public string $created_by_id;

    /** @var string Last modified time of the Bill */
    public string $last_modified_time;

    /** @var string Reference ID */
    public string $reference_id;

    /** @var string Notes for the Bill */
    public string $notes;

    /** @var string Terms and conditions for the Bill */
    public string $terms;

    /** @var string Attachment name */
    public string $attachment_name;

    /** @var int Number of open purchase orders */
    public int $open_purchaseorders_count;

    public function __construct(array $data)
    {
        $this->bill_id = $data['bill_id'] ?? '';
        $this->purchaseorder_ids = $data['purchaseorder_ids'] ?? [];
        $this->vendor_id = $data['vendor_id'] ?? '';
        $this->vendor_name = $data['vendor_name'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->vat_reg_no = $data['vat_reg_no'] ?? '';
        $this->source_of_supply = $data['source_of_supply'] ?? '';
        $this->destination_of_supply = $data['destination_of_supply'] ?? '';
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->permit_number = $data['permit_number'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->is_pre_gst = $data['is_pre_gst'] ?? false;
        $this->pricebook_id = $data['pricebook_id'] ?? '';
        $this->pricebook_name = $data['pricebook_name'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->unused_credits_payable_amount = $data['unused_credits_payable_amount'] ?? 0;
        $this->status = $data['status'] ?? '';
        $this->bill_number = $data['bill_number'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->due_date = $data['due_date'] ?? '';
        $this->payment_terms = $data['payment_terms'] ?? 0;
        $this->payment_terms_label = $data['payment_terms_label'] ?? '';
        $this->payment_expected_date = $data['payment_expected_date'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->recurring_bill_id = $data['recurring_bill_id'] ?? '';
        $this->due_by_days = $data['due_by_days'] ?? '';
        $this->due_in_days = $data['due_in_days'] ?? 0;
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->documents = $data['documents'] ?? [];
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->adjustment = $data['adjustment'] ?? 0.0;
        $this->adjustment_description = $data['adjustment_description'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->is_tds_applied = $data['is_tds_applied'] ?? false;
        $this->is_item_level_tax_calc = $data['is_item_level_tax_calc'] ?? false;
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->filed_in_vat_return_id = $data['filed_in_vat_return_id'] ?? '';
        $this->filed_in_vat_return_name = $data['filed_in_vat_return_name'] ?? '';
        $this->filed_in_vat_return_type = $data['filed_in_vat_return_type'] ?? '';
        $this->is_abn_quoted = $data['is_abn_quoted'] ?? '';
        $this->line_items = $data['line_items'] ?? [];
        $this->sub_total = $data['sub_total'] ?? 0;
        $this->tax_total = $data['tax_total'] ?? 0;
        $this->total = $data['total'] ?? 0;
        $this->payment_made = $data['payment_made'] ?? 0;
        $this->vendor_credits_applied = $data['vendor_credits_applied'] ?? 0;
        $this->is_line_item_invoiced = $data['is_line_item_invoiced'] ?? false;
        $this->purchaseorders = $data['purchaseorders'] ?? [];
        $this->taxes = $data['taxes'] ?? [];
        $this->acquisition_vat_summary = $data['acquisition_vat_summary'] ?? [];
        $this->acquisition_vat_total = $data['acquisition_vat_total'] ?? 0.0;
        $this->reverse_charge_vat_summary = $data['reverse_charge_vat_summary'] ?? [];
        $this->reverse_charge_vat_total = $data['reverse_charge_vat_total'] ?? 0.0;
        $this->balance = $data['balance'] ?? 0;
        $this->billing_address = $data['billing_address'] ?? (object)[];
        $this->payments = $data['payments'] ?? [];
        $this->vendor_credits = $data['vendor_credits'] ?? [];
        $this->created_time = $data['created_time'] ?? '';
        $this->created_by_id = $data['created_by_id'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->reference_id = $data['reference_id'] ?? '';
        $this->notes = $data['notes'] ?? '';
        $this->terms = $data['terms'] ?? '';
        $this->attachment_name = $data['attachment_name'] ?? '';
        $this->open_purchaseorders_count = $data['open_purchaseorders_count'] ?? 0;
    }
}
