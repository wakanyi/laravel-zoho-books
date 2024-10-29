<?php

namespace Sumer5020\ZohoBooks\DTOs\Contact;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class UpdateContactDto extends Dto
{
    use WithToArray;

    /** @var string Display name of the contact (max-length: 200) */
    private string $contact_name;

    /** @var string Company name of the contact (max-length: 200) */
    private string $company_name;

    /** @var int Payment terms (in days) */
    private int $payment_terms;

    /** @var string Label for payment terms */
    private string $payment_terms_label;

    /** @var string Contact type */
    private string $contact_type;

    /** @var string Customer sub-type */
    private string $customer_sub_type;

    /** @var string Currency ID */
    private string $currency_id;

    /** @var float Opening balance amount */
    private float $opening_balance_amount;

    /** @var float Exchange rate */
    private float $exchange_rate;

    /** @var float Credit limit for the customer */
    private float $credit_limit;

    /** @var array Filter all your reports based on the tag */
    private array $tags;

    /** @var string Website of the contact */
    private string $website;

    /** @var string Owner ID of the contact */
    private string $owner_id;

    /** @var array Custom fields for the contact */
    private array $custom_fields;

    /** @var object Billing address */
    private object $billing_address;

    /** @var object Shipping address */
    private object $shipping_address;

    /** @var array Contact persons */
    private array $contact_persons;

    /** @var object Default templates for the contact */
    private object $default_templates;

    /** @var string Notes or comments about the contact */
    private string $notes;

    /** @var string VAT Registration number (GB, Avalara Integration only) */
    private string $vat_reg_no;

    /** @var string Tax Registration number (GCC, MX, KE, ZA only) */
    private string $tax_reg_no;

    /** @var string Two-letter country code of a contact (GB, GCC, Avalara Integration only) */
    private string $country_code;

    /** @var string Tax treatment (specific to certain regions) */
    private string $tax_treatment;

    /** @var string Tax exemption certificate number (specific to certain regions) */
    private string $tax_exemption_certificate_number;

    /** @var string Tax regime (specific to certain regions) */
    private string $tax_regime;

    /** @var string Legal name (specific to certain regions) */
    private string $legal_name;

    /** @var bool Whether the contact is TDS registered (specific to certain regions) */
    private bool $is_tds_registered;

    /** @var string VAT treatment (specific to certain regions) */
    private string $vat_treatment;

    /** @var string Place of contact (specific to certain regions) */
    private string $place_of_contact;

    /** @var string GST number (specific to certain regions) */
    private string $gst_no;

    /** @var string GST treatment (specific to certain regions) */
    private string $gst_treatment;

    /** @var string Tax authority name */
    private string $tax_authority_name;

    /** @var string Exemption certificate number of the customer (Avalara Integration only) */
    private string $avatax_exempt_no;

    /** @var string Used to group like customers for exemption purposes (Avalara Integration only) */
    private string $avatax_use_code;

    /** @var string Tax exemption ID */
    private string $tax_exemption_id;

    /** @var string Tax exemption code */
    private string $tax_exemption_code;

    /** @var string Tax authority ID */
    private string $tax_authority_id;

    /** @var string Tax ID (only for certain regions) */
    private string $tax_id;

    /** @var bool Whether the contact is taxable */
    private bool $is_taxable;

    /** @var string Facebook profile (max-length: 100) */
    private string $facebook;

    /** @var string Twitter account (max-length: 100) */
    private string $twitter;

    /** @var string Boolean to track a contact for 1099 reporting */
    private bool $track_1099;

    /** @var string Tax ID type of the contact, it can be SSN, ATIN, ITIN or EIN */
    private string $tax_id_type;

    /** @var string Tax ID of the contact */
    private string $tax_id_value;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->contact_name = $data['contact_name'] ?? '';
        $this->company_name = $data['company_name'] ?? '';
        $this->website = $data['website'] ?? '';
        $this->contact_type = $data['contact_type'] ?? '';
        $this->customer_sub_type = $data['customer_sub_type'] ?? '';
        $this->credit_limit = $data['credit_limit'] ?? 0;
        $this->tags = $data['tags'] ?? [];
        $this->currency_id = $data['currency_id'] ?? '';
        $this->payment_terms = $data['payment_terms'] ?? 0;
        $this->payment_terms_label = $data['payment_terms_label'] ?? '';
        $this->notes = $data['notes'] ?? '';
        $this->billing_address = $data['billing_address'] ?? (object)[];
        $this->shipping_address = $data['shipping_address'] ?? (object)[];
        $this->contact_persons = $data['contact_persons'] ?? [];
        $this->default_templates = $data['default_templates'] ?? (object)[];
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->opening_balance_amount = $data['opening_balance_amount'] ?? 0;
        $this->exchange_rate = $data['exchange_rate'] ?? 0;
        $this->vat_reg_no = $data['vat_reg_no'] ?? '';
        $this->owner_id = $data['owner_id'] ?? '';
        $this->tax_reg_no = $data['tax_reg_no'] ?? '';
        $this->tax_exemption_certificate_number = $data['tax_exemption_certificate_number'] ?? '';
        $this->country_code = $data['country_code'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->tax_regime = $data['tax_regime'] ?? '';
        $this->legal_name = $data['legal_name'] ?? '';
        $this->is_tds_registered = $data['is_tds_registered'] ?? false;
        $this->place_of_contact = $data['place_of_contact'] ?? '';
        $this->gst_no = $data['gst_no'] ?? '';
        $this->gst_treatment = $data['gst_treatment'] ?? '';
        $this->tax_authority_name = $data['tax_authority_name'] ?? '';
        $this->avatax_exempt_no = $data['avatax_exempt_no'] ?? '';
        $this->avatax_use_code = $data['avatax_use_code'] ?? '';
        $this->tax_exemption_id = $data['tax_exemption_id'] ?? '';
        $this->tax_exemption_code = $data['tax_exemption_code'] ?? '';
        $this->tax_authority_id = $data['tax_authority_id'] ?? '';
        $this->tax_id = $data['tax_id'] ?? '';
        $this->is_taxable = $data['is_taxable'] ?? false;
        $this->facebook = $data['facebook'] ?? '';
        $this->twitter = $data['twitter'] ?? '';
        $this->track_1099 = $data['track_1099'] ?? false;
        $this->tax_id_type = $data['tax_id_type'] ?? '';
        $this->tax_id_value = $data['tax_id_value'] ?? '';
    }
}
