<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class BankRuleDto
 * Data Transfer Object for a Bank Rule.
 */
class BankRuleDTO
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the Rule */
     private string $rule_id;

    /** @var string Name of the Rule */
     private string $rule_name;

    /** @var int Order of the rule */
     private int $rule_order;

    /** @var string Entities to which Rule must be applied */
     private string $apply_to;

    /** @var string Type of Criteria */
     private string $criteria_type;

    /** @var array Criterion details */
     private array $criterion;

    /** @var string Entity as which it should be recorded */
     private string $record_as;

    /** @var string Account ID of the Bank */
     private string $account_id;

    /** @var string Name of the account */
     private string $account_name;

    /** @var string Tax ID involved in the transaction */
     private string $tax_id;

    /** @var string ID of the Customer Associated with the Rule */
     private string $customer_id;

    /** @var string Name of the Customer Associated with the Rule */
     private string $customer_name;

    /** @var string Specifies if Reference number is manual or generated from the statement */
     private string $reference_number;

    /** @var string Payment Mode Associated with the Rule */
     private string $payment_mode;

    /** @var string VAT treatment for the bank rules */
     private string $vat_treatment;

    /** @var string VAT treatment for the bank transaction */
     private string $tax_treatment;

    /** @var bool Used to specify whether the transaction is applicable for Domestic Reverse Charge (DRC) */
     private bool $is_reverse_charge_applied;

    /** @var string Product Type associated with the Rule */
     private string $product_type;

    /** @var string ID of the Tax Authority Associated with the Rule */
     private string $tax_authority_id;

    /** @var string Name of the Tax Authority Associated with the Rule */
     private string $tax_authority_name;

    /** @var string Code of the Tax Exemption Associated with the Rule */
     private string $tax_exemption_code;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->rule_id = $data['rule_id'] ?? '';
        $this->rule_name = $data['rule_name'] ?? '';
        $this->rule_order = $data['rule_order'] ?? 0;
        $this->apply_to = $data['apply_to'] ?? '';
        $this->criteria_type = $data['criteria_type'] ?? '';
        $this->criterion = $data['criterion'] ?? [];
        $this->record_as = $data['record_as'] ?? '';
        $this->account_id = $data['account_id'] ?? '';
        $this->account_name = $data['account_name'] ?? '';
        $this->tax_id = $data['tax_id'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->reference_number = $data['reference_number'] ?? '';
        $this->payment_mode = $data['payment_mode'] ?? '';
        $this->vat_treatment = $data['vat_treatment'] ?? '';
        $this->tax_treatment = $data['tax_treatment'] ?? '';
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? false;
        $this->product_type = $data['product_type'] ?? '';
        $this->tax_authority_id = $data['tax_authority_id'] ?? '';
        $this->tax_authority_name = $data['tax_authority_name'] ?? '';
        $this->tax_exemption_code = $data['tax_exemption_code'] ?? '';
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
