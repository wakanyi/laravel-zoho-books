<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class TaxDto
 * Data Transfer Object for a Tax.
 */
class TaxDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the Tax */
     private string $tax_id;

    /** @var string Name of the Tax */
     private string $tax_name;

    /** @var float Number of Percentage Taxable */
     private float $tax_percentage;

    /** @var string Type to determine whether it is a simple or compound tax (Allowed Values: tax and compound_tax) */
     private string $tax_type;

    /** @var string Type of Tax Factor (Allowed values: rate, share for Mexico only) */
     private string $tax_factor;

    /** @var string Input Tax ID (for Mexico only) */
     private string $tds_payable_account_id;

    /** @var string ID of the tax authority (for USA and Mexico only) */
     private string $tax_authority_id;

    /** @var string Name of the Tax Authority */
     private string $tax_authority_name;

    /** @var bool Check if Tax is Value Added */
     private bool $is_value_added;

    /** @var string Type of Tax for specific regions (Allowed Values for India: igst, cgst, sgst, nil, cess; for Mexico: isr, iva, ieps; for South Africa: soa_less_than_28d, soa_more_than_28d, ciu_prev_tax_supply, ciu_prev_nontax_supply, export_of_shg) */
     private string $tax_specific_type;

    /** @var string Country to which the tax belongs (for UK, Europe, and other regions) */
     private string $country;

    /** @var string Two letter country code for the EU country to which the tax belongs */
     private string $country_code;

    /** @var int Account ID in which Purchase Tax will be Computed (for Australia and Canada only) */
     private int $purchase_tax_expense_account_id;

    /**
     * @param array $data
     */
     public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->tax_id = $data['tax_id'] ?? '';
        $this->tax_name = $data['tax_name'] ?? '';
        $this->tax_percentage = $data['tax_percentage'] ?? 0.0;
        $this->tax_type = $data['tax_type'] ?? '';
        $this->tax_factor = $data['tax_factor'] ?? '';
        $this->tds_payable_account_id = $data['tds_payable_account_id'] ?? '';
        $this->tax_authority_id = $data['tax_authority_id'] ?? '';
        $this->tax_authority_name = $data['tax_authority_name'] ?? '';
        $this->is_value_added = $data['is_value_added'] ?? false;
        $this->tax_specific_type = $data['tax_specific_type'] ?? '';
        $this->country = $data['country'] ?? '';
        $this->country_code = $data['country_code'] ?? '';
        $this->purchase_tax_expense_account_id = $data['purchase_tax_expense_account_id'] ?? 0;
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
