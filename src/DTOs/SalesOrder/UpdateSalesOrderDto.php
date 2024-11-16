<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class UpdateSalesOrderDto extends Dto
{
    use WithToArray;

    /** @var string ID of the customer to whom the sales order has to be created */
    private string $customer_id;

    /** @var string sales order id */
    private string $salesorder_id;

    /** @var string ID of the Currency in Sales Order */
    private string $currency_id;

    /** @var array Array of contact person(s) for whom sales order has to be sent */
    private array $contact_persons;

    /** @var string The date, the sales order is created */
    private string $date;

    /** @var string Shipping date of sales order */
    private string $shipment_date;

    /** @var array Custom fields for a sales order */
    private array $custom_fields;

    /** @var string Place where the goods/services are supplied to */
    private string $place_of_supply;

    /** @var string ID of the salesperson */
    private string $salesperson_id;

    /** @var string ID of the merchant */
    private string $merchant_id;

    /** @var string Choose whether the contact is GST registered/unregistered/consumer/overseas */
    private string $gst_treatment;

    /** @var string 15 digit GST identification number of the customer */
    private string $gst_no;

    /** @var bool Used to specify whether the line item rates are inclusive or exclusive of tax */
    private bool $is_inclusive_tax;

    /** @var array Line items of a sales order */
    private array $line_items;

    /** @var string Notes for this Sales Order */
    private string $notes;

    /** @var string terms */
    private string $terms;

    /** @var string ID of the Billing Address */
    private string $billing_address_id;

    /** @var string ID of the Shipping Address */
    private string $shipping_address_id;

    /** @var string */
    private string $crm_owner_id;

    /** @var string */
    private string $crm_custom_reference_id;

    /** @var string (Optional) VAT treatment for the sales order */
    private string $vat_treatment;

    /** @var string VAT treatment for the sales order */
    private string $tax_treatment;

    /** @var bool Required if customer tax treatment is vat_registered */
    private bool $is_reverse_charge_applied;

    /** @var string Mandatory if auto number generation is disabled */
    private string $salesorder_number;

    /** @var string Reference Number of the Sales Order */
    private string $reference_number;

    /** @var bool Boolean to update billing address of customer */
    private bool $is_update_customer;

    /** @var string Discount applied to the sales order */
    private string $discount;

    /** @var float Exchange rate of the currency */
    private float $exchange_rate;

    /** @var string Name of the sales person */
    private string $salesperson_name;

    /** @var string Default Notes for the Sales Order */
    private string $notes_default;

    /** @var string Default Terms of the Sales Order */
    private string $terms_default;

    /** @var string Tax ID for the Sales Order */
    private string $tax_id;

    /** @var string ID of the tax authority */
    private string $tax_authority_id;

    /** @var string ID of the tax exemption applied */
    private string $tax_exemption_id;

    /** @var string Tax Authority's name */
    private string $tax_authority_name;

    /** @var string Code of Tax Exemption that is applied */
    private string $tax_exemption_code;

    /** @var string Exemption certificate number of the customer */
    private string $avatax_exempt_no;

    /** @var string Used to group like customers for exemption purposes */
    private string $avatax_use_code;

    /** @var float */
    private float $shipping_charge;

    /** @var float */
    private float $adjustment;

    /** @var string */
    private string $delivery_method;

    /** @var string */
    private string $estimate_id;

    /** @var bool */
    private bool $is_discount_before_tax;

    /** @var string */
    private string $discount_type;

    /** @var string */
    private string $adjustment_description;

    /** @var string */
    private string $pricebook_id;

    /** @var string ID of the pdf template */
    private string $template_id;

    /** @var array */
    private array $documents;

    /** @var string */
    private string $zcrm_potential_id;

    /** @var string */
    private string $zcrm_potential_name;


    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->customer_id = $data['customer_id'] ?? '';
        $this->salesorder_id = $data['salesorder_id'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->contact_persons = $data['contact_persons'] ?? [];
        $this->date = $data['date'] ?? '';
        $this->shipment_date = $data['shipment_date'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->salesperson_id = $data['salesperson_id'] ?? '';
        $this->merchant_id = $data['merchant_id'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->line_items = $data['line_items'] ?? [];
        $this->notes = $data['notes'] ?? '';
        $this->terms = $data['terms'] ?? '';
        $this->billing_address_id = $data['billing_address_id'] ?? '';
        $this->shipping_address_id = $data['shipping_address_id'] ?? '';
        $this->crm_owner_id = $data['crm_owner_id'] ?? '';
        $this->crm_custom_reference_id = $data['crm_custom_reference_id'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->salesorder_number = $data['salesorder_number'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->is_update_customer = $data['is_update_customer'] ?? false;
        $this->discount = $data['discount'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0;
        $this->salesperson_name = $data['salesperson_name'] ?? '';
        $this->notes_default = $data['notes_default'] ?? '';
        $this->terms_default = $data['terms_default'] ?? '';
        $this->tax_id = $data['tax_id'] ?? '';
        $this->tax_authority_id = $data['tax_authority_id'] ?? '';
        $this->tax_exemption_id = $data['tax_exemption_id'] ?? '';
        $this->tax_authority_name = $data['tax_authority_name'] ?? '';
        $this->tax_exemption_code = $data['tax_exemption_code'] ?? '';
        $this->avatax_exempt_no = $data['avatax_exempt_no'] ?? '';
        $this->avatax_use_code = $data['avatax_use_code'] ?? '';
        $this->shipping_charge = $data['shipping_charge'] ?? 0;
        $this->adjustment = $data['adjustment'] ?? 0;
        $this->delivery_method = $data['delivery_method'] ?? '';
        $this->estimate_id = $data['estimate_id'] ?? '';
        $this->is_discount_before_tax = $data['is_discount_before_tax'] ?? false;
        $this->discount_type = $data['discount_type'] ?? '';
        $this->adjustment_description = $data['adjustment_description'] ?? '';
        $this->pricebook_id = $data['pricebook_id'] ?? '';
        $this->template_id = $data['template_id'] ?? '';
        $this->documents = $data['documents'] ?? [];
        $this->zcrm_potential_id = $data['zcrm_potential_id'] ?? '';
        $this->zcrm_potential_name = $data['zcrm_potential_name'] ?? '';
    }

    public function getSalesorderId(): string
    {
        return $this->salesorder_id;
    }
}
