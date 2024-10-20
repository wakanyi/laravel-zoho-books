<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class CustomModuleDto
 * Data Transfer Object for a Custom Module.
 */
class CustomModuleDto
{
    /** @var int ID of the Custom Module Record */
    public int $module_record_id;

    /** @var string Module API Name */
    public string $module_api_name;

    /** @var string Last Modified time of the Sales Order */
    public string $last_modified_time;

    /** @var string Formatted value of modified Time */
    public string $last_modified_time_formatted;

    /** @var string Creation Time of the Sales Order */
    public string $created_time;

    /** @var string Formatted Creation Time of the Sales Order */
    public string $created_time_formatted;

    /** @var string Created by User ID */
    public string $created_by_id;

    /** @var string Last modified by User ID */
    public string $last_modified_by_id;

    /** @var string Name of the record */
    public string $record_name;

    /** @var string Formatted Name of the Record */
    public string $record_name_formatted;

    /** @var float Value of the custom Field */
    public float $cf_debt_amount;

    /** @var string The formatted value of the custom Field */
    public string $cf_debt_amount_formatted;

    public function __construct(array $data)
    {
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
}
