<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class CustomModuleDto
 * Data Transfer Object for a Custom Module.
 */
class CustomModuleDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var int ID of the Custom Module Record */
     private int $module_record_id;

    /** @var string Module API Name */
     private string $module_api_name;

    /** @var string Last Modified time of the Sales Order */
     private string $last_modified_time;

    /** @var string Formatted value of modified Time */
     private string $last_modified_time_formatted;

    /** @var string Creation Time of the Sales Order */
     private string $created_time;

    /** @var string Formatted Creation Time of the Sales Order */
     private string $created_time_formatted;

    /** @var string Created by User ID */
     private string $created_by_id;

    /** @var string Last modified by User ID */
     private string $last_modified_by_id;

    /** @var string Name of the record */
     private string $record_name;

    /** @var string Formatted Name of the Record */
     private string $record_name_formatted;

    /** @var float Value of the custom Field */
     private float $cf_debt_amount;

    /** @var string The formatted value of the custom Field */
     private string $cf_debt_amount_formatted;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->module_record_id = $data['module_record_id'] ?? 0;
        $this->module_api_name = $data['module_api_name'] ?? '';
        $this->last_modified_time = $data['last_modified_time'] ?? '';
        $this->last_modified_time_formatted = $data['last_modified_time_formatted'] ?? '';
        $this->created_time = $data['created_time'] ?? '';
        $this->created_time_formatted = $data['created_time_formatted'] ?? '';
        $this->created_by_id = $data['created_by_id'] ?? '';
        $this->last_modified_by_id = $data['last_modified_by_id'] ?? '';
        $this->record_name = $data['record_name'] ?? '';
        $this->record_name_formatted = $data['record_name_formatted'] ?? '';
        $this->cf_debt_amount = $data['cf_debt_amount'] ?? 0.0;
        $this->cf_debt_amount_formatted = $data['cf_debt_amount_formatted'] ?? '';
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
