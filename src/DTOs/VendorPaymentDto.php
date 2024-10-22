<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class VendorPaymentDto
 * Data Transfer Object for a Vendor Payment.
 */
class VendorPaymentDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the vendor associated with the Vendor Payment */
     private string $vendor_id;

    /** @var array Individual bill payment details */
     private array $bills;

    /** @var string Date the payment is made */
     private string $date;

    /** @var float Exchange rate of the currency */
     private float $exchange_rate;

    /** @var float Total Amount of Vendor Payment */
     private float $amount;

    /** @var string ID of the cash/bank account from which the payment is made */
     private string $paid_through_account_id;

    /** @var string Mode of Vendor Payment */
     private string $payment_mode;

    /** @var string Description for the Vendor Payment recorded */
     private string $description;

    /** @var string Reference number for the Vendor Payment recorded */
     private string $reference_number;

    /** @var array US, CA only: Check details */
     private array $check_details;

    /** @var bool US, CA, MX only: Check if the Bill Payment is paid Via Print Check Option */
     private bool $is_paid_via_print_check;

    /** @var array Custom fields */
     private array $custom_fields;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);
        
        $this->vendor_id = $data['vendor_id'] ?? '';
        $this->bills = $data['bills'] ?? [];
        $this->date = $data['date'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 0.0;
        $this->amount = $data['amount'] ?? 0.0;
        $this->paid_through_account_id = $data['paid_through_account_id'] ?? '';
        $this->payment_mode = $data['payment_mode'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->check_details = $data['check_details'] ?? [];
        $this->is_paid_via_print_check = $data['is_paid_via_print_check'] ?? false;
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
