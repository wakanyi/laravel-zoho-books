<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class ChartOfAccountDto
 * Data Transfer Object for a Chart of Account.
 */
class ChartOfAccountDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the Account */
     private string $account_id;

    /** @var string Name of the account */
     private string $account_name;

    /** @var string Code associated with the Account */
     private string $account_code;

    /** @var bool Check if account is Active or Inactive */
     private bool $is_active;

    /** @var string Type of the account. Allowed values: other_asset, other_current_asset, cash, bank, fixed_asset, other_current_liability, credit_card, long_term_liability, other_liability, equity, income, other_income, expense, cost_of_goods_sold, other_expense, accounts_receivable, accounts_payable. */
     private string $account_type;

    /** @var string ID of the account currency */
     private string $currency_id;

    /** @var string Code of the currency associated with the account */
     private string $currency_code;

    /** @var string Description of the account */
     private string $description;

    /** @var bool Check if it is a System Account */
     private bool $is_system_account;

    /** @var bool Check if account is involved in transaction */
     private bool $is_involved_in_transaction;

    /** @var bool Include in VAT returns (GB only) */
     private bool $include_in_vat_return;

    /** @var array Show Sub-Attributes arrow */
     private array $custom_fields;

    /** @var string ID of the Parent Account */
     private string $parent_account_id;

    /** @var array Documents associated with the account */
     private array $documents;

    /** @var string Created time associated with the entity */
     private string $created_time;

    /** @var string Last modified time associated with the entity */
     private string $last_modified_time;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->account_id = $data['account_id'] ?? '';
        $this->account_name = $data['account_name'] ?? '';
        $this->account_code = $data['account_code'] ?? '';
        $this->is_active = $data['is_active'] ?? false;
        $this->account_type = $data['account_type'] ?? '';
        $this->currency_id = $data['currency_id'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->is_system_account = $data['is_system_account'] ?? false;
        $this->is_involved_in_transaction = $data['is_involved_in_transaction'] ?? false;
        $this->include_in_vat_return = $data['include_in_vat_return'] ?? false;
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->parent_account_id = $data['parent_account_id'] ?? '';
        $this->documents = $data['documents'] ?? [];
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
