<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class CustomerPaymentDto
 * Data Transfer Object for a Customer Payment.
 */
class CustomerPaymentDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Unique ID of the payment */
     private string $payment_id;

    /** @var string Mode through which payment is made */
     private string $payment_mode;

    /** @var float Amount paid */
     private float $amount;

    /** @var float Amount refunded */
     private float $amount_refunded;

    /** @var float Additional bank charges */
     private float $bank_charges;

    /** @var string Date of payment in yyyy-mm-dd format */
     private string $date;

    /** @var string Status of the payment */
     private string $status;

    /** @var string Reference number for the payment */
     private string $reference_number;

    /** @var string Description about the payment */
     private string $description;

    /** @var string Customer ID */
     private string $customer_id;

    /** @var string Customer name */
     private string $customer_name;

    /** @var string Customer's email address */
     private string $email;

    /** @var array List of associated invoices */
     private array $invoices;

    /** @var string Currency code */
     private string $currency_code;

    /** @var string Customer's currency symbol */
     private string $currency_symbol;

    /** @var array Custom fields for the payment */
     private array $custom_fields;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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
