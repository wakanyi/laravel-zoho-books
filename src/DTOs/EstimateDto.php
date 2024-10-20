<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class EstimateDTO
 * Data Transfer Object for an Estimate.
 */
class EstimateDto
{
    /** @var string Unique ID of the estimate */
    public string $estimate_id;

    /** @var string Estimate number (can search using variants like startswith or contains) */
    public string $estimate_number;

    /** @var string Date of the estimate (can search using start, end, before, after) */
    public string $date;

    /** @var string Reference number (can search using startswith or contains) */
    public string $reference_number;

    /** @var bool Applicable for 🇮🇳 pre-GST transactions (before July 1, 2017) */
    public bool $is_pre_gst;

    /** @var string Place of supply (Supported for 🇮🇳, GCC countries) */
    public string $place_of_supply;

    /** @var string 15-digit GST number for 🇮🇳 */
    public string $gst_no;

    /** @var string GST treatment (Options: business_gst, business_none, overseas, consumer) for 🇮🇳 */
    public string $gst_treatment;

    /** @var string VAT treatment (Supported for GCC, 🇲🇽, 🇰🇪, 🇿🇦) */
    public string $tax_treatment;

    /** @var bool Specifies whether reverse charge is applied for 🇿🇦 */
    public bool $is_reverse_charge_applied;

    /** @var string Status of the estimate (Allowed values: draft, sent, invoiced, accepted, declined, expired) */
    public string $status;

    /** @var string Customer ID */
    public string $customer_id;

    /** @var string Customer name (can search using startswith or contains) */
    public string $customer_name;

    /** @var array Array of contact persons related to the estimate */
    public array $contact_persons;

    /** @var string Currency ID of the estimate */
    public string $currency_id;

    /** @var string Currency code of the estimate */
    public string $currency_code;

    /** @var float Exchange rate for the currency */
    public float $exchange_rate;

    /** @var string Expiry date of the estimate */
    public string $expiry_date;

    /** @var float Discount applied to the estimate (can be % or amount) */
    public float $discount;

    /** @var bool Specifies if the discount is applied before tax */
    public bool $is_discount_before_tax;

    /** @var string Discount type (Options: entity_level, item_level) */
    public string $discount_type;

    /** @var bool Specifies whether line item rates are inclusive of tax */
    public bool $is_inclusive_tax;

    /** @var array Line items of the estimate */
    public array $line_items;

    /** @var string Shipping charges applied to the estimate */
    public string $shipping_charge;

    /** @var float Adjustments made to the estimate */
    public float $adjustment;

    /** @var string Description of the adjustment */
    public string $adjustment_description;

    /** @var float Subtotal of all items in the estimate */
    public float $sub_total;

    /** @var float Total amount of the estimate */
    public float $total;

    /** @var float Total tax amount for the estimate */
    public float $tax_total;

    /** @var int Precision value of the price */
    public int $price_precision;

    /** @var array List of taxes applied to the estimate */
    public array $taxes;

    /** @var object Billing address of the customer */
    public object $billing_address;

    /** @var object Shipping address of the customer */
    public object $shipping_address;

    /** @var string Notes added to the estimate */
    public string $notes;

    /** @var string Terms and conditions of the estimate */
    public string $terms;

    /** @var array Custom fields for the estimate */
    public array $custom_fields;

    /** @var string ID of the PDF template associated with the estimate */
    public string $template_id;

    /** @var string Name of the PDF template */
    public string $template_name;

    /** @var string Time of creation of the estimate */
    public string $created_time;

    /** @var string Last modified time of the estimate */
    public string $last_modified_time;

    /** @var string Salesperson ID associated with the estimate */
    public string $salesperson_id;

    /** @var string Name of the salesperson associated with the estimate */
    public string $salesperson_name;

    /** @var object Project details related to the estimate */
    public object $project;

    /**
     * EstimateDTO constructor.
     *
     * @param array $data Data to initialize the Estimate DTO.
     */
    public function __construct(array $data)
    {
        $this->estimate_id = $data['estimate_id'] ?? '';
        $this->estimate_number = $data['estimate_number'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->is_pre_gst = $data['is_pre_gst'] ?? false;
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->status = $data['status'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->contact_persons = $data['contact_persons'] ?? [];
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->expiry_date = $data['expiry_date'] ?? '';
        $this->discount = $data['discount'] ?? 0.0;
        $this->is_discount_before_tax = $data['is_discount_before_tax'] ?? false;
        $this->discount_type = $data['discount_type'] ?? '';
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->line_items = $data['line_items'] ?? [];
        $this->shipping_charge = $data['shipping_charge'] ?? '';
        $this->adjustment = $data['adjustment'] ?? 0.0;
        $this->adjustment_description = $data['adjustment_description'] ?? '';
        $this->sub_total = $data['sub_total'] ?? 0.0;
        $this->total = $data['total'] ?? 0.0;
        $this->tax_total = $data['tax_total'] ?? 0.0;
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->taxes = $data['taxes'] ?? [];
        $this->billing_address = $data['billing_address'] ?? (object)[];
        $this->shipping_address = $data['shipping_address'] ?? (object)[];
        $this->notes = $data['notes'] ?? '';
        $this->terms = $data['terms'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->template_id = $data['template_id'] ?? '';
        $this->template_name = $data['template_name'] ?? '';
        $this->created_time = $data['created_time'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->salesperson_id = $data['salesperson_id'] ?? '';
        $this->salesperson_name = $data['salesperson_name'] ?? '';
        $this->project = $data['project'] ?? (object)[];
    }
}
