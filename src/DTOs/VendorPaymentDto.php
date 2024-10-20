<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class VendorPaymentDto
 * Data Transfer Object for a Vendor Payment.
 */
class VendorPaymentDto
{
    /** @var string ID of the vendor associated with the Vendor Payment */
    public string $vendor_id;

    /** @var array Individual bill payment details */
    public array $bills;

    /** @var string Date the payment is made */
    public string $date;

    /** @var float Exchange rate of the currency */
    public float $exchange_rate;

    /** @var float Total Amount of Vendor Payment */
    public float $amount;

    /** @var string ID of the cash/bank account from which the payment is made */
    public string $paid_through_account_id;

    /** @var string Mode of Vendor Payment */
    public string $payment_mode;

    /** @var string Description for the Vendor Payment recorded */
    public string $description;

    /** @var string Reference number for the Vendor Payment recorded */
    public string $reference_number;

    /** @var array|null 🇺🇸, 🇨🇦 only: Check details */
    public ?array $check_details;

    /** @var bool|null 🇺🇸, 🇨🇦, 🇲🇽 only: Check if the Bill Payment is paid Via Print Check Option */
    public ?bool $is_paid_via_print_check;

    /** @var array Custom fields */
    public array $custom_fields;

    public function __construct(array $data)
    {
        $this->vendor_id = $data['vendor_id'] ?? '';
        $this->bills = $data['bills'] ?? [];
        $this->date = $data['date'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->amount = $data['amount'] ?? 0.0;
        $this->paid_through_account_id = $data['paid_through_account_id'] ?? '';
        $this->payment_mode = $data['payment_mode'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->check_details = $data['check_details'] ?? null;
        $this->is_paid_via_print_check = $data['is_paid_via_print_check'] ?? null;
        $this->custom_fields = $data['custom_fields'] ?? [];
    }
}
