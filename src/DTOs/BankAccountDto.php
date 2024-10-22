<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class BankAccountDto
 * Data Transfer Object for a Bank Account.
 */
class BankAccountDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the Bank/Credit Card account */
     private string $account_id;

    /** @var string Name of the account */
     private string $account_name;

    /** @var string Code of the Account */
     private string $account_code;

    /** @var string ID of the Currency associated with the Account */
     private string $currency_id;

    /** @var string Code of the currency associated with the Bank Account */
     private string $currency_code;

    /** @var string Symbol of the Currency associated with the Account */
     private string $currency_symbol;

    /** @var int Precision of the Price Values */
     private int $price_precision;

    /** @var string Type of the account */
     private string $account_type;

    /** @var string Number associated with the Bank Account */
     private string $account_number;

    /** @var int Number of uncategorized transactions */
     private int $uncategorized_transactions;

    /** @var int Number of unprinted checks */
     private int $total_unprinted_checks;

    /** @var bool Check if Account is Active */
     private bool $is_active;

    /** @var bool Check if feeds are subscribed */
     private bool $is_feeds_subscribed;

    /** @var bool Check if feeds are active */
     private bool $is_feeds_active;

    /** @var float Balance present in the account */
     private float $balance;

    /** @var int Balance present in the Bank */
     private int $bank_balance;

    /** @var float Balance in Base Currency */
     private float $bcy_balance;

    /** @var string Name of the Bank */
     private string $bank_name;

    /** @var string Routing Number of the Account */
     private string $routing_number;

    /** @var bool Check if the Account is Primary Account in Zoho Books */
     private bool $is_primary_account;

    /** @var bool Check if the Account is Paypal Account */
     private bool $is_paypal_account;

    /** @var string Description of the Account */
     private string $description;

    /** @var string Refresh Status Code of the Bank */
     private string $refresh_status_code;

    /** @var string Last Refreshed Date of the Feeds */
     private string $feeds_last_refresh_date;

    /** @var string Service ID of the Account */
     private string $service_id;

    /** @var bool Check if the account is a system account */
     private bool $is_system_account;

    /** @var bool Check if warning should be shown for refreshing Bank Feeds */
     private bool $is_show_warning_for_feeds_refresh;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

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
