<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class EstimateDto
 * Data Transfer Object for an Estimate.
 */
class EstimateDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Unique ID of the estimate */
     private string $estimate_id;

    /** @var string Estimate number (can search using variants like startswith or contains) */
     private string $estimate_number;

    /** @var string Date of the estimate (can search using start, end, before, after) */
     private string $date;

    /** @var string Reference number (can search using startswith or contains) */
     private string $reference_number;

    /** @var bool Applicable for IN pre-GST transactions (before July 1, 2017) */
     private bool $is_pre_gst;

    /** @var string Place of supply (Supported for IN, GCC countries) */
     private string $place_of_supply;

    /** @var string 15-digit GST number for IN */
     private string $gst_no;

    /** @var string GST treatment (Options: business_gst, business_none, overseas, consumer) for IN */
     private string $gst_treatment;

    /** @var string VAT treatment (Supported for GCC, MX, KE, ZA) */
     private string $tax_treatment;

    /** @var bool Specifies whether reverse charge is applied for ZA */
     private bool $is_reverse_charge_applied;

    /** @var string Status of the estimate (Allowed values: draft, sent, invoiced, accepted, declined, expired) */
     private string $status;

    /** @var string Customer ID */
     private string $customer_id;

    /** @var string Customer name (can search using startswith or contains) */
     private string $customer_name;

    /** @var array Array of contact persons related to the estimate */
     private array $contact_persons;

    /** @var string Currency ID of the estimate */
     private string $currency_id;

    /** @var string Currency code of the estimate */
     private string $currency_code;

    /** @var float Exchange rate for the currency */
     private float $exchange_rate;

    /** @var string Expiry date of the estimate */
     private string $expiry_date;

    /** @var float Discount applied to the estimate (can be % or amount) */
     private float $discount;

    /** @var bool Specifies if the discount is applied before tax */
     private bool $is_discount_before_tax;

    /** @var string Discount type (Options: entity_level, item_level) */
     private string $discount_type;

    /** @var bool Specifies whether line item rates are inclusive of tax */
     private bool $is_inclusive_tax;

    /** @var array Line items of the estimate */
     private array $line_items;

    /** @var string Shipping charges applied to the estimate */
     private string $shipping_charge;

    /** @var float Adjustments made to the estimate */
     private float $adjustment;

    /** @var string Description of the adjustment */
     private string $adjustment_description;

    /** @var float Subtotal of all items in the estimate */
     private float $sub_total;

    /** @var float Total amount of the estimate */
     private float $total;

    /** @var float Total tax amount for the estimate */
     private float $tax_total;

    /** @var int Precision value of the price */
     private int $price_precision;

    /** @var array List of taxes applied to the estimate */
     private array $taxes;

    /** @var object Billing address of the customer */
     private object $billing_address;

    /** @var object Shipping address of the customer */
     private object $shipping_address;

    /** @var string Notes added to the estimate */
     private string $notes;

    /** @var string Terms and conditions of the estimate */
     private string $terms;

    /** @var array Custom fields for the estimate */
     private array $custom_fields;

    /** @var string ID of the PDF template associated with the estimate */
     private string $template_id;

    /** @var string Name of the PDF template */
     private string $template_name;

    /** @var string Time of creation of the estimate */
     private string $created_time;

    /** @var string Last modified time of the estimate */
     private string $last_modified_time;

    /** @var string Salesperson ID associated with the estimate */
     private string $salesperson_id;

    /** @var string Name of the salesperson associated with the estimate */
     private string $salesperson_name;

    /** @var object Project details related to the estimate */
     private object $project;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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
