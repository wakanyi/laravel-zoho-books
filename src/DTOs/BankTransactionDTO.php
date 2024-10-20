<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class BankTransactionDTO
 * Data Transfer Object for a Bank Transaction.
 */
class BankTransactionDTO
{
    /** @var string ID of the Transaction */
    public string $transaction_id;

    /** @var string The account ID from which money will be transferred */
    public string $from_account_id;

    /** @var string The account Name from which money will be transferred */
    public string $from_account_name;

    /** @var string ID of the account to which the money gets transferred */
    public string $to_account_id;

    /** @var string The account Name to which the money gets transferred */
    public string $to_account_name;

    /** @var string Type of the transaction */
    public string $transaction_type;

    /** @var string The currency ID involved in the transaction */
    public string $currency_id;

    /** @var string Code of the currency involved in the transaction */
    public string $currency_code;

    /** @var string Mode of payment for the transaction */
    public string $payment_mode;

    /** @var int The foreign currency exchange rate value */
    public int $exchange_rate;

    /** @var string Transaction date */
    public string $date;

    /** @var string ID of the customer or vendor */
    public string $customer_id;

    /** @var string Name of the Customer */
    public string $customer_name;

    /** @var string ID of the Vendor */
    public string $vendor_id;

    /** @var string Name of the Vendor */
    public string $vendor_name;

    /** @var string Reference Number of the transaction */
    public string $reference_number;

    /** @var string A brief description about the transaction */
    public string $description;

    /** @var float Bank Charges applied to the transaction */
    public float $bank_charges;

    /** @var string ID of the tax or tax group applied */
    public string $tax_id;

    /** @var array List of files to be attached to a particular transaction */
    public array $documents;

    /** @var bool Check if transaction is tax Inclusive */
    public bool $is_inclusive_tax;

    /** @var string Name of the Tax */
    public string $tax_name;

    /** @var float Percentage of the Tax */
    public float $tax_percentage;

    /** @var float Amount of Tax */
    public float $tax_amount;

    /** @var int Sub Total of the transaction */
    public int $sub_total;

    /** @var string ID of the Tax Authority */
    public string $tax_authority_id;

    /** @var string Name of the Tax Authority */
    public string $tax_authority_name;

    /** @var string ID of the Tax Exemption */
    public string $tax_exemption_id;

    /** @var string Code of the Tax Exemption */
    public string $tax_exemption_code;

    /** @var int Total of the transaction */
    public int $total;

    /** @var int Total in Base Currency of the Organisation */
    public int $bcy_total;

    /** @var float Amount of the transaction */
    public float $amount;

    /** @var string VAT treatment for the bank transaction */
    public string $vat_treatment;

    /** @var string VAT treatment for the bank transaction */
    public string $tax_treatment;

    /** @var string Type of the transaction */
    public string $product_type;

    /** @var string (Optional) ID of the tax applied for VAT Acquistion */
    public string $acquisition_vat_id;

    /** @var string Name of the VAT Acquisition */
    public string $acquisition_vat_name;

    /** @var string Percentage of the VAT Acquisition */
    public string $acquisition_vat_percentage;

    /** @var string Amount of the VAT Acquisition */
    public string $acquisition_vat_amount;

    /** @var string (Optional) ID of the tax applied for Reverse Charge VAT */
    public string $reverse_charge_vat_id;

    /** @var string Name of the Reverse Charge */
    public string $reverse_charge_vat_name;

    /** @var string Percentage of the Reverse Charge */
    public string $reverse_charge_vat_percentage;

    /** @var string Amount of the Reverse Charge */
    public string $reverse_charge_vat_amount;

    /** @var string Enter reverse charge tax ID */
    public string $reverse_charge_tax_id;

    /** @var string ID of the VAT Return the Vendor Credit is filed in */
    public string $filed_in_vat_return_id;

    /** @var string Name of the VAT Return the Vendor Credit is filed in */
    public string $filed_in_vat_return_name;

    /** @var string Type of the VAT Return the Vendor Credit is filed in */
    public string $filed_in_vat_return_type;

    /** @var array Imported transactions */
    public array $imported_transactions;

    /** @var array Tags */
    public array $tags;

    /** @var array Line items */
    public array $line_items;

    public function __construct(array $data)
    {
        $this->transaction_id = $data['transaction_id'] ?? '';
        $this->from_account_id = $data['from_account_id'] ?? '';
        $this->from_account_name = $data['from_account_name'] ?? '';
        $this->to_account_id = $data['to_account_id'] ?? '';
        $this->to_account_name = $data['to_account_name'] ?? '';
        $this->transaction_type = $data['transaction_type'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->payment_mode = $data['payment_mode'] ?? '';
        $this->exchange_rate = $data['exchange_rate'] ?? 1; // Defaulting to 1
        $this->date = $data['date'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->vendor_id = $data['vendor_id'] ?? '';
        $this->vendor_name = $data['vendor_name'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->bank_charges = $data['bank_charges'] ?? 0.0;
        $this->tax_id = $data['tax_id'] ?? '';
        $this->documents = $data['documents'] ?? [];
        $this->is_inclusive_tax = $data['is_inclusive_tax'] ?? false;
        $this->tax_name = $data['tax_name'] ?? '';
        $this->tax_percentage = $data['tax_percentage'] ?? 0.0;
        $this->tax_amount = $data['tax_amount'] ?? 0.0;
        $this->sub_total = $data['sub_total'] ?? 0;
        $this->tax_authority_id = $data['tax_authority_id'] ?? '';
        $this->tax_authority_name = $data['tax_authority_name'] ?? '';
        $this->tax_exemption_id = $data['tax_exemption_id'] ?? '';
        $this->tax_exemption_code = $data['tax_exemption_code'] ?? '';
        $this->total = $data['total'] ?? 0;
        $this->bcy_total = $data['bcy_total'] ?? 0;
        $this->amount = $data['amount'] ?? 0.0;
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->product_type = $data['product_type'] ?? '';
        $this->acquisition_vat_id = $data['acquisition_vat_id'] ?? '';
        $this->acquisition_vat_name = $data['acquisition_vat_name'] ?? '';
        $this->acquisition_vat_percentage = $data['acquisition_vat_percentage'] ?? '';
        $this->acquisition_vat_amount = $data['acquisition_vat_amount'] ?? '';
        $this->reverse_charge_vat_id = $data['reverse_charge_vat_id'] ?? '';
        $this->reverse_charge_vat_name = $data['reverse_charge_vat_name'] ?? '';
        $this->reverse_charge_vat_percentage = $data['reverse_charge_vat_percentage'] ?? '';
        $this->reverse_charge_vat_amount = $data['reverse_charge_vat_amount'] ?? '';
        $this->reverse_charge_tax_id = $data['reverse_charge_tax_id'] ?? '';
        $this->filed_in_vat_return_id = $data['filed_in_vat_return_id'] ?? '';
        $this->filed_in_vat_return_name = $data['filed_in_vat_return_name'] ?? '';
        $this->filed_in_vat_return_type = $data['filed_in_vat_return_type'] ?? '';
        $this->imported_transactions = $data['imported_transactions'] ?? [];
        $this->tags = $data['tags'] ?? [];
        $this->line_items = $data['line_items'] ?? [];
    }
}
