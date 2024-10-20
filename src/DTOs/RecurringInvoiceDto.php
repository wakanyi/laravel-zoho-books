<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class RecurringInvoiceDTO
 * Data Transfer Object for a Recurring Invoice.
 */
class RecurringInvoiceDto
{
    /** @var string Unique ID of the recurring invoice */
    public string $recurring_invoice_id;

    /** @var string Unique name for the recurring profile */
    public string $recurrence_name;

    /** @var string Order number of the recurring invoice */
    public string $reference_number;

    /** @var string Name of the customer */
    public string $customer_name;

    /** @var string Applicable for transactions before July 1, 2017 (🇮🇳 only) */
    public string $is_pre_gst;

    /** @var string 15 digit GST identification number (🇮🇳 only) */
    public string $gst_no;

    /** @var string GST treatment (🇮🇳 only) */
    public string $gst_treatment;

    /** @var string Tax treatment (GCC, 🇲🇽, 🇰🇪, 🇿🇦 only) */
    public string $tax_treatment;

    /** @var bool Reverse charge applied (🇿🇦 only) */
    public bool $is_reverse_charge_applied;

    /** @var string CFDI usage (🇲🇽 only) */
    public string $cfdi_usage;

    /** @var string VAT treatment (🇬🇧 only) */
    public string $vat_treatment;

    /** @var string Place of supply (🇮🇳, GCC only) */
    public string $place_of_supply;

    /** @var string Customer ID */
    public string $customer_id;

    /** @var string Currency ID */
    public string $currency_id;

    /** @var string Currency code */
    public string $currency_code;

    /** @var string Start date of the recurring invoice */
    public string $start_date;

    /** @var string End date of the recurring invoice */
    public string $end_date;

    /** @var string Last sent date */
    public string $last_sent_date;

    /** @var string Next invoice date */
    public string $next_invoice_date;

    /** @var array Line items of the invoice */
    public array $line_items;

    /** @var object Billing address */
    public object $billing_address;

    /** @var object Shipping address */
    public object $shipping_address;

    /** @var array Custom fields */
    public array $custom_fields;

    /** @var object Payment options */
    public object $payment_options;

    /** @var string Avalara exemption certificate number */
    public string $avatax_exempt_no;

    /** @var string Avalara use code */
    public string $avatax_use_code;

    public function __construct(array $data)
    {
        $this->recurring_invoice_id = $data['recurring_invoice_id'] ?? '';
        $this->recurrence_name = $data['recurrence_name'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->is_pre_gst = $data['is_pre_gst'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->cfdi_usage = $data['cfdi_usage'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->start_date = $data['start_date'] ?? '';
        $this->end_date = $data['end_date'] ?? '';
        $this->last_sent_date = $data['last_sent_date'] ?? '';
        $this->next_invoice_date = $data['next_invoice_date'] ?? '';
        $this->line_items = $data['line_items'] ?? [];
        $this->billing_address = $data['billing_address'] ?? (object)[];
        $this->shipping_address = $data['shipping_address'] ?? (object)[];
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->payment_options = $data['payment_options'] ?? (object)[];
        $this->avatax_exempt_no = $data['avatax_exempt_no'] ?? '';
        $this->avatax_use_code = $data['avatax_use_code'] ?? '';
    }
}
