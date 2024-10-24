<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class RetainerInvoiceDto
 * Data Transfer Object for a Retainer Invoice.
 */
class RetainerInvoiceDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the retainer invoice */
     private string $retainerinvoice_id;

    /** @var string Number of the retainer invoice */
     private string $retainerinvoice_number;

    /** @var string Date of creation */
     private string $date;

    /** @var string Status of the retainer invoice */
     private string $status;

    /** @var string Pre-GST applicability */
     private string $is_pre_gst;

    /** @var string Place of supply (IN only) */
     private string $place_of_supply;

    /** @var string Project ID */
     private string $project_id;

    /** @var string Project name */
     private string $project_name;

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

    /** @var string Currency symbol */
     private string $currency_symbol;

    /** @var float Exchange rate */
     private float $exchange_rate;

    /** @var bool Is viewed by client */
     private bool $is_viewed_by_client;

    /** @var bool Client viewed time */
     private bool $client_viewed_time;

    /** @var bool Is inclusive tax */
     private bool $is_inclusive_tax;

    /** @var array Line items */
     private array $line_items;

    /** @var float Subtotal */
     private float $sub_total;

    /** @var string Total amount to be paid */
     private string $total;

    /** @var array Taxes levied */
     private array $taxes;

    /** @var float Payment made */
     private float $payment_made;

    /** @var float Payment drawn */
     private float $payment_drawn;

    /** @var string Unpaid balance */
     private string $balance;

    /** @var bool Allow partial payments */
     private bool $allow_partial_payments;

    /** @var int Price precision */
     private int $price_precision;

    /** @var object Payment options */
     private object $payment_options;

    /** @var string Is emailed */
     private string $is_emailed;

    /** @var array Documents attached */
     private array $documents;

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

    /** @var string Page width */
     private string $page_width;

    /** @var string Page height */
     private string $page_height;

    /** @var string Orientation */
     private string $orientation;

    /** @var string Template type */
     private string $template_type;

    /** @var string Created time */
     private string $created_time;

    /** @var string Last modified time */
     private string $last_modified_time;

    /** @var string Created by ID */
     private string $created_by_id;

    /** @var string Attachment name */
     private string $attachment_name;

    /** @var bool Can send in mail */
     private bool $can_send_in_mail;

    /** @var string Invoice URL */
     private string $invoice_url;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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
