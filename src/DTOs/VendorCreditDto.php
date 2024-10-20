<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class VendorCreditDto
 * Data Transfer Object for a Vendor Credit.
 */
class VendorCreditDto
{
    /** @var string ID of the Vendor Credit */
    public string $vendor_credit_id;

    /** @var string Number of the Vendor Credit */
    public string $vendor_credit_number;

    /** @var string The date the vendor credit is created. [yyyy-mm-dd] */
    public string $date;

    /** @var string|null 🇮🇳 only: Place from where the goods/services are supplied */
    public ?string $source_of_supply;

    /** @var string|null 🇮🇳 only: Place where the goods/services are supplied to */
    public ?string $destination_of_supply;

    /** @var string|null GCC only: The place of supply for VAT purposes */
    public ?string $place_of_supply;

    /** @var string|null 🇮🇳 only: 15 digit GST identification number of the vendor */
    public ?string $gst_no;

    /** @var string|null 🇮🇳 only: GST treatment of the contact */
    public ?string $gst_treatment;

    /** @var string|null GCC, 🇲🇽, 🇰🇪, 🇿🇦 only: VAT treatment for the vendor credit */
    public ?string $tax_treatment;

    /** @var string|null ID of the pricebook */
    public ?string $pricebook_id;

    /** @var bool|null 🇮🇳 only: Applicable for reverse charge */
    public ?bool $is_reverse_charge_applied;

    /** @var string Status of the Vendor Credit */
    public string $status;

    /** @var string Reference number for the refund recorded */
    public string $reference_number;

    /** @var string ID of the vendor associated with the Vendor Credit */
    public string $vendor_id;

    /** @var string Name of the Vendor associated with the Vendor Credit */
    public string $vendor_name;

    /** @var string ID of the Currency involved in the Vendor Credit */
    public string $currency_id;

    /** @var string Code of the Currency involved in the Vendor Credit */
    public string $currency_code;

    /** @var float Exchange rate of the currency */
    public float $exchange_rate;

    /** @var int Price precision */
    public int $price_precision;

    /** @var string|null 🇬🇧 only: VAT treatment for vendor credits */
    public ?string $vat_treatment;

    /** @var string|null 🇬🇧 only: ID of the VAT Return the Vendor Credit is filed in */
    public ?string $filed_in_vat_return_id;

    /** @var string|null 🇬🇧 only: Name of the VAT Return the Vendor Credit is filed in */
    public ?string $filed_in_vat_return_name;

    /** @var string|null 🇬🇧 only: Type of the VAT Return the Vendor Credit is filed in */
    public ?string $filed_in_vat_return_type;

    /** @var bool|null Not applicable 🇺🇸: Whether the line item rates are inclusive of tax */
    public ?bool $is_inclusive_tax;

    /** @var object Line items of a vendor credit */
    public object $line_items;

    /** @var array|null 🇬🇧, Europe only: Summary of the VAT Acquisition */
    public ?array $acquisition_vat_summary;

    /** @var float|null 🇬🇧, Europe only: Total of the VAT Acquisition */
    public ?float $acquisition_vat_total;

    /** @var array|null 🇬🇧, Europe only: Summary of the Reverse Charge */
    public ?array $reverse_charge_vat_summary;

    /** @var float|null 🇬🇧, Europe only: Total of the Reverse Charge */
    public ?float $reverse_charge_vat_total;

    /** @var array Documents associated with the Vendor Credit */
    public array $documents;

    /** @var array Custom fields */
    public array $custom_fields;

    /** @var float Subtotal amount */
    public float $sub_total;

    /** @var float Total amount */
    public float $total;

    /** @var float Total credits used */
    public float $total_credits_used;

    /** @var float Total refunded amount */
    public float $total_refunded_amount;

    /** @var float Balance in the Vendor Credit */
    public float $balance;

    /** @var string|null Notes for the Vendor Credit */
    public ?string $notes;

    /** @var array Comments on the Vendor Credit */
    public array $comments;

    /** @var array Vendor credit refunds */
    public array $vendor_credit_refunds;

    /** @var array Bills credited */
    public array $bills_credited;

    /** @var string Time of Vendor Credit Creation */
    public string $created_time;

    /** @var string Last Modified Time of Vendor Credit */
    public string $last_modified_time;

    public function __construct(array $data)
    {
        $this->vendor_credit_id = $data['vendor_credit_id'] ?? '';
        $this->vendor_credit_number = $data['vendor_credit_number'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->source_of_supply = $data['source_of_supply'] ?? null;
        $this->destination_of_supply = $data['destination_of_supply'] ?? null;
        $this->place_of_supply = $data['place_of_supply'] ?? null;
        $this->gst_no = $data['gst_no'] ?? null;
        $this->gst_treatment = $data['gst_treatment'] ?? null;
        $this->tax_treatment = $data['tax_treatment'] ?? null;
        $this->pricebook_id = $data['pricebook_id'] ?? null;
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? null;
        $this->status = $data['status'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->vendor_id = $data['vendor_id'] ?? '';
        $this->vendor_name = $data['vendor_name'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->vat_treatment = $data['vat_treatment'] ?? null;
        $this->filed_in_vat_return_id = $data['filed_in_vat_return_id'] ?? null;
        $this->filed_in_vat_return_name = $data['filed_in_vat_return_name'] ?? null;
        $this->filed_in_vat_return_type = $data['filed_in_vat_return_type'] ?? null;
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? null;
        $this->line_items = $data['line_items'] ?? (object)[];
        $this->acquisition_vat_summary = $data['acquisition_vat_summary'] ?? null;
        $this->acquisition_vat_total = $data['acquisition_vat_total'] ?? null;
        $this->reverse_charge_vat_summary = $data['reverse_charge_vat_summary'] ?? null;
        $this->reverse_charge_vat_total = $data['reverse_charge_vat_total'] ?? null;
        $this->documents = $data['documents'] ?? [];
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->sub_total = $data['sub_total'] ?? 0.0;
        $this->total = $data['total'] ?? 0.0;
        $this->total_credits_used = $data['total_credits_used'] ?? 0.0;
        $this->total_refunded_amount = $data['total_refunded_amount'] ?? 0.0;
        $this->balance = $data['balance'] ?? 0.0;
        $this->notes = $data['notes'] ?? null;
        $this->comments = $data['comments'] ?? [];
        $this->vendor_credit_refunds = $data['vendor_credit_refunds'] ?? [];
        $this->bills_credited = $data['bills_credited'] ?? [];
        $this->created_time = $data['created_time'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
    }
}
