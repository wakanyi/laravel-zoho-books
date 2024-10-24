<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class InvoiceDto
 * Data Transfer Object for an Invoice.
 */
class InvoiceDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the invoice */
     private string $invoice_id;

    /** @var bool Whether ACH payment is initiated */
     private bool $ach_payment_initiated;

    /** @var string Invoice number, searchable by variants */
     private string $invoice_number;

    /** @var bool Applicable for transactions before July 1, 2017 (IN only) */
     private bool $is_pre_gst;

    /** @var string Place of supply (IN, GCC only) */
     private string $place_of_supply;

    /** @var string 15 digit GST identification number (IN only) */
     private string $gst_no;

    /** @var string GST treatment (IN only) */
     private string $gst_treatment;

    /** @var string CFDI usage (MX only) */
     private string $cfdi_usage;

    /** @var string CFDI reference type (MX only) */
     private string $cfdi_reference_type;

    /** @var string Reference invoice ID (MX only) */
     private string $reference_invoice_id;

    /** @var string VAT treatment (GB only) */
     private string $vat_treatment;

    /** @var string Tax treatment (GCC, MX, KE, ZA only) */
     private string $tax_treatment;

    /** @var bool Reverse charge applied (ZA only) */
     private bool $is_reverse_charge_applied;

    /** @var string VAT registration number */
     private string $vat_reg_no;

    /** @var string Invoice date in yyyy-mm-dd format */
     private string $date;

    /** @var string Invoice status */
     private string $status;

    /** @var int Payment terms in days */
     private int $payment_terms;

    /** @var string Override payment terms label */
     private string $payment_terms_label;

    /** @var string Due date in yyyy-mm-dd format */
     private string $due_date;

    /** @var string Expected payment date */
     private string $payment_expected_date;

    /** @var string Last payment date */
     private string $last_payment_date;

    /** @var string Reference number */
     private string $reference_number;

    /** @var string Customer ID */
     private string $customer_id;

    /** @var string Customer name */
     private string $customer_name;

    /** @var array Contact persons */
     private array $contact_persons;

    /** @var string Currency ID */
     private string $currency_id;

    /** @var string Currency code */
     private string $currency_code;

    /** @var float Exchange rate */
     private float $exchange_rate;

    /** @var float Discount applied */
     private float $discount;

    /** @var bool Discount before tax */
     private bool $is_discount_before_tax;

    /** @var string Discount type */
     private string $discount_type;

    /** @var bool Inclusive tax */
     private bool $is_inclusive_tax;

    /** @var string Recurring invoice ID */
     private string $recurring_invoice_id;

    /** @var bool Viewed by client */
     private bool $is_viewed_by_client;

    /** @var bool Has attachment */
     private bool $has_attachment;

    /** @var string Client viewed time */
     private string $client_viewed_time;

    /** @var array Line items */
     private array $line_items;

    /** @var string Shipping charge */
     private string $shipping_charge;

    /** @var double Adjustment amount */
     private float $adjustment;

    /** @var string Adjustment description */
     private string $adjustment_description;

    /** @var float Subtotal of items */
     private float $sub_total;

    /** @var double Total tax amount */
     private float $tax_total;

    /** @var string Total amount */
     private string $total;

    /** @var array Taxes */
     private array $taxes;

    /** @var bool Payment reminder enabled */
     private bool $payment_reminder_enabled;

    /** @var float Payment made */
     private float $payment_made;

    /** @var float Credits applied */
     private float $credits_applied;

    /** @var float Tax amount withheld */
     private float $tax_amount_withheld;

    /** @var string Unpaid balance */
     private string $balance;

    /** @var float Write-off amount */
     private float $write_off_amount;

    /** @var bool Allow partial payments */
     private bool $allow_partial_payments;

    /** @var int Price precision */
     private int $price_precision;

    /** @var object Payment options */
     private object $payment_options;

    /** @var bool Emailed status */
     private bool $is_emailed;

    /** @var int Reminders sent */
     private int $reminders_sent;

    /** @var string Last reminder sent date */
     private string $last_reminder_sent_date;

    /** @var object Billing address */
     private object $billing_address;

    /** @var object Shipping address */
     private object $shipping_address;

    /** @var string Notes */
     private string $notes;

    /** @var string Terms */
     private string $terms;

    /** @var array Custom fields */
     private array $custom_fields;

    /** @var string Template ID */
     private string $template_id;

    /** @var string Template name */
     private string $template_name;

    /** @var string Created time */
     private string $created_time;

    /** @var string Last modified time */
     private string $last_modified_time;

    /** @var string Attachment name */
     private string $attachment_name;

    /** @var bool Can send in mail */
     private bool $can_send_in_mail;

    /** @var string Salesperson ID */
     private string $salesperson_id;

    /** @var string Salesperson name */
     private string $salesperson_name;

    /** @var string Invoice URL */
     private string $invoice_url;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->invoice_id = $data['invoice_id'] ?? '';
        $this->ach_payment_initiated = $data['ach_payment_initiated'] ?? false;
        $this->invoice_number = $data['invoice_number'] ?? '';
        $this->is_pre_gst = $data['is_pre_gst'] ?? false;
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->cfdi_usage = $data['cfdi_usage'] ?? '';
        $this->cfdi_reference_type = $data['cfdi_reference_type'] ?? '';
        $this->reference_invoice_id = $data['reference_invoice_id'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->vat_reg_no = $data['vat_reg_no'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->payment_terms = $data['payment_terms'] ?? 0;
        $this->payment_terms_label = $data['payment_terms_label'] ?? '';
        $this->due_date = $data['due_date'] ?? '';
        $this->payment_expected_date = $data['payment_expected_date'] ?? '';
        $this->last_payment_date = $data['last_payment_date'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->contact_persons = $data['contact_persons'] ?? [];
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->discount = $data['discount'] ?? 0.0;
        $this->is_discount_before_tax = $data['is_discount_before_tax'] ?? false;
        $this->discount_type = $data['discount_type'] ?? '';
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->recurring_invoice_id = $data['recurring_invoice_id'] ?? '';
        $this->is_viewed_by_client = $data['is_viewed_by_client'] ?? false;
        $this->has_attachment = $data['has_attachment'] ?? false;
        $this->client_viewed_time = $data['client_viewed_time'] ?? '';
        $this->line_items = $data['line_items'] ?? [];
        $this->shipping_charge = $data['shipping_charge'] ?? '';
        $this->adjustment = $data['adjustment'] ?? 0.0;
        $this->adjustment_description = $data['adjustment_description'] ?? '';
        $this->sub_total = $data['sub_total'] ?? 0.0;
        $this->tax_total = $data['tax_total'] ?? 0.0;
        $this->total = $data['total'] ?? '';
        $this->taxes = $data['taxes'] ?? [];
        $this->payment_reminder_enabled = $data['payment_reminder_enabled'] ?? false;
        $this->payment_made = $data['payment_made'] ?? 0.0;
        $this->credits_applied = $data['credits_applied'] ?? 0.0;
        $this->tax_amount_withheld = $data['tax_amount_withheld'] ?? 0.0;
        $this->balance = $data['balance'] ?? '';
        $this->write_off_amount = $data['write_off_amount'] ?? 0.0;
        $this->allow_partial_payments = $data['allow_partial_payments'] ?? false;
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->payment_options = $data['payment_options'] ?? (object)[];
        $this->is_emailed = $data['is_emailed'] ?? false;
        $this->reminders_sent = $data['reminders_sent'] ?? 0;
        $this->last_reminder_sent_date = $data['last_reminder_sent_date'] ?? '';
        $this->billing_address = $data['billing_address'] ?? (object)[];
        $this->shipping_address = $data['shipping_address'] ?? (object)[];
        $this->notes = $data['notes'] ?? '';
        $this->terms = $data['terms'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->template_id = $data['template_id'] ?? '';
        $this->template_name = $data['template_name'] ?? '';
        $this->created_time = $data['created_time'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->attachment_name = $data['attachment_name'] ?? '';
        $this->can_send_in_mail = $data['can_send_in_mail'] ?? false;
        $this->salesperson_id = $data['salesperson_id'] ?? '';
        $this->salesperson_name = $data['salesperson_name'] ?? '';
        $this->invoice_url = $data['invoice_url'] ?? '';
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
