<?php

namespace Sumer5020\ZohoBooks\DTOs;

use Sumer5020\ZohoBooks\Enums\AllowedContactLanguageEnum;

/**
 * Class ContactDTO
 * Data Transfer Object for Contact details.
 */
class ContactDto
{
    /** @var string ID of the contact */
    public string $contact_id;

    /** @var string Display name of the contact (max-length: 200) */
    public string $contact_name;

    /** @var string Company name of the contact (max-length: 200) */
    public string $company_name;

    /** @var bool Whether the contact has a transaction */
    public bool $has_transaction;

    /** @var string Contact type */
    public string $contact_type;

    /** @var string Customer sub-type */
    public string $customer_sub_type;

    /** @var float Credit limit for the customer */
    public float $credit_limit;

    /** @var bool Whether the client portal is enabled for the contact */
    public bool $is_portal_enabled;

    /** @var string Language code of the contact (allowed values: de, en, es, fr, etc.) */
    public string $language_code;

    /** @var bool Whether the contact is taxable */
    public bool $is_taxable;

    /** @var string|null Tax ID (only for certain regions) */
    public ?string $tax_id;

    /** @var string|null TDS tax ID (specific to certain regions) */
    public ?string $tds_tax_id;

    /** @var string|null Tax name */
    public ?string $tax_name;

    /** @var float|null Tax percentage */
    public ?float $tax_percentage;

    /** @var string|null Tax authority ID */
    public ?string $tax_authority_id;

    /** @var string|null Tax exemption ID */
    public ?string $tax_exemption_id;

    /** @var string|null Tax authority name */
    public ?string $tax_authority_name;

    /** @var string|null Tax exemption code */
    public ?string $tax_exemption_code;

    /** @var string|null Place of contact (specific to certain regions) */
    public ?string $place_of_contact;

    /** @var string|null GST number (specific to certain regions) */
    public ?string $gst_no;

    /** @var string|null VAT treatment (specific to certain regions) */
    public ?string $vat_treatment;

    /** @var string|null Tax treatment (specific to certain regions) */
    public ?string $tax_treatment;

    /** @var string|null Tax exemption certificate number (specific to certain regions) */
    public ?string $tax_exemption_certificate_number;

    /** @var string|null Tax regime (specific to certain regions) */
    public ?string $tax_regime;

    /** @var string|null Legal name (specific to certain regions) */
    public ?string $legal_name;

    /** @var bool|null Whether the contact is TDS registered (specific to certain regions) */
    public ?bool $is_tds_registered;

    /** @var string|null GST treatment (specific to certain regions) */
    public ?string $gst_treatment;

    /** @var bool|null Whether the contact is linked with Zoho CRM */
    public ?bool $is_linked_with_zohocrm;

    /** @var string|null Website of the contact */
    public ?string $website;

    /** @var string|null Owner ID of the contact */
    public ?string $owner_id;

    /** @var string|null Primary contact ID (unavailable) */
    public ?string $primary_contact_id;

    /** @var int Payment terms (in days) */
    public int $payment_terms;

    /** @var string Label for payment terms */
    public string $payment_terms_label;

    /** @var string Currency ID */
    public string $currency_id;

    /** @var string Currency code */
    public string $currency_code;

    /** @var string Currency symbol */
    public string $currency_symbol;

    /** @var float Opening balance amount */
    public float $opening_balance_amount;

    /** @var float Exchange rate */
    public float $exchange_rate;

    /** @var int Outstanding receivable amount */
    public int $outstanding_receivable_amount;

    /** @var int Outstanding receivable amount (base currency) */
    public int $outstanding_receivable_amount_bcy;

    /** @var int Unused credits receivable amount */
    public int $unused_credits_receivable_amount;

    /** @var int Unused credits receivable amount (base currency) */
    public int $unused_credits_receivable_amount_bcy;

    /** @var string Status of the contact */
    public string $status;

    /** @var bool Whether payment reminders are enabled */
    public bool $payment_reminder_enabled;

    /** @var array Custom fields for the contact */
    public array $custom_fields;

    /** @var object Billing address */
    public object $billing_address;

    /** @var object Shipping address */
    public object $shipping_address;

