<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class ItemDTO
 * Data Transfer Object for an Item.
 */
class ItemDto
{
    /** @var string ID of the item */
    public string $item_id;

    /** @var string Name of the item (Max-length [100]) */
    public string $name;

    /** @var string Status of the item (active or inactive) */
    public string $status;

    /** @var string Description for the item (Max-length [2000]) */
    public string $description;

    /** @var float Price of the item */
    public float $rate;

    /** @var string Measurement unit for the item */
    public string $unit;

    /** @var string ID of the tax to be associated with the item */
    public string $tax_id;

    /** @var string ID of the purchase tax rule (for specific regions) */
    public string $purchase_tax_rule_id;

    /** @var string ID of the sales tax rule (for specific regions) */
    public string $sales_tax_rule_id;

    /** @var string HSN Code (for specific regions) */
    public string $hsn_or_sac;

    /** @var string SAT Item Key Code (for Mexico only) */
    public string $sat_item_key_code;

    /** @var string Unit Key Code (for Mexico only) */
    public string $unitkey_code;

    /** @var string Percent of the tax */
    public string $tax_percentage;

    /** @var string Type of the tax */
    public string $tax_type;

    /** @var string SKU value of the item, should be unique throughout the product */
    public string $sku;

    /** @var string Specify the type of an item (goods, service, or digital_service) */
    public string $product_type;

    /** @var array Item tax preferences (for specific regions) */
    public array $item_tax_preferences;

    /** @var array Custom fields for the item */
    public array $custom_fields;

    /** @var array Warehouses information */
    public array $warehouses;

    /**
     * ItemDto constructor.
     *
     * @param array $data Data for the Item.
     */
    public function __construct(array $data)
    {
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
}
