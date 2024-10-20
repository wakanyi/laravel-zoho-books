<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class RetainerInvoiceDTO
 * Data Transfer Object for a Retainer Invoice.
 */
class RetainerInvoiceDto
{
    /** @var string ID of the retainer invoice */
    public string $retainerinvoice_id;

    /** @var string Number of the retainer invoice */
    public string $retainerinvoice_number;

    /** @var string Date of creation */
    public string $date;

    /** @var string Status of the retainer invoice */
    public string $status;

    /** @var string Pre-GST applicability */
    public string $is_pre_gst;

    /** @var string Place of supply (🇮🇳 only) */
    public string $place_of_supply;

    /** @var string Project ID */
    public string $project_id;

    /** @var string Project name */
    public string $project_name;

    /** @var string Last payment date */
    public string $last_payment_date;

    /** @var string Reference number */
    public string $reference_number;

    /** @var string Customer ID */
    public string $customer_id;

    /** @var string Customer name */
    public string $customer_name;

    /** @var array Contact persons */
    public array $contact_persons;

    /** @var string Currency ID */
    public string $currency_id;

    /** @var string Currency code */
    public string $currency_code;

    /** @var string Currency symbol */
    public string $currency_symbol;

    /** @var float Exchange rate */
    public float $exchange_rate;

    /** @var bool Is viewed by client */
    public bool $is_viewed_by_client;

    /** @var bool Client viewed time */
    public bool $client_viewed_time;

    /** @var bool Is inclusive tax */
    public bool $is_inclusive_tax;

    /** @var array Line items */
    public array $line_items;

    /** @var float Subtotal */
    public float $sub_total;

    /** @var string Total amount to be paid */
    public string $total;

    /** @var array Taxes levied */
    public array $taxes;

    /** @var float Payment made */
    public float $payment_made;

    /** @var float Payment drawn */
    public float $payment_drawn;

    /** @var string Unpaid balance */
    public string $balance;

    /** @var bool Allow partial payments */
    public bool $allow_partial_payments;

    /** @var int Price precision */
    public int $price_precision;

    /** @var object Payment options */
    public object $payment_options;

    /** @var string Is emailed */
    public string $is_emailed;

    /** @var array Documents attached */
    public array $documents;

    /** @var object Billing address */
    public object $billing_address;

    /** @var object Shipping address */
    public object $shipping_address;

    /** @var string Notes */
    public string $notes;

    /** @var string Terms */
    public string $terms;

    /** @var array Custom fields */
    public array $custom_fields;

    /** @var string Template ID */
    public string $template_id;

    /** @var string Template name */
    public string $template_name;

    /** @var string Page width */
    public string $page_width;

    /** @var string Page height */
    public string $page_height;

    /** @var string Orientation */
    public string $orientation;

    /** @var string Template type */
    public string $template_type;

    /** @var string Created time */
    public string $created_time;

    /** @var string Last modified time */
    public string $last_modified_time;

    /** @var string Created by ID */
    public string $created_by_id;

    /** @var string Attachment name */
    public string $attachment_name;

    /** @var bool Can send in mail */
    public bool $can_send_in_mail;

    /** @var string Invoice URL */
    public string $invoice_url;

    public function __construct(array $data)
    {
        $this->retainerinvoice_id = $data['retainerinvoice_id'] ?? '';
        $this->retainerinvoice_number = $data['retainerinvoice_number'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->is_pre_gst = $data['is_pre_gst'] ?? '';
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->project_id = $data['project_id'] ?? '';
        $this->project_name = $data['project_name'] ?? '';
        $this->last_payment_date = $data['last_payment_date'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->contact_persons = $data['contact_persons'] ?? [];
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->is_viewed_by_client = $data['is_viewed_by_client'] ?? false;
        $this->client_viewed_time = $data['client_viewed_time'] ?? false;
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->line_items = $data['line_items'] ?? [];
        $this->sub_total = $data['sub_total'] ?? 0.0;
        $this->total = $data['total'] ?? '';
        $this->taxes = $data['taxes'] ?? [];
        $this->payment_made = $data['payment_made'] ?? 0.0;
        $this->payment_drawn = $data['payment_drawn'] ?? 0.0;
        $this->balance = $data['balance'] ?? '';
        $this->allow_partial_payments = $data['allow_partial_payments'] ?? false;
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->payment_options = $data['payment_options'] ?? (object)[];
        $this->is_emailed = $data['is_emailed'] ?? '';
        $this->documents = $data['documents'] ?? [];
        $this->billing_address = $data['billing_address'] ?? (object)[];
        $this->shipping_address = $data['shipping_address'] ?? (object)[];
        $this->notes = $data['notes'] ?? '';
        $this->terms = $data['terms'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->template_id = $data['template_id'] ?? '';
        $this->template_name = $data['template_name'] ?? '';
        $this->page_width = $data['page_width'] ?? '';
        $this->page_height = $data['page_height'] ?? '';
        $this->orientation = $data['orientation'] ?? '';
        $this->template_type = $data['template_type'] ?? '';
        $this->created_time = $data['created_time'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->created_by_id = $data['created_by_id'] ?? '';
        $this->attachment_name = $data['attachment_name'] ?? '';
        $this->can_send_in_mail = $data['can_send_in_mail'] ?? false;
        $this->invoice_url = $data['invoice_url'] ?? '';
    }
}
