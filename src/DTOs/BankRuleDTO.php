<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class BankRuleDTO
 * Data Transfer Object for a Bank Rule.
 */
class BankRuleDTO
{
    /** @var string ID of the Rule */
    public string $rule_id;

    /** @var string Name of the Rule */
    public string $rule_name;

    /** @var int Order of the rule */
    public int $rule_order;

    /** @var string Entities to which Rule must be applied */
    public string $apply_to;

    /** @var string Type of Criteria */
    public string $criteria_type;

    /** @var array Criterion details */
    public array $criterion;

    /** @var string Entity as which it should be recorded */
    public string $record_as;

    /** @var string Account ID of the Bank */
    public string $account_id;

    /** @var string Name of the account */
    public string $account_name;

    /** @var string Tax ID involved in the transaction */
    public string $tax_id;

    /** @var string ID of the Customer Associated with the Rule */
    public string $customer_id;

    /** @var string Name of the Customer Associated with the Rule */
    public string $customer_name;

    /** @var string Specifies if Reference number is manual or generated from the statement */
    public string $reference_number;

    /** @var string Payment Mode Associated with the Rule */
    public string $payment_mode;

    /** @var string VAT treatment for the bank rules */
    public ?string $vat_treatment;

    /** @var string VAT treatment for the bank transaction */
    public ?string $tax_treatment;

    /** @var bool Used to specify whether the transaction is applicable for Domestic Reverse Charge (DRC) */
    public ?bool $is_reverse_charge_applied;

    /** @var string Product Type associated with the Rule */
    public ?string $product_type;

    /** @var string ID of the Tax Authority Associated with the Rule */
    public ?string $tax_authority_id;

    /** @var string Name of the Tax Authority Associated with the Rule */
    public ?string $tax_authority_name;

    /** @var string Code of the Tax Exemption Associated with the Rule */
    public ?string $tax_exemption_code;

    public function __construct(array $data)
    {
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
        $this->vat_treatment = $data['vat_treatment'] ?? null;
        $this->tax_treatment = $data['tax_treatment'] ?? null;
        $this->is_reverse_charge_applied = $data['is_reverse_charge_applied'] ?? null;
        $this->product_type = $data['product_type'] ?? null;
        $this->tax_authority_id = $data['tax_authority_id'] ?? null;
        $this->tax_authority_name = $data['tax_authority_name'] ?? null;
        $this->tax_exemption_code = $data['tax_exemption_code'] ?? null;
    }
}
