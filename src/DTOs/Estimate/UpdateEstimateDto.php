<?php

namespace Sumer5020\ZohoBooks\DTOs\Estimate;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class UpdateEstimateDto extends Dto
{
    use WithToArray;

    /** @var string Customer ID */
    private string $customer_id;

    /** @var string Estimate ID */
    private string $estimate_id;

    /** @var string Currency ID of the estimate */
    private string $currency_id;

    /** @var array Array of contact persons related to the estimate */
    private array $contact_persons;

    /** @var string ID of the PDF template associated with the estimate */
    private string $template_id;

    /** @var string Place of supply (Supported for IN, GCC countries) */
    private string $place_of_supply;

    /** @var string GST treatment (Options: business_gst, business_none, overseas, consumer) for IN */
    private string $gst_treatment;

    /** @var string 15-digit GST number for IN */
    private string $gst_no;

    /** @var string Estimate number (can search using variants like startswith or contains) */
    private string $estimate_number;

    /** @var string Reference number (can search using startswith or contains) */
    private string $reference_number;

    /** @var string Date of the estimate (can search using start, end, before, after) */
    private string $date;

    /** @var string Expiry date of the estimate */
    private string $expiry_date;

    /** @var float Exchange rate for the currency */
    private float $exchange_rate;

    /** @var float Discount applied to the estimate (can be % or amount) */
    private float $discount;

    /** @var bool Specifies if the discount is applied before tax */
    private bool $is_discount_before_tax;

    /** @var string Discount type (Options: entity_level, item_level) */
    private string $discount_type;

    /** @var bool Specifies whether line item rates are inclusive of tax */
    private bool $is_inclusive_tax;

    /** @var string Custom body */
    private string $custom_body;

    /** @var string Custom subject */
    private string $custom_subject;

    /** @var string Name of the salesperson associated with the estimate */
    private string $salesperson_name;

    /** @var array Custom fields for the estimate */
    private array $custom_fields;

    /** @var array Line items of the estimate */
    private array $line_items;

    /** @var string Notes added to the estimate */
    private string $notes;

    /** @var string Terms and conditions of the estimate */
    private string $terms;

    /** @var string Shipping charges applied to the estimate */
    private string $shipping_charge;

    /** @var float Adjustments made to the estimate */
    private float $adjustment;

    /** @var string Description of the adjustment */
    private string $adjustment_description;

    /** @var string ID of the tax or tax group applied to the estimate */
    private string $tax_id;

    /** @var string ID of the tax exemption */
    private string $tax_exemption_id;

    /** @var string ID of the tax authority */
    private string $tax_authority_id;

    /** @var string Used to group like customers for exemption purposes */
    private string $avatax_use_code;

    /** @var string Exemption certificate number of the customer */
    private string $avatax_exempt_no;

    /** @var string VAT treatment for the estimates (Optional) */
    private string $vat_treatment;

    /** @var string VAT treatment (Supported for GCC, MX, KE, ZA) */
    private string $tax_treatment;

    /** @var bool Specifies whether reverse charge is applied for ZA */
    private bool $is_reverse_charge_applied;

    /** @var string ID of the item */
    private string $item_id;

    /** @var string ID of the line item */
    private string $line_item_id;

    /** @var string The name of the line item */
    private string $name;

    /** @var string The description of the line items */
    private string $description;

    /** @var float Rate of the line item */
    private float $rate;

    /** @var string Unit of the line item */
    private string $unit;

    /** @var float The quantity of line item */
    private float $quantity;

    /** @var string ID of the project */
    private string $project_id;

    /** @var bool The accept_retainer */
    private bool $accept_retainer;

    /** @var int Pass the retainer_percentage node to create the retainer invoice automatically */
    private int $retainer_percentage;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->estimate_id = $data['estimate_id'] ?? '';
        $this->estimate_number = $data['estimate_number'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->customer_id = $data['customer_id'] ?? '';
        $this->contact_persons = $data['contact_persons'] ?? [];
        $this->currency_id = $data['currency_id'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0;
        $this->expiry_date = $data['expiry_date'] ?? '';
        $this->discount = $data['discount'] ?? 0;
        $this->is_discount_before_tax = $data['is_discount_before_tax'] ?? false;
        $this->discount_type = $data['discount_type'] ?? '';
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->custom_body = $data['custom_body'] ?? '';
        $this->custom_subject = $data['custom_subject'] ?? '';
        $this->line_items = $data['line_items'] ?? [];
        $this->shipping_charge = $data['shipping_charge'] ?? '';
        $this->adjustment = $data['adjustment'] ?? 0;
        $this->adjustment_description = $data['adjustment_description'] ?? '';
        $this->tax_id = $data['tax_id'] ?? '';
        $this->tax_exemption_id = $data['tax_exemption_id'] ?? '';
        $this->tax_authority_id = $data['tax_authority_id'] ?? '';
        $this->avatax_use_code = $data['avatax_use_code'] ?? '';
        $this->avatax_exempt_no = $data['avatax_exempt_no'] ?? '';
        $this->notes = $data['notes'] ?? '';
        $this->terms = $data['terms'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->template_id = $data['template_id'] ?? '';
        $this->salesperson_name = $data['salesperson_name'] ?? '';
        $this->item_id = $data['item_id'] ?? '';
        $this->line_item_id = $data['line_item_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->rate = $data['rate'] ?? 0;
        $this->unit = $data['unit'] ?? '';
        $this->quantity = $data['quantity'] ?? 0;
        $this->project_id = $data['project_id'] ?? '';
        $this->accept_retainer = $data['accept_retainer'] ?? false;
        $this->retainer_percentage = $data['retainer_percentage'] ?? 0;
    }

    public function getCustomerId(): string
    {
        return $this->customer_id;
    }

    public function getEstimateId(): string
    {
        return $this->estimate_id;
    }
}
