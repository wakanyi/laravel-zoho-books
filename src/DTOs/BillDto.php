<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class BillDto
 * Data Transfer Object for a Bill.
 */
class BillDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the Bill */
     private string $bill_id;

    /** @var array Purchase order IDs */
     private array $purchaseorder_ids;

    /** @var string Vendor ID */
     private string $vendor_id;

    /** @var string Vendor name */
     private string $vendor_name;

    /** @var string VAT treatment (GB only) */
     private string $vat_treatment;

    /** @var string VAT registration number (GB, Avalara Integration only) */
     private string $vat_reg_no;

    /** @var string Source of supply (IN only) */
     private string $source_of_supply;

    /** @var string Destination of supply (IN only) */
     private string $destination_of_supply;

    /** @var string Place of supply (GCC only) */
     private string $place_of_supply;

    /** @var string Permit number (AE only) */
     private string $permit_number;

    /** @var string GST number (IN only) */
     private string $gst_no;

    /** @var string GST treatment (IN only) */
     private string $gst_treatment;

    /** @var string Tax treatment (GCC, MX, KE, ZA only) */
     private string $tax_treatment;

    /** @var bool Is pre-GST applicable (IN only) */
     private bool $is_pre_gst;

    /** @var string Pricebook ID */
     private string $pricebook_id;

    /** @var string Pricebook name */
     private string $pricebook_name;

    /** @var bool Is reverse charge applied (IN only) */
     private bool $is_reverse_charge_applied;

    /** @var int Unused credits payable amount */
     private int $unused_credits_payable_amount;

    /** @var string Status of the Bill */
     private string $status;

    /** @var string Bill number */
     private string $bill_number;

    /** @var string Date of bill creation */
     private string $date;

    /** @var string Due date */
     private string $due_date;

    /** @var int Payment terms */
     private int $payment_terms;

    /** @var string Payment terms label */
     private string $payment_terms_label;

    /** @var string Payment expected date */
     private string $payment_expected_date;

    /** @var string Reference number */
     private string $reference_number;

    /** @var string Recurring bill ID */
     private string $recurring_bill_id;

    /** @var string Days by which Bill is Due */
     private string $due_by_days;

    /** @var int Days in which Bill will be Due */
     private int $due_in_days;

    /** @var string Currency ID */
     private string $currency_id;

    /** @var string Currency code */
     private string $currency_code;

    /** @var string Currency symbol */
     private string $currency_symbol;

    /** @var array Documents */
     private array $documents;

    /** @var int Price precision */
     private int $price_precision;

    /** @var float Exchange rate */
     private float $exchange_rate;

    /** @var float Adjustment */
     private float $adjustment;

    /** @var string Adjustment description */
     private string $adjustment_description;

    /** @var array Custom fields */
     private array $custom_fields;

    /** @var bool Is TDS applied (IN, global, AU only) */
     private bool $is_tds_applied;

    /** @var bool Is item level tax calculation */
     private bool $is_item_level_tax_calc;

    /** @var bool Is inclusive tax */
     private bool $is_inclusive_tax;

    /** @var string Filed in VAT return ID (GB only) */
     private string $filed_in_vat_return_id;

    /** @var string Filed in VAT return name (GB only) */
     private string $filed_in_vat_return_name;

    /** @var string Filed in VAT return type (GB only) */
     private string $filed_in_vat_return_type;

    /** @var string Is ABN quoted (AU only) */
     private string $is_abn_quoted;

    /** @var array Line items */
     private array $line_items;

    /** @var int Subtotal of the Bill */
     private int $sub_total;

    /** @var int Tax total of the Bill */
     private int $tax_total;

    /** @var int Total of the Bill */
     private int $total;

    /** @var int Payment made */
     private int $payment_made;

    /** @var int Vendor credits applied */
     private int $vendor_credits_applied;

    /** @var bool Is line item invoiced */
     private bool $is_line_item_invoiced;

    /** @var array Purchase orders */
     private array $purchaseorders;

    /** @var array Taxes */
     private array $taxes;

    /** @var array Acquisition VAT summary (GB, Europe only) */
     private array $acquisition_vat_summary;

    /** @var float Acquisition VAT total (GB, Europe only) */
     private float $acquisition_vat_total;

    /** @var array Reverse charge VAT summary (GB, Europe only) */
     private array $reverse_charge_vat_summary;

    /** @var float Reverse charge VAT total (GB, Europe only) */
     private float $reverse_charge_vat_total;

    /** @var int Balance in the Bill */
     private int $balance;

    /** @var object Billing address */
     private object $billing_address;

    /** @var array Payments */
     private array $payments;

    /** @var array Vendor credits */
     private array $vendor_credits;

    /** @var string Created time of the Bill */
     private string $created_time;

    /** @var string Created by ID */
     private string $created_by_id;

    /** @var string Last modified time of the Bill */
     private string $last_modified_time;

    /** @var string Reference ID */
     private string $reference_id;

    /** @var string Notes for the Bill */
     private string $notes;

    /** @var string Terms and conditions for the Bill */
     private string $terms;

    /** @var string Attachment name */
     private string $attachment_name;

    /** @var int Number of open purchase orders */
     private int $open_purchaseorders_count;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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
