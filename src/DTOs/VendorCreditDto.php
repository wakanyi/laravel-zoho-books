<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class VendorCreditDto
 * Data Transfer Object for a Vendor Credit.
 */
class VendorCreditDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the Vendor Credit */
     private string $vendor_credit_id;

    /** @var string Number of the Vendor Credit */
     private string $vendor_credit_number;

    /** @var string The date the vendor credit is created. [yyyy-mm-dd] */
     private string $date;

    /** @var string IN only: Place from where the goods/services are supplied */
     private string $source_of_supply;

    /** @var string IN only: Place where the goods/services are supplied to */
     private string $destination_of_supply;

    /** @var string GCC only: The place of supply for VAT purposes */
     private string $place_of_supply;

    /** @var string IN only: 15 digit GST identification number of the vendor */
     private string $gst_no;

    /** @var string IN only: GST treatment of the contact */
     private string $gst_treatment;

    /** @var string GCC, MX, KE, ZA only: VAT treatment for the vendor credit */
     private string $tax_treatment;

    /** @var string ID of the pricebook */
     private string $pricebook_id;

    /** @var bool IN only: Applicable for reverse charge */
     private bool $is_reverse_charge_applied;

    /** @var string Status of the Vendor Credit */
     private string $status;

    /** @var string Reference number for the refund recorded */
     private string $reference_number;

    /** @var string ID of the vendor associated with the Vendor Credit */
     private string $vendor_id;

    /** @var string Name of the Vendor associated with the Vendor Credit */
     private string $vendor_name;

    /** @var string ID of the Currency involved in the Vendor Credit */
     private string $currency_id;

    /** @var string Code of the Currency involved in the Vendor Credit */
     private string $currency_code;

    /** @var float Exchange rate of the currency */
     private float $exchange_rate;

    /** @var int Price precision */
     private int $price_precision;

    /** @var string GB only: VAT treatment for vendor credits */
     private string $vat_treatment;

    /** @var string GB only: ID of the VAT Return the Vendor Credit is filed in */
     private string $filed_in_vat_return_id;

    /** @var string GB only: Name of the VAT Return the Vendor Credit is filed in */
     private string $filed_in_vat_return_name;

    /** @var string GB only: Type of the VAT Return the Vendor Credit is filed in */
     private string $filed_in_vat_return_type;

    /** @var bool Not applicable 🇺🇸: Whether the line item rates are inclusive of tax */
     private bool $is_inclusive_tax;

    /** @var object Line items of a vendor credit */
     private object $line_items;

    /** @var array GB, Europe only: Summary of the VAT Acquisition */
     private array $acquisition_vat_summary;

    /** @var float GB, Europe only: Total of the VAT Acquisition */
     private float $acquisition_vat_total;

    /** @var array GB, Europe only: Summary of the Reverse Charge */
     private array $reverse_charge_vat_summary;

    /** @var float GB, Europe only: Total of the Reverse Charge */
     private float $reverse_charge_vat_total;

    /** @var array Documents associated with the Vendor Credit */
     private array $documents;

    /** @var array Custom fields */
     private array $custom_fields;

    /** @var float Subtotal amount */
     private float $sub_total;

    /** @var float Total amount */
     private float $total;

    /** @var float Total credits used */
     private float $total_credits_used;

    /** @var float Total refunded amount */
     private float $total_refunded_amount;

    /** @var float Balance in the Vendor Credit */
     private float $balance;

    /** @var string Notes for the Vendor Credit */
     private string $notes;

    /** @var array Comments on the Vendor Credit */
     private array $comments;

    /** @var array Vendor credit refunds */
     private array $vendor_credit_refunds;

    /** @var array Bills credited */
     private array $bills_credited;

    /** @var string Time of Vendor Credit Creation */
     private string $created_time;

    /** @var string Last Modified Time of Vendor Credit */
     private string $last_modified_time;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->vendor_credit_id = $data['vendor_credit_id'] ?? '';
        $this->vendor_credit_number = $data['vendor_credit_number'] ?? '';
        $this->date = $data['date'] ?? '';
        $this->source_of_supply = $data['source_of_supply'] ?? '';
        $this->destination_of_supply = $data['destination_of_supply'] ?? '';
        $this->place_of_supply = $data['place_of_supply'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->pricebook_id = $data['pricebook_id'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->status = $data['status'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->vendor_id = $data['vendor_id'] ?? '';
        $this->vendor_name = $data['vendor_name'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->filed_in_vat_return_id = $data['filed_in_vat_return_id'] ?? '';
        $this->filed_in_vat_return_name = $data['filed_in_vat_return_name'] ?? '';
        $this->filed_in_vat_return_type = $data['filed_in_vat_return_type'] ?? '';
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->line_items = $data['line_items'] ?? (object)[];
        $this->acquisition_vat_summary = $data['acquisition_vat_summary'] ?? [];
        $this->acquisition_vat_total = $data['acquisition_vat_total'] ?? 0.0;
        $this->reverse_charge_vat_summary = $data['reverse_charge_vat_summary'] ?? [];
        $this->reverse_charge_vat_total = $data['reverse_charge_vat_total'] ?? 0.0;
        $this->documents = $data['documents'] ?? [];
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->sub_total = $data['sub_total'] ?? 0.0;
        $this->total = $data['total'] ?? 0.0;
        $this->total_credits_used = $data['total_credits_used'] ?? 0.0;
        $this->total_refunded_amount = $data['total_refunded_amount'] ?? 0.0;
        $this->balance = $data['balance'] ?? 0.0;
        $this->notes = $data['notes'] ?? '';
        $this->comments = $data['comments'] ?? [];
        $this->vendor_credit_refunds = $data['vendor_credit_refunds'] ?? [];
        $this->bills_credited = $data['bills_credited'] ?? [];
        $this->created_time = $data['created_time'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
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
