<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class CreditNoteDTO
 * Data Transfer Object for a Credit Note.
 */
class CreditNoteDto
{
    /** @var string Unique ID of the credit note */
    public string $creditnote_id;

    /** @var string Unique credit note number (starts with CN) */
    public string $creditnote_number;

    /** @var string Date of the credit note in yyyy-mm-dd format */
    public string $date;

    /** @var bool Applicable for transactions before July 1, 2017 (🇮🇳 only) */
    public bool $is_pre_gst;

    /** @var string Place of supply (🇮🇳, GCC only) */
    public string $place_of_supply;

    /** @var string VAT treatment (🇬🇧 only) */
    public string $vat_treatment;

    /** @var string VAT registration number */
    public string $vat_reg_no;

    /** @var string 15 digit GST identification number (🇮🇳 only) */
    public string $gst_no;

    /** @var string CFDI usage (🇲🇽 only) */
    public string $cfdi_usage;

    /** @var string CFDI reference type (🇲🇽 only) */
    public string $cfdi_reference_type;

    /** @var string GST treatment (🇮🇳 only) */
    public string $gst_treatment;

    /** @var string Tax treatment (GCC, 🇲🇽, 🇰🇪, 🇿🇦 only) */
    public string $tax_treatment;

    /** @var bool Reverse charge applied (🇿🇦 only) */
    public bool $is_reverse_charge_applied;

    /** @var string Status of the credit note */
    public string $status;

    /** @var string Customer ID */
    public string $customer_id;

    /** @var string Customer name */
    public string $customer_name;

    /** @var array Custom fields */
    public array $custom_fields;

    /** @var string Reference number */
    public string $reference_number;

    /** @var string Customer's email address */
    public string $email;

    /** @var float Total credits raised */
    public float $total;

    /** @var float Unapplied credits balance */
    public float $balance;

    /** @var array Line items */
    public array $line_items;

    /** @var array List of invoices related to the credit note */
    public array $invoices;

    /** @var array Taxes associated with the credit note */
    public array $taxes;

    /** @var string Customer's currency code */
    public string $currency_code;

    /** @var string Customer's currency symbol */
    public string $currency_symbol;

    /** @var object Billing address */
    public object $billing_address;

    /** @var object Shipping address */
    public object $shipping_address;

    /** @var string Time when the credit note was created */
    public string $created_time;

    /** @var string Last updated time of the credit note */
    public string $updated_time;

    /** @var string Template ID */
    public string $template_id;

    /** @var string Template name */
    public string $template_name;

    /** @var string Notes for the credit note */
    public string $notes;

    /** @var string Terms & conditions */
    public string $terms;

    public function __construct(array $data)
    {
        $this->creditnote_id = $data['creditnote_id'] ?? '';
        $this->creditnote_number = $data['creditnote_number'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->is_pre_gst = $data['is_pre_gst'] ?? false;
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->vat_reg_no = $data['vat_reg_no'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->cfdi_usage = $data['cfdi_usage'] ?? '';
        $this->cfdi_reference_type = $data['cfdi_reference_type'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->status = $data['status'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->reference_number = $data['reference_number'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->total = $data['total'] ?? 0.0;
        $this->balance = $data['balance'] ?? 0.0;
        $this->line_items = $data['line_items'] ?? [];
        $this->invoices = $data['invoices'] ?? [];
        $this->taxes = $data['taxes'] ?? [];
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->billing_address = $data['billing_address'] ?? (object)[];
        $this->shipping_address = $data['shipping_address'] ?? (object)[];
        $this->created_time = $data['created_time'] ?? '';
        $this->updated_time = $data['updated_time'] ?? '';
        $this->template_id = $data['template_id'] ?? '';
        $this->template_name = $data['template_name'] ?? '';
        $this->notes = $data['notes'] ?? '';
        $this->terms = $data['terms'] ?? '';
    }
}
