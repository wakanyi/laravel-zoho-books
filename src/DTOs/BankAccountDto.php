<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class BankAccountDto
 * Data Transfer Object for a Bank Account.
 */
class BankAccountDto
{
    /** @var string ID of the Bank/Credit Card account */
    public string $account_id;

    /** @var string Name of the account */
    public string $account_name;

    /** @var string Code of the Account */
    public string $account_code;

    /** @var string ID of the Currency associated with the Account */
    public string $currency_id;

    /** @var string Code of the currency associated with the Bank Account */
    public string $currency_code;

    /** @var string Symbol of the Currency associated with the Account */
    public string $currency_symbol;

    /** @var int Precision of the Price Values */
    public int $price_precision;

    /** @var string Type of the account */
    public string $account_type;

    /** @var string Number associated with the Bank Account */
    public string $account_number;

    /** @var int Number of uncategorized transactions */
    public int $uncategorized_transactions;

    /** @var int Number of unprinted checks */
    public int $total_unprinted_checks;

    /** @var bool Check if Account is Active */
    public bool $is_active;

    /** @var bool Check if feeds are subscribed */
    public bool $is_feeds_subscribed;

    /** @var bool Check if feeds are active */
    public bool $is_feeds_active;

    /** @var float Balance present in the account */
    public float $balance;

    /** @var int Balance present in the Bank */
    public int $bank_balance;

    /** @var float Balance in Base Currency */
    public float $bcy_balance;

    /** @var string Name of the Bank */
    public string $bank_name;

    /** @var string Routing Number of the Account */
    public string $routing_number;

    /** @var bool Check if the Account is Primary Account in Zoho Books */
    public bool $is_primary_account;

    /** @var bool Check if the Account is Paypal Account */
    public bool $is_paypal_account;

    /** @var string Description of the Account */
    public string $description;

    /** @var string Refresh Status Code of the Bank */
    public string $refresh_status_code;

    /** @var string Last Refreshed Date of the Feeds */
    public string $feeds_last_refresh_date;

    /** @var string Service ID of the Account */
    public string $service_id;

    /** @var bool Check if the account is a system account */
    public bool $is_system_account;

    /** @var bool Check if warning should be shown for refreshing Bank Feeds */
    public bool $is_show_warning_for_feeds_refresh;

    public function __construct(array $data)
    {
        $this->account_id = $data['account_id'] ?? '';
        $this->account_name = $data['account_name'] ?? '';
        $this->account_code = $data['account_code'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->currency_symbol = $data['currency_symbol'] ?? '';
        $this->price_precision = $data['price_precision'] ?? 0;
        $this->account_type = $data['account_type'] ?? '';
        $this->account_number = $data['account_number'] ?? '';
        $this->uncategorized_transactions = $data['uncategorized_transactions'] ?? 0;
        $this->total_unprinted_checks = $data['total_unprinted_checks'] ?? 0;
        $this->is_active = $data['is_active'] ?? false;
        $this->is_feeds_subscribed = $data['is_feeds_subscribed'] ?? false;
        $this->is_feeds_active = $data['is_feeds_active'] ?? false;
        $this->balance = $data['balance'] ?? 0.0;
        $this->bank_balance = $data['bank_balance'] ?? 0;
        $this->bcy_balance = $data['bcy_balance'] ?? 0.0;
        $this->bank_name = $data['bank_name'] ?? '';
        $this->routing_number = $data['routing_number'] ?? '';
        $this->is_primary_account = $data['is_primary_account'] ?? false;
        $this->is_paypal_account = $data['is_paypal_account'] ?? false;
        $this->description = $data['description'] ?? '';
        $this->refresh_status_code = $data['refresh_status_code'] ?? '';
        $this->feeds_last_refresh_date = $data['feeds_last_refresh_date'] ?? '';
        $this->service_id = $data['service_id'] ?? '';
        $this->is_system_account = $data['is_system_account'] ?? false;
        $this->is_show_warning_for_feeds_refresh = $data['is_show_warning_for_feeds_refresh'] ?? false;
    }
}
