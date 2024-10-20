<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class PurchaseOrderDTO
 * Data Transfer Object for a Purchase Order.
 */
class PurchaseOrderDto
{
    /** @var string ID of the purchase order */
    public string $purchaseorder_id;

    /** @var array Documents associated with the purchase order */
    public array $documents;

    /** @var string VAT treatment (🇬🇧 only) */
    public string $vat_treatment;

    /** @var string GST number (🇮🇳 only) */
    public string $gst_no;

    /** @var string GST treatment (🇮🇳 only) */
    public string $gst_treatment;

    /** @var string Tax treatment (GCC, 🇲🇽, 🇰🇪, 🇿🇦 only) */
    public string $tax_treatment;

    /** @var bool Is pre-GST applicable (🇮🇳 only) */
    public bool $is_pre_gst;

    /** @var string Source of supply (🇮🇳 only) */
    public string $source_of_supply;

    /** @var string Destination of supply (🇮🇳 only) */
    public string $destination_of_supply;

    /** @var string Place of supply (GCC only) */
    public string $place_of_supply;

    /** @var string Pricebook ID */
    public string $pricebook_id;

    /** @var string Pricebook name */
    public string $pricebook_name;

    /** @var bool Is reverse charge applied (🇮🇳 only) */
    public bool $is_reverse_charge_applied;

    /** @var string Purchase order number */
    public string $purchaseorder_number;

    /** @var string Date of purchase order creation */
    public string $date;

    /** @var string Expected delivery date */
    public string $expected_delivery_date;

    /** @var string Discount on purchase order */
    public string $discount;

    /** @var string Discount account ID */
    public string $discount_account_id;

    /** @var bool Is discount before tax */
    public bool $is_discount_before_tax;

    /** @var string Reference number */
    public string $reference_number;

    /** @var string Status of the purchase order */
    public string $status;

    /** @var string Vendor ID */
    public string $vendor_id;

    /** @var string Vendor name */
    public string $vendor_name;

    /** @var string CRM owner ID */
    public string $crm_owner_id;

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

    /** @var string Delivery date */
    public string $delivery_date;

    /** @var bool Is emailed */
    public bool $is_emailed;

    /** @var bool Is inclusive tax */
    public bool $is_inclusive_tax;

    /** @var array Line items */
    public array $line_items;

    /** @var float Subtotal of the purchase order */
    public float $sub_total;

    /** @var float Total tax */
    public float $tax_total;

    /** @var float Total of the purchase order */
    public float $total;

    /** @var array Taxes */
    public array $taxes;

    /** @var array Acquisition VAT summary (🇬🇧, Europe only) */
    public array $acquisition_vat_summary;

    /** @var float Acquisition VAT total (🇬🇧, Europe only) */
    public float $acquisition_vat_total;

    /** @var array Reverse charge VAT summary (🇬🇧, Europe only) */
    public array $reverse_charge_vat_summary;

    /** @var float Reverse charge VAT total (🇬🇧, Europe only) */
    public float $reverse_charge_vat_total;

    /** @var object Billing address */
    public object $billing_address;

    /** @var string Notes for the vendor */
    public string $notes;

    /** @var string Terms of the purchase order */
    public string $terms;

    /** @var string Shipment preference */
    public string $ship_via;

    /** @var string Shipment preference ID */
    public string $ship_via_id;

    /** @var string Delivery contact person */
    public string $attention;

    /** @var string Delivery address ID */
    public string $delivery_org_address_id;

    /** @var string Delivery customer ID */
    public string $delivery_customer_id;

    /** @var object Delivery address */
    public object $delivery_address;

    /** @var int Price precision */
    public int $price_precision;

    /** @var array Custom fields */
    public array $custom_fields;

    /** @var string Attachment name */
    public string $attachment_name;

    /** @var bool Can send in mail */
    public bool $can_send_in_mail;

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

    /** @var string Created by ID */
    public string $created_by_id;

    /** @var string Last modified time */
    public string $last_modified_time;

    /** @var bool Can mark as bill */
    public bool $can_mark_as_bill;

    /** @var bool Can mark as unbill */
    public bool $can_mark_as_unbill;

    public function __construct(array $data)
    {
        $this->purchaseorder_id = $data['purchaseorder_id'] ?? '';
        $this->documents = $data['documents'] ?? [];
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->is_pre_gst = $data['is_pre_gst'] ?? false;
        $this->source_of_supply = $data['source_of_supply'] ?? '';
        $this->destination_of_supply = $data['destination_of_supply'] ?? '';
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->pricebook_id = $data['pricebook_id'] ?? '';
        $this->pricebook_name = $data['pricebook_name'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->purchaseorder_number = $data['purchaseorder_number'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->expected_delivery_date = $data['expected_delivery_date'] ?? '';
        $this->discount = $data['discount'] ?? '';
        $this->discount_account_id = $data['discount_account_id'] ?? '';
        $this->is_discount_before_tax = $data['is_discount_before_tax'] ?? false;
        $this->reference_number = $data['reference_number'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->vendor_id = $data['vendor_id'] ?? '';
        $this->vendor_name = $data['vendor_name'] ?? '';
        $this->crm_owner_id = $data['crm_owner_id'] ?? '';
        $this->contact_persons = $data['contact_persons'] ?? [];
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->delivery_date = $data['delivery_date'] ?? '';
        $this->is_emailed = $data['is_emailed'] ?? false;
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->line_items = $data['line_items'] ?? [];
        $this->sub_total = $data['sub_total'] ?? 0.0;
        $this->tax_total = $data['tax_total'] ?? 0.0;
        $this->total = $data['total'] ?? 0.0;
        $this->taxes = $data['taxes'] ?? [];
        $this->acquisition_vat_summary = $data['acquisition_vat_summary'] ?? [];
        $this->acquisition_vat_total = $data['acquisition_vat_total'] ?? 0.0;
        $this->reverse_charge_vat_summary = $data['reverse_charge_vat_summary'] ?? [];
        $this->reverse_charge_vat_total = $data['reverse_charge_vat_total'] ?? 0.0;
        $this->billing_address = $data['billing_address'] ?? (object)[];
        $this->notes = $data['notes'] ?? '';
        $this->terms = $data['terms'] ?? '';
        $this->ship_via = $data['ship_via'] ?? '';
        $this->ship_via_id = $data['ship_via_id'] ?? '';
        $this->attention = $data['attention'] ?? '';
        $this->delivery_org_address_id = $data['delivery_org_address_id'] ?? '';
        $this->delivery_customer_id = $data['delivery_customer_id'] ?? '';
        $this->delivery_address = $data['delivery_address'] ?? (object)[];
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->attachment_name = $data['attachment_name'] ?? '';
        $this->can_send_in_mail = $data['can_send_in_mail'] ?? false;
        $this->template_id = $data['template_id'] ?? '';
        $this->template_name = $data['template_name'] ?? '';
        $this->page_width = $data['page_width'] ?? '';
        $this->page_height = $data['page_height'] ?? '';
        $this->orientation = $data['orientation'] ?? '';
        $this->template_type = $data['template_type'] ?? '';
        $this->created_time = $data['created_time'] ?? '';
        $this->created_by_id = $data['created_by_id'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->can_mark_as_bill = $data['can_mark_as_bill'] ?? false;
        $this->can_mark_as_unbill = $data['can_mark_as_unbill'] ?? false;
    }
}
