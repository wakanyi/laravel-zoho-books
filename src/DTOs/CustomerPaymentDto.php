<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class CustomerPaymentDTO
 * Data Transfer Object for a Customer Payment.
 */
class CustomerPaymentDto
{
    /** @var string Unique ID of the payment */
    public string $payment_id;

    /** @var string Mode through which payment is made */
    public string $payment_mode;

    /** @var float Amount paid */
    public float $amount;

    /** @var float Amount refunded */
    public float $amount_refunded;

    /** @var float Additional bank charges */
    public float $bank_charges;

    /** @var string Date of payment in yyyy-mm-dd format */
    public string $date;

    /** @var string Status of the payment */
    public string $status;

    /** @var string Reference number for the payment */
    public string $reference_number;

    /** @var string Description about the payment */
    public string $description;

    /** @var string Customer ID */
    public string $customer_id;

    /** @var string Customer name */
    public string $customer_name;

    /** @var string Customer's email address */
    public string $email;

    /** @var array List of associated invoices */
    public array $invoices;

    /** @var string Currency code */
    public string $currency_code;

    /** @var string Customer's currency symbol */
    public string $currency_symbol;

    /** @var array Custom fields for the payment */
    public array $custom_fields;

    public function __construct(array $data)
    {
        $this->payment_id = $data['payment_id'] ?? '';
        $this->payment_mode = $data['payment_mode'] ?? '';
        $this->amount = $data['amount'] ?? 0.0;
        $this->amount_refunded = $data['amount_refunded'] ?? 0.0;
        $this->bank_charges = $data['bank_charges'] ?? 0.0;
        $this->date = $data['date'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->invoices = $data['invoices'] ?? [];
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->custom_fields = $data['custom_fields'] ?? [];
    }
}
