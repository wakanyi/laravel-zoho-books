<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class RecurringInvoiceDto
 * Data Transfer Object for a Recurring Invoice.
 */
class RecurringInvoiceDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Unique ID of the recurring invoice */
     private string $recurring_invoice_id;

    /** @var string Unique name for the recurring profile */
     private string $recurrence_name;

    /** @var string Order number of the recurring invoice */
     private string $reference_number;

    /** @var string Name of the customer */
     private string $customer_name;

    /** @var string Applicable for transactions before July 1, 2017 (IN only) */
     private string $is_pre_gst;

    /** @var string 15 digit GST identification number (IN only) */
     private string $gst_no;

    /** @var string GST treatment (IN only) */
     private string $gst_treatment;

    /** @var string Tax treatment (GCC, MX, KE, ZA only) */
     private string $tax_treatment;

    /** @var bool Reverse charge applied (ZA only) */
     private bool $is_reverse_charge_applied;

    /** @var string CFDI usage (MX only) */
     private string $cfdi_usage;

    /** @var string VAT treatment (GB only) */
     private string $vat_treatment;

    /** @var string Place of supply (IN, GCC only) */
     private string $place_of_supply;

    /** @var string Customer ID */
     private string $customer_id;

    /** @var string Currency ID */
     private string $currency_id;

    /** @var string Currency code */
     private string $currency_code;

    /** @var string Start date of the recurring invoice */
     private string $start_date;

    /** @var string End date of the recurring invoice */
     private string $end_date;

    /** @var string Last sent date */
     private string $last_sent_date;

    /** @var string Next invoice date */
     private string $next_invoice_date;

    /** @var array Line items of the invoice */
     private array $line_items;

    /** @var object Billing address */
     private object $billing_address;

    /** @var object Shipping address */
     private object $shipping_address;

    /** @var array Custom fields */
     private array $custom_fields;

    /** @var object Payment options */
     private object $payment_options;

    /** @var string Avalara exemption certificate number */
     private string $avatax_exempt_no;

    /** @var string Avalara use code */
     private string $avatax_use_code;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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
