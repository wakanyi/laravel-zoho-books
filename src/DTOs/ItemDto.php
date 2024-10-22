<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class ItemDto
 * Data Transfer Object for an Item.
 */
class ItemDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the item */
     private string $item_id;

    /** @var string Name of the item (Max-length [100]) */
     private string $name;

    /** @var string Status of the item (active or inactive) */
     private string $status;

    /** @var string Description for the item (Max-length [2000]) */
     private string $description;

    /** @var float Price of the item */
     private float $rate;

    /** @var string Measurement unit for the item */
     private string $unit;

    /** @var string ID of the tax to be associated with the item */
     private string $tax_id;

    /** @var string ID of the purchase tax rule (for specific regions) */
     private string $purchase_tax_rule_id;

    /** @var string ID of the sales tax rule (for specific regions) */
     private string $sales_tax_rule_id;

    /** @var string HSN Code (for specific regions) */
     private string $hsn_or_sac;

    /** @var string SAT Item Key Code (for Mexico only) */
     private string $sat_item_key_code;

    /** @var string Unit Key Code (for Mexico only) */
     private string $unitkey_code;

    /** @var string Percent of the tax */
     private string $tax_percentage;

    /** @var string Type of the tax */
     private string $tax_type;

    /** @var string SKU value of the item, should be unique throughout the product */
     private string $sku;

    /** @var string Specify the type of an item (goods, service, or digital_service) */
     private string $product_type;

    /** @var array Item tax preferences (for specific regions) */
     private array $item_tax_preferences;

    /** @var array Custom fields for the item */
     private array $custom_fields;

    /** @var array Warehouses information */
     private array $warehouses;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->item_id = $data['item_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->rate = $data['rate'] ?? 0.0;
        $this->unit = $data['unit'] ?? '';
        $this->tax_id = $data['tax_id'] ?? '';
        $this->purchase_tax_rule_id = $data['purchase_tax_rule_id'] ?? '';
        $this->sales_tax_rule_id = $data['sales_tax_rule_id'] ?? '';
        $this->hsn_or_sac = $data['hsn_or_sac'] ?? '';
        $this->sat_item_key_code = $data['sat_item_key_code'] ?? '';
        $this->unitkey_code = $data['unitkey_code'] ?? '';
        $this->tax_percentage = $data['tax_percentage'] ?? '';
        $this->tax_type = $data['tax_type'] ?? '';
        $this->sku = $data['sku'] ?? '';
        $this->product_type = $data['product_type'] ?? '';
        $this->item_tax_preferences = $data['item_tax_preferences'] ?? [];
        $this->custom_fields = $data['custom_fields'] ?? [];
        $this->warehouses = $data['warehouses'] ?? [];
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