    /** @var string Facebook profile (max-length: 100) */
    public string $facebook;

    /** @var string Twitter account (max-length: 100) */
    public string $twitter;

    /** @var array Contact persons */
    public array $contact_persons;

    /** @var object Default templates for the contact */
    public object $default_templates;

    /** @var string Notes or comments about the contact */
    public string $notes;

    /** @var string Time at which the contact was created */
    public string $created_time;

    /** @var string Time at which the contact was last modified */
    public string $last_modified_time;

    /**
     * ContactDTO constructor.
     *
     * @param array $data Data to initialize the DTO.
     */
    public function __construct(array $data)
    {
        $this->contact_id = $data['contact_id'] ?? '';
        $this->contact_name = $data['contact_name'] ?? '';
        $this->company_name = $data['company_name'] ?? '';
        $this->has_transaction = $data['has_transaction'] ?? false;
        $this->contact_type = $data['contact_type'] ?? '';
        $this->customer_sub_type = $data['customer_sub_type'] ?? '';
        $this->credit_limit = $data['credit_limit'] ?? 0.0;
        $this->is_portal_enabled = $data['is_portal_enabled'] ?? false;
        $this->language_code = $data['language_code'] ?? AllowedContactLanguageEnum::EN->code();
        $this->is_taxable = $data['is_taxable'] ?? false;
        $this->tax_id = $data['tax_id'] ?? null;
        $this->tds_tax_id = $data['tds_tax_id'] ?? null;
        $this->tax_name = $data['tax_name'] ?? null;
        $this->tax_percentage = $data['tax_percentage'] ?? 0.0;
        $this->tax_authority_id = $data['tax_authority_id'] ?? null;
        $this->tax_exemption_id = $data['tax_exemption_id'] ?? null;
        $this->tax_authority_name = $data['tax_authority_name'] ?? null;
        $this->tax_exemption_code = $data['tax_exemption_code'] ?? null;
        $this->place_of_contact = $data['place_of_contact'] ?? null;
        $this->gst_no = $data['gst_no'] ?? null;
        $this->vat_treatment = $data['vat_treatment'] ?? null;
        $this->tax_treatment = $data['tax_treatment'] ?? null;
        $this->tax_exemption_certificate_number = $data['tax_exemption_certificate_number'] ?? null;
        $this->tax_regime = $data['tax_regime'] ?? null;
        $this->legal_name = $data['legal_name'] ?? null;
        $this->is_tds_registered = $data['is_tds_registered'] ?? false;
        $this->gst_treatment = $data['gst_treatment'] ?? null;
        $this->is_linked_with_zohocrm = $data['is_linked_with_zohocrm'] ?? false;
        $this->website = $data['website'] ?? null;
        $this->owner_id = $data['owner_id'] ?? null;
        $this->primary_contact_id = $data['primary_contact_id'] ?? null;
        $this->payment_terms = $data['payment_terms'] ?? 0;
        $this->payment_terms_label = $data['payment_terms_label'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->opening_balance_amount = $data['opening_balance_amount'] ?? 0.0;
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->outstanding_receivable_amount = $data['outstanding_receivable_amount'] ?? 0;
        $this->outstanding_receivable_amount_bcy = $data['outstanding_receivable_amount_bcy'] ?? 0;
        $this->unused_credits_receivable_amount = $data['unused_credits_receivable_amount'] ?? 0;
        $this->unused_credits_receivable_amount_bcy = $data['unused_credits_receivable_amount_bcy'] ?? 0;
        $this->status = $data['status'] ?? '';
        $this->payment_reminder_enabled = $data['payment_reminder_enabled'] ?? false;
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->billing_address = $data['billing_address'] ?? (object)[];
        $this->shipping_address = $data['shipping_address'] ?? (object)[];
        $this->facebook = $data['facebook'] ?? '';
        $this->twitter = $data['twitter'] ?? '';
        $this->contact_persons = $data['contact_persons'] ?? [];
        $this->default_templates = $data['default_templates'] ?? (object)[];
        $this->notes = $data['notes'] ?? '';
        $this->created_time = $data['created_time'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
    }
}
